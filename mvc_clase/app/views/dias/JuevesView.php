<?php
$title = "Jueves";
include __DIR__ . "/../layout/header.php";
?>

<main>
    <!-- Introducción -->
    <section class="intro">
        <h2>Actividades del <?= $title ?> 🤖</h2>
        <p>
            Hoy continuamos la Semana de Sistemas 2025 con la feria de logros y la comelona de pupusas.
        </p>
    </section>

    <!-- Itinerario manual -->
    <section class="activities">
        <h3>Itinerario del Martes</h3>
        <div class="activity-grid">

            <!-- Taller 1 -->
            <a href="#feria" class="activity-card">
                <img src="/mvc_clase/public/images/dia4/Feria1.jpeg" alt="Feria de logros">
                <div class="activity-info">
                    <h4>Feria de logros</h4>
                    <p class="presenter"><strong>Organizador:</strong> ASEIS</p>
                    <p class="description">Feria de logros donde todos los estudiantes mostraron su capacidad en la creacion de proyectos</p>
                </div>
            </a>

            <!-- Taller 2.1 -->
            <a href="#comelona" class="activity-card">
                <img src="/mvc_clase/public/images/dia4/Comelona1.jpeg" alt="Comelona de pupusas">
                <div class="activity-info">
                    <h4>Comelona de pupusas</h4>
                    <p class="presenter"><strong>Participantes:</strong> Estudiantes y docentes</p>
                    <p class="description">Competencia de comer pupusas en un tiempo de 15 minutos.</p>
                </div>
            </a>

        </div>
    </section>

    <!-- Galería por secciones -->
    <section class="gallery">
        <h3>📸 Galería del Jueves</h3>

        <!-- Galería Feria -->
        <div id="feria" class="gallery-grid">
            <img src="/mvc_clase/public/images/dia4/Feria1.jpeg" alt="Feria de logros - imagen 1">
            <img src="/mvc_clase/public/images/dia4/Feria2.jpeg" alt="Feria de logros - imagen 2">
            <img src="/mvc_clase/public/images/dia4/Feria3.jpeg" alt="Feria de logros - imagen 3">
            <img src="/mvc_clase/public/images/dia4/Feria4.jpeg" alt="Feria de logros - imagen 4">
            <img src="/mvc_clase/public/images/dia4/Feria5.jpeg" alt="Feria de logros - imagen 5">
            <img src="/mvc_clase/public/images/dia4/Feria6.jpeg" alt="Feria de logros - imagen 6">
            <img src="/mvc_clase/public/images/dia4/Feria7.jpeg" alt="Feria de logros - imagen 7">
            <img src="/mvc_clase/public/images/dia4/Feria8.jpeg" alt="Feria de logros - imagen 8">
            <img src="/mvc_clase/public/images/dia4/Feria9.jpeg" alt="Feria de logros - imagen 9">
            <img src="/mvc_clase/public/images/dia4/Feria10.jpeg" alt="Feria de logros - imagen 10">
            <img src="/mvc_clase/public/images/dia4/Feria11.jpeg" alt="Feria de logros - imagen 11">
        </div>

        <!-- Galería Comelona -->
        <div id="comelona" class="gallery-grid">
            <img src="/mvc_clase/public/images/dia4/Comelona1.jpeg" alt="Comelona de pupusas - imagen 1">
            <img src="/mvc_clase/public/images/dia4/Comelona2.jpeg" alt="Comelona de pupusas - imagen 2">
            <img src="/mvc_clase/public/images/dia4/Comelona3.jpeg" alt="Comelona de pupusas - imagen 3">
            <img src="/mvc_clase/public/images/dia4/Comelona4.jpeg" alt="Comelona de pupusas - imagen 4">
        </div>
    </section>
</main>

<?php include __DIR__ . "/../layout/footer.php"; ?>
