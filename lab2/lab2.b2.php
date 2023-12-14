<!DOCTYPE html>
<head> sum 1-> n <br> </head>
<body>
    <form action="lab2.b2.php" method="post">
    <label>Enter n</label>
    <input type="number" name = "n">
    <input type="submit" value = "calculate"><br>
    </form>





</body>

<?php
if (isset($_POST["n"])) {
$n = $_POST["n"];
$a = 0;

for ($i = 1; $i <= $n; $i++) {
    $a += $i;
    
}
echo "sum = $a";

}



?>