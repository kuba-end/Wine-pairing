<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PairWine</title>
    <link rel="stylesheet" href="csss/main_style_red.css">
</head>
<body>
        <?php
         session_start();
        ?>
    <div class="container">

        <header class="header">Wine Pairing</header>
        <form class="input" action="type.php" method="post">
            <input type="submit" class="input__color" name="red" value="Red">
            <input type="submit" class="input__color" name="white" value="White">

        </form>


    </div>
</body>
</html>