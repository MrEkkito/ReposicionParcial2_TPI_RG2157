<?php
$title = "Lunes";
include __DIR__ . "/../layout/header.php";
?>

<main>
    <!-- Introducción -->
    <section class="intro">
        <h2>Actividades del <?= $title ?> 🤖</h2>
        <p>
            Iniciamos la SDS25 con la ceremonia de bienvenida, seguida de dos ponencias que nos harán adentrarnos al mundo crypto y a la inteligencia artificial.
        </p>
    </section>

    <!-- Itinerario -->
    <section class="activities">
        <h3>Itinerario del <?= $title ?></h3>
        <div class="activity-grid">

            <!-- Bienvenida -->
            <a href="#bienvenida" class="activity-card">
                <img src="/mvc_clase/public/images/dia1/Bienvenida2.jpeg" alt="Bienvenida">
                <div class="activity-info">
                    <h4>Bienvenida</h4>
                    <p class="presenter"><strong>Organizador:</strong> Comité organizador</p>
                    <p class="description">Inauguración del evento y presentación del cronograma.</p>
                </div>
            </a>

            <!-- Ponencia 1 -->
            <a href="#ponencia1" class="activity-card">
                <img src="/mvc_clase/public/images/dia1/Conferencia1.jpeg" alt="Ponencia 1 - Bitcoin">
                <div class="activity-info">
                    <h4>Ponencia 1</h4>
                    <p class="presenter"><strong>Expositor:</strong> Msc. Luis Contreras</p>
                    <p class="description">El ABC de Bitcoin.</p>
                </div>
            </a>

            <!-- Ponencia 2 -->
            <a href="#ponencia2" class="activity-card">
                <img src="/mvc_clase/public/images/dia1/Conferencia2.jpeg" alt="Ponencia 2 - Inteligencia Artificial Generativa">
                <div class="activity-info">
                    <h4>Ponencia 2</h4>
                    <p class="presenter"><strong>Expositor:</strong> Msc. Rodrigo Pineda</p>
                    <p class="description">Inteligencia Artificial Generativa, de la idea a la acción.</p>
                </div>
            </a>

            <!-- Hackathon -->
            <a href="#hackathon" class="activity-card">
                <img src="/mvc_clase/public/images/dia1/HackathonB.jpeg" alt="Hackathon">
                <div class="activity-info">
                    <h4>Hackathon</h4>
                    <p class="presenter"><strong>Organizador:</strong> Equipo organizador</p>
                    <p class="description">Revolucionando la forma en que aprendemos y enseñamos.</p>
                </div>
            </a>
        </div>
    </section>

    <!-- Galería -->
    <section class="gallery">
        <h3>📸 Galería del <?= $title ?></h3>

        <div id="bienvenida" class="gallery-grid">
            <img src="/mvc_clase/public/images/dia1/Bienvenida.jpeg" alt="Bienvenida SDS25">
            <img src="/mvc_clase/public/images/dia1/Bienvenida2.jpeg" alt="Bienvenida SDS25">
        </div>

        <div id="ponencia1" class="gallery-grid">
            <img src="/mvc_clase/public/images/dia1/Conferencia1.jpeg" alt="Ponencia sobre Bitcoin">
        </div>

        <div id="ponencia2" class="gallery-grid">
            <img src="/mvc_clase/public/images/dia1/Conferencia2.jpeg" alt="Ponencia sobre IA Generativa">
        </div>

        <div id="hackathon" class="gallery-grid">
            <img src="/mvc_clase/public/images/dia1/HackathonB.jpeg" alt="Hackathon SDS25">
            <img src="/mvc_clase/public/images/dia1/HackathonA.jpeg" alt="Hackathon SDS25">
        </div>
    </section>
</main>

<?php include __DIR__ . "/../layout/footer.php"; ?>
