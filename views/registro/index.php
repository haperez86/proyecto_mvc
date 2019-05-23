<?php
require_once 'views/header.php';

?>




<form action="<?php echo constant('URL'); ?>registro/registroUsuarios" method="POST" enctype="multipart/form-data">

    <div class="form-group row">
    <label for="nombre" class="col-2 col-form-label">Nombre:</label>
    <div class="col-10">
        <input class="form-control" type="text" name="nombre" placeholder ="Nombre" required>
    </div>
    </div>
    <div class="form-group row">
    <label for="telefono" class="col-2 col-form-label">Telefono:</label>
    <div class="col-10">
        <input class="form-control" type="tel" name="telefono" placeholder ="Telefono" required>
    </div>
    </div>
    <div class="form-group row">
    <label for="email" class="col-2 col-form-label">E-mail:</label>
    <div class="col-10">
        <input class="form-control" type="email" name="email" placeholder="E-mail" >
    </div>
    </div>

    <div class="form-group row">
        <label  class="col-2 col-form-label">Amigos:</label>
        <div class="form-check form-check-inline">
        <label class="form-check-label" for="id_amigos">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" name="id_amigos"> Hugo Chavez
        </label>
        </div>
        <div class="form-check form-check-inline">
        <label class="form-check-label" for="id_amigos">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" name="id_amigos"> Alvaro Uribe
        </label>
        </div>
        <div class="form-check form-check-inline disabled">
        <label class="form-check-label" for="id_amigos">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" name="id_amigos"> Juan Manuel Santos
        </label>
        </div>
        <div class="form-check form-check-inline disabled">
        <label class="form-check-label" for="id_amigos">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option4" name="id_amigos" > Barack Obama
        </label>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-10">
            <button class="btn btn-primary" type="submit">Registrar</button>
        </div>
    </div>
    
</form>




<?php
require_once 'views/footer.php';
?>