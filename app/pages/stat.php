<?php
session_start();
include_once('/app/requests/network.php');

$_SESSION['feed'] = getStatById($_GET['id']);

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style/main.css">
    <title>Liblock | Stats</title>
</head>

<body>
    <?php include_once('/app/templates/header.php'); ?>
    <main>
        <section>
            <div class="container">
                <div class="title">
                    <img src="<?= $_SESSION['feed']['imageTitle']; ?>" alt="">
                    <h1><?= $_SESSION['feed']['textTitle']; ?></h1>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="top-info">
                    <img src="<?= $_SESSION['feed']['imageInfo'] ?>" alt="">
                </div>
            </div>
        </section>
    </main>
    <?php include_once("/app/templates/footer.php"); ?>
    <script src="../script/main.js"></script>
</body>

</html>