<!DOCTYPE html>
<head>Factorial <br></head>
<body>
    <form action="lab2.b3.php" method="post">
    <label>Enter n =</label>
    <input type="number" name="num">
    <input type="submit" value="calculator">
</form>
</body>

<?php
function giaithua($n){
    if($n == 0){
        return 1;
    } else {
        return $n*giaithua($n - 1);
    }




}


if (isset($_POST["num"])){
    $num = $_POST["num"];
    echo "giai thừa từ 1 -> ". ($num) . " Là " . giaithua($num);
}


?>