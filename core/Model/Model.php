<?php

namespace Core\Model;

use App\App;


class Model{
  public $db;

  public function __construct(){

    $app = new App();
    $this->db = $app->getDb();
  }

}
