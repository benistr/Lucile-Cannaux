<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lucile Cannaux : Avocat au barreau de Nice</title>

    <link rel="icon" href="../assets/favicon-32x32.png" />
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/cards.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,600,600i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cormorant+SC:300,400,500,600,700&display=swap" rel="stylesheet">
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <header data-aos="fade-right" data-aos-duration="1500">
            <a href="/"><h1 class="header-title">Lucile CANNAUX</h1></a>
            <a href="/"><h1 class="subtitle">Avocat au barreau de Nice</h1></a>
            <div>
                <nav class="menu">
                    <ul>
                        <li class="menu__item"><a href="../#quisuisje">Qui suis-je ?</a></li>
                        <li class="menu__item"><a href="../#mesdomaines">Domaines d'expertise</a></li>
                        <li class="menu__item"><a href="../#maformation">Formation</a></li>
                        <li class="menu__item"><a href="../#meshonoraires">Honoraires</a></li>
                        <li class="menu__item"><a href="../#contactezmoi">Contactez-moi</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <main>
            <section class="animation-background" data-aos="zoom-in" data-aos-duration="1500">
                <p class="animation-type-mail" data-aos="fade-up" data-aos-duration="1500"><span class="typed-text-mail">
                </span><span class="cursor">&nbsp;</span></p>
                </p>
            </section>
    <?php
    $retour = mail('benjamin.str@gmail.com', 'Envoi depuis la page Contact', $_POST['message'], 'From:'. $_POST['email']);
    ?>

        <footer class="footer">
            <a href="https://consultation.avocat.fr/avocat-nice/lucile-cannaux-40045.html" target="_blank"><img class="ordre-avocat" src="../assets/ordre-avocat.jpg" alt=""></a>
            <a href="https://www.justifit.fr/avocats/avocat-nice-06000-lucile-cannaux-6655" target="_blank"><img class="ordre-avocat" src="../assets/justifit.jpeg" alt=""></a>
            <p class="paragraphe-footer">&copy; Site internet créé par <a class="lien-footer-nom" href="https://www.linkedin.com/in/benjaminstraub-web/">Benjamin Straub</a> - Tous droits réservés</p>
            <a class="lien-footer">Mention légales</a>
            <br>
            <a class="lien-footer" href="#top-page">Revenir en haut de la page</a>
        </footer>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="../js/typing-mail.js"></script>
    <script src="../js/cards.js"></script>
    <script src="../js/AOS.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>AOS.init();</script>
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
</body>
</html>
