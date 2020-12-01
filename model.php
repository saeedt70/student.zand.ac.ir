<?php
//اتصال به دیتابیس و جدول دانشجو
class DB {
  private $pdo = null;
  private $stmt = null;

  function __construct(){
    try {
      $this->pdo = new PDO("mysql:host=localhost;dbname=student;charset=utf8", "root", "");
    } 
catch (Exception $ex) { 
die($ex->getMessage()); 
}
  }

  function exs($sql, $cond=null){
    $result = false;
    try {
      $this->stmt = $this->pdo->prepare($sql);
      $this->stmt->execute($cond);
      $result = $this->stmt->fetchAll();
    }
 catch (Exception $ex) { 
die($ex->getMessage()); 
}
    $this->stmt = null;
    return $result;
  }
}


?>
