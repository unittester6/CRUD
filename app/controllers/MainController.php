<?php

namespace app\controllers;

use app\models\Main;

class MainController extends AppController {

    public function indexAction(){
      $model = new Main();
      $news = $model->findAll();

      $title = 'Home page';
      $this->set(compact('title', 'news'));
    }

    public function createAction() {
      if ($_POST) {
        if (isset($_POST['title']) && isset($_POST['news'])) {
          $title = $_POST['title'];
          $news = $_POST['news'];
          $submit = $_POST['submit'];
        }
      }

      $model = new Main();

      if (isset($submit)) {
        if ($title != '' && $news != '') {
        $res = $model->create($title, $news);
        }
      }

      header('Location: /');
      exit();
    }

    public function readAction() {
      if ($_GET) {
        if (isset($_GET['news'])) {
          $id = $_GET['news'];
        }
      }

      $model = new Main();

      $news = $model->findOne($id);

      $title = 'Full news';
      $this->set(compact('title', 'news'));
    }

    public function updateAction() {
      if ($_GET) {
        if (isset($_GET['news'])) {
          $id = $_GET['news'];
        }
      }

      $model = new Main();

      $news = $model->findOne($id);

      $title = 'Full news';
      $this->set(compact('title', 'news'));
    }


    public function postUpdateAction() {
      if ($_POST) {
        if (isset($_POST['id']) && isset($_POST['title']) && isset($_POST['news'])) {
          $id = $_POST['id'];
          $title = $_POST['title'];
          $news = $_POST['news'];
        }
      }

      $model = new Main();

      if ($title != '' && $news != '') {
        $res =  $model->update($id, $title, $news);
      }


      header("Location: /read?news={$id}");
      exit();
    }

    public function deleteAction() {
      if ($_POST) {
        if (isset($_POST['delete'])) {
          $id = $_POST['delete'];
        }
      }

      $model = new Main();

      $res = $model->delete($id);

      header('Location: /');
      exit();
    }


}
