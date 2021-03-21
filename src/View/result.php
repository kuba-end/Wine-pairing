<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your pair</title>
    <link rel="stylesheet" href="csss/result_style.css">
</head>
<body>
    <div class="container">
        <header class="header">There is a list of <b>
                <?php
                    session_start();
                if(isset($_POST['chooseR'])){
                    echo 'red ';
                    echo $_POST['chooseR'];
                    $strain = $_POST['chooseR'];
                } else{
                    echo 'white ';
                    echo $_POST['chooseW'];
                    $strain = $_POST['chooseW'];
                };?></b> wine</header>
            <section class="result">
                <?php
                    require "../../app.php";
                ?>
            </section>
    </div>
</body>
</html>