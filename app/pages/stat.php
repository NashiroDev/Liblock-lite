<?php
session_start();
include_once('/app/requests/network.php');

$_SESSION['feed'] = getStatById($_GET['id']);

$toShow = [];
$lastValue = '';
foreach ($_SESSION['feed'] as $elem) {
    if ($elem != $lastValue && !is_null($elem)) {
        $toShow[] = $elem;
    }
    $lastValue = $elem;
}

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
            <div class="micro-container">
                <?php for ($i = 3; $i < count($toShow); $i += 2) : ?>
                    <div class="display-text">
                        <h2><?= $toShow[$i] ?></h2>
                    </div>
                    <div class="display-img">
                        <img src="<?= $toShow[$i + 1] ?>" alt="">
                    </div>
                <?php endfor; ?>
            </div>
        </section>
    </main>
    <?php include_once("/app/templates/footer.php"); ?>
    <script src="../script/main.js"></script>
</body>

</html>