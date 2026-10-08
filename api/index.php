<?php
// Configuration d'utilisateur
$studentName = "Ouassima";
$specialization = "Développement Digital - Option Web Fullstack";
$githubUrl = "https://github.com/ouassima";

// Liste des modules OFPPT
$modules = [
    [
        'id' => 'm101',
        'code' => 'M101',
        'title' => 'Acquérir les bases du développement',
        'category' => 'base',
        'desc' => 'Algorithmique, logique de programmation et structures de données de base.'
    ],
    [
        'id' => 'm102',
        'code' => 'M102',
        'title' => 'Concevoir des sites web statiques',
        'category' => 'web',
        'desc' => 'Création d\'interfaces web structurées et modernes avec HTML5 et CSS3.'
    ],
    [
        'id' => 'm103',
        'code' => 'M103',
        'title' => 'Programmation dynamique côté client',
        'category' => 'web',
        'desc' => 'Interactivité web avec JavaScript moderne (ES6+) et manipulation du DOM.'
    ],
    [
        'id' => 'm104',
        'code' => 'M104',
        'title' => 'Bases de données relationnelles',
        'category' => 'database',
        'desc' => 'Conception (MCD/MLD) et manipulation de bases de données avec SQL / MySQL.'
    ],
    [
        'id' => 'm105',
        'code' => 'M105',
        'title' => 'Développement côté serveur',
        'category' => 'backend',
        'desc' => 'Création d\'applications web dynamiques avec PHP et architecture MVC.'
    ]
];
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Portfolio • <?php echo htmlspecialchars($studentName); ?></title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&family=Syne:wght@700;800&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>

        :root {
            --bg: #090d16;
            --bg-card: rgba(22, 31, 49, 0.6);
            --border: rgba(255, 255, 255, 0.08);
            --primary: #6366f1;
            --primary-glow: rgba(99, 102, 241, 0.25);
            --accent: #ec4899;
            --text-main: #f8fafc;
            --text-muted: #94a3b8;

            --font-head: 'Syne', sans-serif;
            --font-body: 'Plus Jakarta Sans', sans-serif;
        }

        .light-mode {
            --bg: #f8fafc;
            --bg-card: rgba(255, 255, 255, 0.8);
            --border: rgba(0, 0, 0, 0.08);
            --primary: #4f46e5;
            --primary-glow: rgba(79, 70, 229, 0.15);
            --accent: #db2777;
            --text-main: #0f172a;
            --text-muted: #64748b;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            transition: background 0.3s, color 0.3s, border-color 0.3s, transform 0.2s;
        }

        body {
            background-color: var(--bg);
            color: var(--text-main);
            font-family: var(--font-body);
            min-height: 100vh;
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* Background Glow */
        .bg-glow {
            position: fixed;
            width: 600px;
            height: 600px;
            border-radius: 50%;

            background: radial-gradient(
                circle,
                var(--primary-glow) 0%,
                rgba(0,0,0,0) 70%
            );

            top: -200px;
            right: -200px;

            pointer-events: none;
            z-index: 0;
        }

        /* Header */

        header {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;

            display: flex;
            justify-content: space-between;
            align-items: center;

            position: relative;
            z-index: 10;
        }

        .logo {
            font-family: var(--font-head);
            font-size: 1.5rem;
            font-weight: 800;

            background: linear-gradient(
                135deg,
                var(--text-main),
                var(--primary)
            );

            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .header-actions {
            display: flex;
            gap: 1rem;
        }

        .btn-icon {
            background: var(--bg-card);
            border: 1px solid var(--border);

            color: var(--text-main);

            padding: 0.6rem 1.2rem;

            border-radius: 50px;

            cursor: pointer;

            backdrop-filter: blur(12px);

            display: flex;
            align-items: center;
            gap: 8px;

            font-size: 0.9rem;
            font-weight: 500;
        }

        .btn-icon:hover {
            border-color: var(--primary);
            box-shadow: 0 0 15px var(--primary-glow);
        }

        /* Hero */

        .hero {
            max-width: 1200px;
            margin: 3rem auto;
            padding: 0 2rem;

            position: relative;
            z-index: 1;
        }

        .hero h1 {
            font-family: var(--font-head);

            font-size: clamp(
                2.5rem,
                5vw,
                4rem
            );

            line-height: 1.1;
            margin-bottom: 1rem;
        }

        .hero h1 span {
            color: var(--primary);
        }

        .hero p {
            color: var(--text-muted);
            font-size: 1.1rem;
            max-width: 600px;
        }

        /* Stats */

        .stats-bar {
            display: flex;
            gap: 2rem;

            margin-top: 2rem;
            padding: 1.5rem;

            background: var(--bg-card);
            border: 1px solid var(--border);

            border-radius: 16px;

            backdrop-filter: blur(12px);

            width: fit-content;
        }

        .stat-item {
            display: flex;
            flex-direction: column;
        }

        .stat-num {
            font-family: var(--font-head);
            font-size: 1.8rem;
            font-weight: 800;
            color: var(--accent);
        }

        .stat-lbl {
            font-size: 0.8rem;
            color: var(--text-muted);

            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Filters */

        .filters {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 2rem;

            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .filter-btn {
            background: transparent;

            border: 1px solid var(--border);

            color: var(--text-muted);

            padding: 0.5rem 1.2rem;

            border-radius: 8px;

            cursor: pointer;
            font-size: 0.85rem;
        }

        .filter-btn.active,
        .filter-btn:hover {
            background: var(--primary);
            color: #fff;
            border-color: var(--primary);
        }

        /* Modules */

        .modules-grid {
            max-width: 1200px;

            margin: 0 auto 5rem;
            padding: 0 2rem;

            display: grid;

            grid-template-columns:
                repeat(
                    auto-fill,
                    minmax(340px, 1fr)
                );

            gap: 1.5rem;

            position: relative;
            z-index: 1;
        }

        .card {
            background: var(--bg-card);

            border: 1px solid var(--border);

            border-radius: 20px;

            padding: 1.5rem;

            backdrop-filter: blur(12px);

            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .card:hover {
            transform: translateY(-5px);
            border-color: var(--primary);
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;

            margin-bottom: 1rem;
        }

        .card-badge {
            background: rgba(99, 102, 241, 0.1);

            color: var(--primary);

            padding: 4px 10px;

            border-radius: 6px;

            font-size: 0.75rem;
            font-weight: 700;
        }

        .card-title {
            font-size: 1.2rem;
            font-weight: 600;

            margin-bottom: 0.5rem;
        }

        .card-desc {
            color: var(--text-muted);

            font-size: 0.9rem;

            margin-bottom: 1.5rem;
        }

        /* Upload */

        .drop-zone {
            border: 2px dashed var(--border);

            border-radius: 12px;

            padding: 1.5rem 1rem;

            text-align: center;

            cursor: pointer;

            margin-bottom: 1rem;

            background: rgba(0,0,0,0.1);
        }

        .drop-zone:hover,
        .drop-zone.dragover {
            border-color: var(--primary);
            background: var(--primary-glow);
        }

        .drop-zone i {
            font-size: 1.5rem;

            color: var(--primary);

            margin-bottom: 0.5rem;
        }

        .drop-zone p {
            font-size: 0.8rem;
            color: var(--text-muted);
        }

        /* Gallery */

        .gallery-grid {
            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 8px;

            margin-bottom: 1.5rem;

            min-height: 50px;
        }

        .gallery-item {
            position: relative;

            aspect-ratio: 1;

            border-radius: 8px;

            overflow: hidden;

            border: 1px solid var(--border);

            cursor: zoom-in;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;

            object-fit: cover;

            display: block;
        }

        .gallery-item-actions {
            position: absolute;

            inset: 0;

            background: rgba(0,0,0,0.6);

            display: flex;

            align-items: center;
            justify-content: center;

            gap: 5px;

            opacity: 0;

            transition: opacity 0.2s;
        }

        .gallery-item:hover .gallery-item-actions {
            opacity: 1;
        }

        .action-btn {
            background: #fff;
            color: #000;

            border: none;

            width: 28px;
            height: 28px;

            border-radius: 50%;

            cursor: pointer;

            font-size: 0.75rem;

            position: relative;
            z-index: 5;
        }

        /* Atelier Button */

        .btn-atelier {
            width: 100%;

            background: var(--primary);

            color: #fff;

            border: none;

            padding: 0.8rem;

            border-radius: 10px;

            font-weight: 600;

            cursor: pointer;

            display: flex;

            align-items: center;
            justify-content: center;

            gap: 8px;
        }

        .btn-atelier:hover {
            opacity: 0.9;
        }

        /* Modal */

        .modal {
            display: none;

            position: fixed;

            inset: 0;

            background: rgba(0,0,0,0.7);

            backdrop-filter: blur(8px);

            z-index: 100;

            align-items: center;
            justify-content: center;
        }

        .modal-box {
            background: var(--bg-card);

            border: 1px solid var(--border);

            padding: 2rem;

            border-radius: 20px;

            max-width: 500px;

            width: 90%;
        }

        .modal-footer {
            display: flex;

            flex-direction: column;

            gap: 10px;

            margin-top: 1.5rem;
        }

        .btn-res {
            padding: 0.8rem;

            border-radius: 10px;

            text-decoration: none;

            color: #fff;

            display: flex;

            align-items: center;

            gap: 10px;

            font-size: 0.9rem;
        }

        .btn-github {
            background: #24292e;
        }

        .btn-ennonce {
            background: #0284c7;
        }

        .btn-secondary {
            background: transparent;

            border: 1px solid var(--border);

            color: var(--text-main);
        }

        /* IMAGE ZOOM MODAL */

        .image-modal {
            display: none;

            position: fixed;

            inset: 0;

            background: rgba(0, 0, 0, 0.92);

            backdrop-filter: blur(10px);

            z-index: 999;

            align-items: center;
            justify-content: center;

            padding: 30px;

            cursor: zoom-out;
        }

        .image-modal img {
            max-width: 92%;
            max-height: 90vh;

            width: auto;
            height: auto;

            object-fit: contain;

            border-radius: 12px;

            box-shadow:
                0 0 40px rgba(0,0,0,0.5);

            cursor: default;
        }

        .image-modal-close {
            position: absolute;

            top: 20px;
            right: 25px;

            width: 48px;
            height: 48px;

            border: none;

            border-radius: 50%;

            background: rgba(255,255,255,0.15);

            color: white;

            font-size: 30px;

            cursor: pointer;

            display: flex;

            align-items: center;
            justify-content: center;

            z-index: 1000;
        }

        .image-modal-close:hover {
            background: rgba(255,255,255,0.3);

            transform: rotate(90deg);
        }

        /* Footer */

        footer {
            text-align: center;

            padding: 2rem;

            color: var(--text-muted);

            border-top: 1px solid var(--border);

            font-size: 0.9rem;
        }

        .file-input-hidden {
            display: none;
        }

        /* Responsive */

        @media (max-width: 600px) {

            header {
                padding: 1.2rem;
            }

            .header-actions {
                gap: 5px;
            }

            .btn-icon {
                padding: 0.5rem 0.8rem;
            }

            .modules-grid {
                grid-template-columns: 1fr;
                padding: 0 1rem;
            }

            .hero {
                padding: 0 1rem;
            }

            .filters {
                padding: 0 1rem;
            }

            .stats-bar {
                width: 100%;
            }
        }

    </style>
</head>

<body>

    <div class="bg-glow"></div>

    <!-- HEADER -->

    <header>

        <div class="logo">
            <?php echo htmlspecialchars($studentName); ?>.dev
        </div>

        <div class="header-actions">

            <button class="btn-icon" onclick="toggleTheme()">

                <i class="fa-solid fa-moon" id="themeIcon"></i>

                <span id="themeText">
                    Dark
                </span>

            </button>

            <a href="<?php echo htmlspecialchars($githubUrl); ?>"
                target="_blank"
                class="btn-icon"
                style="text-decoration:none;">

                <i class="fa-brands fa-github"></i>

                Github

            </a>

        </div>

    </header>


    <!-- HERO -->

    <section class="hero">

        <h1>
            Portfolio des
            <span>Ateliers</span>
            & Travaux Pratiques
        </h1>

        <p>
            <?php echo htmlspecialchars($specialization); ?>
            • ISTA OFPPT
        </p>


        <div class="stats-bar">

            <div class="stat-item">

                <span class="stat-num">
                    <?php echo count($modules); ?>
                </span>

                <span class="stat-lbl">
                    Modules
                </span>

            </div>


            <div class="stat-item">

                <span class="stat-num"
                    id="totalExercisesCount">
                    0
                </span>

                <span class="stat-lbl">
                    Captures
                </span>

            </div>

        </div>

    </section>


    <!-- FILTERS -->

    <div class="filters">

        <button class="filter-btn active"
            onclick="filterModules('all', this)">
            Tous
        </button>

        <button class="filter-btn"
            onclick="filterModules('base', this)">
            Bases
        </button>

        <button class="filter-btn"
            onclick="filterModules('web', this)">
            Web Frontend
        </button>

        <button class="filter-btn"
            onclick="filterModules('backend', this)">
            Backend
        </button>

        <button class="filter-btn"
            onclick="filterModules('database', this)">
            Base de données
        </button>

    </div>


    <!-- MODULES -->

    <section class="modules-grid">

        <?php foreach ($modules as $mod): ?>

            <div class="card"
                data-category="<?php echo $mod['category']; ?>">

                <div>

                    <div class="card-header">

                        <span class="card-badge">
                            <?php echo $mod['code']; ?>
                        </span>

                        <span
                            style="font-size:0.75rem;color:var(--text-muted);"
                            id="count-<?php echo $mod['id']; ?>">

                            0 image(s)

                        </span>

                    </div>


                    <h2 class="card-title">

                        <?php echo htmlspecialchars($mod['title']); ?>

                    </h2>


                    <p class="card-desc">

                        <?php echo htmlspecialchars($mod['desc']); ?>

                    </p>


                    <!-- DROPZONE -->

                    <div class="drop-zone"

                        onclick="document.getElementById('file-<?php echo $mod['id']; ?>').click()"

                        ondragover="handleDragOver(event)"

                        ondragleave="handleDragLeave(event)"

                        ondrop="handleDrop(event, '<?php echo $mod['id']; ?>')">

                        <i class="fa-solid fa-cloud-arrow-up"></i>

                        <p>
                            Glissez vos captures ici ou
                            <b>Parcourir</b>
                        </p>


                        <input
                            type="file"

                            id="file-<?php echo $mod['id']; ?>"

                            class="file-input-hidden"

                            accept="image/*"

                            multiple

                            onchange="handleFileSelect(event, '<?php echo $mod['id']; ?>')">

                    </div>


                    <!-- GALLERY -->

                    <div
                        class="gallery-grid"
                        id="gallery-<?php echo $mod['id']; ?>">
                    </div>

                </div>


                <!-- RESOURCES -->

                <button
                    class="btn-atelier"

                    onclick="openAtelier(
                        '<?php echo addslashes($mod['code'] . ' - ' . $mod['title']); ?>',
                        '<?php echo addslashes($mod['desc']); ?>',
                        '<?php echo addslashes($githubUrl); ?>'
                    )">

                    <i class="fa-solid fa-folder-open"></i>

                    Ressources

                </button>

            </div>

        <?php endforeach; ?>

    </section>


    <!-- ATELIER MODAL -->

    <div id="atelierModal" class="modal">

        <div class="modal-box">

            <h3
                id="modalTitle"
                style="margin-bottom:0.5rem;">
            </h3>

            <p
                id="modalDesc"
                style="color:var(--text-muted);font-size:0.9rem;">
            </p>


            <div class="modal-footer">

                <a
                    id="modalGithub"
                    href="#"
                    class="btn-res btn-github"
                    target="_blank">

                    <i class="fa-brands fa-github"></i>

                    Consulter sur GitHub

                </a>


                <button
                    onclick="closeAtelier()"

                    class="btn-res btn-secondary"

                    style="
                        justify-content:center;
                        cursor:pointer;
                    ">

                    Fermer

                </button>

            </div>

        </div>

    </div>


    <!-- IMAGE ZOOM MODAL -->

    <div
        id="imageModal"
        class="image-modal"
        onclick="closeImageModal()">

        <button
            class="image-modal-close"
            onclick="event.stopPropagation(); closeImageModal()">

            ×

        </button>


        <img
            id="zoomedImage"
            src=""
            alt="Image agrandie"
            onclick="event.stopPropagation()">

    </div>


    <!-- FOOTER -->

    <footer>

        <p>

            &copy;
            <?php echo date('Y'); ?>

            <span>
                <?php echo htmlspecialchars($studentName); ?>
            </span>

            • Tous droits réservés.

        </p>

    </footer>


    <!-- JAVASCRIPT -->

    <script>

        const exerciseData = {};


        /* THEME */

        function toggleTheme() {

            document.body.classList.toggle('light-mode');

            const isLight =
                document.body.classList.contains('light-mode');

            document.getElementById('themeText').textContent =
                isLight ? 'Light' : 'Dark';

            document.getElementById('themeIcon').className =
                isLight
                    ? 'fa-solid fa-sun'
                    : 'fa-solid fa-moon';
        }


        /* FILTER */

        function filterModules(category, button) {

            document
                .querySelectorAll('.filter-btn')
                .forEach(btn =>
                    btn.classList.remove('active')
                );

            button.classList.add('active');


            document
                .querySelectorAll('.card')
                .forEach(card => {

                    if (
                        category === 'all' ||
                        card.dataset.category === category
                    ) {

                        card.style.display = 'flex';

                    } else {

                        card.style.display = 'none';

                    }

                });

        }


        /* DRAG & DROP */

        function handleDragOver(e) {

            e.preventDefault();

            e.currentTarget.classList.add('dragover');

        }


        function handleDragLeave(e) {

            e.currentTarget.classList.remove('dragover');

        }


        function handleDrop(e, moduleId) {

            e.preventDefault();

            e.currentTarget.classList.remove('dragover');

            processFiles(
                e.dataTransfer.files,
                moduleId
            );

        }


        /* FILE SELECT */

        function handleFileSelect(e, moduleId) {

            processFiles(
                e.target.files,
                moduleId
            );

        }


        /* PROCESS IMAGES */

        function processFiles(files, moduleId) {

            if (!exerciseData[moduleId]) {

                exerciseData[moduleId] = [];

            }


            Array
                .from(files)
                .forEach(file => {

                    if (
                        file.type.startsWith('image/')
                    ) {

                        const reader =
                            new FileReader();


                        reader.onload =
                            function(e) {

                                exerciseData[moduleId]
                                    .push({

                                        id:
                                            Date.now()
                                            +
                                            Math.random(),

                                        src:
                                            e.target.result

                                    });


                                renderGallery(
                                    moduleId
                                );


                                updateTotalCounter();

                            };


                        reader.readAsDataURL(file);

                    }

                });

        }


        /* RENDER GALLERY */

        function renderGallery(moduleId) {

            const gallery =
                document.getElementById(
                    `gallery-${moduleId}`
                );


            const countLabel =
                document.getElementById(
                    `count-${moduleId}`
                );


            const images =
                exerciseData[moduleId] || [];


            countLabel.textContent =
                `${images.length} image(s)`;


            gallery.innerHTML = '';


            images.forEach(imgObj => {

                const item =
                    document.createElement('div');


                item.className =
                    'gallery-item';


                item.innerHTML = `

                    <img
                        src="${imgObj.src}"
                        alt="Capture"
                        onclick="openImageModal('${imgObj.src}')">

                    <div class="gallery-item-actions">

                        <button
                            class="action-btn"

                            onclick="
                                event.stopPropagation();
                                deleteImage(
                                    '${moduleId}',
                                    ${imgObj.id}
                                );
                            ">

                            <i class="fa-solid fa-trash"></i>

                        </button>

                    </div>

                `;


                gallery.appendChild(item);

            });

        }


        /* DELETE */

        function deleteImage(moduleId, imgId) {

            exerciseData[moduleId] =
                exerciseData[moduleId]
                    .filter(
                        img => img.id !== imgId
                    );


            renderGallery(moduleId);

            updateTotalCounter();

        }


        /* TOTAL */

        function updateTotalCounter() {

            let total = 0;


            Object
                .values(exerciseData)
                .forEach(arr => {

                    total += arr.length;

                });


            document
                .getElementById(
                    'totalExercisesCount'
                )
                .textContent = total;

        }


        /* OPEN IMAGE ZOOM */

        function openImageModal(src) {

            document
                .getElementById('zoomedImage')
                .src = src;


            document
                .getElementById('imageModal')
                .style.display = 'flex';


            document.body.style.overflow = 'hidden';

        }


        /* CLOSE IMAGE ZOOM */

        function closeImageModal() {

            document
                .getElementById('imageModal')
                .style.display = 'none';


            document
                .getElementById('zoomedImage')
                .src = '';


            document.body.style.overflow = '';

        }


        /* ESC TO CLOSE */

        document.addEventListener(
            'keydown',
            function(e) {

                if (e.key === 'Escape') {

                    closeImageModal();

                }

            }
        );


        /* ATELIER MODAL */

        function openAtelier(
            title,
            desc,
            githubUrl
        ) {

            document
                .getElementById('modalTitle')
                .textContent = title;


            document
                .getElementById('modalDesc')
                .textContent = desc;


            document
                .getElementById('modalGithub')
                .href = githubUrl;


            document
                .getElementById('atelierModal')
                .style.display = 'flex';

        }


        function closeAtelier() {

            document
                .getElementById('atelierModal')
                .style.display = 'none';

        }

    </script>

</body>

</html>