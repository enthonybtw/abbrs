<?php

require_once("protected/database.php");

class MethodAdd {
  public $method;

  public function __construct() {
    $this->method = $_GET["method"];
    $this->methodController($this->method);
  }
  
  public function methodController($method) {
    if ($method === "forceAdd") {
      return $this->forceAdd();
    }
  }

  private function forceAdd() {
    global $db;

    $name         = $_POST["name"];
    $value        = $_POST["value"];
    $translation  = $_POST["translation"];

    $source = $_POST["source"];
    $editor = $_POST["editor"];

    $query_key = "INSERT INTO `abbrs_keys` (`name`, `source`, `editor`) VALUES ('$name', '$source', '$editor')";
    if ($db->query($query_key)) {
      $row = $db->insert_id;

      $query_value = "INSERT INTO `abbrs_values` (`key`, `value`, `translation`) VALUES ('$row', '$value', '$translation')";
      if ($db->query($query_value)) {
        $this->giveResponse(true);
      } else {
        $this->giveResponse(false);
      }
    } else {
      $this->giveResponse(false);
    }
  }

  private function giveResponse($bool) {
    $response = [ "status" => ($bool === true ? "OK" : "ERROR") ];
    echo(json_encode($response));
  }

}

new MethodAdd();