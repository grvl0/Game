<?php
$n = 112345678;
session_start();
require "vendor/autoload.php";

$app = new \atk4\ui\App("andrej");
$app->initLayout("Centered");



$columns = $app->add('Columns');
$col_1 = $columns->addColumn(3);
$col_2 = $columns->addColumn(10);
$col_3 = $columns->addColumn(3);
$clikcer = $col_2->add(["Button",$_SESSION["i"],"green fluid big"]);
$clikcer->on('click',function ($m) {
    $_SESSION["i"] = $_SESSION["i"] + 1;
    return $m;
});

$save = $col_2->add(["Button","save","blue big"]);

$exit = $app->add(['Button',"Exit","red"]);
$exit->link(["exit"]);
