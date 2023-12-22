
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA Compatible" content="IE=edge">
    <meta name="viewport"content="width=device-width, intialy">
    <title>Login</title>




<style>
body {
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-size: 15px;
}
label{
    width: 200px;
    display: inline-block;
    text-align: left;
}

input[type=text], input[ type=password]{
    width: 300px;
    padding: 5px;
    box-sizing: border-box;
    border: 1px solid;
    
}



.user{
    margin: 50px;
    margin-top: 1px;
    margin-bottom: 1px;
    display: flex;
    

}
.sub{
    display: block;
    margin: 170px;
    margin-top: 60px;
    margin-bottom: 1px;
}
.re{
    margin: 45px;
    margin-top: 1px;
    margin-bottom: 1px;
    

}
.pass{
    margin: 50px;
    margin-top: 1px;
    margin-bottom: 1px;
    display: flex;
}


input [type=text],input[type = email], input[type = fullname]{
    width: 427px;
    padding: 5px;
    box-sizing: border-box;
    border: 1px solid;
}

.signup{
    text-align: left;
    margin-left: 570px;
    margin-top: -370px;
    margin-bottom: 65px;

}
.usern input[type = "text"]{
   
    width: 427px;
    padding: 5px;
    box-sizing: border-box;
    
   

}
.usern{
    text-align: left;
    margin: 300px;
    margin-top: -10px;
    margin-left: 605px;
    margin-bottom: 30px;

}
.Email{
    text-align: left;
    margin: 300px;
    margin-top: -10px;
    margin-left: 600px;
    width: 300px;
    padding: 3px;
    margin-bottom: 30px;

}
.gender{
    text-align: left;
    margin: 602px;
    margin-top: -10px;
    margin-bottom: 1px;
    

}
.Fullname{
    text-align: left;
    margin: 800px;
    margin-top: -43px;
    margin-left: 730px;
    margin-bottom: 20px;

}
.Compa{
    text-align: left;
    display: inline-flex;
    margin: 800px;
    margin-top: -43px;
    margin-left: 570px;
    font-size: 20px;
    margin-bottom: 10px;
    margin-right: 500px;

}
.pro{
    text-align: center;
    margin: 800px;
    margin-top: -10px;
    margin-left: 570px;
    font-size: 11px;
    margin-bottom: 19px;
    display: inline-block;

}
.Comp{
    text-align: left;
    margin: 800px;
    margin-top: -10px;
    margin-left: 570px;
    font-size: 13px;
    margin-bottom: 30px;

}
.agree{
    text-align: justify;
    margin: 800px;
    margin-top: -10px;
    margin-left: 565px;
    font-size: 13px;
    margin-bottom: 30px;
    display: inline-flex;
    

}
.register{
    margin: 800px;
    margin-top: -10px;
    margin-left: 680px;
    text-decoration: color(yellow);
    
}
.password input[type = "password"]{
    box-sizing: border-box;
    width: 427px;
    padding: 5px;
}
.password{
    margin-left: 600px;
    margin-bottom: 20px;
    
    
}
.retype input[type="password"]{
    box-sizing: border-box;
    width: 427px;
    padding: 5px;
}
.retype{
    margin-left: 600px;
    margin-bottom: 70px;
}
</style>



    <form action="lab3_b3.php" method="post">
        <div class="login">
            <b><h1>Login</h1> <request> <br></b>
        </div>
        <div class="user">
            <p>
                <b><label>Username</label> <br></b>
                <input type="text" placeholder="Enter Username" name="username" id="User" required> <br>
            </p>
        </div>
        <div class="pass">
            <p>
                <b><label>Password</label> <br></b>
                <input type="password" placeholder="Enter Password" name="passw" id="pass"required> <br>
            </p>
        </div>
        <div class="re">
            <p>
                <input type="checkbox" name="remember" id="remember"> <?php if(isset($_COOKIE["username"]))
                ?>
                <b><label>Remember me</label> </b>
            </p>
        </div>
        <div class="sub">
            <input type="submit" value="Login" id="Login"> <br>
        </div>
        
    </form>


    <form action="lab3_b3.php" method="post">
        <div class="signup">
            <h1>Signup for a New Account?</h1>
        </div>
        <div class="usern">
            <b> <label>User Name</label> <br></b>
            <input type="text" placeholder="Enter your new username" name="username" required>
        </div>
        <div class="Email">
            <b><label>User Email*</label></b> <br>
            <input type="email" placeholder="Enter your Email" name="useremail" required>
        </div>
        <div class="gender">
            
            <b><label>Select Title</label></b> <br>
            <select name="Title" required>
                <option value="Mr.">Mr.</option>
                <option value="Ms.">Ms.</option>
                <option value="Undefined">Undefined</option>
            </select>
        </div>
        <div class="Fullname">
            <b><label>Full name*</label></b> <br>
            <input type="text" placeholder="Please enter your Full name" name="fullname">


        </div>
        <div class="password">
            <b><label>Password</label></b> <br>
            <input type="password" placeholder="Enter your password" name="passw" required>
        </div>
        <div class="retype">
            <b><label>Re-type your password</label></b> <br>
            <input type="password" placeholder="Retype your password" name="passw2"required>
        </div>
        

   
<body>
    <div class="Compa">
        <h2><b>Company detail</b></h2>
    </div>
    <div class="pro">
        <label>Provide detail about your Company</label>
    </div>
    <div class="Comp">
        <b><label>Company name</label></b> <br>
        <input type="text" placeholder="Enter your Company name" name="company" required>
    </div>
    <div class="agree">
        <input type="checkbox" value="I am agree with registration" required>
        <label>I am agree with registration</label>
    </div>
    <div class="register">
        <input type="submit" name="regis" value="Register">
        
    </div>
</form>
</body>
</html>
<?php
$db_user = "root";
$db_pass = "";
$db_name = "ehclab3_b2";

$db = new PDO("mysql:host=localhost;dbname=" . $db_name . ';charset=utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$errors = array();
session_start();

if (isset($_POST['username']) && isset($_POST['passw'])) {
    $username = $_POST['username'];
    $password = $_POST['passw'];

    // Fetch user credentials from the database
    $stmt = $db->prepare("SELECT username, passw FROM ehc WHERE username = ?");
    $stmt->execute([$username]);
    $userData = $stmt->fetch();

    if ($userData && $password === $userData["passw"]) {
        echo "<script>alert('Successfully Login');</script>";
        exit();
    } else {
        echo "<script>alert('User not found or incorrect password');</script>";
    }

    // Close the statement after fetching data
    $stmt->closeCursor();
}

if (!empty($_POST['remember'])) {
    setcookie('remember', '', time() - 3600, '/');
    setcookie('password', '', time() - 3600, '/');
    setcookie('username', '', time() - 3600, '/');
    header('Location: login.php');
    exit();
} else {
    if (isset($_COOKIE["username"])) {
        setcookie("username", "", time() - 3600, "/");
    }
    if (isset($_COOKIE["password"])) {
        setcookie("password", "", time() - 3600, "/");
    }
    
    // Redirect to login page
    header("Location: login.php");
    exit();
}
?>
