<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PairWine</title>
    <link rel="stylesheet" href="csss/main_style.css">
</head>
<body>
<?php
session_start();
?>
<div class="container">

    <header class="header">Wine Pairing</header>
    <div class="leftsidebar">Left sidebar<br>
        <ul>
            <li><a href="/about">About App</a></li>
            <li><a href="/wines">Wines</a></li>
            <li>
                <?php
                    if ($_SERVER['PHP_SELF']=='contact.php') ?>
                <a href="/wine/src/View/main.php">Back to main menu</a>
            </li>
        </ul>
    </div>
    <form>
        Imię<br>
        <input type="text">
        <input type="submit">
    </form>
    <div class="rightsidebar">Google Ad</div>
    <div class="footer">
        Object oriented PHP code made by Kuba Rudziński. Design? I never met the guy who wrote it.
    </div>


</div>
</body>
</html>
