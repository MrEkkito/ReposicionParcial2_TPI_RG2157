<?php
$title = "Lunes";
include __DIR__ . "/../layout/header.php";
?>

<section class="intro">
    <h2>Actividades del <?= $title ?></h2>
    <p>Hoy tenemos conferencias sobre Inteligencia Artificial y Realidad Aumentada.</p>
    <a href="/mvc_clase/public/visit/form" class="visit-link">📋 Registra tu visita</a>
</section>

<section class="gallery">
    <div class="grid">
        <img src="/mvc_clase/public/images/NoIMG.jpg" alt="Conferencia IA">
        <img src="/mvc_clase/public/images/NoIMG.jpg" alt="Taller RA">
    </div>
</section>

<?php include __DIR__ . "/../layout/footer.php"; ?>
