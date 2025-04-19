<?php
require_once("protected/database.php");

class MethodGet {
  public $method;

  public function __construct() {
    $this->method = $_GET["method"];
    $this->methodController($this->method);
  }

  public function methodController($method) {
    if ($method === "getById") {
      $this->getById();
    } elseif ($method === "getNew") {
      $this->getNew();
    } elseif ($method === "getCount") {
      $this->getCount();
    }
  }

  private function getById() {
    global $db;

    $id = $_GET["id"];

    $sql = "SELECT abbrs_keys.id, abbrs_keys.name, abbrs_keys.source, abbrs_keys.editor,
            abbrs_values.value, abbrs_values.translation FROM abbrs_keys
            LEFT JOIN abbrs_values ON abbrs_values.key = abbrs_keys.id
            WHERE abbrs_keys.id = '$id'";
    
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
      echo(json_encode($result->fetch_assoc()));
    }
  }

  private function getNew() {
    global $db;
    $array = [];

    $sql = "SELECT abbrs_keys.id, abbrs_keys.name,
            abbrs_values.value, abbrs_values.translation FROM abbrs_keys
            LEFT JOIN abbrs_values ON abbrs_values.key = abbrs_keys.id
            WHERE abbrs_keys.adult = 0
            ORDER BY abbrs_keys.id DESC LIMIT 10";
    
    $result = $db->query($sql);
    while($row = $result->fetch_assoc())
    {
      array_push($array, $row);
    }

    echo(json_encode($array));
  }

  private function getCount() {
    global $db;

    $sql = "SELECT COUNT(id) FROM abbrs_values";
    $result = $db->query($sql);
    echo(json_encode(["count" => $result->fetch_row()[0]]));
  }
} 

new MethodGet();