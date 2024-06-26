<h2 class="pagina__heading"><?php echo $titulo; ?></h2>
<p class="pagina__descripcion">Elige hasta 5 eventos para asistir de forma presencial </p>



<div class="eventos-registro">
    <main class="eventos-registro__listado">
        <h3 class="eventos-registro__heading--conferencias">&lt;Conferencias /></h3>
        <p class="eventos-registro__fecha eventos-registro__fecha--registro">Viernes 5 de OCTUBRE</p>

        <div class="eventos-registro__grid">
            <?php foreach ($eventos['conferencias_v'] as $evento) : ?>
                <?php include __DIR__ . '/../registro/eventos.php' ?>
            <?php endforeach; ?>
        </div>


        <p class="eventos-registro__fecha eventos-registro__fecha--registro">Sabado 6 de OCTUBRE</p>

        <div class="eventos-registro__grid">
            <?php foreach ($eventos['conferencias_s'] as $evento) : ?>
                <?php include __DIR__ . '/../registro/eventos.php' ?>
            <?php endforeach; ?>
        </div>



        <h3 class="eventos-registro__heading eventos-registro__heading--workshops">&lt;Workshops /></h3>
        <p class="eventos-registro__fecha eventos-registro__fecha--registro">Viernes 5 de OCTUBRE</p>

        <div class="eventos-registro__grid eventos--workshops">
            <?php foreach ($eventos['workshops_v'] as $evento) : ?>
                <?php include __DIR__ . '/../registro/eventos.php' ?>
            <?php endforeach; ?>
        </div>


        <p class="eventos-registro__fecha eventos-registro__fecha--registro">Sabado 6 de OCTUBRE</p>

        <div class="eventos-registro__grid eventos--workshops">
            <?php foreach ($eventos['workshops_s'] as $evento) : ?>
                <?php include __DIR__ . '/../registro/eventos.php' ?>
            <?php endforeach; ?>
        </div>


    </main>
    <aside class="registro registro--aside">
        <h2 class="registro__heading">Tu Registro</h2>

        <div id="registro-resumen" class="registro__resumen">

        </div>

        <div class="registro__regalo">
            <label for="regalo" class="registro__label">Selecciona un regalo</label>
            <select id="regalo" class="registro__select">
                <option value="">-- Selecciona tu regalo --</option>
                <?php foreach($regalos as $regalo){?>
                    <option value="<?php echo $regalo->id;?>"><?php echo $regalo->nombre?></option>

                    <?php }?>
            </select>

            <form class="formulario formulario--registro" id="registro">
                    <div class="formulario__campo">
                        <input type="submit" value="Registrarme" class="formulario__submit formulario__submit--full">
                    </div>
            </form>
        </div>
    </aside>
</div>

<?php $script = "<script src='/build/js/registro.js' defer ></script>"?>

<?php echo $script;?>
