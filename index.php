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

    <h2>String Data Type</h2>

    <?php
        #Single Quote
        $name = "John Son";
        echo $name;
        echo "<br/>";
        var_dump($name);

        echo "<br/><br/>";

        #Double Qoute
        $name = "Baby Maung Maung";
        echo $name;
        echo "<br/>";
        var_dump($name);

        echo "<br/><br/>";

        #Double Qoute works like Template literal(Template String) In PHP

        $name = "Zaw Paing";
        $role = "vocalist";
        $address = "Myanmar";
        echo "$name is a $role in $address.";

        echo "<br/><br/>";


        #Single Qoute cannot know variable in PHP 

        $name = 'Baby Boss';
        echo 'My favorite movie is $name when I was in 15.';



        echo "<br/><br/>";


        #Escape Character - \

        $fruit = "Banana";
        $price = 1.5;
        echo "I wnat to buy a $fruit \$$price for snack.";

        echo "<br/><br/>";

        #Escape Character - "" & ''

        $gardian = "I have a beautiful gardian 20' 34\" long.";
        echo $gardian;

        echo "<br/><br/>";

        $tree = 'the tree in my garden is 12\' long.';
        echo $tree;

        echo "<br/><br/>";

        #Escape Character - \ (Backslash)

        $my_dir = "D:\\rockstar\\pdf_book";
        echo $my_dir;
        
        echo "<br/><br/>";
    

    ?>


    <hr>

    <h2>strlen() = counting strings</h2>

    <?php
        $my_strs = strlen("This is the first time that I had ever seen you since 2022.");
        echo $my_strs;
    ?>


    <hr>

    <h2>substr(variable,start,end) = cutting strings</h2>

    <?php
            $cutting_strings = "Slow and Steady wins the race";
            echo substr($cutting_strings,0,5);
    ?>

    <hr>

    <h2>str_replace(original string, new string, variable) = Search & Replace</h2>

    <?php
        $my_searching = "Eat and go fastly.";
        echo str_replace("fastly","slowly",$my_searching);
    ?>

    <hr>


    <h2>2 kinds of array in PHP</h2>

    <h4>Numeric Array(the array that defined index in order.)</h4>

    <?php
        #Syntax - 1

        /*
            Warning: Array to string conversion
            Array
        */
        $users = array("Nadi","Moe Moe","Naw paw");
        echo $users;

    
        echo "<br/><br/>";


        #Syntax - 2 (commom used)

        $brands = ["Apple","Google","SpaceX","Samsaung","Soni"];
        print_r($brands);
        echo "<br/>";
        var_dump($brands);

        /*
          * Tips =  echo cannot output array
          *      =  var_dump() output array with data type
          *      =  print_r()
        */
 
    ?>

    <hr>

    <h4>Associative array - (the array that can define with any name)</h4>

    <?php

        #Syntax = [string,value];
        $user = ["name" => "Boss", "age" => 23];
        print_r($user);
        echo "<br>";
        var_dump($user);

        echo "<br><br>";

        #Two Dimensional Array Syntax = [ [],[],[],];
        $users = [
            ["name" => "JB","age" => 21],
            ["name" => "John Soe", "age" => 34],
            ["name" => "Elizabeth", "age" => 30],
        ];

        print_r($users);
        echo "<br/>";
        print_r($users[0]);
        echo "<br/>";
        print_r($users[1]);
        echo "<br/>";
        print_r($users[2]);

        echo "<br/>";
        print_r($users[0]['name']);
        echo "<br/>";
        print_r($users[0]['age']);

        echo "<br/>";
        echo $users[1]['name'];
        echo "<br/>";
        echo $users[1]['age'];

        echo "<br/>";
        echo $users[2]['name'];
        echo "<br/>";
        echo $users[2]['age'];

    ?>

    <hr>

    <h2>Adding Value in array PHP = working only in Numeric Array</h2>

    <?php

        #Custom adding index
        $sports = ['footbal','kaneball','gymnastics'];
        $sports[4] = 'hockey';
        print_r($sports);

        echo "<br/><br/>";

        #Auto Adding index - only working in PHP
        $phones = ['Soni','Samsaung','iPhone'];
        $phones[] = 'Huawai';
        print_r($phones);
    ?>

    <hr>

    <h2>Array Destructuring - Numeric Array</h2>

    <?php

        #Method-1
        $user = ['Bolay', 34];
        list($name,$age) = $user;
        echo $name;
        echo "<br/>";
        echo $age;

        echo "<br/><br/>";

        $company = ['Apple','in USA'];
        list($name,$address) = $company;
        echo $name;
        echo "<br/>";
        echo $address;
        echo "<br/>";

        #Method-2

        $book = ['school book','made in Myanmar'];
        [$name,$country] = $book;
        echo $name;
        echo "<br/>";
        echo $country;

    ?>

    <hr>

    <h2>Array Destructuring - Associative Array</h2>

    <?php
        $mouse = ['name' => 'magic mouse', 'device' => 'Mac PC'];
        ['name' => $name,'device' => $device] = $mouse;
        echo $name;
        echo "<br/>";
        echo $device;
        echo "<br/>";
    ?>

    <hr>

    <h2>Array Spreading = Rest parameter</h2>

    <?php
        $numOne = [10,20];
        $numTwo = [...$numOne,30];
        print_r($numOne);
        echo "<br/>";
        print_r($numTwo);
        echo "<br/><br/>";

        $homeDecor = ['ovan','door handle'];
        $hotelDecor = [...$homeDecor,'sensor toilet bowl'];
        print_r($homeDecor);
        echo "<br/>";
        print_r($hotelDecor);
    ?>

    <hr>

    <h2>Function In PHP</h2>

    <h4>count() = counting item in array</h4>

    <?php
        $number = [20,50,69,23,56];
        echo count($number);
    ?>

    <h4>is_array() = checking that a value is array or not / true = 1 / false = empty</h4>

    <?php
        $cars = ['Toyota','Honda','KIA'];
        echo is_array($cars);
        echo "<br/>";
        
        $a = "Hello";   # A is
        echo "A is" . is_array($a) . "<br/>";

        $b = ['red', 'green','blue']; # B is 1
        echo "B is" . is_array($b) . "<br/>";

        $c = ["name" => "Peter", "age" => 32]; # C is 1
        echo "C is" . is_array($c) . "<br/>";

        $d = "Hello world"; # D is
        echo "D is" . is_array($d) ."<br/>";


    ?>

    <h4>array_search() = search array and return index</h4>

    <?php
        $schools = ['primary school', 'secondary school','high school'];
        echo array_search('secondary school',$schools) . "<br/>";
    ?>

    <h4>array_push() = adding value in last</h4>

    <?php
        $clothings = ['T-shirt','Sweater'];
        array_push($clothings,'Short Trousers');
        print_r($clothings) . "<br/><br>";
    ?>

    <h4>array_pop() = deleting value in last</h4>

    <?php
         array_pop($clothings);
         print_r($clothings) . "<br/><br>";
    ?>

    <h4>array_unshift() = adding value in first</h4>
        
    <?php
        $clothings = ['T-shirt','Sweater'];
        array_unshift($clothings,'Hoodie');
        print_r($clothings) . "<br/><br>";
    ?>

    <h4>array_shift() = deleting value in first</h4>

    <?php
        array_shift($clothings);
        print_r($clothings) . "<br/><br>";
    ?>

    <h4>array_splice(start,end) = cutting/outputting value in arry</h4>

    <?php
        $fruits = ['Apple','Banana','Orange','Water melon'];
        $result = array_splice($fruits,1,3);
        print_r($fruits);
        echo "<br/><br/>";
        print_r($result);
        echo "<br/><br/>";
    ?>

    <h4>array_keys() = outputing index in array & array_values() = outputing values in array</h4>

    <?php
        $users = ['name' => 'Khun Tun', 'age' => 20];
        $keys = array_keys($users);
        $vals = array_values($users);
        print_r($keys);
        echo "<br/><br/>";
        print_r($vals);
        echo "<br/><br/>";
    ?>

    <h4>sort() = sorting by index / rsort() = reversing by index</h4>

    <?php
        $users = ['James' => 23,'Josha' => 43, 'Author' => 53];
        sort($users);
        print_r($users);
        echo "<br/><br/>";

        $users =["San Di" => 23, "Bro" => 43, "Author" => 53];
        rsort($users);
        print_r($users);
        echo "<br/><br/>";
    ?>


    <hr>

    <h4>ksort() = sorting by value / krsort() = reversing by value</h4>

    <?php
        $users =["San Di" => 23, "Bro" => 43, "Author" => 53];
        ksort($users);
        print_r($users);
        echo "<br/><br/>";

        $users =["San Di" => 23, "Bro" => 43, "Author" => 53];
        krsort($users);
        print_r($users);
        echo "<br/><br/>";
    ?>


    <h4>explode(" ",string variable) = Converting string to array / implode(" ",exploade variable) = Recoverting array to string </h4>

    <?php
        $val = "The furious nine movie";
        $arr = explode(" ", $val);
        print_r($arr);
        echo "<br/><br/>";

        $str = implode(" ",$arr);
        echo $str;
        echo "<br/>";
        print_r($str);
        echo "<br/><br/>";
    ?>

    <hr>







        


       
        
  


 


    
 </body>
 </html>

