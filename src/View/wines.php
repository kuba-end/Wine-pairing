<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PairWine</title>
    <link rel="stylesheet" href="csss/about_style.css">
</head>
<body>
<div class="container">

    <header class="header">Wine Pairing</header>
    <div class="leftsidebar">Left sidebar<br>
        <ul>
            <li><a href="/wine/src/View/about.php">About</a></li>
            <?php
            if ($_SERVER['PHP_SELF']=='wines.php') ?>
            <li><a href="/wine/src/View/main.php">Back to main menu</a></li>
            <li><a href="/wine/src/View/contact.php">Contact</a></li>
        </ul>
    </div>
        <div class="subheader"><h4>List of wines in our database</h4></div>
        <div class="col1">
                <?php
            require "../../vendor/autoload.php";
            require "../Model/DbSelect/GetTable.php";
            $triger1= new \KubaEnd\Model\DbSelect\GetTable();
            $triger1->getWines('red');
            ?>
            </div>
        <div class="col2">
            <?php
            $triger2= new \KubaEnd\Model\DbSelect\GetTable();
            $triger2->getWines('white');
            ?></div>


    <div class="rightsidebar">Google Ad</div>

    <div class="footer">
        Object oriented PHP code made by Kuba Rudziński. Design? I never met the guy who wrote it.
    </div>


</div>
</body>