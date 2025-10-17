<?php include "../app/views/layout/header.php"; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <main>
        <!-- Presentación -->
        <section class="intro">
            <h2>Hola, soy <span style="color:#0a74da;">Pedro García</span></h2>
            <p>
                Me apasiona aprender nuevas tecnologías y crear proyectos que combinen lógica, creatividad y diseño.
                Mi objetivo es convertirme en un desarrollador profesional capaz de construir soluciones útiles e innovadoras.
            </p>
        </section>

        <!-- Imagen personal -->
        <section class="days" id="sobre-mi">
            <h3>Sobre mí</h3>
            <div class="grid-days">
                <div class="day-card">
                    <img src="tu-foto.jpg" alt="Foto personal">
                    <h4>¿Quién soy?</h4>
                    <p>
                        Soy un estudiante de ingeniería en sistemas que disfruta programar y aprender cada día algo nuevo.
                        Me considero una persona curiosa, responsable y con gran interés por el desarrollo web y la inteligencia artificial.
                    </p>
                </div>

                <div class="day-card">
                    <img src="estudios.jpg" alt="Estudios">
                    <h4>Formación</h4>
                    <p>
                        Actualmente curso una carrera universitaria enfocada en tecnología. 
                        He adquirido experiencia en <b>Python</b>, <b>JavaScript</b>, <b>C#</b> y herramientas modernas de desarrollo.
                    </p>
                </div>
            </div>
        </section>

        <!-- Proyectos -->
        <section class="days" id="proyectos">
            <h3>Mis proyectos</h3>
            <div class="activity-grid">
                <div class="activity-card">
                    <img src="proyecto1.jpg" alt="Proyecto web">
                    <div class="activity-info">
                        <h4>Gestor de Tareas</h4>
                        <p class="description">
                            Aplicación web con Django para organizar tareas diarias de manera eficiente.
                        </p>
                    </div>
                </div>
                <div class="activity-card">
                    <img src="proyecto2.jpg" alt="Juego 2D">
                    <div class="activity-info">
                        <h4>Juego RPG 2D</h4>
                        <p class="description">
                            Prototipo de videojuego en Unity con estilo pixel-art y conexión multijugador.
                        </p>
                    </div>
                </div>
                <div class="activity-card">
                    <img src="proyecto3.jpg" alt="Portfolio">
                    <div class="activity-info">
                        <h4>Portfolio Personal</h4>
                        <p class="description">
                            Sitio web moderno creado con HTML, CSS y JavaScript para mostrar mis habilidades y proyectos.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Habilidades -->
        <section class="days" id="habilidades">
            <h3>Mis habilidades</h3>
            <div class="grid-days">
                <div class="day-card">
                    <img src="frontend.jpg" alt="Front-End">
                    <h4>Front-End</h4>
                    <p>
                        HTML, CSS, JavaScript y React. Me gusta diseñar interfaces limpias, rápidas y atractivas.
                    </p>
                </div>
                <div class="day-card">
                    <img src="backend.jpg" alt="Back-End">
                    <h4>Back-End</h4>
                    <p>
                        Desarrollo con Django, Node.js y bases de datos SQL/NoSQL. 
                        Me enfoco en construir APIs seguras y optimizadas.
                    </p>
                </div>
                <div class="day-card">
                    <img src="tools.jpg" alt="Herramientas">
                    <h4>Herramientas</h4>
                    <p>
                        Uso Git, GitHub, Docker y VSCode. 
                        Me gusta mantener un entorno de desarrollo bien estructurado y profesional.
                    </p>
                </div>
            </div>
        </section>

        <!-- Contacto -->
        <section class="days" id="contacto">
            <h3>Contáctame</h3>
            <form>
                <input type="text" placeholder="Tu nombre" required>
                <input type="email" placeholder="Tu correo" required>
                <textarea rows="4" placeholder="Escribe tu mensaje..." required></textarea>
                <button type="submit">Enviar mensaje</button>
            </form>
        </section>
    </main>

</body>
</html>
<?php include "../app/views/layout/footer.php"; ?>
