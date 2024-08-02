<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
<label for="nilai1">nilai1</label>
    <input type= "text" name="nilai1" id="nilai1">
    <label for="nilai2">nilai2</label>
    <input type= "text" name="nilai2" id="nilai2">
    <label for="nilai3">nilai3</label>
    <input type= "text" name="nilai3" id="nilai3">
    <button type="submit" name="submit">Submit</button>
</body>
</html>
</form>

<?php
if($_POST){
    $nilai1 = $_POST["nilai1"];
    $nilai2 = $_POST["nilai2"];
    $nilai3 = $_POST["nilai3"];

    if($nilai1 > $nilai2 && $nilai1 > $nilai3){
        echo "nilai 1 :$nilai1";
    }elseif($nilai2 > $nilai1 && $nilai2 > $nilai3){
        echo "nilai 2 : $nilai2";
    }elseif($nilai3 > $nilai1 && $nilai3 > $nilai2){
        echo "nilai 3 : $nilai3";
    }

}
?>