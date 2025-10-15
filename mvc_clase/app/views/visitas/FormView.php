<?php
$title = $title ?? "Registrar Visita";
include __DIR__ . "/../layout/header.php";
?>

<main>
    <section class="intro">
        <h2><?= $title ?></h2>
        <p>Déjanos un comentario sobre tu participación en la Semana de Sistemas 2025 🤖</p>
        <?php if(isset($_GET['success'])): ?>
            <p style="color:green;">✅ Comentario enviado correctamente.</p>
        <?php endif; ?>
    </section>

    <section class="form-section">
        <form action="/mvc_clase/public/visitas/store" method="POST">
            <label>Nombre:</label>
            <input type="text" name="nombre" required>

            <label>Usuario:</label>
            <input type="text" name="usuario" required>

            <label>Correo:</label>
            <input type="email" name="correo" required>

            <label>Comentario:</label>
            <textarea name="comentario" rows="4" required></textarea>

            <button type="submit">Enviar Comentario</button>
        </form>
    </section>
</main>

<?php include __DIR__ . "/../layout/footer.php"; ?>
