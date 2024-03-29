<?php

session_start();

include_once('/app/requests/users.php');

if (isset($_POST['email']) && isset($_POST['password'])) {

    $user = checkEmailExistance($_POST['email']);

    $token = filter_input(INPUT_POST, 'token', FILTER_DEFAULT);
    
    if (!$token || $token !== $_SESSION['token']) {
        $errorMessage = "Une erreur est survenue, token invalide.";
    } elseif ($user && password_verify($_POST['password'], $user['password'])) {
        $_SESSION['CURRENT_USER'] = [
            'id' => $user['id'],
            'nom' => $user['nom'],
            'prenom' => $user['prenom'],
            'email' => $user['email'],
            'roles' => json_decode($user['roles']),
            'progression' => $user['progression']
        ];
        header("Location:/");
    } else {
        $_SESSION['message']['error'] = "Adresse email invalide ou mot de passe erroné.";
    }
} else {
    $_SESSION['token'] = bin2hex(random_bytes(35));
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/style/main.css">
    <title>Liblock | Login</title>
</head>

<body>
    <?php include_once("/app/templates/header.php"); ?>
    <main>
        <section>
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
            <div class="form-page">
                <div class="form-content">
                    <h2>Connexion</h2>
                    <form action="<?= $_SERVER['REQUEST_URI']; ?>" method="POST">
                        <div class="group">
                            <label for="email">Email : </label>
                            <input type="email" name="email" required>
                        </div>
                        <div class="group">
                            <label for="password">Mot de passe : </label>
                            <input type="password" name="password" required>
                        </div>
                        <input type="hidden" name='token' value="<?= $_SESSION['token']; ?>">
                        <button type="submit" class="submit-button">Se connecter</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <?php include_once("/app/templates/footer.php") ?>
</body>

</html>