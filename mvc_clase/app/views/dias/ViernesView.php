<?php
$title = "Viernes";
include __DIR__ . "/../layout/header.php";
?>

<main>
    <!-- Introducción -->
    <section class="intro">
        <h2>Actividades del <?= $title ?> 🤖</h2>
        <p>
            Hoy continuamos la Semana de Sistemas 2025 con el bingo y los torneos de videojuegos.
        </p>
    </section>

    <!-- Itinerario -->
    <section class="activities">
        <h3>Itinerario del Viernes</h3>
        <div class="activity-grid">

            <!-- Bingo -->
            <a href="#bingo" class="activity-card">
                <img src="/mvc_clase/public/images/dia5/Bingo.jpeg" alt="Bingo">
                <div class="activity-info">
                    <h4>Bingo</h4>
                    <p class="presenter"><strong>Organizador:</strong> ASEIS y estudiantes de tercer año</p>
                    <p class="description">Juego de bingo donde se realizaron varias ronda con diferentes premios geniales!</p>
                </div>
            </a>

            <!-- Torneo de videojuegos -->
            <a href="#torneo" class="activity-card">
                <img src="/mvc_clase/public/images/dia5/Torneo.jpeg" alt="Torneo de videojuegos">
                <div class="activity-info">
                    <h4>Torneo de videojuegos</h4>
                    <p class="presenter"><strong>Participantes:</strong> Estudiantes y docentes</p>
                    <p class="description">Torneo de videojuegos como Clash Royale.</p>
                </div>
            </a>

            <!-- Premiacion -->
            <a href="#premiacion" class="activity-card">
                <img src="/mvc_clase/public/images/dia5/Otros.jpeg" alt="Premiacion">
                <div class="activity-info">
                    <h4>Premiacion de stands y participantes</h4>
                    <p class="presenter"><strong>Participantes:</strong> ASEIS</p>
                    <p class="description">Premiación de lo participantes de la feria de logros y de los mejores stands.</p>
                </div>
            </a>

        </div>
    </section>

    <!-- Galería por secciones -->
    <section class="gallery">
        <h3>📸 Galería del Viernes</h3>

        <!-- Galería Bingo -->
        <div id="bingo" class="gallery-grid">
            <img src="/mvc_clase/public/images/dia5/Bingo.jpeg" alt="Bingo - imagen 1">
            <img src="/mvc_clase/public/images/dia5/Bingo2.jpeg" alt="Bingo - imagen 2">
            <img src="/mvc_clase/public/images/dia5/Bingo3.jpeg" alt="Bingo - imagen 3">
            <img src="/mvc_clase/public/images/dia5/Bingo4.jpeg" alt="Bingo - imagen 4">
            <img src="/mvc_clase/public/images/dia5/Bingo5.jpeg" alt="Bingo - imagen 5">
        </div>

        <!-- Galería Torneo -->
        <div id="torneo" class="gallery-grid">
            <img src="/mvc_clase/public/images/dia5/Torneo.jpeg" alt="Torneo - imagen 1">
            <img src="/mvc_clase/public/images/dia5/Torneo2.jpeg" alt="Torneo - imagen 2">
            <img src="/mvc_clase/public/images/dia5/Torneo3.jpeg" alt="Torneo - imagen 3">
        </div>

        <!-- Galería Premiacion -->
        <div id="premiacion" class="gallery-grid">
            <img src="/mvc_clase/public/images/dia5/Otros.jpeg" alt="Premiación de stands - imagen 1">
            <img src="/mvc_clase/public/images/dia5/Otros2.jpeg" alt="Premiación de stands - imagen 2">
            <img src="/mvc_clase/public/images/dia5/Otros3.jpeg" alt="Premiación de stands - imagen 3">
            <img src="/mvc_clase/public/images/dia5/Otros4.jpeg" alt="Premiación de stands - imagen 4">
            <img src="/mvc_clase/public/images/dia5/Otros5.jpeg" alt="Premiación de stands - imagen 5">
            <img src="/mvc_clase/public/images/dia5/Otros6.jpeg" alt="Premiación de stands - imagen 6">
            <img src="/mvc_clase/public/images/dia5/Otros7.jpeg" alt="Premiación de stands - imagen 7">
            
        </div>
    </section>
</main>

<?php include __DIR__ . "/../layout/footer.php"; ?>
