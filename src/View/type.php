<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <?php
    session_start();
    if (isset($_POST['red'])){
    ?>
    <link rel="stylesheet" href="csss/type_style_red.css">
    <?php
    }
    else {?>
        <link rel = "stylesheet" href = "csss/type_style_white.css" >
    <?php }
    ?>
</head>
<body>
<div class="container">

<?php
//session_start();
if (isset($_POST['red'])){
    $_SESSION['app'][]=$_POST['red'];
    ?>
    <header class="header">Choose type of red wine</header>
    <form class="input" action="result.php" method="post">
            <button type="submit" class="input__submit" id="input_dry" name="chooseR" value="dry">Dry</button><br>
            <button type="submit" class="input__submit" id="input_mediumdry" name="chooseR" value="medium dry">Medium Dry</button><br>
            <button type="submit" class="input__submit" id="input_mediumsweet" name="chooseR" value="medium sweet">Medium Sweet</button><br>
            <button type="submit" class="input__submit" id="input_sweet" name="chooseR" value="sweet">Sweet</button><br>
        </form>
<?php } else{
    $_SESSION['app'][]=$_POST['white'];
    ?>
    <header class="header">Choose type of white wine</header>
    <form class="input" action="result.php" method="post">
        <button type="submit" class="input__submit" id="input_dry" name="chooseW" value="dry">Dry</button><br>
        <button type="submit" class="input__submit" id="input_mediumdry" name="chooseW" value="medium dry">Medium Dry</button><br>
        <button type="submit" class="input__submit" id="input_mediumsweet" name="chooseW" value="medium sweet">Medium Sweet</button><br>
        <button type="submit" class="input__submit" id="input_sweet" name="chooseW" value="sweet">Sweet</button><br>
    </form>
    <?php } ?>


</div>
</body>
</html>