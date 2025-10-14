<?php include "../app/views/layout/header.php"; ?>

<main>
    <section class="intro">
        <h2>Semana de Sistemas 2025 🤖</h2>
        <p>
            ¡Bienvenidos a la Semana de Sistemas 2025! Un evento lleno de innovación, aprendizaje y tecnología.
            Durante cinco días viviremos experiencias únicas con <strong>ponencias, talleres, hackathons, ferias y actividades recreativas</strong>.
        </p>
        <a href="#dias" class="visit-link">Explorar Itinerario</a>
    </section>

    <section id="dias" class="days">
        <h3>📅 Itinerario de Actividades</h3>

        <div class="grid-days">
            <a href="/mvc_clase/public/dias/lunes" class="day-card">
                <img src="https://cdn.pixabay.com/photo/2015/06/24/15/45/startup-820274_1280.jpg" alt="Lunes">
                <h4>Lunes - Inauguración & Hackathon</h4>
                <p>Bienvenida, Ponencias y Hackathon de IA</p>
            </a>

            <a href="/mvc_clase/public/dias/martes" class="day-card">
                <img src="https://cdn.pixabay.com/photo/2017/01/10/19/05/computer-1967509_1280.jpg" alt="Martes">
                <h4>Martes - Talleres Técnicos</h4>
                <p>Talleres prácticos de programación y robótica</p>
            </a>

            <a href="/mvc_clase/public/dias/miercoles" class="day-card">
                <img src="https://cdn.pixabay.com/photo/2016/11/29/05/08/soccer-1869928_1280.jpg" alt="Miércoles">
                <h4>Miércoles - Torneo de Fútbol</h4>
                <p>Competencia deportiva entre equipos del área</p>
            </a>

            <a href="/mvc_clase/public/dias/jueves" class="day-card">
                <img src="https://cdn.pixabay.com/photo/2016/11/29/01/21/fair-1869952_1280.jpg" alt="Jueves">
                <h4>Jueves - Feria de Logros</h4>
                <p>Exposición de proyectos y comelona de pupusas</p>
            </a>

            <a href="/mvc_clase/public/dias/viernes" class="day-card">
                <img src="https://cdn.pixabay.com/photo/2016/11/22/23/46/party-1854113_1280.jpg" alt="Viernes">
                <h4>Viernes - Gran Cierre</h4>
                <p>Bingo, torneo de videojuegos y fiesta de clausura</p>
            </a>
        </div>
    </section>
</main>

<?php include "../app/views/layout/footer.php"; ?>
