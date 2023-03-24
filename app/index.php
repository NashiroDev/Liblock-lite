<?php
session_start();
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
    <?php include_once("/app/templates/header.php"); ?>
    <main>
        <section>
            <div class="container">
                <div class="wallpaper">
                    <div class="card">
                        <div class="card-crossway">
                            <div class="mini-card">
                                <h2 class="mini-text" id="mt1"><a href="/pages/description.php?id=1">Bitcoin</a></h2>
                                <h2 class="mini-text" id="mt2"><a href="/pages/description.php?id=2">Ethereum</a></h2>
                                <h2 class="mini-text" id="mt3"><a href="/pages/description.php?id=3">Polygon</a></h2>
                                <h2 class="mini-text" id="mt4"><a href="/pages/description.php?id=4">Polkadot</a></h2>
                                <h2 class="mini-text" id="mt5"><a href="/pages/description.php?id=5">Cosmos</a></h2>
                            </div>
                        </div>
                        <div class="card-image">
                            <img class="wallpaper-image" src="./assets/images/blockchainRender.png" alt="">
                        </div>
                        <div class="card-text">
                            <h2 class="upper-text">La blockchain est une technologie innovante qui a révolutionné la façon dont les données sont stockées et échangées sur Internet. Cette technologie repose sur des principes tels que la décentralisation, la transparence et la sécurité.</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="separator"></div>
        <div class="separator-right"></div>
        <section>
            <div class="container">
                <div class="description">
                    <h1>Qu'est-ce que la Blockchain ?</h1>
                    <div class="content">
                        <h4>La blockchain est un registre numérique décentralisé qui permet de stocker des transactions en toute sécurité sans qu'elles ne soient altérées. Chaque transaction est enregistrée dans un bloc qui est ensuite ajouté à une chaîne de blocs, d'où le nom "blockchain". Cette technologie est extrêmement sécurisée car chaque transaction est validée par un réseau de nœuds qui travaillent ensemble pour s'assurer de l'exactitude des données.</h2>
                    </div>
                    <h1>Quelles avancées apporte t-elle ?</h1>
                    <div class="content">
                        <h4>La blockchain a apporté des innovations importantes en matière de sécurité des données. Elle permet de stocker des données de manière permanente et sécurisée, ce qui réduit les risques de piratage et de fraude. La transparence est également un élément clé de la blockchain, car chaque transaction est visible pour tous les membres du réseau.</h2>
                    </div>
                    <h1>D'autres ?</h1>
                    <div class="content">
                        <h4>La blockchain est également utilisée pour de nombreuses autres applications, telles que les contrats intelligents, les paiements internationaux, les identités numériques et la gestion de la chaîne d'approvisionnement. Cette technologie continue d'évoluer et de s'étendre à de nouveaux domaines, offrant ainsi de nouvelles opportunités pour l'avenir.</h2>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include_once("/app/templates/footer.php"); ?>
    <script src="/script/main.js"></script>
</body>

</html>