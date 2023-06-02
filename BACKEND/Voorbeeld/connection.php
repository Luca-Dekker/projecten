<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "phpportfolio01";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
