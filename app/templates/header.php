<nav class="navbar">
    <div class="navbar-content">
        <div class="caps-left">
                <a class="select-section" href="/pages/article.php?id=1">Articles</a>
        </div>
        <?php if (isset($_GET['id'])) : ?>
            <div class="caps-left">
                <a class="select-section" href="/pages/stat.php?id=<?= $_GET['id'] ?>">STATS</a>
            </div>
            <div class="caps-left">
                <a class="select-section" href="/pages/description.php?id=<?= $_GET['id'] ?>">DESC</a>
            </div>
        <?php endif; ?>
        <div class="icon">
            <a href="/"><img class="navbar-icon" src="../assets/images/peepoTrader.jpg" alt="None"></a>
        </div>
    </div>
</nav>