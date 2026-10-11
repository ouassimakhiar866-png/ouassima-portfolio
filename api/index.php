<?php
$studentName = "Ouassima Khiar";
$specialization = "Développement Digital - Option Web Fullstack";
$githubUrl = "https://github.com/ouassima";

$modules = [
    [
        "code" => "M201",
        "title" => "Préparation d'un projet web",
        "category" => "base",
        "icon" => "fa-pen-ruler",
        "description" => "Découverte UX/UI, wireframes, Figma, méthode Scrum et cahier des charges."
    ],
    [
        "code" => "M202",
        "title" => "Approche agile et gestion de projet",
        "category" => "base",
        "icon" => "fa-diagram-project",
        "description" => "Organisation des tâches, méthode Agile, Scrum, Jira et travail en équipe."
    ],
    [
        "code" => "M203",
        "title" => "Développement Frontend avancé",
        "category" => "web",
        "icon" => "fa-code",
        "description" => "Création d'interfaces web avec HTML, CSS, JavaScript et frameworks modernes."
    ],
    [
        "code" => "M204",
        "title" => "Développement Backend & API",
        "category" => "backend",
        "icon" => "fa-server",
        "description" => "Logique serveur, PHP, API REST, authentification et gestion des données."
    ],
    [
        "code" => "M205",
        "title" => "Bases de données avancées",
        "category" => "database",
        "icon" => "fa-database",
        "description" => "Gestion des bases de données, requêtes SQL, relations et introduction à NoSQL."
    ],
    [
        "code" => "M206",
        "title" => "Déploiement & Cloud",
        "category" => "backend",
        "icon" => "fa-cloud-arrow-up",
        "description" => "Git, GitHub, déploiement des projets, Vercel et découverte du DevOps."
    ]
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($studentName) ?> | Portfolio</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>
:root {
    --bg: #f8f7fc;
    --surface: #ffffff;
    --text: #201b35;
    --muted: #77738b;
    --primary: #7856e8;
    --primary-light: #eee8ff;
    --pink: #ec78b5;
    --border: #ece9f4;
    --shadow: 0 10px 30px rgba(49, 30, 91, .06);
}

body.dark {
    --bg: #11101b;
    --surface: #1b1928;
    --text: #f5f1ff;
    --muted: #aaa4bd;
    --primary: #ad94ff;
    --primary-light: #302746;
    --pink: #ff9bcf;
    --border: #302b40;
    --shadow: 0 10px 30px rgba(0, 0, 0, .18);
}

*, *::before, *::after {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html { scroll-behavior: smooth; }

body {
    font-family: 'DM Sans', sans-serif;
    background: var(--bg);
    color: var(--text);
    line-height: 1.5;
    transition: background .25s, color .25s;
}

button, input { font: inherit; }
button { cursor: pointer; }
a { color: inherit; text-decoration: none; }

.container {
    width: min(1180px, 92%);
    margin: auto;
}

header {
    position: sticky;
    top: 0;
    z-index: 50;
    background: var(--surface);
    border-bottom: 1px solid var(--border);
}

.navbar {
    min-height: 70px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 15px;
}

.logo {
    font-family: 'Space Grotesk', sans-serif;
    font-size: 21px;
    font-weight: 700;
    letter-spacing: -1px;
}

.logo span { color: var(--primary); }

.nav-right {
    display: flex;
    align-items: center;
    gap: 12px;
}

.icon-btn, .github-btn, .primary-btn, .secondary-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    border-radius: 10px;
    padding: 9px 14px;
    border: 1px solid var(--border);
    background: var(--surface);
    color: var(--text);
    font-size: 13px;
    transition: .2s;
}

.icon-btn {
    width: 38px;
    height: 38px;
    padding: 0;
}

.icon-btn:hover, .secondary-btn:hover {
    border-color: var(--primary);
    color: var(--primary);
}

.github-btn {
    background: var(--text);
    color: var(--surface);
    border-color: transparent;
}

.github-btn:hover { opacity: .85; }

.hero {
    padding: 50px 0 35px;
    position: relative;
    overflow: hidden;
}

.hero::before {
    content: "";
    position: absolute;
    width: 300px;
    height: 300px;
    background: rgba(151, 119, 255, .12);
    filter: blur(80px);
    border-radius: 50%;
    top: -120px;
    right: -40px;
    pointer-events: none;
}

.hero-grid {
    display: grid;
    grid-template-columns: 1.4fr .8fr;
    gap: 30px;
    align-items: center;
}

.eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 6px 12px;
    border-radius: 30px;
    background: var(--primary-light);
    color: var(--primary);
    font-size: 12px;
    font-weight: 700;
    margin-bottom: 16px;
}

.eyebrow i { font-size: 11px; }

h1, h2, h3, .stat-number {
    font-family: 'Space Grotesk', sans-serif;
}

h1 {
    font-size: clamp(32px, 4.5vw, 48px);
    line-height: 1.1;
    letter-spacing: -2px;
    margin-bottom: 16px;
}

.gradient-text {
    background: linear-gradient(100deg, var(--primary), var(--pink));
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
}

.hero-description {
    color: var(--muted);
    max-width: 520px;
    font-size: 15px;
    margin-bottom: 20px;
}

.hero-buttons {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

.primary-btn {
    background: var(--primary);
    color: white;
    border-color: var(--primary);
    font-weight: 700;
}

.primary-btn:hover { transform: translateY(-2px); }

.profile-card {
    position: relative;
    background: var(--surface);
    border: 1px solid var(--border);
    padding: 22px;
    border-radius: 20px;
    box-shadow: var(--shadow);
}

.profile-top {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 16px;
}

.avatar {
    width: 56px;
    height: 56px;
    border-radius: 16px;
    display: grid;
    place-items: center;
    background: linear-gradient(135deg, #7958e9, #e987c0);
    color: white;
    font-size: 24px;
    font-weight: 700;
    font-family: 'Space Grotesk', sans-serif;
}

.profile-card h3 { font-size: 18px; }
.profile-card .muted { color: var(--muted); font-size: 12px; }

.profile-line {
    display: flex;
    gap: 10px;
    align-items: center;
    padding: 10px 0;
    border-top: 1px solid var(--border);
    font-size: 13px;
}

.profile-line i {
    color: var(--primary);
    width: 16px;
    text-align: center;
}

.stats {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 14px;
    margin: 10px 0 45px;
}

.stat-card {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 18px;
    border: 1px solid var(--border);
    border-radius: 16px;
    background: var(--surface);
}

.stat-icon {
    display: grid;
    place-items: center;
    width: 42px;
    height: 42px;
    flex-shrink: 0;
    border-radius: 12px;
    background: var(--primary-light);
    color: var(--primary);
    font-size: 16px;
}

.stat-number { font-size: 22px; font-weight: 700; line-height: 1.2; }
.stat-label { color: var(--muted); font-size: 12px; }

.section-heading {
    display: flex;
    justify-content: space-between;
    align-items: end;
    gap: 15px;
    margin-bottom: 20px;
}

.section-heading h2 {
    font-size: clamp(24px, 3.5vw, 32px);
    letter-spacing: -0.8px;
}

.section-heading p {
    color: var(--muted);
    margin-top: 4px;
    font-size: 13px;
}

.section-tag {
    color: var(--primary);
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1.2px;
    margin-bottom: 6px;
}

.filters {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin-bottom: 22px;
}

.filter-btn {
    padding: 8px 14px;
    border: 1px solid var(--border);
    background: var(--surface);
    color: var(--muted);
    border-radius: 25px;
    font-size: 12px;
    font-weight: 600;
    transition: .2s;
}

.filter-btn.active, .filter-btn:hover {
    background: var(--primary);
    color: white;
    border-color: var(--primary);
}

/* Grille réorganisée sur 3 colonnes pour raccourcir les cartes */
.modules-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 18px;
}

.module-card {
    background: var(--surface);
    border: 1px solid var(--border);
    border-radius: 18px;
    overflow: hidden;
    box-shadow: var(--shadow);
    transition: transform .25s, border-color .25s;
    min-width: 0;
}

.module-card:hover {
    transform: translateY(-3px);
    border-color: var(--primary);
}

.module-content { padding: 18px; }

.module-top {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 10px;
    margin-bottom: 12px;
}

.module-icon {
    width: 38px;
    height: 38px;
    display: grid;
    place-items: center;
    border-radius: 10px;
    background: var(--primary-light);
    color: var(--primary);
    font-size: 16px;
}

.module-code {
    background: var(--bg);
    border: 1px solid var(--border);
    color: var(--muted);
    padding: 4px 8px;
    font-size: 11px;
    border-radius: 6px;
    font-weight: 700;
}

.module-card h3 {
    font-size: 17px;
    line-height: 1.3;
    margin-bottom: 8px;
}

.module-card .description {
    color: var(--muted);
    font-size: 12.5px;
    min-height: 52px;
}

.module-bottom {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 8px;
    margin-top: 14px;
    padding-top: 12px;
    border-top: 1px solid var(--border);
}

.category-label {
    font-size: 11px;
    color: var(--primary);
    background: var(--primary-light);
    padding: 4px 8px;
    border-radius: 6px;
    font-weight: 700;
}

.photo-count { color: var(--muted); font-size: 11px; }

.upload-zone {
    margin: 0 18px 18px;
    padding: 14px;
    border: 1.5px dashed var(--border);
    border-radius: 12px;
    background: var(--bg);
    text-align: center;
    transition: .2s;
}

.upload-zone.dragging {
    border-color: var(--primary);
    background: var(--primary-light);
}

.upload-zone i {
    font-size: 20px;
    color: var(--primary);
    margin-bottom: 4px;
}

.upload-zone p { font-size: 12px; font-weight: 700; }
.upload-zone small { display: block; color: var(--muted); margin: 2px 0 8px; font-size: 11px; }

.upload-label {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: var(--primary);
    color: white;
    padding: 7px 12px;
    border-radius: 8px;
    font-size: 11px;
    font-weight: 700;
    cursor: pointer;
}

.file-input { display: none; }

.gallery {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 6px;
    margin-top: 12px;
}

.gallery-item {
    position: relative;
    aspect-ratio: 1 / 1;
    overflow: hidden;
    border-radius: 8px;
    background: var(--bg);
    border: 1px solid var(--border);
}

.gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform .3s;
}

.gallery-item-actions {
    position: absolute;
    inset: 0;
    background: rgba(17, 16, 27, 0.7);
    backdrop-filter: blur(2px);
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 6px;
    opacity: 0;
    transition: opacity 0.2s ease-in-out;
}

.gallery-item:hover .gallery-item-actions {
    opacity: 1;
}

.gallery-item:hover img {
    transform: scale(1.06);
}

.action-btn {
    width: 28px;
    height: 28px;
    border: none;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.9);
    color: #11101b;
    font-size: 11px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: transform 0.15s, background 0.15s;
}

.action-btn:hover {
    transform: scale(1.1);
    background: #ffffff;
}

.action-btn.delete {
    background: rgba(239, 68, 68, 0.9);
    color: #ffffff;
}

.action-btn.delete:hover {
    background: rgb(239, 68, 68);
}

.empty-gallery {
    grid-column: 1 / -1;
    text-align: center;
    color: var(--muted);
    font-size: 11px;
    padding: 4px;
}

.resources {
    margin: 50px 0;
    padding: 28px;
    border-radius: 20px;
    background: linear-gradient(120deg, #302153, #7252c9);
    color: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 20px;
}

.resources h2 { font-size: 22px; margin-bottom: 6px; }
.resources p { color: #e1d8ff; font-size: 13px; max-width: 520px; }
.resources .secondary-btn { white-space: nowrap; color: #302153; background: white; border-color: white; }

footer {
    border-top: 1px solid var(--border);
    padding: 20px 0;
    color: var(--muted);
    font-size: 12px;
}

.footer-inner {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 15px;
}

.footer-logo { color: var(--text); font-weight: 700; }

.modal-backdrop, .lightbox {
    position: fixed;
    inset: 0;
    z-index: 100;
    background: rgba(12, 9, 22, .75);
    display: none;
    align-items: center;
    justify-content: center;
    padding: 20px;
    backdrop-filter: blur(7px);
}

.modal-backdrop.open, .lightbox.open { display: flex; }

.modal {
    width: min(420px, 100%);
    padding: 24px;
    border-radius: 18px;
    background: var(--surface);
    border: 1px solid var(--border);
    position: relative;
}

.modal h2 { margin-bottom: 8px; font-size: 20px; }
.modal p { color: var(--muted); font-size: 13px; margin-bottom: 16px; }
.modal-close {
    position: absolute;
    right: 12px;
    top: 12px;
    width: 32px;
    height: 32px;
    border: 1px solid var(--border);
    border-radius: 8px;
    background: var(--bg);
    color: var(--text);
}

.lightbox img {
    max-width: min(100%, 1000px);
    max-height: 85vh;
    object-fit: contain;
    border-radius: 12px;
}

.lightbox-close {
    position: absolute;
    right: 25px;
    top: 20px;
    color: white;
    background: transparent;
    border: 0;
    font-size: 30px;
}

.toast {
    position: fixed;
    bottom: 22px;
    left: 50%;
    transform: translate(-50%, 20px);
    background: var(--text);
    color: var(--surface);
    padding: 10px 16px;
    border-radius: 10px;
    z-index: 200;
    opacity: 0;
    pointer-events: none;
    transition: .25s;
    font-size: 12px;
}

.toast.show { opacity: 1; transform: translate(-50%, 0); }

@media (max-width: 1024px) {
    .modules-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); }
}

@media (max-width: 800px) {
    .hero-grid { grid-template-columns: 1fr; }
    .profile-card { max-width: 520px; }
    .stats { grid-template-columns: 1fr; gap: 10px; }
    .stat-card { padding: 14px; }
    .resources { flex-direction: column; align-items: flex-start; padding: 22px; }
}

@media (max-width: 600px) {
    .modules-grid { grid-template-columns: 1fr; }
}

@media (max-width: 480px) {
    .hero { padding-top: 35px; }
    .navbar { min-height: 60px; }
    .logo { font-size: 18px; }
    .github-btn { padding: 8px; font-size: 0; }
    .github-btn i { font-size: 15px; }
    h1 { letter-spacing: -1px; }
    .module-content { padding: 14px; }
    .upload-zone { margin: 0 14px 14px; }
    .section-heading { align-items: flex-start; flex-direction: column; }
    .footer-inner { flex-direction: column; text-align: center; }
}
</style>
</head>

<body>
<header>
    <div class="container navbar">
        <a href="#" class="logo">Ouassima<span>.dev</span></a>

        <div class="nav-right">
            <button class="icon-btn" id="themeToggle" onclick="toggleTheme()" aria-label="Changer le thème">
                <i class="fa-solid fa-moon"></i>
            </button>
            <a class="github-btn" href="<?= htmlspecialchars($githubUrl) ?>" target="_blank" rel="noopener noreferrer">
                <i class="fa-brands fa-github"></i> GitHub
            </a>
        </div>
    </div>
</header>

<main class="container">
    <section class="hero">
        <div class="hero-grid">
            <div>
                <div class="eyebrow">
                    <i class="fa-solid fa-sparkles"></i>
                    PORTFOLIO ÉTUDIANT · OFPPT
                </div>

                <h1>
                    Mes projets,<br>
                    mon parcours <span class="gradient-text">digital.</span>
                </h1>

                <p class="hero-description">
                    Bienvenue dans mon portfolio. Découvrez mes modules,
                    mes travaux pratiques et les captures de mes réalisations
                    en développement digital.
                </p>

                <div class="hero-buttons">
                    <a href="#modules" class="primary-btn">
                        <i class="fa-solid fa-folder-open"></i> Découvrir mes travaux
                    </a>
                    <button class="secondary-btn" onclick="openResources()">
                        <i class="fa-solid fa-link"></i> Mes ressources
                    </button>
                </div>
            </div>

            <aside class="profile-card">
                <div class="profile-top">
                    <div class="avatar">O</div>
                    <div>
                        <h3><?= htmlspecialchars($studentName) ?></h3>
                        <p class="muted">Étudiante en développement digital</p>
                    </div>
                </div>

                <div class="profile-line">
                    <i class="fa-solid fa-graduation-cap"></i>
                    <span><?= htmlspecialchars($specialization) ?></span>
                </div>
                <div class="profile-line">
                    <i class="fa-solid fa-code"></i>
                    <span>Web development & programmation</span>
                </div>
                <div class="profile-line">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>Tanger, Maroc</span>
                </div>
                <div class="profile-line">
                    <i class="fa-solid fa-heart"></i>
                    <span>Créativité · Apprentissage · Innovation</span>
                </div>
            </aside>
        </div>
    </section>

    <section class="stats" aria-label="Statistiques du portfolio">
        <div class="stat-card">
            <div class="stat-icon"><i class="fa-solid fa-book-open"></i></div>
            <div>
                <div class="stat-number"><?= count($modules) ?></div>
                <div class="stat-label">Modules présentés</div>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon"><i class="fa-solid fa-images"></i></div>
            <div>
                <div class="stat-number" id="totalPhotos">0</div>
                <div class="stat-label">Captures ajoutées</div>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon"><i class="fa-solid fa-layer-group"></i></div>
            <div>
                <div class="stat-number">2026</div>
                <div class="stat-label">Année de formation</div>
            </div>
        </div>
    </section>

    <section id="modules">
        <div class="section-heading">
            <div>
                <div class="section-tag">Mon apprentissage</div>
                <h2>Modules & réalisations</h2>
                <p>Ajoutez les captures d'écran de vos TP et ateliers.</p>
            </div>
        </div>

        <div class="filters">
            <button class="filter-btn active" onclick="filterModules('all', this)">Tous les modules</button>
            <button class="filter-btn" onclick="filterModules('base', this)">Gestion de projet</button>
            <button class="filter-btn" onclick="filterModules('web', this)">Frontend</button>
            <button class="filter-btn" onclick="filterModules('backend', this)">Backend & Cloud</button>
            <button class="filter-btn" onclick="filterModules('database', this)">Bases de données</button>
        </div>

        <div class="modules-grid" id="modulesGrid">
            <?php foreach ($modules as $module): ?>
            <article class="module-card" data-category="<?= htmlspecialchars($module['category']) ?>"
                     data-code="<?= htmlspecialchars($module['code']) ?>">
                <div class="module-content">
                    <div class="module-top">
                        <div class="module-icon">
                            <i class="fa-solid <?= htmlspecialchars($module['icon']) ?>"></i>
                        </div>
                        <span class="module-code"><?= htmlspecialchars($module['code']) ?></span>
                    </div>

                    <h3><?= htmlspecialchars($module['title']) ?></h3>
                    <p class="description"><?= htmlspecialchars($module['description']) ?></p>

                    <div class="module-bottom">
                        <span class="category-label">
                            <?php
                            $labels = [
                                "base" => "Gestion de projet",
                                "web" => "Frontend",
                                "backend" => "Backend & Cloud",
                                "database" => "Base de données"
                            ];
                            echo htmlspecialchars($labels[$module['category']]);
                            ?>
                        </span>
                        <span class="photo-count" id="count-<?= htmlspecialchars($module['code']) ?>">0 image(s)</span>
                    </div>
                </div>

                <div class="upload-zone" data-code="<?= htmlspecialchars($module['code']) ?>">
                    <i class="fa-solid fa-cloud-arrow-up"></i>
                    <p>Ajouter vos captures</p>
                    <small>Glissez vos images ici ou sélectionnez des fichiers</small>

                    <label class="upload-label">
                        <i class="fa-solid fa-plus"></i> Choisir des images
                        <input
                            class="file-input"
                            type="file"
                            accept="image/*"
                            multiple
                            onchange="handleFileSelect(this, '<?= htmlspecialchars($module['code']) ?>')"
                        >
                    </label>

                    <div class="gallery" id="gallery-<?= htmlspecialchars($module['code']) ?>">
                        <div class="empty-gallery">Aucune capture ajoutée pour le moment.</div>
                    </div>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="resources">
        <div>
            <h2>Un projet en tête ? ✨</h2>
            <p>
                Retrouvez mes ressources et mon profil GitHub pour découvrir
                mes travaux et suivre mon évolution en développement web.
            </p>
        </div>
        <button class="secondary-btn" onclick="openResources()">
            <i class="fa-solid fa-arrow-up-right-from-square"></i> Voir mes ressources
        </button>
    </section>
</main>

<footer>
    <div class="container footer-inner">
        <div class="footer-logo">Ouassima.dev</div>
        <p>Portfolio étudiant · Développement Digital</p>
        <p>© <span id="currentYear"></span> <?= htmlspecialchars($studentName) ?></p>
    </div>
</footer>

<div class="modal-backdrop" id="resourcesModal" onclick="backdropClose(event)">
    <div class="modal">
        <button class="modal-close" onclick="closeResources()" aria-label="Fermer">
            <i class="fa-solid fa-xmark"></i>
        </button>
        <div class="module-icon" style="margin-bottom:14px">
            <i class="fa-brands fa-github"></i>
        </div>
        <h2>Mes ressources</h2>
        <p>
            Retrouvez mes projets et mes travaux sur GitHub.
            Ce portfolio présente mes modules et mes réalisations de formation.
        </p>
        <a class="primary-btn" href="<?= htmlspecialchars($githubUrl) ?>" target="_blank" rel="noopener noreferrer">
            <i class="fa-brands fa-github"></i> Ouvrir GitHub
        </a>
    </div>
</div>

<div class="lightbox" id="lightbox" onclick="closeLightbox()">
    <button class="lightbox-close" aria-label="Fermer">&times;</button>
    <img id="lightboxImage" src="" alt="Aperçu de la capture" onclick="event.stopPropagation()">
</div>

<div class="toast" id="toast"></div>

<script>
const moduleCodes = <?= json_encode(array_column($modules, 'code')) ?>;

const exerciseData = {};
moduleCodes.forEach(code => exerciseData[code] = []);

document.getElementById('currentYear').textContent = new Date().getFullYear();

function toggleTheme() {
    const isDark = document.body.classList.toggle('dark');
    const icon = document.querySelector('#themeToggle i');

    icon.className = isDark ? 'fa-solid fa-sun' : 'fa-solid fa-moon';

    try {
        localStorage.setItem('portfolioTheme', isDark ? 'dark' : 'light');
    } catch (error) {}
}

try {
    if (localStorage.getItem('portfolioTheme') === 'dark') {
        document.body.classList.add('dark');
        document.querySelector('#themeToggle i').className = 'fa-solid fa-sun';
    }
} catch (error) {}

function filterModules(category, button) {
    document.querySelectorAll('.filter-btn').forEach(btn => btn.classList.remove('active'));
    button.classList.add('active');

    document.querySelectorAll('.module-card').forEach(card => {
        card.style.display =
            category === 'all' || card.dataset.category === category ? '' : 'none';
    });
}

function handleFileSelect(input, code) {
    processFiles(input.files, code);
    input.value = '';
}

function processFiles(files, code) {
    const allowedTypes = ['image/jpeg', 'image/png', 'image/webp', 'image/gif'];

    Array.from(files).forEach(file => {
        if (!allowedTypes.includes(file.type)) {
            showToast('Choisissez une image JPG, PNG, WEBP ou GIF.');
            return;
        }

        if (file.size > 5 * 1024 * 1024) {
            showToast('Chaque image doit faire moins de 5 Mo.');
            return;
        }

        const reader = new FileReader();

        reader.onload = event => {
            exerciseData[code].push({
                id: crypto.randomUUID ? crypto.randomUUID() :
                    Date.now() + '-' + Math.random(),
                name: file.name,
                src: event.target.result
            });

            renderGallery(code);
            updateTotalCounter();
            showToast('Image ajoutée avec succès !');
        };

        reader.readAsDataURL(file);
    });
}

function renderGallery(code) {
    const gallery = document.getElementById('gallery-' + code);
    gallery.replaceChildren();

    const images = exerciseData[code];

    document.getElementById('count-' + code).textContent =
        images.length + (images.length > 1 ? ' images' : ' image');

    if (images.length === 0) {
        const empty = document.createElement('div');
        empty.className = 'empty-gallery';
        empty.textContent = 'Aucune capture ajoutée pour le moment.';
        gallery.appendChild(empty);
        return;
    }

    images.forEach(imgObj => {
        const item = document.createElement('div');
        item.className = 'gallery-item';

        const image = document.createElement('img');
        image.src = imgObj.src;
        image.alt = imgObj.name;

        const actionsDiv = document.createElement('div');
        actionsDiv.className = 'gallery-item-actions';

        const expandBtn = document.createElement('button');
        expandBtn.className = 'action-btn';
        expandBtn.type = 'button';
        expandBtn.title = 'Agrandir';
        expandBtn.innerHTML = '<i class="fa-solid fa-expand"></i>';
        expandBtn.addEventListener('click', () => openLightbox(imgObj.src));

        const deleteBtn = document.createElement('button');
        deleteBtn.className = 'action-btn delete';
        deleteBtn.type = 'button';
        deleteBtn.title = 'Supprimer';
        deleteBtn.innerHTML = '<i class="fa-solid fa-trash"></i>';
        deleteBtn.addEventListener('click', () => deleteImage(code, imgObj.id));

        actionsDiv.append(expandBtn, deleteBtn);
        item.append(image, actionsDiv);
        gallery.appendChild(item);
    });
}

function deleteImage(code, id) {
    exerciseData[code] = exerciseData[code].filter(img => img.id !== id);
    renderGallery(code);
    updateTotalCounter();
    showToast('Image supprimée.');
}

function updateTotalCounter() {
    const total = Object.values(exerciseData)
        .reduce((sum, images) => sum + images.length, 0);

    document.getElementById('totalPhotos').textContent = total;
}

function openLightbox(src) {
    document.getElementById('lightboxImage').src = src;
    document.getElementById('lightbox').classList.add('open');
}

function closeLightbox() {
    document.getElementById('lightbox').classList.remove('open');
    document.getElementById('lightboxImage').src = '';
}

function openResources() {
    document.getElementById('resourcesModal').classList.add('open');
}

function closeResources() {
    document.getElementById('resourcesModal').classList.remove('open');
}

function backdropClose(event) {
    if (event.target.id === 'resourcesModal') closeResources();
}

document.querySelectorAll('.upload-zone').forEach(zone => {
    zone.addEventListener('dragover', event => {
        event.preventDefault();
        zone.classList.add('dragging');
    });

    zone.addEventListener('dragleave', () => {
        zone.classList.remove('dragging');
    });

    zone.addEventListener('drop', event => {
        event.preventDefault();
        zone.classList.remove('dragging');

        const code = zone.dataset.code;
        processFiles(event.dataTransfer.files, code);
    });
});

document.addEventListener('keydown', event => {
    if (event.key === 'Escape') {
        closeLightbox();
        closeResources();
    }
});

let toastTimer;

function showToast(message) {
    const toast = document.getElementById('toast');
    toast.textContent = message;
    toast.classList.add('show');

    clearTimeout(toastTimer);
    toastTimer = setTimeout(() => toast.classList.remove('show'), 2500);
}
</script>
</body>
</html>