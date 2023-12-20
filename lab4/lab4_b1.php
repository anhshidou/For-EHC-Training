<!DOCTYPE html>
<html>
<head>
    <style>
        .upload {
            text-align: center;
        }
        .file {
            text-align: center;
        }
        .submit {
            text-align: center;
        }
        
    </style>
</head>
<body>

    <form action="lab4_b1.php" method="post" enctype="multipart/form-data">
        <div class="upload">
            <b><label>Upload an image</label></b>
        </div>
        <p>
        <div class="file">
            <input type="file" id="myFile" name="filename">
        </div>
        </p>
        <p>
            <div class="submit">
                <input type="submit" name='sub'>
            </div>
        </p>
    </form>

<?php
if (isset($_POST['sub'])) {
    if (isset($_FILES['filename'])) {
        $filepath = "" . $_FILES["filename"]["name"];
        if (move_uploaded_file($_FILES["filename"]["tmp_name"], $filepath)) {
            echo "<div style='text-align: center; '>";
            echo "<img src=" . $filepath . " height=720 width=1280  />";
            echo "</div>";
        } else {
            echo "Error !!";
        }
    }
}
?>
</body>
</html>

