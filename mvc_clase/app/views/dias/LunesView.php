<?php
$title = "Lunes";
include __DIR__ . "/../layout/header.php";
?>

<main>
    <!-- Sección de bienvenida -->
    <section class="intro">
        <h2>Actividades del <?= $title ?> 🤖</h2>
        <p>
            Hoy inicia la Semana de Sistemas 2025 con una jornada llena de ponencias y creatividad.  
            Participa en la <strong>bienvenida</strong>, las <strong>ponencias de IA</strong> y el <strong>Hackathon</strong> del día.
        </p>
    </section>

    <!-- Sección de actividades en grid compacto -->
    <section class="activities">
        <h3>Itinerario del Lunes</h3>
        <div class="activity-grid">
            <?php
            $actividades = [
                ["Bienvenida", "Comité organizador", "Inauguración del evento y presentación del cronograma.", "/mvc_clase/public/images/dia1/Bienvenida2.jpeg"],
                ["Ponencia 1", "Msc. Luis Contreras", "El ABC de Bitcoin.", "/mvc_clase/public/images/dia1/Conferencia1.jpeg"],
                ["Ponencia 2", "Msc. Rodrigo Pineda", "Inteligencia Artificial Generativa, de la idea a la acción.", "/mvc_clase/public/images/dia1/Conferencia2.jpeg"],
                ["Hackathon", "Equipo organizador", "Revolucionando la forma en que aprendemos y enseñamos.", "/mvc_clase/public/images/NoIMG.jpg"]
            ];

            foreach ($actividades as $act) {
                echo '<div class="activity-card">
                        <img src="'.$act[3].'" alt="'.$act[0].'">
                        <div class="activity-info">
                            <h4>'.$act[0].'</h4>
                            <p class="presenter">Presentador: '.$act[1].'</p>
                            <p class="description">'.$act[2].'</p>
                        </div>
                    </div>';
            }
            ?>
        </div>
    </section>
</main>

<?php include __DIR__ . "/../layout/footer.php"; ?>
