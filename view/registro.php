<div class="container">
    <div class="row">
        <div class="col">
            <form id="registro"class="form-control">
                <h1 class="text-center mt-4">Registro <i class="fa-solid fa-person-half-dress"></i></h1>
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <label for="" class="text"><i class="fa-solid fa-user-plus"> &nbsp</i> Usuario </label>
                                    <input required class="form-control " type="text" name="usuario" id="usuario">
                                    <label for="" class="text"><i class="fa-solid fa-lock"></i> &nbsp&nbspPassword</label>
                                    <input required class="form-control " type="password" name="password" id="password">
                                </div>
                                <div class="col-6">
                                    <label for="" class="text"><i class="fa-solid fa-file-signature"></i>&nbsp&nbspNombre</label>
                                    <input required class="form-control " type="text" name="nombre" id="nombre">
                                    <label for="" class="text"><i class="fa-solid fa-address-card"></i>&nbsp&nbspApellido Paterno</label>
                                    <input required class="form-control " type="text" name="apellido_paterno" id="apellido_paterno">
                                    <label for="" class="text"><i class="fa-solid fa-address-card"></i>&nbsp&nbspApellido Materno</label>
                                    <input required class="form-control " type="text" name="apellido_materno" id="apellido_materno">
                                </div>
                            </div>
                            <clic id="btn_registrar" class="btn btn-outline-success">agregar</clic>
                            <input class="btn btn-outline-warning" type="reset" value="Eliminar datos">
                            <faty class="btn btn-outline-info" id="btn_salida">Inicio</faty>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="js/registro.js"></script>
<script src="js/salida.js"></script>