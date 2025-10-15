<?php
$title = $title ?? "Comentarios";
include __DIR__ . "/../layout/header.php";
?>

<main>
    <!-- Introducción -->
    <section class="intro">
        <h2><?= $title ?></h2>
        <p>Todos los comentarios recibidos de los visitantes del blog:</p>
        <a href="/mvc_clase/public/visitas/form" class="visit-link">📝 Enviar Comentario</a>
    </section>

    <!-- Lista de comentarios -->
    <section class="comments-list">
        <?php if(!empty($comentarios)): ?>
            <?php foreach($comentarios as $c): ?>
                <div class="comment-card">
                    <div class="comment-header">
                        <div class="comment-user">
                            <strong><?= htmlspecialchars($c['nombre']) ?></strong> - 
                            <em><?= htmlspecialchars($c['usuario']) ?></em> 
                            (<?= htmlspecialchars($c['correo']) ?>)
                        </div>
                        <div class="comment-date">
                            <?= date('d/m/Y H:i', strtotime($c['fecha'])) ?>
                        </div>
                    </div>
                    <p class="comment-text"><?= nl2br(htmlspecialchars($c['comentario'])) ?></p>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No hay comentarios aún.</p>
        <?php endif; ?>
    </section>
</main>

<?php include __DIR__ . "/../layout/footer.php"; ?>
