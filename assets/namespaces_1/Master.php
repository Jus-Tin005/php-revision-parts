<?php
    include("Number.php");
    include("Calculator.php");

    echo Number\stock(10,20);
    echo Calculator\stock([10,20,30,40,50]);  # \Calculator - Global Namespace or Root Name space
?>

<h2>Namespaces = \</h2>