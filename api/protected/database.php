<?php

$hostname = "127.0.0.1:8889";
$username = "root";
$password = "root";
$database = "abbrs";

$db = new mysqli(
  $hostname,
  $username, 
  $password, 
  $database
);

echo(var_dump(getenv()));