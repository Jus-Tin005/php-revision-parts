<?php
    spl_autoload_register(function($class){
        $class = str_replace("\\", "/" , $class);
        include($class . ".php");
    });

    # spl_autoload_register(function);
    # str_replace(namespace,include,class);

    /*
        namespace = \\
        include   = /
    */
?>