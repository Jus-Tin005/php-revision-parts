<?php
    namespace One;

    include("One.php");
    include("Two.php");

    echo add(10,30) . "<br/>";
    echo \Two\add([20,40,60]);

    # \Two = Global Namespace or Root Namespace
    
?>