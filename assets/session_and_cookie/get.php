<?php

print_r($_GET);

# http://localhost:8000/ppppppppppp/session_and_cookie/get.php?name=khun&age=99

# Array ( [name] => khun [age] => 99 )


/*
    # Super Global Arrays

        $GLOBALS = all variables
        $_SERVER
        $_REQUEST
        $_POST
        $_GET
        $_FILES
        $_ENV
        $_COOKIE
        $_SESSION
*/



/*
    Request Data = a. URL Query
                   b. Form data
*/           

echo "<br/><br/>";

$name = "Jus Tin";

function hi(){
    echo "Hi " . $GLOBALS['name']; # use $GLOBALS instead of global keyword.
}

hi();

# Hi Jus Tin


echo "<br/><br/>";


print_r($_SERVER);