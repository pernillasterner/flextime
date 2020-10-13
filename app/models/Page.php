<?php 
class Page {
  private $db;

  public function __construct()
  {
    // Initialize database
    $this->db = new Database;
  }

}