<?php


require __DIR__.'/vendor/autoload.php';
use KubaEnd\Controller\PairFood;

session_start();
$worker = new PairFood();
$cos=implode("",$_POST);
echo $cos;