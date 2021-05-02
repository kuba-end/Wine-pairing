<?php

require __DIR__.'/vendor/autoload.php';

use KubaEnd\Controller\PairFood;

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <?php
    $array=['Pinot Noir',
        'Sangiovese',
        'Tempranillo',
        'Cabernet Sauvignon',
        'Syrah',
        'Merlot',
        'Malbec',
        'Garnacha',
        'Zinfandel',
        'Port'];
    $trigger=new PairFood();
    $check=$trigger->getTry();
    if (in_array($check,$array)){
        ?>
        <link rel="stylesheet" href="src/View/csss/end_style.css">
        <?php
    }
    else {?>
        <link rel="stylesheet" href="src/View/csss/end_style_white.css">
    <?php }
    ?>
</head>
<body>
<div class="container">
    <div class="view-balance">Excellent!</div>
    <div class="choosen-wine">Your choice:
    <?php
            echo $check;
            ?>
    </div>
    <div class="column1">
        <div class="column1--title">Exelent pairing with your wine</div>
        <?php
        $worker = new PairFood();
        $worker->implodeStrain();
        ?>
    </div>
    <div class="column2">
        <div class="column2--title">Also good</div>
        <?php
        $worker = new PairFood();
        $worker->implodeStrain2();
        ?>
    </div>




</div>
</body>
</html>
