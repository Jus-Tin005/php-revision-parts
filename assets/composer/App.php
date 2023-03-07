<?php

include("vendor/autoload.php");

use Carbon\Carbon;
use App\Library\Math;

echo Carbon::now()->addDay() . "<br/>";
echo Math::add(10,20);