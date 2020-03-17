<?php

namespace Core\Database;

class Database{

  public $dbName;
  public $dbHost;
  public $dbUser;
  public $dbPassword;
  public $pdo;

  public function __construct($dbName, $dbHost, $dbUser, $dbPassword){

    $this->dbName = $dbName;
    $this->dbHost = $dbHost;
    $this->dbUser = $dbUser;
    $this->dbPassword = $dbPassword;
    $this->pdo;

    if($this->pdo == null){

      $pdo = new \PDO ('mysql:dbname=' . $this->dbName . ';charset=utf8;host=' . $this->dbHost, $this->dbUser, $this->dbPassword);
      $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
      $this->pdo = $pdo;
    }
    return $this->pdo;
  }


  public function save($statement, $values){
    $query = $this->pdo->prepare($statement);
    $query->execute($values);
  }

  public function delete($statement, $values){
    $query = $this->pdo->prepare($statement);
    $query->execute($values);
  }

  public function query($statement, $one = false){
    $datas = $this->pdo->query($statement);
    if($one){
      return $datas->fetch();
    }else{
      return $datas->fetchAll();
    }
  }

}
