<?php

    # Method-1 

    /*
    include('Library/Helper/Calculator.php');

    use Library\Helper\Calculator;

    $calc = new Calculator;
    echo $calc->add([10, 20]) ."<br/>"; 
    */


    # Method-2  = Class Autoload

    include("autoload.php");

    use Library\Helper\Calculator; # No need to include Calculator.php because autoload.php file included it automatically.

    $calc = new Calculator;
    echo $calc->add([10, 20]) ."<br/>";

    /*
        # Tips About Class Autoload
        after include Class Autoload Method, you don't need to include more whenever you add more classes.Just include it once as a class autoload.
    */
?>