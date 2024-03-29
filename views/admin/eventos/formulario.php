<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Informacion del evento</legend>
    <div class="formulario__campo">
        <label class="formulario__label" for="nombre">Nombre Evento</label>
        <input type="text" name="nombre" id="nombre" class="formulario__input formulario__input--admin" placeholder="Nombre evento" value="<?php echo $evento->nombre ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label class="formulario__label" for="descripcion">Descripcion Evento</label>
        <textarea name="descripcion" id="descripcion" class="formulario__textarea formulario__textarea--admin" placeholder="Descripcion del evento"  rows="8"><?php echo $evento->descripcion ?? '';?></textarea>
    </div>
    <div class="formulario__campo">
        <label for="categorias" class="formulario__label" for="categoria">Categoria</label>
        <select name="categoria_id" id="categorias" class="formulario__select--admin">
            <option value="">Seleccionar</option>
            <?php foreach ($categorias as $categoria) : ?>
                <option value=<?php echo $categoria->id ?> <?php echo $categoria->id == $evento->categoria_id ? 'selected' : ''?> ><?php echo $categoria->nombre ?? ''; ?></option>

            <?php endforeach; ?>
        </select>
    </div>


    <div class="formulario__campo">
        <label class="formulario__label" for="descripcion">Selecciona el dia</label>
        <div class="formulario__radio">
            <?php foreach ($dias as $dia) : ?>

                <div>
                    <label for="<?php echo strtolower($dia->nombre); ?>"><?php echo $dia->nombre; ?></label>
                    <input type="radio" name="dia" id="<?php echo strtolower($dia->nombre); ?>" value="<?php echo $dia->id?>"  <?php echo ($evento->dia_id == $dia->id) ? 'checked' : '';?> >
                </div>

            <?php endforeach ?>
        </div>

        <input type="hidden" name="dia_id" value="">
    </div>


    <div id="horas" class="formulario__campo">
        <label class="formulario__label" for="hora">Seleccionar Hora</label>
        <ul class="horas">
            <?php foreach ($horas as $hora) : ?>
                <li data-hora-id="<?php echo $hora->id?>" class="horas__hora horas__hora--none"><?php echo $hora->hora;?></li>
            <?php endforeach ?>
        </ul>
        <input type="hidden" name="hora_id" value="<?php echo $evento->hora_id ?? '';?>">
    </div>

</fieldset>


<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Informacion Extra:</legend>
    <div class="formulario__campo">
        <label class="formulario__label" for="ponente_id">Ponente</label>
        <input type="text"  id="ponentes" class="formulario__input formulario__input--admin" placeholder="Buscar ponente" value="<?php echo isset($evento->ponente) ? $evento->ponente->nombre ." ".  $evento->ponente->apellido : '';?>">

        <ul id="listado-ponentes" class="listado-ponentes">

        </ul>

        <input type="hidden" name="ponente_id" value="<?php echo $evento->ponente_id ?? ''?>">
    </div>


    <div class="formulario__campo">
        <label class="formulario__label" for="disponibles">Lugares disponibles</label>
        <input type="number" min="1"  id="disponibles" name="disponibles" class="formulario__input formulario__input--admin" placeholder="Ej: 20" value="<?php echo $evento->disponibles ?? ''; ?>">
    </div>

</fieldset>