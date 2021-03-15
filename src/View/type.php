<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="csss/main_style.css">
</head>
<body>
<div class="container">

<?php
if (isset($_POST['red'])){?>
    <header class="header">Choose type of red wine</header>
    <form class="input" action="result.php" method="post">
            <button type="submit" class="input__submit" name="chooseR" value="dry">Dry</button>
            <button type="submit" class="input__submit" name="chooseR" value="medium dry">Medium Dry</button>
            <button type="submit" class="input__submit" name="chooseR" value="medium sweet">Medium Sweet</button>
            <button type="submit" class="input__submit" name="chooseR" value="sweet">Sweet</button>
        </form>
<?php } else{?>
    <header class="header">Choose type of white wine</header>
    <form class="input" action="result.php" method="post">
        <button type="submit" class="input__submit" name="chooseW" value="dry">Dry</button>
        <button type="submit" class="input__submit" name="chooseW" value="medium dry">Medium Dry</button>
        <button type="submit" class="input__submit" name="chooseW" value="medium sweet">Medium Sweet</button>
        <button type="submit" class="input__submit" name="chooseW" value="sweet">Sweet</button>
    </form>
    <?php } ?>


</div>
</body>
</html>