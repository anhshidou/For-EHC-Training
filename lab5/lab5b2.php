<!doctype html>
<html>
<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>
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
        <form action="lab5b2.php" method="post">
            <div class="enter">
                <label>Enter your birthday: </label><br>
                <input type="date" data-date="" data-date-format="DD/MM/YYYY" value="" name="birthday" placeholder="dd-mm-yyyy" required> <br>  
            </div>
            <div class="sub">
                <input type="submit" value="Confirm">
            </div>
        
        </form>
        
    </body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (isset($_POST["birthday"])){
        $today = new DateTime (date("Y-m-d"));
        $birthday = DateTime::createFromFormat('Y-m-d', $_POST["birthday"]);
        $tinhngay = $today ->diff($birthday);
        $ngay = $tinhngay -> days;
        echo "Days left to your birthday party: $ngay";
        
    }
}


?>