<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA Compatible" content="IE-edge">
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



</style>
</head>
<body>
    <form action="lab3_b1.php" method="post">
        <div class="login">
            <b><h1>Login</h1> <request> <br></b>
        </div>
        <div class="user">
            <p>
                <b><label>Username</label> <br></b>
                <input type="text" placeholder="Enter Username" name="Username" id="User" required> <br>
            </p>
        </div>
        <div class="pass">
            <p>
                <b><label>Password</label> <br></b>
                <input type="password" placeholder="Enter Password" name="Password" id="pass"required> <br>
            </p>
        </div>
        <div class="re">
            <p>
                <input type="checkbox" name="Remember me" id="re">
                <b><label>Remember me</label> </b>
            </p>
        </div>
        <div class="sub">
            <input type="submit" value="Login" id="Login"> <br>
        </div>

    </form>
<?php 

$user = 'user';
$pass = '123456';
$user1 = 'admin';
$pass1 = '123123';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['Username']) && isset($_POST['Password'])) {
        $username = $_POST['Username'];
        $password = $_POST['Password'];

        if ($username === $user && $password === $pass || $username === $user1 && $password === $pass1) {
            echo 'Logged in successfully, welcome!';
        } else {
            echo 'Login failed, please try again';
        }
    }
}

?>














</body>
</html>