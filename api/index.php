<?php
// Set page encoding and title headers
header('Content-Type: text/html; charset=utf-8');

$studentName = "Lina Karkri";
$academicYear = "2025/2026";
$specialization = "Développement Digital - Option Web / Full-Stack";
$githubUrl = "https://github.com/linakarkri170-ux";

// Definition of all official 2nd Year OFPPT Digital Development Modules
$modules = [
    [
        'id' => 'M201',
        'code' => 'M201',
        'title' => "Préparation d'un projet web",
        'category' => 'management',
        'desc' => "Analyse des besoins, élaboration du cahier des charges, modélisation UML, wireframing et charte graphique.",
        'techs' => ['UML', 'Figma', 'Agile', 'Cahier des charges'],
        'defaultImg' => 'https://placehold.co/600x400/ad726d/ffffff?text=M201+Wireframe+Spec'
    ],
    [
        'id' => 'M202',
        'code' => 'M202',
        'title' => "Approche agile",
        'category' => 'management',
        'desc' => "Gestion de projet selon la méthodologie Scrum, planification des Sprints, backlog utilisateur et daily standups.",
        'techs' => ['Scrum', 'Trello', 'Jira', 'Kanban'],
        'defaultImg' => 'https://placehold.co/600x400/ad726d/ffffff?text=M202+Scrum+Board'
    ],
    [
        'id' => 'M203',
        'code' => 'M203',
        'title' => "Intégration web",
        'category' => 'frontend',
        'desc' => "Création d'interfaces web modernes, responsive design avec HTML5, CSS3, JavaScript ES6+ et frameworks CSS.",
        'techs' => ['HTML5', 'CSS3', 'JavaScript', 'Bootstrap', 'Tailwind'],
        'defaultImg' => 'https://placehold.co/600x400/ad726d/ffffff?text=M203+Integration+CSS'
    ],
    [
        'id' => 'M204',
        'code' => 'M204',
        'title' => "Développement web dynamique",
        'category' => 'backend',
        'desc' => "Conception d'applications web serveur sécurisées avec PHP, Laravel, Node.js, Express, POO, architecture MVC et MySQL.",
        'techs' => ['PHP', 'Laravel', 'Node.js', 'MySQL', 'PDO'],
        'defaultImg' => 'https://placehold.co/600x400/ad726d/ffffff?text=M204+Laravel+Backend'
    ],
    [
        'id' => 'M205',
        'code' => 'M205',
        'title' => "Développement front-end",
        'category' => 'frontend',
        'desc' => "Création de Single Page Applications (SPA) dynamiques avec React.js / Vue.js, gestion d'état (Redux/Context API) et API REST.",
        'techs' => ['React.js', 'Redux', 'REST API', 'Tailwind'],
        'defaultImg' => 'https://placehold.co/600x400/ad726d/ffffff?text=M205+React+App'
    ],
    [
        'id' => 'M206',
        'code' => 'M206',
        'title' => "Création d'une application mobile",
        'category' => 'mobile',
        'desc' => "Développement mobile multiplateforme avec React Native / Flutter, intégration des composants natifs et consommation d'APIs.",
        'techs' => ['React Native', 'Flutter', 'Mobile UI', 'Expo'],
        'defaultImg' => 'https://placehold.co/600x400/ad726d/ffffff?text=M206+Mobile+Screen'
    ],
    [
        'id' => 'M207',
        'code' => 'M207',
        'title' => "Sécurité d'un site web",
        'category' => 'management',
        'desc' => "Mise en œuvre des bonnes pratiques de cybersécurité, prévention OWASP (XSS, SQLi, CSRF), chiffrement et authentification JWT.",
        'techs' => ['OWASP', 'JWT', 'HTTPS', 'Encryption'],
        'defaultImg' => 'https://placehold.co/600x400/ad726d/ffffff?text=M207+Security+Audit'
    ],
    [
        'id' => 'M208',
        'code' => 'M208',
        'title' => "Cloud & DevOps",
        'category' => 'mobile',
        'desc' => "Conteneurisation d'applications avec Docker, hébergement cloud, intégration/déploiement continu (CI/CD) et administration serveur.",
        'techs' => ['Docker', 'CI/CD', 'Git', 'Vercel/AWS'],
        'defaultImg' => 'https://placehold.co/600x400/ad726d/ffffff?text=M208+Docker+DevOps'
    ],
    [
        'id' => 'M209',
        'code' => 'M209',
        'title' => "Projet de fin d'études (PFE)",
        'category' => 'backend',
        'desc' => "Projet de synthèse complet intégrant l'ensemble des compétences acquises durant la formation en Développement Digital.",
        'techs' => ['Full-Stack', 'Laravel/React', 'PFE', 'UML'],
        'defaultImg' => 'https://placehold.co/600x400/ad726d/ffffff?text=M209+PFE+Dashboard'
    ]
];
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OFPPT ISTA 2nd Year Portfolio | <?php echo htmlspecialchars($studentName); ?></title>
    
    <!-- Google Fonts & FontAwesome -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,700;1,400&family=Montserrat:wght@300;400;500;600;700&family=Fira+Code:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    
    <style>
        :root {
            /* Theme 1: Soft Rose Gold & Beige Elegance */
            --bg-dark: #faf6f0; 
            --deep-green: #f2e8df;
            --luxury-brown: #c98f8a;
            --luxury-brown-hover: #ad726d;
            --accent-green: #ad726d;
            --text-light: #2b2623;
            --text-muted: #786e68;
            --glass-bg: rgba(255, 253, 249, 0.85);
            --card-bg: rgba(255, 253, 249, 0.92);
            --border-color: rgba(201, 143, 138, 0.3);
            --shadow: 0 15px 35px rgba(201, 143, 138, 0.15);
            --font-code: 'Fira Code', monospace;
            --font-sans: 'Montserrat', sans-serif;
            --font-serif: 'Playfair Display', serif;
        }

        /* Theme 2: Lavender & Blossom Chic Mode */
        body.purple-mode {
            --bg-dark: #f8f4f8; 
            --deep-green: #eee6f0;
            --luxury-brown: #b08bb2; 
            --luxury-brown-hover: #936895;
            --accent-green: #936895;
            --text-light: #2a222c;
            --text-muted: #736775;
            --glass-bg: rgba(255, 255, 255, 0.85);
            --card-bg: rgba(255, 255, 255, 0.92);
            --border-color: rgba(176, 139, 178, 0.3);
            --shadow: 0 15px 35px rgba(176, 139, 178, 0.2);
        }

        * {
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        body {
            font-family: var(--font-sans);
            background-color: var(--bg-dark); 
            color: var(--text-light);
            margin: 0;
            overflow-x: hidden;
            transition: background-color 0.5s ease, color 0.5s ease;
            min-height: 100vh;
        }

        /* --- Floating Petals Background --- */
        #float-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            pointer-events: none;
            z-index: 1;
            overflow: hidden;
        }

        .rose-petal {
            position: absolute;
            background: linear-gradient(135deg, var(--luxury-brown), #fce4e4);
            width: 12px;
            height: 16px;
            opacity: 0.35;
            border-radius: 12px 0 12px 0;
            animation: luxuryFloat linear infinite;
        }

        @keyframes luxuryFloat {
            0% { transform: translateY(105vh) rotate(0deg); opacity: 0; }
            20% { opacity: 0.6; }
            80% { opacity: 0.6; }
            100% { transform: translateY(-10vh) rotate(540deg); opacity: 0; }
        }

        header {
            background: var(--glass-bg);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            padding: 0 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid var(--border-color);
            position: sticky; 
            top: 0; 
            z-index: 1000;
            height: 75px;
            transition: background 0.5s ease;
        }

        .logo {
            font-family: var(--font-serif);
            font-weight: 700;
            color: var(--luxury-brown-hover);
            letter-spacing: -0.2px;
            font-size: 1.4rem;
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
        }

        .logo span.badge {
            font-family: var(--font-sans);
            font-size: 0.65rem;
            background: rgba(201, 143, 138, 0.15);
            border: 1px solid var(--luxury-brown);
            color: var(--luxury-brown-hover);
            padding: 2px 10px;
            border-radius: 15px;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        nav { display: flex; align-items: center; gap: 12px; }

        nav a, .dropdown-btn {
            text-decoration: none;
            color: var(--text-light);
            padding: 8px 14px;
            font-weight: 600;
            font-size: 0.88rem;
            transition: 0.3s;
            cursor: pointer;
            border: none;
            background: none;
            border-radius: 20px;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        nav a:hover, .dropdown-btn:hover { 
            color: var(--luxury-brown); 
            background: rgba(201, 143, 138, 0.1);
        }

        .theme-toggle-btn {
            background: linear-gradient(135deg, var(--luxury-brown), var(--luxury-brown-hover));
            color: white;
            border: none;
            padding: 9px 18px;
            border-radius: 20px;
            cursor: pointer;
            font-size: 0.75rem;
            font-weight: 700;
            transition: 0.3s;
            display: flex;
            align-items: center;
            gap: 6px;
            box-shadow: 0 4px 12px rgba(201, 143, 138, 0.3);
        }

        .theme-toggle-btn:hover {
            transform: translateY(-2px);
            filter: brightness(1.05);
        }

        .dropdown { position: relative; }

        .dropdown-content {
            display: none;
            position: absolute;
            top: 50px; 
            right: 0;
            background: var(--card-bg);
            backdrop-filter: blur(15px);
            min-width: 280px;
            border: 1px solid var(--border-color);
            border-radius: 16px;
            box-shadow: var(--shadow);
            animation: slideUp 0.3s ease;
            max-height: 420px;
            overflow-y: auto;
            z-index: 1001;
            padding: 8px 0;
        }

        @keyframes slideUp {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .dropdown-content a {
            padding: 10px 18px;
            border-bottom: 1px solid rgba(0,0,0,0.03);
            font-family: var(--font-code);
            font-size: 0.8rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: var(--text-light);
            text-decoration: none;
        }

        .dropdown-content a:hover { 
            background: rgba(201, 143, 138, 0.15); 
            color: var(--luxury-brown-hover); 
        }

        .dropdown-content.show { display: block; }

        .hero {
            min-height: 65vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background: radial-gradient(circle at center, var(--deep-green) 0%, var(--bg-dark) 80%);
            padding: 70px 20px 50px;
            text-align: center;
            position: relative;
            transition: background 0.5s ease;
        }

        .hero-badge {
            background: rgba(201, 143, 138, 0.15);
            border: 1px solid var(--luxury-brown);
            color: var(--luxury-brown-hover);
            padding: 6px 18px;
            border-radius: 20px;
            font-family: var(--font-sans);
            font-size: 0.8rem;
            font-weight: 600;
            margin-bottom: 22px;
            letter-spacing: 0.5px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .hero h1 { 
            font-family: var(--font-serif);
            font-size: clamp(3rem, 6vw, 4.2rem); 
            margin: 0; 
            font-weight: 700;
            line-height: 1.1;
            color: var(--text-light);
        }

        .hero h1 span { color: var(--luxury-brown); }
        
        .hero p { 
            font-family: var(--font-sans);
            color: var(--text-muted); 
            font-size: 1.05rem;
            margin: 22px 0 35px; 
            max-width: 650px;
            line-height: 1.6;
        }

        .hero-actions {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .btn-main {
            background: linear-gradient(135deg, var(--luxury-brown), var(--luxury-brown-hover));
            color: white;
            padding: 14px 32px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            box-shadow: 0 10px 20px rgba(201, 143, 138, 0.25);
            transition: 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            border: none;
            cursor: pointer;
        }

        .btn-main:hover { 
            transform: translateY(-3px); 
            box-shadow: 0 15px 25px rgba(201, 143, 138, 0.35);
        }

        .btn-secondary {
            background: rgba(255,255,255,0.8);
            color: var(--luxury-brown-hover);
            border: 1px solid var(--border-color);
            padding: 14px 28px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-secondary:hover {
            background: var(--luxury-brown);
            color: white;
        }

        .modules-nav-wrapper {
            position: sticky;
            top: 75px;
            z-index: 900;
            background: var(--glass-bg);
            border-bottom: 1px solid var(--border-color);
            padding: 12px 5%;
            backdrop-filter: blur(10px);
        }

        .filter-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
            flex-wrap: wrap;
            max-width: 1400px;
            margin: 0 auto;
        }

        .filter-tabs {
            display: flex;
            gap: 8px;
            overflow-x: auto;
            padding-bottom: 4px;
            scrollbar-width: thin;
        }

        .filter-tab {
            background: rgba(255,255,255,0.6);
            border: 1px solid var(--border-color);
            color: var(--text-muted);
            padding: 6px 16px;
            border-radius: 20px;
            font-size: 0.82rem;
            font-weight: 600;
            cursor: pointer;
            white-space: nowrap;
            transition: 0.3s;
        }

        .filter-tab:hover, .filter-tab.active {
            background: var(--luxury-brown);
            color: white;
            border-color: var(--luxury-brown);
        }

        .stats-counter {
            font-size: 0.85rem;
            color: var(--text-muted);
            font-weight: 500;
        }

        .modules-section {
            padding: 50px 5% 80px;
            max-width: 1400px;
            margin: 0 auto;
        }

        .section-title {
            text-align: center;
            margin-bottom: 45px;
        }

        .section-title h2 {
            font-family: var(--font-serif);
            font-size: 2.4rem;
            color: var(--text-light);
            margin: 0 0 10px;
        }

        .section-title p {
            color: var(--luxury-brown-hover);
            margin: 0;
            font-size: 0.95rem;
        }

        .modules-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(380px, 1fr));
            gap: 30px;
        }

        @media (max-width: 480px) {
            .modules-grid {
                grid-template-columns: 1fr;
            }
        }

        .module-card {
            background: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: 22px;
            overflow: hidden;
            backdrop-filter: blur(10px);
            transition: transform 0.35s ease, border-color 0.35s ease, box-shadow 0.35s ease;
            display: flex;
            flex-direction: column;
            box-shadow: var(--shadow);
        }

        .module-card:hover {
            transform: translateY(-8px);
            border-color: var(--luxury-brown);
            box-shadow: 0 20px 40px rgba(201, 143, 138, 0.25);
        }

        .module-header {
            padding: 24px 25px 15px;
            border-bottom: 1px solid rgba(201, 143, 138, 0.1);
            position: relative;
        }

        .module-code {
            font-family: var(--font-code);
            font-size: 0.75rem;
            color: var(--luxury-brown-hover);
            background: rgba(201, 143, 138, 0.15);
            padding: 4px 12px;
            border-radius: 12px;
            display: inline-block;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .module-title {
            font-family: var(--font-serif);
            font-size: 1.35rem;
            margin: 0 0 10px;
            color: var(--text-light);
            font-weight: 700;
        }

        .module-desc {
            font-size: 0.88rem;
            color: var(--text-muted);
            line-height: 1.6;
            margin: 0;
        }

        .module-tech-stack {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
            margin-top: 14px;
        }

        .tech-tag {
            font-size: 0.72rem;
            background: rgba(201, 143, 138, 0.12);
            color: var(--luxury-brown-hover);
            padding: 3px 10px;
            border-radius: 12px;
            font-weight: 600;
        }

        .exercise-upload-area {
            padding: 20px 25px;
            background: rgba(255, 255, 255, 0.4);
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .area-title {
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--luxury-brown-hover);
            margin-bottom: 12px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .drop-zone {
            border: 2px dashed var(--border-color);
            border-radius: 16px;
            padding: 18px;
            text-align: center;
            background: rgba(255, 255, 255, 0.6);
            cursor: pointer;
            transition: 0.3s;
            margin-bottom: 15px;
        }

        .drop-zone:hover, .drop-zone.dragover {
            border-color: var(--luxury-brown);
            background: rgba(201, 143, 138, 0.1);
        }

        .drop-zone i {
            font-size: 1.6rem;
            color: var(--luxury-brown);
            margin-bottom: 6px;
        }

        .drop-zone p {
            margin: 0;
            font-size: 0.8rem;
            color: var(--text-muted);
        }

        .drop-zone span {
            color: var(--luxury-brown-hover);
            font-weight: 600;
        }

        .file-input-hidden { display: none; }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(75px, 1fr));
            gap: 10px;
            margin-top: 5px;
        }

        .gallery-item {
            position: relative;
            aspect-ratio: 1;
            border-radius: 10px;
            overflow: hidden;
            border: 1px solid var(--border-color);
            cursor: pointer;
            background: #fff;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
            opacity: 0.85;
        }

        .gallery-item-actions {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(43, 38, 35, 0.6);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            opacity: 0;
            transition: 0.2s opacity;
        }

        .gallery-item:hover .gallery-item-actions { opacity: 1; }

        .action-btn {
            background: rgba(255,255,255,0.9);
            color: var(--text-light);
            border: none;
            width: 28px;
            height: 28px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 0.75rem;
            transition: 0.2s;
        }

        .action-btn:hover {
            background: var(--luxury-brown);
            color: white;
            transform: scale(1.1);
        }

        .action-btn.delete-btn:hover { background: #e74c3c; color: white; }

        .no-exercises {
            font-size: 0.8rem;
            color: var(--text-muted);
            font-style: italic;
            text-align: center;
            padding: 10px 0;
        }

        .module-footer {
            padding: 15px 25px;
            border-top: 1px solid rgba(201, 143, 138, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .btn-atelier {
            color: var(--luxury-brown-hover);
            background: rgba(201, 143, 138, 0.1);
            border: 1px solid var(--border-color);
            padding: 7px 16px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.78rem;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-atelier:hover {
            background: var(--luxury-brown);
            color: white;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 2000;
            left: 0; top: 0; 
            width: 100%; height: 100%;
            background: rgba(43, 38, 35, 0.6);
            backdrop-filter: blur(12px);
            align-items: center; justify-content: center;
            padding: 20px;
        }

        .modal-box {
            background: var(--card-bg);
            padding: 40px;
            border-radius: 28px;
            border: 1px solid var(--border-color);
            max-width: 520px; width: 100%;
            text-align: center;
            box-shadow: var(--shadow);
            position: relative;
            animation: modalFadeIn 0.3s ease;
        }

        @keyframes modalFadeIn {
            from { opacity: 0; transform: scale(0.9); }
            to { opacity: 1; transform: scale(1); }
        }

        .modal-footer {
            margin-top: 25px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .btn-res {
            padding: 12px;
            border-radius: 20px;
            text-decoration: none;
            font-weight: 600;
            display: block;
            transition: 0.3s;
            font-size: 0.85rem;
            text-align: center;
        }

        .btn-ennonce { background: rgba(201, 143, 138, 0.12); color: var(--text-light); }
        .btn-rapport { background: var(--luxury-brown); color: white; }
        .btn-github { background: #333; color: white; }

        .btn-ennonce:hover { background: rgba(201, 143, 138, 0.25); }
        .btn-rapport:hover { filter: brightness(1.1); }
        .btn-github:hover { filter: brightness(1.2); }

        .lightbox-modal {
            display: none;
            position: fixed;
            z-index: 3000;
            top: 0; left: 0;
            width: 100vw; height: 100vh;
            background: rgba(43, 38, 35, 0.92);
            backdrop-filter: blur(10px);
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .lightbox-img {
            max-width: 90%;
            max-height: 80vh;
            border-radius: 16px;
            border: 1px solid var(--luxury-brown);
            box-shadow: 0 20px 50px rgba(0,0,0,0.4);
            object-fit: contain;
        }

        .lightbox-caption {
            margin-top: 15px;
            color: white;
            font-size: 0.95rem;
            font-weight: 500;
        }

        .lightbox-close {
            position: absolute;
            top: 25px; right: 35px;
            color: white;
            font-size: 2.2rem;
            cursor: pointer;
            transition: 0.3s;
        }

        .lightbox-close:hover { color: var(--luxury-brown); }

        footer { 
            text-align: center; 
            padding: 45px 20px; 
            border-top: 1px solid var(--border-color);
            background: var(--bg-dark);
            font-size: 0.85rem; 
            color: var(--text-muted);
        }

        footer span { color: var(--luxury-brown-hover); font-weight: 600; }
    </style>
</head>
<body>

    <div id="float-container"></div>

    <header>
        <a href="index.php" class="logo">
            <i class="fa-solid fa-sparkles"></i> <?php echo htmlspecialchars($studentName); ?> 
            <span class="badge">OFPPT DD 2ND YEAR</span>
        </a>
        <nav>
            <a href="#modules"><i class="fa-solid fa-layer-group"></i> Modules</a>
            
            <div class="dropdown">
                <button class="dropdown-btn" onclick="toggleDropdown(event)">
                    <i class="fa-solid fa-folder-open"></i> Repositories ▼
                </button>
                <div id="myDropdown" class="dropdown-content">
                    <?php foreach ($modules as $mod): ?>
                        <a href="#" onclick="openAtelier('<?php echo $mod['code'] . ' - ' . addslashes($mod['title']); ?>', '<?php echo addslashes($mod['desc']); ?>', '#', '#', '<?php echo $githubUrl; ?>')">
                            <span><?php echo $mod['code']; ?> - <?php echo htmlspecialchars($mod['title']); ?></span> 
                            <i class="fa-solid fa-file-pdf"></i>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>

            <button class="theme-toggle-btn" onclick="toggleTheme()">
                <i class="fa-solid fa-palette"></i> <span id="themeText">BLOSSOM MODE</span>
            </button>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-badge">
            <i class="fa-solid fa-graduation-cap"></i> OFPPT ISTA <?php echo $academicYear; ?> • <?php echo htmlspecialchars($specialization); ?>
        </div>
        <h1 id="heroTitle">Portfolio <span>Développement Digital</span></h1>
        <p>Bienvenue dans mon portfolio. Étudiante passionnée par le développement web, le design et les nouvelles technologies.</p>
        
        <div class="hero-actions">
            <a href="#modules" class="btn-main">
                <i class="fa-solid fa-heart"></i> Découvrir mes modules
            </a>
            <a href="<?php echo $githubUrl; ?>" target="_blank" class="btn-secondary">
                <i class="fa-brands fa-github"></i> Mon GitHub
            </a>
        </div>
    </section>

    <div class="modules-nav-wrapper">
        <div class="filter-container">
            <div class="filter-tabs">
                <button class="filter-tab active" onclick="filterModules('all')">Tous les modules (<?php echo count($modules); ?>)</button>
                <button class="filter-tab" onclick="filterModules('frontend')">Front-End</button>
                <button class="filter-tab" onclick="filterModules('backend')">Backend & BD</button>
                <button class="filter-tab" onclick="filterModules('mobile')">Mobile & Cloud</button>
                <button class="filter-tab" onclick="filterModules('management')">Gestion & Sécurité</button>
            </div>
            <div class="stats-counter" id="statsCounter">
                <i class="fa-solid fa-images"></i> Exercices enregistrés: <span id="totalExercisesCount" style="color:var(--luxury-brown-hover); font-weight:bold;">0</span>
            </div>
        </div>
    </div>

    <section class="modules-section" id="modules">
        <div class="section-title">
            <h2>Modules & Travaux Pratiques</h2>
            <p>Découvrez mes projets, exercices et compétences techniques acquises pendant ma formation.</p>
        </div>

        <div class="modules-grid" id="modulesContainer">
            <?php foreach ($modules as $mod): ?>
                <div class="module-card" data-category="<?php echo $mod['category']; ?>">
                    <div class="module-header">
                        <span class="module-code"><i class="fa-solid fa-bookmark"></i> <?php echo $mod['code']; ?></span>
                        <h3 class="module-title"><?php echo htmlspecialchars($mod['title']); ?></h3>
                        <p class="module-desc"><?php echo htmlspecialchars($mod['desc']); ?></p>
                        <div class="module-tech-stack">
                            <?php foreach ($mod['techs'] as $tech): ?>
                                <span class="tech-tag"><?php echo htmlspecialchars($tech); ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="exercise-upload-area">
                        <div class="area-title">
                            <span><i class="fa-solid fa-camera"></i> Captures d'exercices</span>
                            <span style="font-size: 0.75rem; color: var(--luxury-brown-hover);" id="count_badge_<?php echo $mod['id']; ?>">0 fichier(s)</span>
                        </div>

                        <!-- Dropzone for File Upload -->
                        <div class="drop-zone" onclick="triggerFileInput('<?php echo $mod['id']; ?>')" ondragover="handleDragOver(event)" ondragleave="handleDragLeave(event)" ondrop="handleFileDrop(event, '<?php echo $mod['id']; ?>')">
                            <i class="fa-solid fa-cloud-arrow-up"></i>
                            <p>Glisser une image ou <span>Parcourir</span></p>
                            <input type="file" id="file_input_<?php echo $mod['id']; ?>" class="file-input-hidden" accept="image/*" onchange="handleFileSelect(event, '<?php echo $mod['id']; ?>')">
                        </div>

                        <!-- Gallery Thumbnails container -->
                        <div class="gallery-grid" id="gallery_<?php echo $mod['id']; ?>">
                            <!-- Dynamic Content -->
                        </div>
                    </div>

                    <div class="module-footer">
                        <button class="btn-atelier" onclick="openAtelier('<?php echo $mod['code'] . ' - ' . addslashes($mod['title']); ?>', '<?php echo addslashes($mod['desc']); ?>', '#', '#', '<?php echo $githubUrl; ?>')">
                            <i class="fa-solid fa-folder"></i> Dtails du module
                        </button>
                        <span style="font-size:0.75rem; color:var(--text-muted);">OFPPT DD 2026</span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Modal details dialog -->
    <div id="atelierModal" class="modal">
        <div class="modal-box">
            <h2 id="atTitle" style="color: var(--luxury-brown-hover); font-family: var(--font-serif); margin-top: 0;"></h2>
            <p id="atDesc" style="color: var(--text-light); opacity: 0.85; font-size: 0.9rem; line-height: 1.6;"></p>
            <div class="modal-footer">
                <a href="#" id="linkEnnonce" class="btn-res btn-ennonce" target="_blank"><i class="fa-solid fa-file-lines"></i> Programme du Module</a>
                <a href="#" id="linkRapport" class="btn-res btn-rapport" target="_blank"><i class="fa-solid fa-book"></i> Voir Rapport / TP</a>
                <a href="<?php echo $githubUrl; ?>" id="linkGithub" class="btn-res btn-github" target="_blank"><i class="fa-brands fa-github"></i> Repository GitHub</a>
            </div>
            <button onclick="closeAtelier()" style="margin-top:25px; border:none; background:none; cursor:pointer; color:var(--luxury-brown-hover); font-size: 0.85rem; font-weight: 600;">[ Fermer la fenêtre ]</button>
        </div>
    </div>

    <!-- Lightbox Modal -->
    <div id="lightboxModal" class="lightbox-modal">
        <span class="lightbox-close" onclick="closeLightbox()">&times;</span>
        <img id="lightboxImg" class="lightbox-img" src="" alt="Aperçu exercice">
        <div id="lightboxCaption" class="lightbox-caption"></div>
    </div>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> • Portfolio réalisé par <span><?php echo htmlspecialchars($studentName); ?></span> • OFPPT ISTA Développement Digital</p>
    </footer>

    <script>
        const PHP_MODULES = <?php echo json_encode($modules); ?>;
        const STORAGE_KEY = 'lina_portfolio_exercises_v1';

        function getStoredExercises() {
            const data = localStorage.getItem(STORAGE_KEY);
            if (data) {
                try { return JSON.parse(data); } catch(e) { console.error(e); }
            }
            
            const initialData = {};
            PHP_MODULES.forEach(mod => {
                initialData[mod.id] = [
                    {
                        id: mod.id + '_sample',
                        url: mod.defaultImg,
                        name: 'Exemple TP'
                    }
                ];
            });
            localStorage.setItem(STORAGE_KEY, JSON.stringify(initialData));
            return initialData;
        }

        function saveExercises(exercisesObj) {
            localStorage.setItem(STORAGE_KEY, JSON.stringify(exercisesObj));
            updateAllGalleries();
        }

        function updateAllGalleries() {
            const allData = getStoredExercises();
            let totalCount = 0;

            PHP_MODULES.forEach(mod => {
                const items = allData[mod.id] || [];
                totalCount += items.length;

                const countBadge = document.getElementById(`count_badge_${mod.id}`);
                if (countBadge) countBadge.innerText = `${items.length} fichier(s)`;

                const galleryContainer = document.getElementById(`gallery_${mod.id}`);
                if (galleryContainer) {
                    if (items.length === 0) {
                        galleryContainer.innerHTML = `<div class="no-exercises" style="grid-column: 1/-1;">Aucune capture ajoutée pour le moment.</div>`;
                    } else {
                        galleryContainer.innerHTML = items.map(item => `
                            <div class="gallery-item">
                                <img src="${item.url}" alt="${item.name}">
                                <div class="gallery-item-actions">
                                    <button class="action-btn" title="Zoom" onclick="openLightbox('${item.url}', '${item.name.replace(/'/g, "\\'")}')"><i class="fa-solid fa-expand"></i></button>
                                    <button class="action-btn delete-btn" title="Supprimer" onclick="deleteExercise('${mod.id}', '${item.id}')"><i class="fa-solid fa-trash"></i></button>
                                </div>
                            </div>
                        `).join('');
                    }
                }
            });

            const counterEl = document.getElementById('totalExercisesCount');
            if (counterEl) counterEl.innerText = totalCount;
        }

        function triggerFileInput(moduleId) {
            document.getElementById(`file_input_${moduleId}`).click();
        }

        function handleFileSelect(event, moduleId) {
            const files = event.target.files;
            if (files && files[0]) {
                processFile(files[0], moduleId);
            }
        }

        function handleDragOver(event) {
            event.preventDefault();
            event.currentTarget.classList.add('dragover');
        }

        function handleDragLeave(event) {
            event.currentTarget.classList.remove('dragover');
        }

        function handleFileDrop(event, moduleId) {
            event.preventDefault();
            event.currentTarget.classList.remove('dragover');
            const files = event.dataTransfer.files;
            if (files && files[0]) {
                processFile(files[0], moduleId);
            }
        }

        function processFile(file, moduleId) {
            if (!file.type.startsWith('image/')) {
                alert('Veuillez importer un fichier image (.png, .jpg, .webp).');
                return;
            }

            if (file.size > 3 * 1024 * 1024) {
                alert('La taille du fichier dépasse 3 Mo. Veuillez choisir une image plus petite.');
                return;
            }

            const reader = new FileReader();
            reader.onload = function(e) {
                const base64Url = e.target.result;
                const newExercise = {
                    id: 'ex_' + Date.now(),
                    url: base64Url,
                    name: file.name
                };

                const allData = getStoredExercises();
                if (!allData[moduleId]) allData[moduleId] = [];
                allData[moduleId].push(newExercise);

                saveExercises(allData);
            };
            reader.readAsDataURL(file);
        }

        function deleteExercise(moduleId, exerciseId) {
            if (!confirm('Êtes-vous sûre de vouloir supprimer cette image ?')) return;

            const allData = getStoredExercises();
            if (allData[moduleId]) {
                allData[moduleId] = allData[moduleId].filter(item => item.id !== exerciseId);
                saveExercises(allData);
            }
        }

        function filterModules(category) {
            document.querySelectorAll('.filter-tab').forEach(tab => tab.classList.remove('active'));
            event.currentTarget.classList.add('active');

            const cards = document.querySelectorAll('.module-card');
            cards.forEach(card => {
                if (category === 'all' || card.dataset.category === category) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        }

        function openLightbox(url, name) {
            const modal = document.getElementById('lightboxModal');
            const img = document.getElementById('lightboxImg');
            const caption = document.getElementById('lightboxCaption');
            img.src = url;
            caption.innerText = name || 'Aperçu exercice';
            modal.style.display = 'flex';
        }

        function closeLightbox() {
            document.getElementById('lightboxModal').style.display = 'none';
        }

        function toggleTheme() {
            const body = document.body;
            const heroTitle = document.getElementById('heroTitle');
            const themeText = document.getElementById('themeText');
            
            body.classList.toggle('purple-mode');

            if (body.classList.contains('purple-mode')) {
                heroTitle.innerHTML = 'Portfolio <span>Chic & Élégant</span>';
                themeText.innerText = 'ROSE GOLD MODE';
            } else {
                heroTitle.innerHTML = 'Portfolio <span>Développement Digital</span>';
                themeText.innerText = 'BLOSSOM MODE';
            }
        }

        function createPetal() {
            const container = document.getElementById('float-container');
            if (!container) return;
            const petal = document.createElement('div');
            petal.className = 'rose-petal';
            petal.style.left = Math.random() * 100 + 'vw';
            petal.style.animationDuration = (Math.random() * 5 + 7) + 's';
            petal.style.width = (Math.random() * 6 + 10) + 'px';
            petal.style.height = (Math.random() * 6 + 14) + 'px';
            container.appendChild(petal);
            setTimeout(() => petal.remove(), 10000);
        }
        setInterval(createPetal, 700);

        function toggleDropdown(e) {
            e.stopPropagation();
            document.getElementById("myDropdown").classList.toggle("show");
        }

        function openAtelier(title, desc, ennonce, rapport, github) {
            document.getElementById('atTitle').innerText = title;
            document.getElementById('atDesc').innerText = desc;
            document.getElementById('linkEnnonce').href = ennonce;
            document.getElementById('linkRapport').href = rapport;
            document.getElementById('linkGithub').href = github;
            document.getElementById('atelierModal').style.display = 'flex';
        }

        function closeAtelier() {
            document.getElementById('atelierModal').style.display = 'none';
        }

        window.onclick = function(event) {
            if (!event.target.closest('.dropdown')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                for (var i = 0; i < dropdowns.length; i++) {
                    if (dropdowns[i].classList.contains('show')) dropdowns[i].classList.remove('show');
                }
            }
            if (event.target.className === 'modal') closeAtelier();
        }

        window.onload = function() {
            updateAllGalleries();
        };
    </script>