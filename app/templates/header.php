<nav class="navbar">
    <div class="navbar-content">
        <div class="caps-left">
        <?php if($_SERVER['REQUEST_URI'] == "/pages/articleHub.php"): ?>
            <a class="select-section" href="/">Home</a>
        <?php else: ?>
            <a class="select-section" href="/pages/articleHub.php">Articles</a>
        <?php endif; ?>
        </div>
        <?php if (isset($_GET['id'])) : ?>
            <div class="caps-left">
                <a class="<?= $_SERVER['REQUEST_URI'] == "/pages/stat.php?id=".$_GET['id'] ? "selected-section" : "select-section" ?>" href="/pages/stat.php?id=<?= $_GET['id'] ?>">Statistiques</a>
            </div>
            <div class="caps-left">
                <a class="<?= $_SERVER['REQUEST_URI'] == "/pages/description.php?id=".$_GET['id'] ? "selected-section" : "select-section" ?>" href="/pages/description.php?id=<?= $_GET['id'] ?>">Descriptions</a>
            </div>
        <?php endif; ?>
        <div class="icon">
            <a href="/"><img class="navbar-icon" src="../assets/images/peepoTrader.jpg" alt="None"></a>
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
                <div class="caps-right">
                    <a class="selected-section" href="/users/logout.php">Se déconnecter</a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</nav>