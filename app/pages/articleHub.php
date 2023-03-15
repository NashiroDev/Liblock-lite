<?php
session_start();
include_once('/app/requests/network.php');

$_SESSION['feed'] = getAllArticlesName();

if (!empty($_POST['textTitle'])) {
    $_SESSION['textTitle'] = filter_input(INPUT_POST, 'textTitle', FILTER_SANITIZE_SPECIAL_CHARS);

    header("Location:/pages/article.php");
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style/main.css">
    <title>Liblock | Article hub</title>
</head>

<body>
    <?php include_once('/app/templates/header.php'); ?>
    <main>
        <section>
            <div class="container">
                <div class="title">
                    <h1>Liste des articles disponibles</h1>
                </div>
            </div>
            <div class="container">
                <?php foreach ($_SESSION['feed'] as $article) : ?>
                    <div class="card">
                        <form action="" method="POST">
                            <div class="mini-text">
                                <input type="hidden" name="textTitle" value="<?= $article['textTitle'] ?>">
                                <button type="submit">
                                    <h3><?= $article['textTitle'] ?></h3>
                                </button>
                            </div>
                        </form>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main>
    <?php include_once("/app/templates/footer.php"); ?>
    <script src="../script/main.js"></script>
</body>

</html>