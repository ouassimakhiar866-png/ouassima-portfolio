<?php
// Configuration d'utilisateur
$studentName = "Ouassima";
$specialization = "Développement Digital - Option Web Fullstack";
$githubUrl = "https://github.com/ouassima";

// Liste des modules OFPPT - 2ème Année (Web Fullstack)
$modules = [
    [
        'id' => 'm201',
        'code' => 'M201',
        'title' => 'Préparation d\'un projet web',
        'category' => 'base',
        'desc' => 'Conception UX/UI, Wireframing, Figma, Agile (Scrum) et Cahier des charges.'
    ],
    [
        'id' => 'm202',
        'code' => 'M202',
        'title' => 'Approche agile et gestion de projet',
        'category' => 'base',
        'desc' => 'Planification, suivi de projets informatiques et méthodologies agiles.'
    ],
    [
        'id' => 'm203',
        'code' => 'M203',
        'title' => 'Développement Frontend Avancé',
        'category' => 'web',
        'desc' => 'Création d\'interfaces dynamiques avec des frameworks JS (React / VueJS).'
    ],
    [
        'id' => 'm204',
        'code' => 'M204',
        'title' => 'Développement Backend & API',
        'category' => 'backend',
        'desc' => 'Applications web serveurs avec Laravel / NodeJS / Express et APIs RESTful.'
    ],
    [
        'id' => 'm205',
        'code' => 'M205',
        'title' => 'Bases de données NoSQL & Avancées',
        'category' => 'database',
        'desc' => 'Gestion et optimisation des données avec MongoDB et ORM (Eloquent / Prisma).'
    ],
    [
        'id' => 'm206',
        'code' => 'M206',
        'title' => 'Déploiement & Cloud (DevOps)',
        'category' => 'backend',
        'desc' => 'Hébergement, Intégration Continue (CI/CD), Git/GitHub et services Cloud (Vercel, Docker).'
    ]
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio • <?php echo htmlspecialchars($studentName); ?></title>
    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&family=Syne:wght@700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
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

        .bg-glow {
            position: fixed;
            width: 600px;
            height: 600px;
            border-radius: 50%;
            background: radial-gradient(circle, var(--primary-glow) 0%, rgba(0,0,0,0) 70%);
            top: -200px;
            right: -200px;
            pointer-events: none;
            z-index: 0;
        }

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
            letter-spacing: -0.5px;
            background: linear-gradient(135deg, var(--text-main), var(--primary));
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

        .hero {
            max-width: 1200px;
            margin: 3rem auto;
            padding: 0 2rem;
            position: relative;
            z-index: 1;
        }

        .hero h1 {
            font-family: var(--font-head);
            font-size: clamp(2.5rem, 5vw, 4rem);
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

        .filter-btn.active, .filter-btn:hover {
            background: var(--primary);
            color: #fff;
            border-color: var(--primary);
        }

        .modules-grid {
            max-width: 1200px;
            margin: 0 auto 5rem;
            padding: 0 2rem;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(340px, 1fr));
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

        .drop-zone {
            border: 2px dashed var(--border);
            border-radius: 12px;
            padding: 1.5rem 1rem;
            text-align: center;
            cursor: pointer;
            margin-bottom: 1rem;
            background: rgba(0,0,0,0.1);
        }

        .drop-zone:hover, .drop-zone.dragover {
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

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
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
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
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
            width: 30px;
            height: 30px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 0.8rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .action-btn:hover {
            transform: scale(1.1);
        }

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

        .btn-github { background: #24292e; }
        .btn-secondary { background: transparent; border: 1px solid var(--border); color: var(--text-main); }

        .lightbox-modal {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.85);
            backdrop-filter: blur(10px);
            z-index: 200;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .lightbox-content {
            max-width: 85%;
            max-height: 80vh;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
            border: 1px solid var(--border);
            object-fit: contain;
        }

        .lightbox-close {
            position: absolute;
            top: 20px;
            right: 25px;
            color: #fff;
            font-size: 2rem;
            cursor: pointer;
            background: rgba(255,255,255,0.1);
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        footer {
            text-align: center;
            padding: 2rem;
            color: var(--text-muted);
            border-top: 1px solid var(--border);
            font-size: 0.9rem;
        }

        .file-input-hidden { display: none; }
    </style>
</head>
<body>

    <div class="bg-glow"></div>

    <header>
        <div class="logo"><?php echo htmlspecialchars($studentName); ?>.dev</div>
        <div class="header-actions">
            <button class="btn-icon" onclick="toggleTheme()">
                <i class="fa-solid fa-moon" id="themeIcon"></i>
                <span id="themeText">Dark</span>
            </button>
            <a href="<?php echo $githubUrl; ?>" target="_blank" class="btn-icon" style="text-decoration:none;">
                <i class="fa-brands fa-github"></i> Github
            </a>
        </div>
    </header>

    <section class="hero">
        <h1>Portfolio des <span>Ateliers</span> & TP (2ème Année)</h1>
        <p><?php echo htmlspecialchars($specialization); ?> • ISTA OFPPT</p>
        
        <div class="stats-bar">
            <div class="stat-item">
                <span class="stat-num"><?php echo count($modules); ?></span>
                <span class="stat-lbl">Modules</span>
            </div>
            <div class="stat-item">
                <span class="stat-num" id="totalExercisesCount">0</span>
                <span class="stat-lbl">Captures</span>
            </div>
        </div>
    </section>

    <div class="filters">
        <button class="filter-btn active" onclick="filterModules('all')">Tous</button>
        <button class="filter-btn" onclick="filterModules('base')">Conception & Agile</button>
        <button class="filter-btn" onclick="filterModules('web')">Frontend JS</button>
        <button class="filter-btn" onclick="filterModules('backend')">Backend & Cloud</button>
        <button class="filter-btn" onclick="filterModules('database')">Base de données</button>
    </div>

    <section class="modules-grid">
        <?php foreach ($modules as$mod): ?>
            <div class="card" data-category="<?php echo $mod['category']; ?>">
                <div>
                    <div class="card-header">
                        <span class="card-badge"><?php echo $mod['code']; ?></span>
                        <span style="font-size: 0.75rem; color: var(--text-muted);" id="count-<?php echo $mod['id']; ?>">0 image(s)</span>
                    </div>
                    <h2 class="card-title"><?php echo htmlspecialchars($mod['title']); ?></h2>
                    <p class="card-desc"><?php echo htmlspecialchars($mod['desc']); ?></p>

                    <div class="drop-zone" onclick="document.getElementById('file-<?php echo $mod['id']; ?>').click()" ondragover="handleDragOver(event)" ondragleave="handleDragLeave(event)" ondrop="handleDrop(event, '<?php echo $mod['id']; ?>')">
                        <i class="fa-solid fa-cloud-arrow-up"></i>
                        <p>Glissez vos captures ici ou <b>Parcourir</b></p>
                        <input type="file" id="file-<?php echo $mod['id']; ?>" class="file-input-hidden" accept="image/*" multiple onchange="handleFileSelect(event, '<?php echo $mod['id']; ?>')">
                    </div>

                    <div class="gallery-grid" id="gallery-<?php echo $mod['id']; ?>"></div>
                </div>

                <button class="btn-atelier" onclick="openAtelier('<?php echo $mod['code'] . ' - ' . addslashes($mod['title']); ?>', '<?php echo addslashes($mod['desc']); ?>', '<?php echo$githubUrl; ?>')">
                    <i class="fa-solid fa-folder-open"></i> Ressources
                </button>
            </div>
        <?php endforeach; ?>
    </section>

    <!-- Modal Ressources -->
    <div id="atelierModal" class="modal">
        <div class="modal-box">
            <h3 id="modalTitle" style="margin-bottom: 0.5rem;"></h3>
            <p id="modalDesc" style="color: var(--text-muted); font-size: 0.9rem;"></p>
            
            <div class="modal-footer">
                <a id="modalGithub" href="#" class="btn-res btn-github" target="_blank"><i class="fa-brands fa-github"></i> Consulter sur GitHub</a>
                <button onclick="closeAtelier()" class="btn-res btn-secondary" style="justify-content:center; cursor:pointer;">Fermer</button>
            </div>
        </div>
    </div>

    <!-- Modal Lightbox (Agrandir Photo) -->
    <div id="lightboxModal" class="lightbox-modal" onclick="closeLightbox(event)">
        <span class="lightbox-close" onclick="closeLightbox(event)">&times;</span>
        <img id="lightboxImg" class="lightbox-content" src="" alt="Aperçu grand format">
    </div>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> <span><?php echo htmlspecialchars($studentName); ?></span> • Tous droits réservés.</p>
    </footer>

    <script>
        const exerciseData = {};

        function toggleTheme() {
            document.body.classList.toggle('light-mode');
            const isLight = document.body.classList.contains('light-mode');
            document.getElementById('themeText').textContent = isLight ? 'Light' : 'Dark';
            document.getElementById('themeIcon').className = isLight ? 'fa-solid fa-sun' : 'fa-solid fa-moon';
        }

        function filterModules(category) {
            document.querySelectorAll('.filter-btn').forEach(btn => btn.classList.remove('active'));
            event.target.classList.add('active');

            document.querySelectorAll('.card').forEach(card => {
                if (category === 'all' || card.dataset.category === category) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        }

        function handleDragOver(e) { e.preventDefault(); e.currentTarget.classList.add('dragover'); }
        function handleDragLeave(e) { e.currentTarget.classList.remove('dragover'); }
        
        function handleDrop(e, moduleId) {
            e.preventDefault();
            e.currentTarget.classList.remove('dragover');
            processFiles(e.dataTransfer.files, moduleId);
        }

        function handleFileSelect(e, moduleId) {
            processFiles(e.target.files, moduleId);
        }

        function processFiles(files, moduleId) {
            if (!exerciseData[moduleId]) exerciseData[moduleId] = [];
            Array.from(files).forEach(file => {
                if (file.type.startsWith('image/')) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        exerciseData[moduleId].push({ id: Date.now() + Math.random(), src: e.target.result });
                        renderGallery(moduleId);
                        updateTotalCounter();
                    };
                    reader.readAsDataURL(file);
                }
            });
        }

        function renderGallery(moduleId) {
            const gallery = document.getElementById(`gallery-${moduleId}`);
            const countLabel = document.getElementById(`count-${moduleId}`);
            const images = exerciseData[moduleId] || [];

            countLabel.textContent = `${images.length} image(s)`;
            gallery.innerHTML = '';

            images.forEach(imgObj => {
                const item = document.createElement('div');
                item.className = 'gallery-item';
                item.innerHTML = `
                    <img src="${imgObj.src}">
                    <div class="gallery-item-actions">
                        <button class="action-btn" onclick="openLightbox('${imgObj.src}')" title="Agrandir"><i class="fa-solid fa-expand"></i></button>
                        <button class="action-btn" onclick="deleteImage('${moduleId}', ${imgObj.id})" title="Supprimer"><i class="fa-solid fa-trash"></i></button>
                    </div>
                `;
                gallery.appendChild(item);
            });
        }

        function deleteImage(moduleId, imgId) {
            exerciseData[moduleId] = exerciseData[moduleId].filter(img => img.id !== imgId);
            renderGallery(moduleId);
            updateTotalCounter();
        }

        function openLightbox(src) {
            document.getElementById('lightboxImg').src = src;
            document.getElementById('lightboxModal').style.display = 'flex';
        }

        function closeLightbox(e) {
            if (e.target.id === 'lightboxModal' || e.target.classList.contains('lightbox-close')) {
                document.getElementById('lightboxModal').style.display = 'none';
            }
        }

        function updateTotalCounter() {
            let total = 0;
            Object.values(exerciseData).forEach(arr => total += arr.length);
            document.getElementById('totalExercisesCount').textContent = total;
        }

        function openAtelier(title, desc, githubUrl) {
            document.getElementById('modalTitle').textContent = title;
            document.getElementById('modalDesc').textContent = desc;
            document.getElementById('modalGithub').href = githubUrl;
            document.getElementById('atelierModal').style.display = 'flex';
        }

        function closeAtelier() {
            document.getElementById('atelierModal').style.display = 'none';
        }
    </script>
</body>
</html>