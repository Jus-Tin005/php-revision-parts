<?php
    include("Import-one.php");

    # Method-1

    use Library\Helper\Math\Basic\calculator;

    $calOne = new calculator;
    $calTwo = new calculator;
    echo $calOne->add([20,40,50]) . "<br/>";
    echo $calTwo->add([200,400,500]);

     # Method-2  = Alias

     /*
     use Library\Helper\Math\Basic\calculator as Math;

     $calOne = new Math;
     $calTwo = new Math;
     */
?>