<?php

namespace icrud;

use PDO;

class Db{

  use TSingletone;

  protected $pdo;

  protected function __construct(){
    $db = require_once CONF .'/config_db.php';
    $options = [
      \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
      \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC
    ];
    $this->pdo = new \PDO($db['dsn'], $db['user'], $db['pass'], $options);

    if (!$this->pdo) {
      throw new \Exception("Нет подключения к БД", 500);
    }
  }

  public function execute($sql, $params = []){
    $stmt = $this->pdo->prepare($sql);
    return $stmt->execute($params);
  }

  public function query($sql, $params = []){
    $stmt = $this->pdo->prepare($sql);
    $res = $stmt->execute($params);
    if ($res !== false) {
      return $stmt->fetchAll();
    }
    return [];
  }

  public function performQuery($sql){
    $stmt = $this->pdo->prepare($sql);
    return $stmt->execute();
  }

}
