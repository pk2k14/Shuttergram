<?php
    require("conn.php");
    require("bootstrap.php");

    if(isset($_POST['uploadBtn'])){
        echo "Dabaya";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload</title>
</head>
<body>
    <form class="container" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <input type="submit" class="btn btn-dark mx-auto" value="Upload" name="uploadBtn">
    </form>
</body>
</html>