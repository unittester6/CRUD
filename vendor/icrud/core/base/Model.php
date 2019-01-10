<?php

namespace icrud\base;

use icrud\Db;

abstract class Model{

    protected $pdo;
    protected $table;

    public function __construct(){
        $this->pdo = Db::instance();
    }

    public function query($sql){
      return $this->pdo->execute($sql);
    }

    public function findAll(){
      $sql = "SELECT * FROM {$this->table} ORDER BY id DESC ";
      return $this->pdo->query($sql);
    }

    public function findOne($id){
      $sql = "SELECT * FROM {$this->table} WHERE (id) = {$id}";
      return $this->pdo->query($sql);
    }

    public function countRows(){
      $sql = "SELECT COUNT(*) FROM {$this->table}";
      return $this->pdo->query($sql);
    }

    public function create($title, $news){
      $sql = "INSERT INTO {$this->table}(title, news) VALUES('$title', '$news')";
      return $this->pdo->performQuery($sql);

    }

    public function update($id, $title, $news){
      $sql = "UPDATE {$this->table} SET title = '{$title}', news = '{$news}' WHERE id = {$id}";
      return $this->pdo->performQuery($sql);
    }

    public function delete($id){
    $sql = "DELETE FROM {$this->table} WHERE id = {$id}";
    return $this->pdo->performQuery($sql);
    }
}
