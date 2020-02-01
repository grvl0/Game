<?php

require "vendor/autoload.php";

$app = new \atk4\ui\App("andrej");
$app->initLayout("Centered");


$clicker_name = $app->add(["Header","Colibri Clicker","centered"]);

$button_login = $app->add(["Button","Log in","circular icon blue","icon"=>"power off"]);

$button_login->on('click', function() use($app) {
  return new \atk4\ui\jsExpression('document.location = "login.php"');
});
$button_reg = $app->add(["Button","Registration","green","icon"=>"arrow circle right"]);
$button_reg->link('reg.php');
