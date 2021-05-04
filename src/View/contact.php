<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PairWine</title>
    <link rel="stylesheet" href="csss/contact_style.css">
</head>
<body>
<?php
//require
//session_start();
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
    <form class="contactForm" action="../Controller/Mailer/ContactValidator.php" method="post">
        <label for="name">Your name</label>
        <input type="text" name="name"/>
        <label>Your e-mail</label>
        <input type="email" name="email" placeholder="example@site.pl"/>
        <label>Message topic</label>
        <input type="text" name="topic"/>
        <label for="message">Message</label>
        <textarea id="message" name="message" rows="6" cols="33">
        </textarea>
        <input type="submit">
    </form>
    <div class="rightsidebar">Google Ad</div>
    <div class="footer">
        Object oriented PHP code made by Kuba Rudziński. Design? I never met the guy who wrote it.
    </div>


</div>
</body>
</html>
