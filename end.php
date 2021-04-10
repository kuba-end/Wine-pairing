<?php
// https://xyproblem.info/
require __DIR__.'/vendor/autoload.php';

use KubaEnd\Controller\PairFood;

session_start();
//$worker = new PairFood();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="src/View/csss/end_style.css">
</head>
<body>
<div class="container">
    <?php $trigger=new PairFood();
            echo $trigger->getTry();
            ?>
    <div class="column1">
        <p class="column1--title">Exelent pairing with your wine</p>
        <?php
        echo "<br><br>";
        $worker = new PairFood();
        $worker->goodEnough();
        ?>
    </div>
    <div class="column2">
        <p class="column2--title">Also good</p>
        <?php
        echo "<br><br>";

        $worker = new PairFood();
        $worker->goodEnough2();
        ?>
    </div>




</div>
</body>
</html>
