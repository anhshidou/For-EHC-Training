<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA Compatible" content="IE=edge">
    <meta name="viewport"content="width=device-width, intialy">
    <title>Login</title>

<style>
    body{
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-size: 13px;
    }
    input[type=text], input[type=email]{
        width: 300px;
        padding: 5px;
        box-sizing: border-box;
        border: 1px solid;
    }
    .name{
        margin-left: 100px;
        
    }
    .mssv{
        margin-left: 100px;
    }
    .mobile{
        margin-left: 100px;
    }
    .mail{
        margin-left: 100px;
    }
    .submit{
        display: block;
        margin: 210px;
        margin-top: 60px;
        margin-bottom: 1px;
    }
</style>


<form action="lab6b1.php" method="post">
    <div class="regis">
        <b> <h1>Student Registration😘</h1> <br>
    </div>
    <div class="name">
        <h3>Student name🎈</h3>
        <input type="text" placeholder="Enter your fullname" name="stname" id="stname" required> <br>
    </div>
    <div class="mssv">
        <h3>Student ID⭐</h3>
        <input type="text" placeholder="Enter your MSSV" name="mssv" id="mssv" required> <br>
    </div>
    <div class="mobile">
        <h3>Phone number🐧</h3>
        <input type="text" placeholder="Enter your phone number" name="pnumber" id="pnumber" required><br>
    </div>
    <div class="mail">
        <h3>Student email📸</h3>
        <input type="email" placeholder="Enter your email address" name="mail" id="mail" required><br>
    </div>
    <div class="submit">
        <input type="submit" value="Submit" name="submit" id="submit" required>
    </div>
</head>
</form>
</html>
<?php
$db_user = "root";
$db_pass = "";
$db_name = "ehclab6b1";

$db = new PDO("mysql:host=localhost;dbname=". $db_name . ';charset = UTF-8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$errors = array();

if (isset($_POST['submit'])){
    $stname = $_POST['stname'];
    $mssv = $_POST['mssv'];
    $pnumber = $_POST['pnumber'];
    $mail = $_POST['mail'];
    

    if (empty($stname)){
        $errors[] = "Student name is required";
    }
    if (empty($mssv)){
        $errors[] = "MSSV is required";
    }
    if (empty($pnumber)){
        $errors[] = "Phone number is required";
    }
    if (empty($mail)){
        $errors[] = "Email is required";
    }
    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)){
        $errors[] = "Invalid email address";
    }
    $stmt = $db -> prepare("SELECT * FROM ehc WHERE stname = ? OR mssv = ? OR pnumber = ? OR mail = ?");
    $stmt -> execute([$stname, $mssv, $pnumber, $mail]);
    $user = $stmt -> fetch(PDO::FETCH_ASSOC);
    if ($user) {
        $errors[] = "User with your detail has been taken";
    }

    if (empty($errors)){
        $sql = "INSERT INTO ehc (stname, mssv, pnumber, mail) VALUES (?, ?, ?, ?)";
        $stmt = $db -> prepare($sql);
        $stmt -> execute([$stname, $mssv, $pnumber, $mail]);
        echo "Your Student detail has been saved";
    } else {
        foreach ($errors as $errors){
            echo "There are some errors";
        }
    }
} 



?>

<!-- List all student !-->
<html>
<style>
    .su{
        display: block;
        text-align: left;
    }
    .msv{
        text-align: left;
    }
</style>
<form action="lab6b1.php" method="post">
    <div class="info">
        <b> <h2> Info of Every student in the list </h2> <br>
</div>
<div class="msv">
    <b> <h3>ID⭐: </h3>
        <input type="text" placeholder="id" name="mssv1" required> <br>
    </div>
    <div class="su">
        <input type="submit" value="Submit" name="su" id="su"required> <br>
    </div>


<?php
  $db_user = "root";
  $db_pass = "";
  $db_name = "ehclab6b1";

  if (isset($_POST['mssv1'])) {
      $mssv1 = $_POST['mssv1'];

      $stmt = $db->prepare("SELECT * FROM ehc WHERE mssv = ?");
      $stmt->execute([$mssv1]);
      $user = $stmt->fetch(PDO::FETCH_ASSOC);

      if ($user) {
          echo "MSSV: " . $user['mssv'] . "<br>Name: " . $user['stname'] . "<br>Mobile: " . $user['pnumber'] . "<br>Email: " . $user['mail'];
          // Add code here to update the information based on your requirements
      } else {
          echo "No record found for the given MSSV.";
      }
  }
  ?>



</form>
</html>
<!-- Delete Student -->
<html>
<style>
    .su {
        display: block;
        text-align: left;
    }

    .msv {
        text-align: left;
    }
</style>
<form action="lab6b1.php" method="post">
    <div class="info">
        <b> <h2> Delete Student </h2> <br>
    </div>
    <div class="msv">
        <b> <h3>MSSV: </h3>
            <input type="text" placeholder="Type in MSSV" name="mssv_to_delete" required> <br>
    </div>
    <div class="su">
        <input type="submit" value="Delete Student" name="delete_student" required> <br>
    </div>
</form>

<?php
$db_user = "root";
$db_pass = "";
$db_name = "ehclab6b1";

if (isset($_POST['delete_student'])) {
    $mssv_to_delete = $_POST['mssv_to_delete'];

    $stmt = $db->prepare("DELETE FROM ehc WHERE mssv = ?");
    $stmt->execute([$mssv_to_delete]);

    echo "Student with MSSV: " . $mssv_to_delete . " has been deleted.";
}
?>
</form>
</html>
<!-- Change information !-->
<html>
<style>
    .su {
        display: block;
        text-align: left;
    }

    .msv {
        text-align: left;
    }
</style>
<form action="lab6b1.php" method="post">
    <div class="info">
        <b> <h2> Change information </h2> <br>
    </div>
    <div class="msv">
        <b> <h3>MSSV: </h3>
            <input type="text" placeholder="Type in MSSV" name="mssv_to_change" required> <br>
    </div>
    <div class="su">
        <input type="submit" value="Submit" name="change_info" required> <br>
    </div>
</form>

<?php
$db_user = "root";
$db_pass = "";
$db_name = "ehclab6b1";

try {
    $db = new PDO("mysql:host=localhost;dbname=" . $db_name . ';charset=utf8', $db_user, $db_pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_POST['change_info'])) {
        $mssv_to_change = $_POST['mssv_to_change'];

        $stmt = $db->prepare("SELECT * FROM ehc WHERE mssv = ?");
        $stmt->execute([$mssv_to_change]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            echo "MSSV: " . $user['mssv'] . "<br>Name: " . $user['stname'] . "<br>Mobile: " . $user['pnumber'] . "<br>Email: " . $user['mail'];
?>
            <div>
                <form name='lab02edit' method='post' action='lab6b1.php'>
                    Student update: <br>
                    ID:
                    <input type='hidden' name='id_edit' value='<?php echo $user['id']; ?>' required>
                    <br>Name:
                    <input type='text' name='name_edit' value='<?php echo $user['stname']; ?>'>
                    <br>Number:
                    <input type='text' name='number_edit' value='<?php echo $user['pnumber']; ?>'>
                    <br>Email:
                    <input type='email' name='email_edit' value='<?php echo $user['mail']; ?>'>
                    <br>
                    <input type='submit' name='submit_edit' value='Submit'>
                </form>
            </div>
<?php
        } else {
            echo "No record found for the given MSSV.";
        }
    }

    if (isset($_POST['submit_edit'])) {
        $id_to_edit = $_POST['id_edit'];
        $name_edit = $_POST['name_edit'];
        $number_edit = $_POST['number_edit'];
        $email_edit = $_POST['email_edit'];

        $stmt = $db->prepare("UPDATE ehc SET stname = ?, pnumber = ?, mail = ? WHERE id = ?");
        $stmt->execute([$name_edit, $number_edit, $email_edit, $id_to_edit]);

        echo "Student information updated successfully.";

    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
</html>

</form>
</html>
