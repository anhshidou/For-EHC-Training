<!DOCTYPE html>

<title>Document</title>
<body>
<h1>Calculator Basic</h1>
    <form action = "lab1_b2.php" method = "post">
        <p>
            <label>a</label>
            <input type ="number" name = "a"> <br>
        </p>
        <p>
            <label>b</label>
            <input type="number" name="b"> <br>
        </p>
        <input type="submit" value="Calculate"> <br>
    </form>


<?php
if (isset($_POST["a"]) && isset($_POST["b"])) { // Checks if 'a' and 'b' are set in the POST request
    $a = $_POST["a"]; // Assigns the value of 'a' from the form to the variable $a
    $b = $_POST["b"]; // Assigns the value of 'b' from the form to the variable $b


    $addition = $a + $b; // the Addition of $a and $b
    $subtraction = $a - $b; // Calculates the subtraction between $a and $b
    $multiplication = $a * $b; // Calculates the mult of $a and $b
    
    if ($b != 0){
        $division = $a / $b; // Calculates the division of $a by $b
        echo "Addition: $addition <br>"; // Displays the Addition
        echo "Subtraction: $subtraction <br>"; // Displays the Subtraction
        echo "Multiplication $multiplication <br>"; // Displays the mult
        echo "Division: $division <br>"; // Displays the division
        

    } else {
        echo "Không thể chia cho 0";
    }
} else {
    echo "Hãy nhập số đúng giá trị";
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
