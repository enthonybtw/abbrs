<?php

require_once("config.php");
$cfg = $mysql;

$db = new mysqli(
  $cfg["hostname"],
  $cfg["username"], 
  $cfg["password"], 
  $cfg["database"]
);