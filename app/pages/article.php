<?php
session_start();
include_once('/app/requests/network.php');

$_SESSION['feed'] = getArticleByName($_SESSION['textTitle']);

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
    <title>Liblock | Article</title>
</head>

<body>
    <?php include_once('/app/templates/header.php'); ?>
    <main>
        <section>
            <div class="container">
                <div class="title">
                    <h1><?= $toShow[1]; ?></h1>
                </div>
            </div>
        </section>
        <section>
            <div class="micro-container">
                <?php for ($i = 2; $i < count($toShow); $i++) : ?>
                    <?php if ("/" === $toShow[$i][0]) : ?>
                        <div class="display-img">
                            <img src="<?= $toShow[$i] ?>" alt="">
                        </div>
                    <?php else : ?>
                        <div class="display-text">
                            <h2><?= $toShow[$i] ?></h2>
                        </div>
                    <?php endif; ?>
                <?php endfor; ?>
            </div>
        </section>
    </main>
    <?php include_once("/app/templates/footer.php"); ?>
</body>

</html>