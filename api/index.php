<?php
include_once 'Traitements.php';

$groupe = "Dev 104";
$plt = "Vercel";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lina Karkri | Portfolio Développement Digital</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>

        /* =========================================================
           PALETTE
        ========================================================= */

        :root {
            --cream: #F6F2EC;
            --card: #E8DED2;
            --rose: #C98F8A;
            --rose-light: #F2DADA;
            --brown: #8B6F61;
            --dark: #1E1C19;
            --gray: #746D67;
            --white: #FFFDF9;
            --border: #D8C8BA;
        }


        /* =========================================================
           RESET
        ========================================================= */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background: var(--cream);
            color: var(--dark);
            line-height: 1.6;
        }

        a {
            text-decoration: none;
        }


        /* =========================================================
           HERO
        ========================================================= */

        .hero {
            min-height: 650px;
            padding: 70px 7%;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
            background:
                radial-gradient(circle at 10% 20%, rgba(201,143,138,.12), transparent 30%),
                var(--cream);
        }

        .hero::before {
            content: "";
            position: absolute;
            width: 450px;
            height: 450px;
            background: var(--rose-light);
            border-radius: 50%;
            right: -150px;
            top: -130px;
            opacity: .65;
        }

        .hero-container {
            width: 100%;
            max-width: 1250px;
            margin: auto;
            display: grid;
            grid-template-columns: 1.1fr .9fr;
            gap: 60px;
            align-items: center;
            position: relative;
            z-index: 2;
        }


        /* LEFT HERO */

        .hero-text {
            max-width: 650px;
        }

        .small-title {
            color: var(--rose);
            text-transform: uppercase;
            letter-spacing: 4px;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .hero h1 {
            font-family: 'Playfair Display', serif;
            font-size: clamp(48px, 6vw, 82px);
            line-height: 1.05;
            color: var(--dark);
            margin-bottom: 20px;
        }

        .hero h1 span {
            color: var(--rose);
        }

        .hero-description {
            color: var(--gray);
            font-size: 17px;
            max-width: 570px;
            margin-bottom: 30px;
        }

        .hero-buttons {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }


        /* =========================================================
           PHOTO
        ========================================================= */

        .hero-photo {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .photo-decoration {
            position: absolute;
            width: 430px;
            height: 500px;
            border-radius: 220px 220px 20px 20px;
            background: var(--rose-light);
            transform: rotate(6deg);
        }

        .photo-frame {
            width: 390px;
            height: 500px;
            border-radius: 210px 210px 25px 25px;
            overflow: hidden;
            position: relative;
            z-index: 2;
            border: 8px solid rgba(255,255,255,.7);
            box-shadow: 0 25px 60px rgba(72,53,43,.15);
            background: var(--card);
        }

        .photo-frame img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center top;
            display: block;
        }


        /* =========================================================
           BUTTONS
        ========================================================= */

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 9px;

            padding: 12px 22px;

            border-radius: 30px;

            background: var(--rose);
            color: white;

            font-size: 13px;
            font-weight: 600;

            border: 1px solid var(--rose);

            transition: .3s ease;
        }

        .btn:hover {
            transform: translateY(-3px);
            background: #B87E79;
            box-shadow: 0 10px 25px rgba(201,143,138,.25);
        }

        .btn-outline {
            background: transparent;
            color: var(--brown);
            border: 1px solid var(--brown);
        }

        .btn-outline:hover {
            background: var(--brown);
            color: white;
        }

        .btn-small {
            width: 100%;
        }


        /* =========================================================
           MAIN CONTAINER
        ========================================================= */

        .container {
            width: min(1200px, 90%);
            margin: auto;
            padding-bottom: 80px;
        }


        /* =========================================================
           INTRO CARD
        ========================================================= */

        .intro-card {
            background: var(--white);
            border-radius: 25px;
            padding: 45px;
            margin-top: -30px;
            position: relative;
            z-index: 5;
            box-shadow: 0 15px 45px rgba(54,42,34,.08);
            border: 1px solid rgba(139,111,97,.08);
        }

        .intro-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            align-items: center;
        }

        .section-label {
            color: var(--rose);
            text-transform: uppercase;
            letter-spacing: 3px;
            font-size: 12px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .intro-card h2 {
            font-family: 'Playfair Display', serif;
            font-size: 34px;
            margin-bottom: 10px;
        }

        .intro-card p {
            color: var(--gray);
        }


        /* =========================================================
           MODULES
        ========================================================= */

        .modules {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 14px;
        }

        .module {
            background: var(--cream);
            border-radius: 18px;
            padding: 22px 15px;
            text-align: center;
            transition: .3s ease;
            border: 1px solid transparent;
        }

        .module:hover {
            transform: translateY(-5px);
            border-color: var(--rose);
            background: #fffaf5;
        }

        .module i {
            font-size: 24px;
            color: var(--rose);
            margin-bottom: 10px;
        }

        .module h3 {
            font-size: 13px;
            font-weight: 600;
        }


        /* =========================================================
           SECTION TITLE
        ========================================================= */

        .section-title {
            margin: 70px 0 30px;
        }

        .section-title span {
            color: var(--rose);
            text-transform: uppercase;
            letter-spacing: 3px;
            font-size: 12px;
            font-weight: 700;
        }

        .section-title h2 {
            font-family: 'Playfair Display', serif;
            font-size: 40px;
            margin-top: 5px;
        }


        /* =========================================================
           CARDS
        ========================================================= */

        .grid-layout {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 22px;
        }

        .card {
            background: var(--white);
            border: 1px solid rgba(139,111,97,.10);
            border-radius: 22px;
            padding: 28px;
            box-shadow: 0 10px 30px rgba(54,42,34,.06);
            transition: .35s ease;
            position: relative;
            overflow: hidden;
        }

        .card::before {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            width: 4px;
            height: 100%;
            background: var(--rose);
            transform: scaleY(0);
            transform-origin: bottom;
            transition: .3s ease;
        }

        .card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 45px rgba(54,42,34,.10);
        }

        .card:hover::before {
            transform: scaleY(1);
        }

        .card-full {
            grid-column: 1 / -1;
        }

        .card h2 {
            font-family: 'Playfair Display', serif;
            font-size: 23px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .card h2 i {
            width: 43px;
            height: 43px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--rose-light);
            color: var(--rose);
            font-size: 17px;
        }

        .card-description {
            color: var(--gray);
            font-size: 14px;
            margin-bottom: 18px;
        }


        /* =========================================================
           FORMS
        ========================================================= */

        .form {
            width: 100%;
        }

        .form-group {
            margin-bottom: 16px;
        }

        .form-group label {
            display: block;
            font-size: 12px;
            color: var(--gray);
            margin-bottom: 7px;
            font-weight: 600;
        }

        .input {
            width: 100%;
            padding: 13px 16px;
            border-radius: 12px;
            border: 1px solid var(--border);
            background: var(--cream);
            color: var(--dark);
            font-family: inherit;
            outline: none;
            transition: .3s ease;
        }

        .input:focus {
            border-color: var(--rose);
            background: white;
            box-shadow: 0 0 0 4px rgba(201,143,138,.10);
        }

        .form-actions {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            margin-top: 18px;
        }

        .form-actions .btn {
            flex: 1;
        }


        /* =========================================================
           LINK NUMBERS
        ========================================================= */

        .links {
            display: flex;
            gap: 9px;
            flex-wrap: wrap;
        }

        .link {
            width: 43px;
            height: 43px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            background: var(--cream);
            border: 1px solid var(--border);
            color: var(--brown);
            font-weight: 600;
            transition: .3s ease;
        }

        .link:hover {
            background: var(--rose);
            color: white;
            border-color: var(--rose);
            transform: translateY(-3px);
        }


        /* =========================================================
           ATELIERS
        ========================================================= */

        .atelier-number {
            color: var(--rose);
            font-size: 12px;
            letter-spacing: 2px;
            text-transform: uppercase;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .atelier-buttons {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .atelier-buttons .btn {
            width: 100%;
        }


        /* =========================================================
           PHP OUTPUT
        ========================================================= */

        .php-output {
            margin-top: 20px;
            background: var(--dark);
            color: #f4e8df;
            padding: 18px;
            border-radius: 14px;
            border-left: 4px solid var(--rose);
            overflow-x: auto;
            font-family: monospace;
        }


        /* =========================================================
           SKILLS
        ========================================================= */

        .skills {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .skill {
            padding: 9px 16px;
            border-radius: 25px;
            background: var(--cream);
            color: var(--brown);
            font-size: 13px;
            border: 1px solid var(--border);
        }

        .skill.active {
            background: var(--rose);
            color: white;
            border-color: var(--rose);
        }


        /* =========================================================
           FOOTER
        ========================================================= */

        .footer {
            background: var(--dark);
            color: white;
            text-align: center;
            padding: 45px 20px;
            margin-top: 60px;
        }

        .footer-name {
            font-family: 'Playfair Display', serif;
            font-size: 25px;
            color: var(--rose-light);
            margin-bottom: 5px;
        }

        .footer p {
            color: #c8bbb2;
            font-size: 13px;
        }


        /* =========================================================
           RESPONSIVE
        ========================================================= */

        @media (max-width: 950px) {

            .hero-container {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .hero-text {
                margin: auto;
            }

            .hero-buttons {
                justify-content: center;
            }

            .hero-photo {
                margin-top: 20px;
            }

            .intro-grid {
                grid-template-columns: 1fr;
            }

            .modules {
                grid-template-columns: repeat(2, 1fr);
            }

            .grid-layout {
                grid-template-columns: 1fr;
            }

            .card-full {
                grid-column: auto;
            }
        }


        @media (max-width: 600px) {

            .hero {
                padding: 50px 5%;
            }

            .hero h1 {
                font-size: 48px;
            }

            .photo-frame {
                width: 300px;
                height: 410px;
            }

            .photo-decoration {
                width: 330px;
                height: 420px;
            }

            .intro-card {
                padding: 28px;
            }

            .modules {
                grid-template-columns: 1fr 1fr;
            }

            .section-title h2 {
                font-size: 32px;
            }
        }

    </style>
</head>


<body>


<!-- =========================================================
     HERO
========================================================= -->

<section class="hero">

    <div class="hero-container">

        <div class="hero-text">

            <div class="small-title">
                Portfolio • Développement Digital
            </div>

            <h1>
                Bonjour,<br>
                je suis <span>Lina</span>
            </h1>

            <p class="hero-description">
                Étudiante en développement digital, passionnée par
                la création web, le design et les technologies numériques.
            </p>

            <div class="hero-buttons">

                <a href="#ateliers" class="btn">
                    <i class="fas fa-folder-open"></i>
                    Découvrir mes projets
                </a>

                <a href="#contact" class="btn btn-outline">
                    <i class="fas fa-envelope"></i>
                    Contactez-moi
                </a>

            </div>

        </div>


        <!-- PHOTO -->

        <div class="hero-photo">

            <div class="photo-decoration"></div>

            <div class="photo-frame">

                <!-- PHOTO DANS PUBLIC -->
                <img src="/linaPhoto.jpg"
                     alt="Photo de Lina Karkri">

            </div>

        </div>

    </div>

</section>



<!-- =========================================================
     MAIN
========================================================= -->

<div class="container">


    <!-- INTRO -->

    <div class="intro-card">

        <div class="intro-grid">

            <div>

                <div class="section-label">
                    Mon portfolio
                </div>

                <h2>
                    Développement Digital
                </h2>

                <p>
                    Bienvenue dans mon portfolio personnel.
                    Vous trouverez ici mes cours, ateliers,
                    exercices PHP, projets web et travaux réalisés
                    pendant ma formation.
                </p>

            </div>


            <!-- MODULES -->

            <div class="modules">

                <div class="module">
                    <i class="fas fa-code"></i>
                    <h3>Développement Web</h3>
                </div>

                <div class="module">
                    <i class="fas fa-palette"></i>
                    <h3>Design UI/UX</h3>
                </div>

                <div class="module">
                    <i class="fas fa-chart-line"></i>
                    <h3>Gestion de projet</h3>
                </div>

                <div class="module">
                    <i class="fas fa-users"></i>
                    <h3>Communication</h3>
                </div>

            </div>

        </div>

    </div>



    <!-- =====================================================
         PRESENTATION
    ====================================================== -->

    <div class="section-title">

        <span>Présentation</span>

        <h2>
            Mon parcours
        </h2>

    </div>


    <div class="grid-layout">


        <!-- SITE -->

        <div class="card">

            <h2>
                <i class="fas fa-desktop"></i>
                Premier site
            </h2>

            <p class="card-description">
                Premier site du groupe
                <strong><?php echo $groupe; ?></strong>
                déployé sur
                <strong><?php echo $plt; ?></strong>.
            </p>

        </div>


        <!-- COURS PHP -->

        <div class="card">

            <h2>
                <i class="fas fa-book"></i>
                Cours PHP
            </h2>

            <p class="card-description">
                Support de cours PHP utilisé pendant la formation.
            </p>

            <a href="/php.pptx" class="btn">
                <i class="fas fa-download"></i>
                Télécharger le cours
            </a>

        </div>



        <!-- =================================================
             COMMUNICATION
        ================================================== -->

        <div class="card">

            <h2>
                <i class="fas fa-paper-plane"></i>
                Communication
            </h2>

            <form method="POST"
                  action="login.php"
                  class="form">

                <div class="form-group">

                    <label>
                        Login
                    </label>

                    <input type="text"
                           name="log"
                           class="input">

                </div>


                <div class="form-group">

                    <label>
                        Password
                    </label>

                    <input type="password"
                           name="pass"
                           class="input">

                </div>


                <div class="form-actions">

                    <input type="submit"
                           name="action1"
                           value="Connexion"
                           class="btn">

                    <input type="reset"
                           value="Réinitialiser"
                           class="btn btn-outline">

                </div>

            </form>

        </div>



        <!-- =================================================
             TABLE
        ================================================== -->

        <div class="card">

            <h2>
                <i class="fas fa-table"></i>
                Appel Table
            </h2>

            <form method="POST"
                  action="index.php"
                  class="form">

                <div class="form-group">

                    <label>
                        Nombre de lignes
                    </label>

                    <input type="text"
                           name="rows"
                           class="input">

                </div>


                <div class="form-group">

                    <label>
                        Nombre de colonnes
                    </label>

                    <input type="text"
                           name="cols"
                           class="input">

                </div>


                <div class="form-actions">

                    <input type="submit"
                           name="action2"
                           value="Dessiner"
                           class="btn">

                    <input type="reset"
                           value="Réinitialiser"
                           class="btn btn-outline">

                </div>

            </form>


            <?php

            if (!empty($_POST['action2'])) {

                table(
                    $_POST['rows'],
                    $_POST['cols']
                );

            }

            ?>

        </div>



        <!-- =================================================
             TRIANGLE FORM
        ================================================== -->

        <div class="card">

            <h2>
                <i class="fas fa-caret-up"></i>
                Triangle via formulaire
            </h2>

            <form method="POST"
                  action="index.php"
                  class="form">

                <div class="form-group">

                    <label>
                        Nombre de lignes
                    </label>

                    <input type="text"
                           name="rowst"
                           class="input">

                </div>


                <div class="form-actions">

                    <input type="submit"
                           name="action3"
                           value="Dessiner"
                           class="btn">

                    <input type="reset"
                           value="Réinitialiser"
                           class="btn btn-outline">

                </div>

            </form>


            <?php

            if (!empty($_POST['action3'])) {

                Triangle($_POST['rowst']);

            }

            ?>

        </div>



        <!-- =================================================
             TRIANGLE LINKS
        ================================================== -->

        <div class="card">

            <h2>
                <i class="fas fa-link"></i>
                Triangle via liens
            </h2>

            <div class="links">

                <?php

                for ($i = 3; $i <= 10; $i++) {

                    echo '<a href="index.php?action4=' . $i . '" class="link">';
                    echo $i;
                    echo '</a>';

                }

                ?>

            </div>


            <?php

            if (!empty($_GET['action4'])) {

                Triangle($_GET['action4']);

            }

            ?>

        </div>

    </div>



    <!-- =====================================================
         ATELIERS
    ====================================================== -->

    <div class="section-title" id="ateliers">

        <span>Travaux pratiques</span>

        <h2>
            Mes Ateliers
        </h2>

    </div>


    <div class="grid-layout">


        <!-- ATELIER 1 -->

        <div class="card">

            <div class="atelier-number">
                Atelier 01
            </div>

            <h2>
                <i class="fas fa-laptop-code"></i>
                Atelier 1
            </h2>

            <div class="atelier-buttons">

                <a href="/At1.pdf"
                   class="btn">

                    <i class="far fa-file-pdf"></i>
                    Voir PDF

                </a>

            </div>

        </div>



        <!-- ATELIER 2 -->

        <div class="card">

            <div class="atelier-number">
                Atelier 02
            </div>

            <h2>
                <i class="fas fa-user-plus"></i>
                Gestion d'un formulaire d'inscription
            </h2>

            <div class="atelier-buttons">

                <a href="/At2.pdf"
                   class="btn btn-outline">

                    <i class="far fa-file-pdf"></i>
                    Voir PDF

                </a>

                <a href="inscription.php"
                   class="btn">

                    <i class="fas fa-pen-alt"></i>
                    Inscription en ligne

                </a>

            </div>

        </div>



        <!-- ATELIER 3 -->

        <div class="card">

            <div class="atelier-number">
                Atelier 03
            </div>

            <h2>
                <i class="fas fa-cloud-upload-alt"></i>
                Upload de fichiers en PHP
            </h2>

            <div class="atelier-buttons">

                <a href="/At3_enn.pdf"
                   class="btn btn-outline">
                    Énoncé Atelier 3
                </a>

                <a href="/At3.pdf"
                   class="btn btn-outline">
                    Voir Rapport Atelier 3
                </a>

                <a href="https://github.com/fatimazahraelbakkali78-blip/atelier3_dev101.git"
                   target="_blank"
                   class="btn">

                    <i class="fab fa-github"></i>
                    GitHub Repo

                </a>

            </div>

        </div>



        <!-- ATELIER 4 -->

        <div class="card">

            <div class="atelier-number">
                Atelier 04
            </div>

            <h2>
                <i class="fas fa-graduation-cap"></i>
                Gestion des étudiants
            </h2>

            <p class="card-description">
                Fichier texte + Upload photo + Recherche
            </p>

            <div class="atelier-buttons">

                <a href="/At4.pdf"
                   class="btn btn-outline">
                    Énoncé Atelier 4
                </a>

                <a href="/Rapp4.pdf"
                   class="btn btn-outline">
                    Voir Rapport Atelier 4
                </a>

                <a href="https://github.com/fatimazahraelbakkali78-blip/atelier4_dev101.git"
                   target="_blank"
                   class="btn">

                    <i class="fab fa-github"></i>
                    GitHub Repo

                </a>

            </div>

        </div>



        <!-- ATELIER 5 -->

        <div class="card">

            <div class="atelier-number">
                Atelier 05
            </div>

            <h2>
                <i class="fas fa-cookie-bite"></i>
                Sessions & Cookies
            </h2>

            <div class="atelier-buttons">

                <a href="/At5.pdf"
                   class="btn btn-outline">
                    Énoncé Atelier 5
                </a>

                <a href="/Rapp5.pdf"
                   class="btn btn-outline">
                    Voir Rapport Atelier 5
                </a>

                <a href="https://github.com/fatimazahraelbakkali78-blip/atelier5_dev101.git"
                   target="_blank"
                   class="btn">

                    <i class="fab fa-github"></i>
                    GitHub Repo

                </a>

            </div>

        </div>



        <!-- ATELIER 6 -->

        <div class="card">

            <div class="atelier-number">
                Atelier 06
            </div>

            <h2>
                <i class="fas fa-cube"></i>
                La POO en PHP
            </h2>

            <div class="atelier-buttons">

                <a href="/At6.pdf"
                   class="btn btn-outline">
                    Énoncé Atelier 6
                </a>

                <a href="#"
                   class="btn btn-outline">
                    Voir Rapport Atelier 6
                </a>

                <a href="https://github.com/fatimazahraelbakkali78-blip/atelier6_dev101.git"
                   target="_blank"
                   class="btn">

                    <i class="fab fa-github"></i>
                    GitHub Repo

                </a>

            </div>

        </div>



        <!-- ATELIER 7 -->

        <div class="card">

            <div class="atelier-number">
                Atelier 07
            </div>

            <h2>
                <i class="fas fa-cubes"></i>
                POO en PHP avec Sessions
            </h2>

            <div class="atelier-buttons">

                <a href="/At7.pdf"
                   class="btn btn-outline">
                    Énoncé Atelier 7
                </a>

                <a href="/Rapp7.pdf"
                   class="btn btn-outline">
                    Voir Rapport Atelier 7
                </a>

                <a href="https://github.com/fatimazahraelbakkali78-blip/atelier7_dev101.git"
                   target="_blank"
                   class="btn">

                    <i class="fab fa-github"></i>
                    GitHub Repo

                </a>

            </div>

        </div>



        <!-- ATELIER 8 -->

        <div class="card">

            <div class="atelier-number">
                Atelier 08
            </div>

            <h2>
                <i class="fas fa-shopping-basket"></i>
                Application E-Fruits
            </h2>

            <p class="card-description">
                Application réalisée dans le cadre du contrôle continu.
            </p>

            <div class="atelier-buttons">

                <a href="/At8.pdf"
                   class="btn btn-outline">
                    Énoncé Atelier 8
                </a>

                <a href="https://github.com/fatimazahraelbakkali78-blip/atelier8_dev101.git"
                   target="_blank"
                   class="btn btn-outline">

                    <i class="fab fa-github"></i>
                    GitHub Repo Local

                </a>

                <a href="https://efruits.vercel.app/acc.php"
                   target="_blank"
                   class="btn">

                    <i class="fas fa-store"></i>
                    My Store E-Fruit

                </a>

                <a href="https://github.com/fatimazahraelbakkali78-blip/fruits.git"
                   target="_blank"
                   class="btn">

                    <i class="fab fa-github"></i>
                    GitHub Repo Vercel

                </a>

            </div>

        </div>



        <!-- ATELIER 9 -->

        <div class="card">

            <div class="atelier-number">
                Atelier 09
            </div>

            <h2>
                <i class="fas fa-database"></i>
                MySQL PDO
            </h2>

            <p class="card-description">
                Application de gestion des étudiants.
            </p>

            <div class="atelier-buttons">

                <a href="/ApplicationBDD.pptx"
                   class="btn btn-outline">
                    Énoncé Atelier 9
                </a>

                <a href="https://github.com/fatimazahraelbakkali78-blip/atelier9_dev101.git"
                   target="_blank"
                   class="btn">

                    <i class="fab fa-github"></i>
                    GitHub Repo Local

                </a>

            </div>

        </div>



        <!-- ATELIER 10 -->

        <div class="card">

            <div class="atelier-number">
                Atelier 10
            </div>

            <h2>
                <i class="fas fa-list-ol"></i>
                Pagination en PHP
            </h2>

            <div class="atelier-buttons">

                <a href="/At10.pdf"
                   class="btn btn-outline">
                    Énoncé Atelier 10
                </a>

                <a href="https://github.com/fatimazahraelbakkali78-blip/atelier10_dev101.git"
                   target="_blank"
                   class="btn">

                    <i class="fab fa-github"></i>
                    GitHub Repo Local

                </a>

            </div>

        </div>



        <!-- ATELIER 11 -->

        <div class="card">

            <div class="atelier-number">
                Atelier 11
            </div>

            <h2>
                <i class="fab fa-js"></i>
                Ajax - Réponse HTML
            </h2>

            <div class="atelier-buttons">

                <a href="/At11.pdf"
                   class="btn btn-outline">
                    Énoncé Atelier 11
                </a>

                <a href="https://github.com/fatimazahraelbakkali78-blip/atelier11_dev101.git"
                   target="_blank"
                   class="btn">

                    <i class="fab fa-github"></i>
                    GitHub Repo Local

                </a>

            </div>

        </div>



        <!-- ATELIER 12 -->

        <div class="card">

            <div class="atelier-number">
                Atelier 12
            </div>

            <h2>
                <i class="fas fa-code"></i>
                Ajax - Réponse JSON
            </h2>

            <div class="atelier-buttons">

                <a href="/At12.pdf"
                   class="btn btn-outline">
                    Énoncé Atelier 12
                </a>

                <a href="https://github.com/fatimazahraelbakkali78-blip/atelier12_dev101.git"
                   target="_blank"
                   class="btn">

                    <i class="fab fa-github"></i>
                    GitHub Repo Local

                </a>

            </div>

        </div>



        <!-- ATELIER 13 -->

        <div class="card">

            <div class="atelier-number">
                Atelier 13
            </div>

            <h2>
                <i class="fas fa-server"></i>
                Services Web
            </h2>

            <div class="atelier-buttons">

                <a href="/At13.pdf"
                   class="btn btn-outline">
                    Énoncé Atelier 13
                </a>

                <a href="https://github.com/fatimazahraelbakkali78-blip/atelier13_dev101.git"
                   target="_blank"
                   class="btn">

                    <i class="fab fa-github"></i>
                    GitHub Repo Local

                </a>

            </div>

        </div>



        <!-- ATELIER 14 -->

        <div class="card">

            <div class="atelier-number">
                Atelier 14
            </div>

            <h2>
                <i class="fas fa-hamburger"></i>
                Burger Code
            </h2>

            <div class="atelier-buttons">

                <a href="/burger_code.pptx"
                   class="btn btn-outline">
                    Énoncé Atelier 14
                </a>

                <a href="https://github.com/fatimazahraelbakkali78-blip/burgercode.git"
                   target="_blank"
                   class="btn">

                    <i class="fab fa-github"></i>
                    GitHub Repo Local

                </a>

            </div>

        </div>



        <!-- ATELIER 15 -->

        <div class="card">

            <div class="atelier-number">
                Atelier 15
            </div>

            <h2>
                <i class="fas fa-sitemap"></i>
                Architecture MVC
            </h2>

            <div class="atelier-buttons">

                <a href="/At15.pdf"
                   class="btn btn-outline">
                    Énoncé Atelier 15
                </a>

                <a href="https://github.com/fatimazahraelbakkali78-blip/MVC.git"
                   target="_blank"
                   class="btn">

                    <i class="fab fa-github"></i>
                    GitHub Repo Local

                </a>

            </div>

        </div>



        <!-- MY STORE -->

        <div class="card">

            <div class="atelier-number">
                Projet
            </div>

            <h2>
                <i class="fas fa-store-alt"></i>
                My Store
            </h2>

            <p class="card-description">
                Projet personnel / application e-commerce.
            </p>

            <div class="atelier-buttons">

                <a href="/At15.pdf"
                   class="btn btn-outline">
                    Énoncé My Store
                </a>

                <a href="https://github.com/fatimazahraelbakkali78-blip/My_store"
                   target="_blank"
                   class="btn">

                    <i class="fab fa-github"></i>
                    GitHub Repo Local

                </a>

            </div>

        </div>

    </div>



    <!-- =====================================================
         COMPETENCES
    ====================================================== -->

    <div class="section-title">

        <span>Compétences</span>

        <h2>
            Mes compétences
        </h2>

    </div>


    <div class="card">

        <div class="skills">

            <span class="skill active">PHP</span>

            <span class="skill active">HTML</span>

            <span class="skill active">CSS</span>

            <span class="skill">JavaScript</span>

            <span class="skill">Ajax</span>

            <span class="skill">MySQL</span>

            <span class="skill">PDO</span>

            <span class="skill">MVC</span>

            <span class="skill">GitHub</span>

            <span class="skill">Vercel</span>

            <span class="skill">Figma</span>

            <span class="skill">Word</span>

            <span class="skill">PowerPoint</span>

            <span class="skill">Communication</span>

            <span class="skill">Gestion de projet</span>

        </div>

    </div>

</div>



<!-- =========================================================
     FOOTER
========================================================= -->

<footer class="footer" id="contact">

    <div class="footer-name">
        Lina Karkri
    </div>

    <p>
        Portfolio Développement Digital
    </p>

    <p style="margin-top:10px;">
        © <?php echo date("Y"); ?> Lina Karkri — Tous droits réservés.
    </p>

</footer>


</body>
</html>