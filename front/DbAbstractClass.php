<?php

abstract class DbAbstractClass{
 
  private static $db_host = "labs.inspedralbes.cat";
  private static $db_user = "a18polpuipui_pol";
  private static $db_pass = "Movie1234";
 

  protected $db_name;

  protected $query;

  protected $rows=array();

  private $conn;

  abstract protected function selectAll();
  abstract protected function login();
  abstract protected function select();
  abstract protected function insert();
  abstract protected function update();
  abstract protected function delete();

  private function open_connection() {
    $this->conn = new mysqli (self::$db_host, self::$db_user, self::$db_pass, $this->db_name);
  }
  
  private function close_connection() {
    $this->conn->close();
  }
  
  protected function execute_single_query() {
    $this->open_connection();
    $this->conn->query($this->query);
    $this->close_connection();
  }
  
  protected function get_results_from_query() {
    $this->open_connection();
    $result = $this->conn->query($this->query);
    for ($i=0;$i<$result->num_rows;$i++) {
        $this->rows[$i] = $result->fetch_assoc();
    }
    $result->close();
    $this->close_connection();
  }

}

?>