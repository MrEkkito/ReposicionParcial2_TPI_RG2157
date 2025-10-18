<?php
$title = "Miercoles";
include __DIR__ . "/../layout/header.php";
?>

<main>
    <!-- Introducción -->
    <section class="intro">
        <h2>Actividades del <?= $title ?> 🤖</h2>
        <p>
            Hoy continuamos la Semana de Sistemas 2025 con un torneo de futbol 11.
        </p>
    </section>

    <!-- Itinerario -->
    <section class="activities">
        <h3>Itinerario del Miercoles</h3>
        <div class="activity-grid">

            <!-- Torneo -->
            <a href="#torneo" class="activity-card">
                <img src="/mvc_clase/public/images/dia3/Torneo.jpg" alt="Torneo de futbol 11">
                <div class="activity-info">
                    <h4>Torneo de futbol 11</h4>
                    <p class="presenter"><strong>Organizador:</strong> ASEIS</p>
                    <p class="description">Torneo de futbol 11 donde solo uno saldra vencedor!!</p>
                </div>
            </a>
        </div>
    </section>

    <!-- Galería por secciones -->
    <section class="gallery">
        <h3>📸 Galería del Martes</h3>

        <!-- Galería Torneo -->
        <div id="torneo" style="display: flex; justify-content: center; align-items: center; padding: 20px 0;">
            <img src="/mvc_clase/public/images/dia3/TorneoCancelado.jpeg" alt="Taller 1 - imagen 1">
        </div>
    </section>
</main>

<?php include __DIR__ . "/../layout/footer.php"; ?>
