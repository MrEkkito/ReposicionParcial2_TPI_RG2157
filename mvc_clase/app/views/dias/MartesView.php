<?php
$title = "Martes";
include __DIR__ . "/../layout/header.php";
?>

<main>
    <!-- Introducción -->
    <section class="intro">
        <h2>Actividades del <?= $title ?> 🤖</h2>
        <p>
            Hoy continuamos la Semana de Sistemas 2025 con talleres prácticos para reforzar tus habilidades técnicas.
        </p>
    </section>

    <!-- Itinerario manual -->
    <section class="activities">
        <h3>Itinerario del Martes</h3>
        <div class="activity-grid">

            <!-- Taller 1 -->
            <a href="#taller1" class="activity-card">
                <img src="/mvc_clase/public/images/dia2/Taller1.jpeg" alt="Taller 1">
                <div class="activity-info">
                    <h4>Taller 1</h4>
                    <p class="presenter"><strong>Presentador:</strong> MSc. Enrique Cortez</p>
                    <p class="description">Toma de decisiones estratégicas basada en datos</p>
                </div>
            </a>

            <!-- Taller 2.1 -->
            <a href="#taller2_1" class="activity-card">
                <img src="/mvc_clase/public/images/dia2/Taller2.1.jpeg" alt="Taller 2.1">
                <div class="activity-info">
                    <h4>Taller 2.1</h4>
                    <p class="presenter"><strong>Presentador:</strong> MSc. Henry Orellana</p>
                    <p class="description">Entrenando la IA que programa contigo</p>
                </div>
            </a>

            <!-- Taller 2.2 -->
            <a href="#taller2_2" class="activity-card">
                <img src="/mvc_clase/public/images/dia2/Taller2.2A.jpeg" alt="Taller 2.2">
                <div class="activity-info">
                    <h4>Taller 2.2</h4>
                    <p class="presenter"><strong>Presentador:</strong> MSc. Gabriel Castillo</p>
                    <p class="description">Construyendo un CRUD en minutos con Laravel y Filament</p>
                </div>
            </a>

            <!-- Taller 4 -->
            <a href="#taller4" class="activity-card">
                <img src="/mvc_clase/public/images/dia2/Taller4.jpeg" alt="Taller 4">
                <div class="activity-info">
                    <h4>Taller 4</h4>
                    <p class="presenter"><strong>Presentador:</strong> MSc. Jose Salmeron</p>
                    <p class="description">IA Multimodal y sus aplicaciones</p>
                </div>
            </a>
        </div>
    </section>

    <!-- Galería por secciones con imágenes más anchas -->
    <section class="gallery">
        <h3>📸 Galería del Martes</h3>

        <!-- Galería Taller 1 -->
        <div id="taller1" class="gallery-grid">
            <img src="/mvc_clase/public/images/dia2/Taller1.jpeg" alt="Taller 1 - imagen 1">
            <img src="/mvc_clase/public/images/dia2/Taller1A.jpeg" alt="Taller 1 - imagen 2">
        </div>

        <!-- Galería Taller 2.1 -->
        <div id="taller2_1" class="gallery-grid">
            <img src="/mvc_clase/public/images/dia2/Taller2.1.jpeg" alt="Taller 2.1 - imagen 1">
            <img src="/mvc_clase/public/images/dia2/Taller2.1B.jpeg" alt="Taller 2.1 - imagen 2">
            <img src="/mvc_clase/public/images/dia2/Taller2.1C.jpeg" alt="Taller 2.1 - imagen 2">
        </div>

        <!-- Galería Taller 2.2 -->
        <div id="taller2_2" class="gallery-grid">
            <img src="/mvc_clase/public/images/dia2/Taller2.2.jpeg" alt="Taller 2.2 - imagen 1">
            <img src="/mvc_clase/public/images/dia2/Taller2.2A.jpeg" alt="Taller 2.2 - imagen 2">
            <img src="/mvc_clase/public/images/dia2/Taller2.2B.jpeg" alt="Taller 2.2 - imagen 2">
        </div>

        <!-- Galería Taller 4 -->
        <div id="taller4" class="gallery-grid">
            <img src="/mvc_clase/public/images/dia2/Taller4.jpeg" alt="Taller 4 - imagen 1">
            <img src="/mvc_clase/public/images/dia2/Taller4A.jpeg" alt="Taller 4 - imagen 2">
            <img src="/mvc_clase/public/images/dia2/Taller4B.jpeg" alt="Taller 4 - imagen 2">
        </div>
    </section>
</main>

<?php include __DIR__ . "/../layout/footer.php"; ?>
