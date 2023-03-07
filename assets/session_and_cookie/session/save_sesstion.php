<?php

session_start();

$_SESSION['user'] = "Khun Tun";

# delete session data
unset($_SESSION['user']);