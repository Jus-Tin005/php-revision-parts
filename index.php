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

    <h2>Operators</h2>

    <h4>Arithmetic operators</h4>

    <?php
    
        /*
          +,-,*,/
         */

         #Addition
         $numOne = 12;
         $numTwo = 32;
         echo $numOne + $numTwo;
         echo "<br/><br/>";

         #Subtraction
         $numOne = 120;
         $numTwo = 32;
         echo $numOne - $numTwo;
         echo "<br/><br/>";

         #Multiplication
         $numOne = 12;
         $numTwo = 32;
         echo $numOne * $numTwo;
         echo "<br/><br/>";

         #Division
         $numOne = 120;
         $numTwo = 32;
         echo $numOne / $numTwo;
         echo "<br/><br/>";

         #Modulus
         $numOne = 100;
         $numTwo = 32;
         echo $numOne % $numTwo;
         echo "<br/><br/>";

         #Exponentiation
         $numOne = 10;
         $numTwo = 3;
         echo $numOne ** $numTwo;
         echo "<br/><br/>";

         $numOne = 11;
         $numTwo = 3;
         echo $numOne ** $numTwo;
         echo "<br/><br/>";

         #Dot Operator

         $hello = "Hello";
         $world = "the people around the world";
         echo $hello . " " . $world;
         echo "<br/><br/>";
         echo "$hello $world";
         echo "<br/><br/>";

         $fruits = ['Pineapple','Mengo'];
         echo $fruits[0] . " and " . $fruits[1];
         echo "<br/><br/>";
         echo $fruits[0] , " and " , $fruits[1];
    ?>

    <hr>

    <h4>Assignment operators</h4>

    <?php
        # = - define value
        # += - combine value
        # -= - 
        # *= - 
        # /= - 
        # %= -
        

        $numOne = 12;
        $numOne += 12;
        echo $numOne;
        echo "<br/><br/>";

        $numOne = 122;
        $numOne -= 12;
        echo $numOne;
        echo "<br/><br/>";

        $numOne = 23;
        $numOne *= 5;
        echo $numOne;
        echo "<br/><br/>";

        $numOne = 23;
        $numOne /= 5;
        echo $numOne;
        echo "<br/><br/>";

        $numOne = 23;
        $numOne %= 5;
        echo $numOne;
        echo "<br/><br/>";
        
    ?>


    <h4>Comparison operators</h4>

    <?php
    
        # ==    -   Equal
        # ===   -   Identical - with data type
        # !=    -   Not equal
        # <>    -   Not equal
        # !==   -   Not identical - With data type
        # >     -   Greater than
        # <     -   Less than
        # >=    -   Greater than or equal to
        # <=    -   Less than or equal to
        # <=>   -   Spaceship

        $numOne = 12;
        $numTwo = "12";
        var_dump($numOne == $numTwo);
        echo "<br/><br/>";

        $numOne = 12;
        $numTwo = 12;
        var_dump($numOne == $numTwo);
        echo "<br/><br/>";

        $numOne = 12;
        $numTwo = "12";
        var_dump($numOne === $numTwo);
        echo "<br/><br/>";

        $numOne = 12;
        $numTwo = 12;
        var_dump($numOne === $numTwo);
        echo "<br/><br/>";

        $numOne = 12;
        $numTwo = "12";
        var_dump($numOne != $numTwo);
        echo "<br/><br/>";

        $numOne = 12;
        $numTwo = 12;
        var_dump($numOne != $numTwo);
        echo "<br/><br/>";

        $numOne = 12;
        $numTwo = "12";
        var_dump($numOne <> $numTwo);
        echo "<br/><br/>";

        $numOne = 12;
        $numTwo = 12;
        var_dump($numOne <> $numTwo);
        echo "<br/><br/>";

        $numOne = 12;
        $numTwo = "12";
        var_dump($numOne !== $numTwo);
        echo "<br/><br/>";

        $numOne = 12;
        $numTwo = 12;
        var_dump($numOne !== $numTwo);
        echo "<br/><br/>";

        $numOne = 190;
        $numTwo = 12;
        var_dump($numOne > $numTwo);
        echo "<br/><br/>";

        $numOne = 190;
        $numTwo = 12;
        var_dump($numOne < $numTwo);
        echo "<br/><br/>";

        $numOne = 12;
        $numTwo = 12;
        var_dump($numOne >= $numTwo);
        echo "<br/><br/>";

        $numOne = 12;
        $numTwo = 12;
        var_dump($numOne <= $numTwo);
        echo "<br/><br/>";


        # Spaceship - less than = -1 / equal = 0 / greater than = 1

        $numOne = 10;
        $numTwo = 12;
        var_dump($numOne <=> $numTwo);
        echo "<br/><br/>";

        $numOne = 12;
        $numTwo = 12;
        var_dump($numOne <=> $numTwo);
        echo "<br/><br/>";

        $numOne = 13;
        $numTwo = 12;
        var_dump($numOne <=> $numTwo);
        echo "<br/><br/>";
    ?>

    <hr>


    <h4>Increment/Decrement operators</h4>

    <?php

    /*
        ++, --
    */
         $num = 13;
         echo ++$num;
         echo "<br/><br/>";

         $num = 13;
         echo $num++;
         echo "<br/><br/>";

         $numOne = 20;
         $numTwo = $numOne++;
         echo $numOne . "<br/><br/>";
         echo $numTwo;
         echo "<br/><br>";

         $numOne = 20;
         $numTwo = ++$numOne;
         echo $numOne . "<br/><br/>";
         echo $numTwo;
         echo "<br/><br>";
         

         $num = 13;
         echo --$num;
         echo "<br/><br/>";

         $num = 13;
         echo $num--;
         echo "<br/><br/>";

        

         $numOne = 20;
         $numTwo = --$numOne;
         echo $numOne . "<br/><br/>";
         echo $numTwo;
         echo "<br/><br>";

         $numOne = 20;
         $numTwo = $numOne--;
         echo $numOne . "<br/><br/>";
         echo $numTwo;
         echo "<br/><br>";

         
    ?>

    <hr>

    <h4>Logical operators</h4>

    <?php
    
        /*
            and     =   And
            or      =   Or     
            xor     =   Xor (one equal = true / two equal = false)
            &&      =   And 
            ||      =   Or 
            !       =   Not
        */

        
        $numOne = 13;
        $numTwo = 12;
        if($numOne == 13 and $numTwo == 12){
            echo "Hey,Bae";
        }
        echo "<br/><br/>";

        # true
        $numOne = 13;
        $numTwo = 12;
        if($numOne == 13 or $numTwo == 100){
            echo "Hey,Bae";
        }
        echo "<br/><br/>";

      
         # true
        $numOne = 13;
        $numTwo = 12;
        if($numOne == 13 or $numTwo == 12){
            echo "Hey,Bae";
        }
        echo "<br/><br/>";

       
        # true
        $numOne = 13;
        $numTwo = 12;
        if($numOne == 13 xor $numTwo == 100){
            echo "Hey,Bae";
        }
        echo "<br/><br/>";
        
        # false
        $numOne = 13;
        $numTwo = 12;
        if($numOne == 13 xor $numTwo == 12){
            echo "Hey,wrong operators";
        }
        echo "<br/><br/>";

        $numOne = 13;
        $numTwo = 12;
        if($numOne == 13 && $numTwo == 12){
            echo "Hey,Bae";
        }
        echo "<br/><br/>";

        $numOne = 13;
        $numTwo = 12;
        if($numOne == 13 || $numTwo == 80){
            echo "Hey,Bae";
        }
        echo "<br/><br/>";


        $num = 13;
        if($num !== 45){
            echo "Hey,Bae";
        }
        echo "<br/><br/>";


    ?>


    <hr>

    <h4>String operators</h4>

    <?php
    
        $textOne = "Gt to";
        $textTwo = "school";
        echo $textOne . " " . $textTwo;
        echo "<br/><br/>";

        $textOne = "Gt to";
        $textTwo = " school";
        echo $textOne .= $textTwo;
        echo "<br/><br/>";


    ?>

    <hr>

    <h4>Ternary Operator</h4>

    <?php
        # condition ? true : false
        $name = "";
        echo $name ? $name : "Unknown";

        echo "<br/><br/>";

        $name = "Khun Tun";
        echo $name ? $name : "Unknown";

        echo "<br/><br/>";

        
        $status = (empty($user)) ? "anonymous" : "logged in";
        echo $status;
        echo "<br/><br/>";

        $user = "Baby";
        $status = (empty($user)) ? "anonymous" : "logged in";
        echo $status;
        echo "<br/><br/>";

        #Short hand syntax = ?:
        $user = "";
        echo $user ?: "anonymous";
        echo "<br/><br/>";

        $user = "Khun Tun";
        echo $user ?: "anonymous";
        echo "<br/><br/>";

        echo isset($userLog) ? $userLog : "Unknown user";
        echo "<br/><br/>";

        $user = "JB";
        echo $user ? $user : "Unknown user";
        echo "<br/><br/>";
    ?>

    <hr>

    <h4>Null Coalescing Assignment Operator</h4>

    <?php

        # ?? 

        $result = "Boby";
        $result ??= $name;
        echo $result;
        echo "<br/><br/>";

        echo $user = $_GET["user"] ?? "anonymous";
        echo "<br/><br/>";

        echo $color = $color ?? "red";

        echo "<br/><br/>";

        echo $trees ?? "banana tree"; 

    ?>

    <hr>

    <h2>Conditional Statement - Control structure</h2>

    <h4>if Statement</h4>

    <?php
        /*
            if(){

            }else{

            }

            * One Statement
            if() echo
            else echo

            * Alternative - common used php and HTML syntax
            if() :
                echo
            else :
                echo
            endif;

            * elseif
            if(){
                
            }elseif(){    = PHP syntax - elseif / JS syntax - else if

            }else{

            }
        */

        $time = date("H");
        if($time > 7 and $time < 19){
            echo "Day Time.";
        }else{
            echo "Night Time.";
        }

        echo "<br/><br/>";

        if($time > 5 && $time < 17) echo "Have a good day !";
        else echo "Have a good night !";

        echo "<br/><br/>";

        if($time > 4 && $time < 14) :
            echo "Beautiful Day.";
        else :
            echo "Beautiful Night.";
        endif;

        echo "<br/><br/>";

        $day = date("D");

        if($day === "Sun"){
            echo "Today is Sunday";
        }elseif($day === "Sat"){
            echo "Today is Sataurday";
        }else{
            echo "Today is a week day";
        }

        echo "<br/><br/>";

    ?>

    <hr>

    <h4>Switch Statement</h4>

    <?php
    
        /*
            switch(){
                case "state-1" :
                    break;
                case "state-2" :
                    break;
                default:    
            }
         */

         $day = date("D");

         switch($day){
            case "Sun" :
            case  "Sat" :
                echo "Weekend";
                break;
            case "Fri" :
                echo "TGIF";
                break;
            default:
            echo "weekday";
         }

         echo "<br/><br/>";

         $myFavColor = "purple";

         switch($myFavColor){
            case "purple" :
                echo "My Favorite color is purple !";
                break;
            case "blue" :
                echo "My Favorite color is blue !";
                break;
            case "green" :
                echo "My Favorite color is green !";
                break;
            default:
            echo "My Favorite color is neither purple, blue, nor green !";
         }

         echo "<br/><br/>";

         /*
            * match expression

            match(){
                "statement" => "statement",
                "statement" => "statement",
                default => "statement";
            }
         */

         $day = date("D");

         $result = match($day){
            "Sat", "Sun" => "Weekend",
            "Fri" => "TGIF",
            default => "weekday"
         };

         echo $result;

         echo "<br/><br/>";

         $sub = "PHP";

         $val = match($sub){
            "HTML" => "HTML Course",
            "CSS" => "CSS Course",
            "PHP" => "PHP Course",
            "JavaScript" => "JS Course",
            "WebDev" => "Complete Web Development"
         };

         var_dump($val);
         echo "<br/><br/>";
         echo "$val";
         echo "<br/><br/>";

         /*
            * Tips About switch & match * 
            To compare value-------
            switch use == (double equal) while match use === (triple equal)

         */
    ?>

    <hr>


    <h2>Loop In PHP</h2>

    <h4>While Loop</h4>

    <?php
        /*
            while(condition is true){

            }
        */

        $num = 1;

        while($num <= 10){
            echo "The number is : $num <br/>";
            $num++;
        }

        echo "<br/><br/>";

        $num = 0;

        while($num <= 100){
            echo "The Number is : $num <br/>";
            $num+=10;
        }

        echo "<br/><br/>";

        $nums = [12,34,-2,8,456];
        $i = 0;
        $result = 0;

        while($i < count($nums)){
            $result += $nums[$i];
            $i++;
        }

        echo $result; # 508

        echo "<br/><br/>";

        echo array_sum($nums); # 508

        echo "<br/><br/>";     
    ?>

    <hr>

    <h4>Do While Loop</h4>

    <?php
            /*
                do {

                } while (condition is true); = working first time,then checking condition
            */

            $number = 1;

            do{
                echo "The Number is : $number <br/>";
                $number++;
            } while ($number <= 5);

            echo "<br/><br/>";

            $number = 6;

            do{
                echo "The Number is : $number <br/>";
                $number++;
            }while($number <= 5);

            echo "<br/><br/>";

            $nums = [12,45,-4,8,906];

            $i  =   0;
            $result = 0;

            do{
                $result += $nums[$i];
                $i++;
            }while($i < count($nums));

            echo $result; # 967

            echo "<br/><br/>";
    ?>

    <hr>

    <h4>For Loop</h4>

    <?php
        /*
            for(init counter, test counter , increment counter){

            }
        */

        for($i = 0; $i <= 10; $i++){    
            echo "The Number is : $i <br/>";
        }

        echo "<br/><br/>";

        for($x = 0; $x <= 100; $x+=10){
            echo "The Number is $x <br/>";
        }

        echo "<br/><br/>";

        $nums = [12,45,-4,8,906];

        $result = 0;

        for($i = 0; $i < count($nums); $i++){
            $result += $nums[$i]; 
        }

        echo $result; # 967

        echo "<br/><br/>";
    ?>

    <hr>

    <h4>Foreach Loop</h4>

    <?php
        /*
            foreach($arrays as $value){     = JS - forEach / PHP - foreach

            }
        */

        $fruits = ["banana","mengo","strawbery","apple"];
        foreach($fruits as $fruit){
            echo "$fruit <br/>";
        }

        echo "<br/><br/>";

        
        $nums = [12,45,-4,8,906];

        $result = 0;

        foreach($nums as $num){
            $result += $num;
        }

        echo $result; # 967

        echo "<br/><br/>";

        $age = ["Khun Tun " => 20, "JB" => 18, "Elizabeth" => 23,"Anna" => 20];
        foreach($age as $key => $val){
            echo "$key = $val <br/>";
        }

        echo "<br/><br/>";

        $user = ["alice" => 32, "boby" => 34];

        $result = [];
        
        foreach($user as $key => $val){
            $result[] = $key;
            // $result[] = $val;
        }

        print_r($result);
        echo "<br/><br/>";
        print_r(array_keys($user));
        

    ?>

    <hr>

    <h4>Break & Continue</h4>

    <?php
    
        for($i = 0; $i < 10; $i++){
            if($i == 5){
                break;
            }
            echo "The Number is : $i <br/>";
        }

        echo "<br/><br/>";

        $nums = [12,34,-2,8,456];

        $i = 0;
        $result = 0;

        while($i < count($nums)){
            if($nums[$i] < 0) break;

            $result += $nums[$i];
            $i++;   
        }

        echo $result; # 46 - break when minus value is turn.

        echo "<br/><br/>";

        for($y = 0; $y < 10; $y++){
            if($y == 6){
                continue;
            }

            echo "The Number is : $y <br/>";
        }

        echo "<br/><br/>";

        $nums = [12,34,-2,8,456];

        $i = 0;
        $result = 0;

        while($i < count($nums)){
            if($nums[$i] < 0){
                $i++;
                continue;
            }

            $result += $nums[$i];
            $i++;

        }

        echo $result; # 510 - adding value without minus value

         /*
            Tips about break &continue
            can add argument after break & continue = break 1, break 2 etc. 1 is default
        */


    ?>
    

    <hr>

    <h2>Functions</h2>

    <h4>Call Back function</h4>

    <?php
        function writeMsg(){
            echo "Good Morning";
        }
        writeMsg();

        echo "<br/><br/>";
    ?>

    <hr>

    <h4>Function Argument</h4>

    <?php

        # Single Argument
        function familyName($fName){
            echo "$fName Justin. <br/>";
        }

        familyName("Jeni");
        familyName("Huge");
        familyName("Salash");
        familyName("Greegie");
        familyName("kai Jim");
        familyName("Boss");
        familyName("Abuda");

        echo "<br/><br/>";

           # Multiple Argument
        function myFamilyName($fName, $year){
            echo "$fName Justin. Born in $year.<br/>";
        }

        myFamilyName("Jeni","1995");
        myFamilyName("Boss","1998");
        myFamilyName("Abuda","1990");

        echo "<br/><br/>";

        function add($a,$b){
            echo $a + $b;
        }

        # error
        // add(10);

        add(10,34); # 44
        echo "<br/><br/>";
        add(10,34,45); # 44

    ?>

    <hr>

    <h4>Without using strict = PHP-8+</h4>

    <?php

        # no need to strict type 8+

        function addNum(int $numOne , int $numTwo){
            return $numOne + $numTwo;
        }
        echo addNum(10, 10); # 20

        echo "<br/><br/>";

        function addNumbers(int $numOne , int $numTwo){
            return $numOne + $numTwo;
        }
        # error
        // echo addNumbers(10, "10 days"); 

        echo "<br/><br/>";
    ?>

    <hr>

    <h4>Using with strict = PHP-7</h4>

    <?php
        declare(strict_type=1);

        function myFunNum(int $numOne, int $numTwo){
            return $numOne + $numTwo;
        }
        // echo myFunNum(23,23);

        #error 
        // echo myFunNum(23,"23 days");
        echo "<br/><br/>";
    ?>

    <hr>

    <h4>Default Argument</h4>

    <?php
        function setHeight(int $minHeight = 100){
            echo "The height is : $minHeight <br/>";
        }

        setHeight(450);
        setHeight(500);
        setHeight(459);
        setHeight();  # default value

        echo "<br/><br/>";
    ?>

    <hr>

    <h4>Returning Value - PHP-8+</h4>

    <?php
        function sum(int $numOne, int $numTwo){
            $nums = $numOne + $numTwo;
            return $nums;
        }

        echo "23 + 24 = " . sum(23,24) . "<br/>";
        echo "45 + 46 = " . sum(45,46) . "<br/>";
        echo "21 + 22 = " . sum(21,22) . "<br/>";

        echo "<br/><br/>";

        function myTurn($a,$b){
            return $a + $b;
        }

        $result = myTurn(23,34); # NULL = if return statement has not, PHP function returns NULL as a default.
        echo myTurn(23,34); # 57
    ?>

    <hr>

    <h4>Return Type Declaration (Type Hinting) - PHP-8+</h4>

    <?php 

    

    /*
        function fName(datatype val,datatype val,) : datatype{
            return
        }
    */
        function calculator(float $numOne, float $numTwo) : float{
            return $numOne + $numTwo;
        }

        echo calculator(123,1243); # 1366
        echo "<br/><br/>";
        echo calculator(2.4,4.5); # 6.9
        echo "<br/><br/>";
        echo calculator("123","1243"); # 1366
        echo "<br/><br/>";
        echo calculator("2.4","4.5"); # 6.9


        echo "<br/><br/>";



        /*
            Scalar Type Hinting
        */

        # Method-1
        function myAdd($nums) {
            return array_sum($nums);
        }

        # error
        // echo myAdd(12,34);

        echo "<br/><br/>";

        # Method-2

        function myAddingNum(Array $nums){
            return array_sum($nums);
        }

        #error
        // echo myAddingNum(12,34);


        /*
            Return Type Hinting 
        */

        

        function addingValue(Array $nums) : float {
            # error = no return value = NULL
            // echo array_sum($nums); 

            return array_sum($nums); 
        }

        # error
        // addingValue([23,56]);

        addingValue([23,56]);  # NULL

        echo "<br/><br/>";

        /*
            Union Type Hinting = multiple hinting
        */

        function myUnion(int | float $price){
            return "Price is \$$price";
        }

        echo myUnion(3.2) . "<br/>";
        echo myUnion(23);
    ?>


    <hr>

    <h4>Passing Argument by Value (PHP default) = Just pass value of variable,not all of variable(the variable inside and outside of function)</h4>

    <?php
        $name = "Khun Tun";

        function myName($n){
            $n = "Jus Tin";
            echo "Hi $n";
        }

        myName($name);  # Hi Jus Tin
        echo "<br/>";
        echo $name;     # Khun Tun

        echo "<br/><br/>";
    ?>

    <hr>

    <h4>Passing Argument by Reference = &(Reference Operator) - (pass all of variable.It will effect original variable whenever variable in function change.)</h4>

    <?php
        function add_five(&$value){
            $value += 23;
        }
        $num = 21;
        add_five($num);
        echo $num; # 44

        echo "<br/><br/>";

        $name = "Khun Tun";

        function helloKhun(&$n){
            $n = "Jus Tin";
            echo "Hi $n";
        }

        helloKhun($name);   # Hi Jus Tin
        echo "<br/>";
        echo $name;         # Jus Tin
    ?>


    <hr>

    <h4>Rest Parameter</h4>

    <?php
        function smallBaby($numOne, ...$numTwo){
            print_r($numOne); 
            echo "<br/>";
            print_r($numTwo); 
        }

        smallBaby(10,20,30,40);
        /*
            10
            Array ( [0] => 20 [1] => 30 [2] => 40 )
        */

        # Old Rest Parameter Syntax


        echo "<br/><br/>";

        function oldPara(){
            $argument = func_get_args();
            print_r($argument);
        }
        oldPara(10,20,30,40);

        /*
            Array ( [0] => 10 [1] => 20 [2] => 30 [3] => 40 )
        */
    ?>

    <hr>

    <h4>Function Global Scope</h4>

    <?php
    
        function one(){
            $nickName = "one";
        }

        # Error
        one();
        // echo $nickName;

        echo "<br/><br/>";

        function two(){
            function three(){
                echo "Three";
            }
        }

        two();
        three();

        echo "<br/><br/>";

        # Global Variable

        $myName = "JS";

        function myNickname(){
            echo "Hi $myNickname !";
        }

        # error
        // myNickname(); 

        $babyName = "cuty";
        function myCuty(){
            global $babyName;
            echo "Hi $babyName";
        }
        myCuty();

        echo "<br/><br/>";

        function cuty(){
            global $babyName;
            $babyName = "baby boss";
        }
        cuty();
        echo $babyName;

        echo "<br/><br/>";

    ?>

    <hr>

    <h4>Variable Function</h4>

    <?php
        function ababa($x,$y){
            echo $x + $y;
        }

        $name = "ababa";
        $name(200,500); # 700

        echo "<br/><br/>";
    ?>

    <hr>

    <h4>Function Expression - Nameless Function or Anonymous Function</h4>

    <?php

        # Call Back function

        $nums = [10,20,30,40];

        function mister($n){
            return $n * 5;
        }

        # array_map(call back, array);

        $result = array_map("mister", $nums);
        print_r($result);

        echo "<br/><br/>";


        # Nameless Function

        $nums = [10,20,30,40];

        $result = array_map(function($n){
            return $n * 5;
        }, $nums);

        print_r($result);

        echo "<br/><br/>";

        # Assign Function expression into variable

        $highTech = function($n){
            echo $n * 5;
        };

        $highTech(20);  # 200

        echo "<br/><br/>";

        # use Statement in Function Expression

        $name = "JS";
        $hi = function() use ($name) {
            echo "Hello $name";
        };
        $hi();      # Hello JS

        echo "<br/><br/>";

        # the original variable value does not change

        $hello = function() use ($name) {
            $name = "Bae";
            echo "Hi $name";
        };

        $hello();   # Hi Bae
        echo "<br/>";
        echo $name; # JS

        echo "<br/><br/>";
    ?>

    <hr>

    <h4>Arrow Function</h4>

    <?php

        # fn (param) => expression;

        /*
            Function Statement = (){

            }

            Function Expression = ()
        */


        $greateNumber = fn ($n) => $n * 5;
        echo $greateNumber(3);

        echo "<br/><br/>";

        # can use variable directly in arrow function.No need to use global keyword & use statement

        $x = 30;
        $add = fn($y) => $x + $y;
        echo $add(40);  # 70

        echo "<br/><br/>";

        $str = "Hi there";
        $my_func = fn($a) => $str . $a;
        echo $my_func(" !");

        echo "<br/><br/>";
    ?>

    <hr>

    <h4>Named Arguments</h4>

    <?php
        function myProfile($name, $email, $age){
            echo "$name ($age)  @$email";
        }

        // myProfile(age: 23, name: "Khun JS", email: "Khun321@gmail.com");
        myProfile(
            age: 23,
            name: "Khun JS",
            email: "Khun321@gmail.com",
        );

        echo "<br/><br/>";

        function myCutyDog($numArgu = 1, $valArgu = 5){
            echo "Number : ", $numArgu;
            echo " ";
            echo "Value : ", $valArgu;
        }

        myCutyDog(valArgu: 500, numArgu: 100); # Number : 100 Value : 500
        echo "<br/><br/>";
        
    ?>

    <hr>

    <h2>OOP in PHP</h2>

    <?php
        /*
            # Property & Method in Class Object

            # Access Controll Modifier or Visibility = 
                                                a.public = everywhere
                                                b.private = current inside of class
                                                c.protected = current class and inherited child class

            # Pseudo Variable = $this ( use it for Property & Method )
            # Dart Operator in PHP = -> ( use it for using Property & Method of Object ) 
            # Other Languages use Dot Operator(.) as a object operator

            # constructor = __construct()

            # Class Member = static 
            # Scope Resolution Operator or Double Colon Operator = ::

            # parent
            # final
            # abstract  =   method and abstract method
            # interface =   abstract method
        */

        class Animal{

        }

        $dog = new Animal;
        var_dump($dog);

        echo "<br/><br/>";

        # Class

        class Mammals{
            public $name;

            public function run(){
                echo "$this->name is running...";
            }
        }

        # Object

        $bear = new Mammals;
        $bear->name = "Tom Cruis";
        $bear->run();

        echo "<br/><br/>";


        # error = Cannot access private property

        class Reptiles {
            private $name;

            function kill(){
                echo "$this->name can kill any one";
            }
        }

        /*
        $python = new Reptiles;
        $python->name = "Bravo";
        $python->kill();
        */

        echo "<br/><br/>";


        # constructor = working immediately after building object

        class Worms{
            function __construct(){
                echo "leeches can be biting people";
            }
        }

        $leech = new Worms;

        echo "<br/><br/>";

        # Error - Call to private =  constructor in private cannot build object.

        class Molluscs{
            

            private function __construct(){
                echo "can be found anywhere in rainy season.";
            }
        }

        // $snail = new Molluscs;


        echo "<br/><br/>";

        # static = calling directly without building object
        # No need $this in static

        class Insects{
            static $type = "bee";

            static function build(){
                echo "Group : " . static::$type;
            }
        }

        echo Insects::$type;    # bee
        echo "<br/>";
        Insects::build();       # Group : bee

        echo "<br/><br/>";

        # common syntax = Method-1

        class Fishes{
            private $name;

            public function __construct($name){
                $this->name = $name;
            }

            public function sleep(){
                echo "$this->name is sleeping in water at night";
            }
        }

        $shark = new Fishes("Long and big shark");
        $shark->sleep();

        echo "<br/><br/>";

        # common syntax = Method-2
        # Constructor Property Promotion

        class MarineAnimals{
            public function __construct(private $name){
                
            }

            public function swimming(){
                echo "$this->name is swimming every day";
            }
        }

        $salmon = new MarineAnimals("A golden salmon");
        $salmon->swimming();  
        
        echo "<br/><br/>";
   
    ?>

    <hr>

    <h4>Class Inheritance</h4>

    <?php
    
        class Butterflies{
            public function __construct(private $name){
                
            }

            public function fly(){
                echo "$this->name is flying in the air. ";
            }
        }

        class Silkworm extends Butterflies {
            public function eating(){
                echo "And eats flowers everywhere.";
            }
        } 

        $bravo = new Silkworm("Bravo");
        $bravo->fly();
        $bravo->eating();

        # Bravo is flying in the air. And eats flowers everywhere.


        echo "<br/><br/>";

        # Error =  Undefined property

        /*
        class Arachnids{
            public function __construct(private $name){

            }

        }  

        class Spider extends Arachnids{
            public function climbing(){
                echo "$this->name : is climbing the rock.";
            }
        }

        $rocky = new Spider("rocky");
        $rocky->climbing();
        */



        # protected

        class Arachnids{
            public function __construct(protected $name){

            }

        }  

        class Spider extends Arachnids{
            public function climbing(){
                echo "$this->name  is climbing the rock.";
            }
        }

        $rocky = new Spider("rocky");
        $rocky->climbing();

        # rocky is climbing the rock.

        echo "<br/><br/>";

        # inheritance step by step

        

        class MyAnimal{
            static function myInfo(){
                echo "My animal";
            }
        }

        class MyDog extends MyAnimal {

        }

        class MyFox extends MyDog  {

        }

        MyFox::myInfo();

        # My animal

        echo "<br/><br/>";

        # overwrite & recreate = parent

        class CuttyAnimal{
            public function __construct(protected $name){

            } 
        }

        class CuttyDog extends CuttyAnimal{
            public function __construct($name, private $color){
                parent::__construct($name);
                $this->color = $color;
            }

            public function coolProfile(){
                echo "$this->name has $this->color color.";
            }
        }
        

        $angel = new CuttyDog("Angel","black");
        $angel->coolProfile();

        echo "<br/><br/>";

        # Angel has black color.


         # Not to allow overwrite & recreate = final

         # Error = Cannot override final method

         /*

         class CuttyHomeAnimal{
            final public function attacking(){
                echo "CuttyHomeAnimal is attacking his nails.";
            }
         }

         class CuttyCat extends CuttyHomeAnimal{
            public function attacking(){
                echo "A cute cat is attacking his nails.";
            }
         }

         */

         echo "<br/><br/>";

          # Not to allow overwrite all class = final

          # error = may not inherit from final class

        /*
         final class CuttyHomeAnimal{
            public function attacking(){
                echo "CuttyHomeAnimal is attacking his nails.";
            }
         }

         class CuttyCat extends CuttyHomeAnimal{
            public function attacking(){
                echo "A cute cat is attacking his nails.";
            }
         }
         */

        

         echo "<br/><br/>";

         # Abstract Class = abstract

         /*

            abstract class ParentClass {
            abstract public function someMethod1();
            abstract public function someMethod2($name, $color);
            abstract public function someMethod3() : string;
                                        }
         
         */


         # error = bstract method and must therefore be declared abstract

         /*
         abstract class CuttyHomeAnimal{
            public abstract function talk();
            public function attacking(){
                echo "CuttyHomeAnimal is attacking his nails.";
            }
         }

         class CuttyCat extends CuttyHomeAnimal{
            public function attacking(){
                echo "A cute cat is attacking his nails.";
            }
         }

         */

         echo "<br/><br/>";


         # Parent Class

         abstract class Car {
            public function __construct(public $name){

            }
            abstract public function intro() : string;
         }

         # Child Classes

         class Audi extends Car{
            public function intro() : string {
                return "Choose German quaity ! I'm an $this->name!";
            }
         }

         class Volvo extends Car {
            public function intro() : string {
                return "Proud to be Swedish! I'm a $this->name!";
            }
         }

         class Citroen extends Car{
            public function intro() : string {
                return "French extravance! I'm a $this->name";
            }
         }

         # Create Object From Child Classes

         $audi = new Audi("Audi");
         echo $audi->intro() . "<br/>";

         $volvo = new Volvo("Volvo");
         echo $volvo->intro() . "<br/>";

         $citroen = new Citroen("Citroen");
         echo $citroen->intro();

         echo "<br><br>";

         
         abstract class MyCar{
            public $name;
            public function __construct($name){
                $this->name = $name;
            }
            abstract public function model();
         }

         class Toyota extends MyCar {
            public function model(){
                echo "Best quality in Japan. I like $this->name";
            }
         }

         class Honda extends MyCar {
            public function model(){
                echo "Best quality in Myanmar. I like $this->name";
            }
         }

         class Hondai extends MyCar {
            public function model(){
                echo "Best quality in Korea. I like $this->name";
            }
         }

         $toyota = new Toyota("Toyota");
         echo $toyota->model() ."<br/>";

         $honda = new Honda("Honda");
         echo $honda->model() ."<br/>";

         $hondai = new Hondai("Hondai");
         echo $hondai->model() ."<br/>";

         echo "<br><br>";


         # Abstract method with argument ony at parent class

         abstract class ParentClass {
            abstract protected function prefixName($name);
         }

         class ChildClass extends ParentClass {
            public function prefixName($name) {
                if($name == "Khun Tun"){
                    $prefix = "Mr.";
                }elseif($name == "San Di"){
                    $prefix = "Miss.";
                }else{
                    $prefix = "";
                }
                return "{$prefix}{$name}";
            }
         }

         $myClass = new ChildClass;
         echo $myClass->prefixName("Khun Tun") . "<br/>";
         echo $myClass->prefixName("San Di");

         /*
            Mr.Khun Tun
            Miss.San Di
         */

         echo "<br><br>";

         # Abstract method with argument  at parent class and child class
         # The child class may define optional arguments that is not in the parent's abstract method

         abstract class BigClass {
            abstract protected function sirName($name);
         }

         class SmallClass extends BigClass {
            public function sirName($name, $separator = ".", $greet = "Dear"){
                if($name == "Paing Tan Khun"){
                    $nickName = "Mr";
                }elseif($name == "Soe Pyae Tha Zin"){
                    $nickName = "Miss";
                }else{
                    $nickName = "No any name";
                }
                return "{$greet} {$nickName}{$separator}{$name}";
            }
         }

         $movie = new SmallClass;
         echo $movie->sirName("Paing Tan Khun") . "<br/>";
         echo $movie->sirName("Soe Pyae Tha Zin") . "<br/>";

         /*
            Dear Mr.Paing Tan Khun
            Dear Miss.Soe Pyae Tha Zin
         */

         echo "<br><br>";


         # interface = use it to build the same kind object


         /*
         
         interface InterfaceName {
            public function someMethod1();
            public function someMethod2($name, $color);
            public function someMethod3() : string;
                                    }

         */


         class HomeDog {
            public function jumping(){
                echo "The dog is jumping";
            }
         }

         class BigFish{
            public function watching(){
                echo "The big fish is watching people.";
            }
         }

         function myApp(HomeDog $obj){
            $obj->jumping();
         }


         # The dog is jumping
         myApp(new HomeDog); 
         # error
        //  myApp(new BigFish);


         echo "<br><br>";


         interface BabyAnimal{
            public function makeSound();
         }

         class BabyCat implements BabyAnimal {
            public function makeSound(){
                echo "Meow";
            }
         }

         $animal = new BabyCat();
         $animal->makeSound();

         echo "<br><br>";

         # Interface definition
         interface OldAnimal{
            public function sweetSound();
         }

         class OldCat implements OldAnimal {
            public function sweetSound(){
                echo " Meee Meow ";
            }
         }

         class OldDog implements OldAnimal {
            public function sweetSound(){
                echo " Woof...Woof ";
            }
         }

         class OldMouse implements OldAnimal {
            public function sweetSound(){
                echo " Squeak ";
            }
         }

         # Create a list of animals

         $cat = new OldCat();
         $dog = new OldDog();
         $mouse = new OldMouse();
         $animals = [$cat,$dog,$mouse];

         # Tell the animals to make a sound
         foreach($animals as $animal){
            $animal->sweetSound();
         }


    ?>




        


       
        
  


 


    
 </body>
 </html>

