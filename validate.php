<?php


session_start();

$valid_username = 'Aswin';
$valid_password = '12345';

$username = $_REQUEST['username'];
$_SESSION['username'] = $username;
$password = $_REQUEST['password'];
