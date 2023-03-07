


<h2>Include Statement</h2>

<h4>include (single adding file) = run all codes from linked file as the file is linked.</h4>

<?php

    # include
    /*
        include('');
        include '';
    */

    define("PRICE", 22.22);

    function number($x,$y){
        return $x + $y;
    }

?>

    <hr>

    <h2>require Statement</h2>
    <h4>require (single adding file) = run all codes from linked file as the file is linked.</h4>

    <?php

        /*
            require('');
            require '';
        */

        # Tips and Trips between include & require
        /*
            include = run all code by warning if error occures.
            require = stop all codes if error occures.
        */
    
        
    ?>

    <hr>

    <h2>Include_once Statement & Require_once Statement</h2>
    <h2></h2>

    <h4>
        include_once = Multiple adding file
        require_once = Multiple adding file
    </h4>

    <?php
    
        /*
            include_once('');
            require_once('');
        */
    ?>

 


   