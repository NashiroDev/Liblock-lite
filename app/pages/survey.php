<?php
session_start();
include_once('/app/requests/users.php');
include_once('/app/requests/network.php');

$data = getSurvey();

if (!isset($_SESSION['CURRENT_USER'])) {

    $_SESSION['message']['pop'] = 'Vous devez vous connecter pour pouvoir accéder au Quizz.';
    header("Location:/users/login.php");
}

$start = getProgressById($_SESSION['CURRENT_USER']['id'])[0];
$max = getMaxSurvey()[0];
$current = (1 - (($max - $start) / $max)) * 100;

if (!empty($_POST['reponse'])) {

    if ($_POST['reponse'] == $data[$start]['validReply']) {

        $_SESSION['message']['success'] = "Bonne réponse !";

        updateProgressById($_SESSION['CURRENT_USER']['id'], $start + 1);
    } else {
        $_SESSION['message']['error'] = "Réponse incorrecte, rééssayez !";
    }

    header("Location:" . $_SERVER['REQUEST_URI']);
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style/main.css">
    <title>Liblock | Questions</title>
</head>

<body>
    <?php include_once('/app/templates/header.php'); ?>
    <main>
        <section>
            <div class="container">
                <div class="title-alone">
                    <h1>Testez vos connaissances !</h1>
                </div>
            </div>
            <div class="micro-container">
                <div class="progress">
                    <?php for ($i = 0; $i < $start; $i++) : ?>
                        <div class="bar" style="width: <?= $current / $start; ?>%">
                            <p></p>
                        </div>
                    <?php endfor; ?>
                </div>
                <div class="progress-percent">
                    <p><?= $current ?>% completed</p>
                </div>
            </div>
            <div class="container">
                <?php if (isset($_SESSION['message']['error'])) : ?>
                    <div class="notify alert-danger"><?= $_SESSION['message']['error']; ?></div>
                    <?php unset($_SESSION['message']['error']); ?>
                <?php elseif (isset($_SESSION['message']['success'])) : ?>
                    <div class="notify alert-success"><?= $_SESSION['message']['success']; ?></div>
                    <?php unset($_SESSION['message']['success']); ?>
                <?php elseif (isset($_SESSION['message']['pop'])) : ?>
                    <div class="notify alert-pop"><?= $_SESSION['message']['pop']; ?></div>
                    <?php unset($_SESSION['message']['pop']); ?>
                <?php endif; ?>
            </div>
        </section>
        <?php if ($start < $max) : ?>
            <section>
                <div class="micro-container">
                    <div class="form-question">
                        <div class="form-content">
                            <div class="question">
                                <h3><?= $data[$start]['question'] ?></h3>
                            </div>
                            <form class="survey-form" action="<?= $_SERVER['REQUEST_URI']; ?>" method="POST">
                                <input type="radio" name="reponse" value=1 id="rep1">
                                <label for="rep1"><?= $data[$start]['reply1'] ?></label><br>
                                <input type="radio" name="reponse" value=2 id="rep2">
                                <label for="rep2"><?= $data[$start]['reply2'] ?></label><br>
                                <input type="radio" name="reponse" value=3 id="rep3">
                                <label for="rep3"><?= $data[$start]['reply3'] ?></label><br>
                                <input type="radio" name="reponse" value=4 id="rep4">
                                <label for="rep4"><?= $data[$start]['reply4'] ?></label><br>
                                <button class="button survey-button" type="submit">Valider la réponse</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        <?php else : ?>
            <section>
                <div class="finished-alert">
                    <h2>Vous avez terminer toutes les questions, félicitations !</h2>
                </div>
            </section>
        <?php endif; ?>
    </main>
    <?php include_once("/app/templates/footer.php"); ?>
</body>

</html>