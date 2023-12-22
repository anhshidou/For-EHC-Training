<?php

    if(!isset($_COOKIE["username"]))
    {
        echo "<script type='text/javascript'>alert('Welcome, $username! .Cookies is not set.');</script>";
        header("location:lab3_b3.php");
}

?>
<html>
<head>
<title>Cookies check</title>
</head>
<body>
<style>
    .container{
        margin: auto;
        font-size: 20px;
        text-align: center;
    }
    button {
        margin:auto;
        position: static;
        padding: 8px;
        display: flex;
    }
</style>
<br>
<div class="container">
<h2>Your cookies:</h2>
<p>Username: <?php echo $_COOKIE["username"]; ?></p>
<p>Password: <?php echo $_COOKIE["password"]; ?></p>
<br>
<form method="post">
    <button type="submit" name="logout">Logout</button>
</form>
<?php
if(isset($_COOKIE["username"]))
{
    $username = $_COOKIE['username'];
    $cookies = $_COOKIE['password'];
    echo "<script type='text/javascript'>alert('Welcome, $username! Your Cookies is $cookies.');</script>";
}


if(isset($_POST["logout"])){
    setcookie("username", "", time() - 3600, "/");
    setcookie("password", "", time() - 3600, "/");
    header("Location: cookies.php");
    exit();

}
?>
</div>
</body>
</html>




