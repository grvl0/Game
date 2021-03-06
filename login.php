<?php

require "vendor/autoload.php";
require "connection.php";
session_start();


$app = new \atk4\ui\App("andrej");
$app->initLayout("Centered");

$model = new User($db);


$form = $app->add(['Form']);
$form->addField('nickname');
$form->addField('password');
$form->buttonSave->set("Войти");

$form->onSubmit(function($form) use($model) {
  $model->tryLoadBy('nickname',$form->model['nickname']);
  if (isset($model->id)) {
    if ($model["password"] == $form->model['password']) {
      $_SESSION["user_id"] = $model->id;
      return new \atk4\ui\jsExpression('document.location = "main.php"');

    } else {
      return new atk4\ui\jsNotify(['content' => 'Wrong input', 'color' => 'red']);
    }

  } else {
    return new atk4\ui\jsNotify(['content' => 'Wrong input', 'color' => 'red']);
  }

});
