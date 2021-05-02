<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your pair</title>
    <?php
    session_start();
    if (isset($_POST['chooseR'])){
    ?>
        <link rel="stylesheet" href="csss/type_style_red.css">
        <?php
    }
        else {?>
            <link rel = "stylesheet" href = "csss/result_style.css" >
        <?php }
        ?>

</head>
<body>
    <div class="container">
        <header class="header">There is a list of <b>
                <?php
                if(isset($_POST['chooseR'])){
                    echo 'red ';
                    echo $_POST['chooseR'];
                } else{
                    echo 'white ';
                    echo $_POST['chooseW'];
                };?></b> wines
        </header>
            <section class="result">
                <?php
                    require "../../app.php";
                ?>
            </section>
    </div>
</body>
</html>