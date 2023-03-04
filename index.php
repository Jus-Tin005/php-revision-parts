<?php 
/**
 * Check PHP Info
 */
// phpinfo(); 

?>



 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
 </head>
 <body>




<!---------------
    * Syntax *
------------------>
    <h2>PHP Syntax</h2>
    <p>
        Total : <?php echo 1 +2; ?>
    </p>

        <hr>

    <p>

        Total : 
        <?php
            $num1 = 3;
            $num2 = 10;
            echo $num1 + $num2;
        ?>
    </p>

    <hr>

    <?php $num3 = 20;
          $num4 = 12;
    ?>

    <p>
        Total : <?php echo $num3 + $num4;?>
    </p>

    <hr>

    <h2>Output Tag In PHP - (No need echo keyword)</h2>

    <?php 
        $num5 = 23;
        $num6 = 32;
    ?>

    <p>
        Total : <?= $num5 + $num6; ?>
    </p>


    <hr>

    <h2>Syntax commom used - ( between PHP & HTML )</h2>

    <p>Hello Myanmar,I am here to meet you !!!</p>


    <?php 
        $hour = date('h'); 
        echo  $hour; 
    ?>

        <!-- * Method = 1  -->
    <p>
        <?php
                if($hour < 10 || $hour > 22){
                    echo "<b>This is Night Time</b>";
                }else{
                    echo "<b>This is Day Time</b>";
                }
        ?>
    </p>

    <br><br>

    <!-- * Method = 2  -->
    
    <h2>Template Syntax</h2>

    <p>
        <?php if($hour < 10 || $hour > 22 ){?>
            <b>This is Night Time</b>
        <?php } else {?>
            <b>This is Day Time</b>
        <?php } ?>
    </p>

    <hr>

    <h2>Alternative Syntax</h2>

    <p>
        <?php if($hour < 7 || $hour > 19):?>
            <strong>This is Night Time</strong>
        <?php else:?>
            <strong>This is Day Time</strong>
        <?php endif ?>
    </p>

    <!---------------------
    * Note About PHP Syntax *
    ------------------------>
                    <!----------------------- 
                    * Only PHP Syntax  = Only Open
                    ------------------->
                       
                    <!----------------------- 
                    * With HTML PHP Syntax =  Open & Close
                    ------------------->


    <h2>Variable In PHP = (Context Scope - It means that only area inside.)</h2>

    <?php
        $num;
        var_dump($num);   #undefined / NULL

        echo "<br/>";

        $num = 3215667;
        var_dump($num);     #int

        echo "<br>";

        $num = "I am from Taung Gyi";
        var_dump($num);    #string
    ?>
                        

    <hr>

    <h2>Global Scope</h2>

    <?php

        #undefined - because cannot use global scope directly inside of function scope
        $name = "Khun Tun";
        function baby(){
            echo $name;
        }

        baby();

        echo "<br/>";

        #OK with global keyword.
        $name = "Jus Tin";
        function sername(){
            global $name;
            echo $name;
        }

        sername();


    ?>

    <hr>

    <h2>Block Scope</h2>

    <?php 
        function babyloan(){
            if(true){
                $name = "Nang Kin Zay Yar";
            }
            echo $name;
        }

        babyloan();
    ?>

    <hr>

    <h2>Function Scope</h2>

    <?php
        function gugu(){
            $name = "A girl";
            echo $name;
        }
        gugu();
    ?>

    <hr>

    <h2>isset() = checking variable is or isn't ( is - 1(true) / isn't empty(flase))</h2>
     
    <?php 
        echo isset($doctor); #empty
        echo "<br>";
        $doctor = "Maung Maung";
        echo isset($doctor); #1
    ?>

    <hr>

    <h2>Constant in PHP - define(constantname as uppercase,value) = no need $.</h2>

    <?php
        define("MIN",10);
        define("MAX",100);

        echo MIN;
        echo "<br/>";
        echo MAX;
        echo "<br/>";

        # Error
        // MAX = 200;

        # Tip of constant
        /**
         * Cannot asign constant after declared.
         * constant will be originally GLOBAL CONSTANT after declared.
         * can use constant any where after declared.
         */

    ?>

    <hr>



        


       
        
  


 


    
 </body>
 </html>

