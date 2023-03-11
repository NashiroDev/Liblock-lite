<?php


?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style/main.css">
    <title>Liblock | Home</title>
</head>

<body>
    <?php include_once("./templates/header.php"); ?>
    <main>
        <section>
            <div class="container">
                <div class="wallpaper">
                    <div class="card">
                        <div class="card-crossway">
                            <div class="mini-card">
                                <h2 class="mini-text" id="mt1"><a href="/pages/description.php">Bitcoin</a></h2>
                                <h2 class="mini-text" id="mt2"><a href="#">Ethereum</a></h2>
                                <h2 class="mini-text" id="mt3"><a href="#">Polygon</a></h2>
                                <h2 class="mini-text" id="mt4"><a href="#">Polkadot</a></h2>
                                <h2 class="mini-text" id="mt5"><a href="#">Cosmos</a></h2>
                            </div>
                        </div>
                        <div class="card-image">
                            <img class="wallpaper-image" src="./assets/images/blockchainRender.png" alt="">
                        </div>
                        <div class="card-text">
                            <h2 class="upper-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, provident. Reprehenderit nihil, porro est cupiditate quibusdam, quisquam quasi obcaecati molestiae rerum aperiam natus! Amet nemo et, nesciunt libero atque eaque!</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include_once("./templates/footer.php"); ?>
    <script src="./script/main.js"></script>
</body>

</html>