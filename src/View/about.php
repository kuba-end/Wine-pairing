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
                <?php
                if ($_SERVER['PHP_SELF']=='about.php') ?>
                <li><a href="/wine/src/View/main.php">Back to main menu</a></li>
                <li><a href="/wines">Wines</a></li>
                <li><a href="/wine/src/View/contact.php">Contact</a></li>
            </ul>
        </div>
        <div class="about">
            <?php
            require "about.txt";
            ?>
        </div>
        <div class="rightsidebar">Google Ad</div>

        <div class="footer">
            Object oriented PHP code made by Kuba Rudziński. Design? I never met the guy who wrote it.
        </div>


    </div>
</body>