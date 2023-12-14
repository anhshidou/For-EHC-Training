<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content = "IE=edge">
    <meta name="viewport"content = "width = device-width, initial">
    <title>Document</title>
</head>
<body>
<h1>Calculator Basic</h1>
    <form action = "lab1_b2.php" method = "post">
        <label>a</label>
        <input type ="number" name = "a"> <br>
        <label>b</label>
        <input type="number" name="b"> <br>
        <input type="submit" value="Calculate"> <br>
    </form>


<?php
if (isset($_POST["a"]) && isset($_POST["b"])) { // Checks if 'a' and 'b' are set in the POST request
    $a = $_POST["a"]; // Assigns the value of 'a' from the form to the variable $a
    $b = $_POST["b"]; // Assigns the value of 'b' from the form to the variable $b


    $addition = $a + $b; // the Addition of $a and $b
    $subtraction = $a - $b; // Calculates the subtraction between $a and $b
    $multiplication = $a * $b; // Calculates the mult of $a and $b
    $division = $a / $b; // Calculates the division of $a by $b
    echo "Addition: $addition <br>"; // Displays the Addition
    echo "Subtraction: $subtraction <br>"; // Displays the Subtraction
    echo "Multiplication $multiplication <br>"; // Displays the mult
    echo "Division: $division <br>"; // Displays the division
    
}



// Post is for security task.
// isset is for determine the value except null
/* The syntax of if..else is: if(){
    <code>;



} else {
    <code>;
} else {
    <code>;
}

Similar to If..else in C programming language

For If syntax: if(){
    <code>;
}

*/





?>
