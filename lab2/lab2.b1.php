<!DOCTYPE html>
<head>

<title>document</title>
</head>
<body>
    <h1>Phương trình bậc nhất ax + b = 0</h1>
    <form action="lab2.b1.php" method="POST">
        <input type="number" name="number1">
        <label>x</label>
        <label>+</label>
        <input type="number" name="number2"> <br>
        <p><input type="submit" value="calculate"></p> // Browsers automatically add a single blank line before and after each <p> element.
        
    </form>

</body>

<?php

if (isset($_POST["number1"]) && isset($_POST["number2"])){
    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];

    $multi = $number1 / $number2;
    if ($number1 == 0){
        if ($number2 == 0){
        echo"Phương trình có vô nghiệm";}

    else{$number2 == 0;
        echo"Phương trình có vô số nghiệm";
    
    }
    }else{$multi = -$number2 / $number1;
    
    echo"phương trình có nghiệm là x = $multi";
    }


}







?>
