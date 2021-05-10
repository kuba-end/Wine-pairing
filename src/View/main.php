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
         if (isset($_SESSION['flash'])){
             echo $_SESSION['flash'][1];
             unset ($_SESSION['flash']);
         }
         ?>
    <div class="container">

        <header class="header">Wine Pairing</header>
        <div class="leftsidebar">Left sidebar<br>
            <ul>
                <li><a href="/wine/src/View/about.php">About App</a></li>
                <li><a href="/wine/src/View/wines.php">Wines</a></li>
                <li><a href="/wine/src/View/contact.php">Contact</a></li>
            </ul>
        </div>
        <div class="info"> Choose color of your wine to find matching food</div>
        <form class="input" action="type.php" method="post">
            <input type="submit" class="input__color" id="input_red" name="red" value="Red">
            <input type="submit" class="input__color" name="white" value="White">


        </form>
        <div class="rightsidebar">Google Ad</div>
        <div class="footer">
            Object oriented PHP code made by Kuba Rudziński. Design? I never met the guy who wrote it.
        </div>


    </div>
</body>
</html>