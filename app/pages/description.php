<?php
session_start();
include_once('/app/requests/network.php');

$_SESSION['feed'] = getDescById($_GET['id']);
$url = "/pages/description.php?id=";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style/main.css">
    <title>Liblock | Description</title>
</head>

<body>
    <?php include_once('/app/templates/header.php'); ?>
    <main>
        <section>
            <div class="container">
                <div class="top">
                    <div class="temp">
                        <a href="<?= $url.($_GET['id']-1) ?>">T</a> 
                    </div>
                    <div class="title">
                        <img src="<?= $_SESSION['feed']['imageTitle']; ?>" alt="">
                        <h1><?= $_SESSION['feed']['textTitle']; ?></h1>
                    </div>
                    <div class="temp">
                        <a href="<?= $url.($_GET['id']+1) ?>">T</a>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="micro-container">
                <div class="intro">
                    <h2>Introduction</h2>
                    <h2><?= $_SESSION['feed']['textIntro']; ?></h4>
                </div>
                <div class="content">
                    <h2><?= $_SESSION['feed']['textFirst']; ?></h4>
                </div>
                <div class="content">
                    <h2><?= $_SESSION['feed']['textSecond']; ?></h4>
                </div>
                <div class="content">
                    <h2><?= $_SESSION['feed']['textThird']; ?></h4>
                </div>
            </div>
        </section>
    </main>
    <?php include_once("/app/templates/footer.php"); ?>
    <script src="../script/ma in.js"></script>
</body>

</html>