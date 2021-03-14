<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your pair</title>
    <link rel="stylesheet" href="csss/result_style.css">
</head>
<body>
    <div class="container">
        <header class="header">There is list of dishes matched to <b><?php echo ($_POST['search']);?></b></header>
            <section class="result">
                <?php
                    require "../../app.php";
                ?>
            </section>
    </div>
</body>
</html>