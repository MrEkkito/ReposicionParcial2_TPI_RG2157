<?php include "../app/views/layout/header.php"; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
    <style>
        .bio-intro { margin-bottom: 30px; }
        .bio-section { margin-bottom: 40px; }
        .bio-grid, .bio-projects-grid { display: flex; flex-wrap: wrap; gap: 20px; }
        .bio-card, .bio-project-card { background: #f5f5f5; padding: 20px; border-radius: 10px; flex: 1; min-width: 250px; }
        .bio-card img { width: 100%; border-radius: 10px; margin-bottom: 15px; }
        .bio-project-card { cursor: pointer; text-decoration: none; color: inherit; }
        .social-icons { display: flex; gap: 20px; font-size: 24px; justify-content: center; margin-top: 40px; }
        .social-icons a { color: #333; transition: color 0.3s; }
        .social-icons a:hover { color: #0a74da; }
    </style>
</head>
<body>

    <main>
        <!-- Presentación -->
        <section class="bio-intro">
            <h2>Hola, soy <span style="color:#0a74da;">Pedro García</span></h2>
            <p>
                Me apasiona aprender nuevas tecnologías y crear proyectos que combinen lógica, creatividad y diseño.
                Mi objetivo es convertirme en un desarrollador profesional capaz de construir soluciones útiles e innovadoras.
            </p>
        </section>

        <!-- Imagen personal -->
        <section class="bio-section" id="sobre-mi">
            <h3>Sobre mí</h3>
            <div class="bio-grid">
                <div class="bio-card">
                    <img src="/mvc_clase/public/images/FotoPerfil.jpeg" alt="Foto personal">
                    <h4>¿Quién soy?</h4>
                    <p>
                        Hola, mi nombre es Pedro David Ramos García, tengo 22 años y soy de La Unión. Me apasionan los videojuegos, disfruto aprender sobre su desarrollo y sus mecánicas. Me considero curioso y determinado y mi objetivo es desarrollar al máximo mis habilidades. En mi tiempo libre, me gusta jugar videojuegos y ver películas.
                    </p>
                </div>
            </div>
        </section>

        <!-- Proyectos -->
        <section class="bio-section" id="proyectos">
            <h3>Mis proyectos</h3>
            <div class="bio-projects-grid">
                <a href="https://github.com/SCadbury/Cadbury_Style.git" class="bio-project-card" target="_blank">
                    <div class="bio-project-info">
                        <h4>Cadbury style</h4>
                        <p class="description">
                            Web de diseño para una librería de estilos
                        </p>
                    </div>
                </a>
                <a href="https://github.com/BlogProject-HDP/BlogProject-HDP.git" class="bio-project-card" target="_blank">
                    <div class="bio-project-info">
                        <h4>Blog</h4>
                        <p class="description">
                            Blog para la materia de HDP.
                        </p>
                    </div>
                </a>
                <a href="https://github.com/tuusuario/portfolio-personal" class="bio-project-card" target="_blank">
                    <div class="bio-project-info">
                        <h4>Portfolio Personal</h4>
                        <p class="description">
                            Mi sitio web creado con HTML, CSS y JavaScript para mostrar mis habilidades y proyectos.
                        </p>
                    </div>
                </a>
            </div>
        </section>

 <!-- Habilidades -->
<section class="bio-section" id="habilidades">
    <h3>Mis habilidades</h3>
    <div class="bio-grid">
        <div class="bio-card">
            <h4>Desarrollo Web</h4>
            <p>
                Conocimientos en HTML, CSS y JavaScript para crear sitios web funcionales y atractivos. Aprendiendo frameworks como React y Bootstrap.
            </p>
        </div>
        <div class="bio-card">
            <h4>Desarrollo de Videojuegos</h4>
            <p>
                Experiencia básica en creación de videojuegos 2D con Unity y Godot. Conozco fundamentos de programación en C# y GDScript.
            </p>
        </div>
        <div class="bio-card">
            <h4>Programación</h4>
            <p>
                Manejo de lenguajes como Python, Java y C++. Me gusta resolver problemas y mejorar mis habilidades lógicas.
            </p>
        </div>
        <div class="bio-card">
            <h4>Bases de Datos</h4>
            <p>
                Conocimientos básicos en MySQL y SQLite. Capaz de diseñar estructuras simples para almacenar y gestionar información.
            </p>
        </div>
        <div class="bio-card">
            <h4>Diseño y Creatividad</h4>
            <p>
                Uso herramientas como Figma y Canva para prototipar interfaces y crear recursos visuales. Me gusta experimentar con colores y tipografías.
            </p>
        </div>
        <div class="bio-card">
            <h4>Herramientas y Control de Versiones</h4>
            <p>
                Familiarizado con Git, GitHub y VSCode. Mantengo mis proyectos organizados y trabajo en entornos colaborativos.
            </p>
        </div>
    </div>
</section>


        <!-- Redes sociales -->
        <div class="social-icons">
            <a href="https://github.com/MrEkkito" target="_blank"><i class="fab fa-github"></i></a>
            <a href="www.linkedin.com/in/pedro-david-ramos-garcía-9a380a301" target="_blank"><i class="fab fa-linkedin"></i></a>
            <a href="mailto:ramosgarcia2103@gmail.com" target="_blank"><i class="fas fa-envelope"></i></a>
            <a href="https://instagram.com/drope.2103" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>

    </main>

</body>
</html>
<?php include "../app/views/layout/footer.php"; ?>
