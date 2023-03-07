<?php
    namespace Code\Html;

    include("Html.php");

    $table = new Html\Table();
    $table->title = "Beautiful Table";
    $table->numRow = 20;
    
    $row = new Html\Row();
    $row->numCells = 10;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php $table->message();?>
        <?php $row->message();?>
</body>
</html>