<?php include_once __DIR__ . '/../templates/header.php'; ?>
<?php require_once __DIR__ . '/../templates/alertas.php' ?>

<div class="contenedor">
    <main class="auth">

        <div class="mensaje">
            <h2 class="mensaje__logo">&#60; ArgDevCamp/></h2>

            <?php if (empty($alertas)) { ?>      
                <p class="mensaje__texto text-center bold"><?php include_once __DIR__ . '/../templates/nombre-pagina.php'; ?></p>
            <?php } ?>
        </div>

        <div class="acciones mensaje__acciones">
            <a href="/login">Iniciar Sesion</a>
        </div>

    </main>
</div>