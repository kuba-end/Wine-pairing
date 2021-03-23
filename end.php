<?php


require __DIR__.'/vendor/autoload.php';
use KubaEnd\Controller\PairFood;

session_start();
$worker = new PairFood();
