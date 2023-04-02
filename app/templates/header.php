<nav class="navbar">
    <div class="navbar-content">
        <?php if (isset($_GET['id'])) : ?>
            <div class="caps-left">
                <a class="<?= $_SERVER['REQUEST_URI'] == "/pages/stat.php?id=".$_GET['id'] ? "selected-section" : "select-section" ?>" href="/pages/stat.php?id=<?= $_GET['id'] ?>">Statistiques</a>
            </div>
            <div class="caps-left">
                <a class="<?= $_SERVER['REQUEST_URI'] == "/pages/description.php?id=".$_GET['id'] ? "selected-section" : "select-section" ?>" href="/pages/description.php?id=<?= $_GET['id'] ?>">Descriptions</a>
            </div>
            <div class="caps-left">
                <a class="<?= $_SERVER['REQUEST_URI'] == "/pages/survey.php" ? "selected-section" : "select-section" ?>" href="/pages/survey.php">Questionnaire</a>
            </div>
            <div class="caps-left">
                <a class="<?= $_SERVER['REQUEST_URI'] == "/pages/articleHub.php" ? "selected-section" : "select-section" ?>" href="/pages/articleHub.php">Articles</a>
            </div>
        <?php elseif ($_SERVER['REQUEST_URI'] == ('/pages/survey.php' || '/pages/articleHub.php')): ?>
            <div class="caps-left">
                <a class="<?= $_SERVER['REQUEST_URI'] == "/pages/survey.php" ? "selected-section" : "select-section" ?>" href="/pages/survey.php">Questionnaire</a>
            </div>
            <div class="caps-left">
                <a class="<?= $_SERVER['REQUEST_URI'] == "/pages/articleHub.php" ? "selected-section" : "select-section" ?>" href="/pages/articleHub.php">Articles</a>
            </div>
        <?php endif; ?>
        <div class="icon">
            <a href="/"><img class="navbar-icon" src="/assets/images/peepoTrader.jpg" alt="None"></a>
        </div>
        <div class="user-gate">
            <?php if (!isset($_SESSION['CURRENT_USER'])) : ?>
                <div class="caps-right">
                    <a class="select-section" href="/users/login.php">Se connecter</a>
                </div>
                <div class="caps-right">
                    <a class="selected-section" href="/users/register.php">S'inscrire</a>
                </div>
            <?php else: ?>
                <?php if (!in_array("ROOT_USER", $_SESSION['CURRENT_USER']['roles'])) : ?>
                    <div class="caps-right">
                        <a class="selected-section" href="/users/logout.php">Se déconnecter</a>
                    </div>
                <?php else : ?>
                    <div class="caps-right admin">
                        <a class="select-section" href="/admin/users">Admin</a>
                    </div>
                    <div class="caps-right">
                        <a class="selected-section" href="/users/logout.php">Se déconnecter</a>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
</nav>