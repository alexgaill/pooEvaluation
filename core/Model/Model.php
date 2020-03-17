<?php

namespace Core\Model;
use Core\Database\Database;


class Model{
  public $db;

  public function __construct($db){
    $this->db = $db;
  }

}
