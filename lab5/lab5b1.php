<!doctype html>




<style>
.enter{
    text-align: center;

}
.sub{
    text-align: center;
}

</style>

<html>
    <title>Document</title>

    <body>
        <form action="lab5b1.php" method="post">
            <div class="enter">
                <label>Enter a number: </label><br>
                <input type="text" placeholder="Enter a number" name="number" id="en" required><br>
            </div>
            <div class="sub">
                <input type="submit" value="Confirm">
            </div>
        
        </form>
        
    </body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (isset($_POST["number"])){
        $str1 = $_POST["number"];
        $str2 = preg_replace("/[^0-9,.]/", "", $str1)."\n";
        echo $str2;
}
}

?>
