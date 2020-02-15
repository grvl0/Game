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

$val=$col_2->add(['FormField/Line','-666']);


$clikcer = $col_2->add(["Button",$_SESSION["i"],"green fluid big"]);
$clikcer->js('click',new \atk4\ui\jsReload($val,['val' =>$val->jsInput()->val(new \atk4\ui\jsExpression('parseInt([])+10000000000', [$val->jsInput()->val()]), $val->jsInput()->focus())]));


$save = $col_2->add(["Button","save","blue big"]);

$exit = $app->add(['Button',"Exit","red"]);
$exit->link(["exit"]);

$x2 = $col_3->add(["Button","x2","inverted green"]);
$pus = $col_3->add(["Button","не смеши мои тапки","inverted orange button"]);
$cas = $col_3->add(["Button","mission pased","inverted blue"]);
$gg = $col_3->add(["Button","aaaaaaaaa","inverted red"]);
$jg = $col_3->add(["Button","x10000000","inverted yellow"]);
$jg = $col_3->add(["Button","Я пыль","inverted primary"]);
