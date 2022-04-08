<!--vistas-panel-->
<?php
    session_start();
    if(isset($_SESSION['usuario'])):
?>
<div class="container">
    <h1><?php echo $_SESSION['usuario']?></h1>
    <div class="row align-items-center">
        <div class="col-4 text-end">
            <span id="activo" class="btn btn-outline-success" data-bs-toggle="modal"
                data-bs-target="#btn_ganancias">
                Ganancias</span>
            <span id="pasivo" class="btn btn-outline-primary" data-bs-toggle="modal"
                data-bs-target="#btn_gastos">
                Gastos</span>
                <span id="pasivo" class="btn btn-outline-secondary" data-bs-toggle="modal"
                data-bs-target="#btn_reporte">
                Reporte</span>
            <clic class="btn btn-outline-danger" id="btn_salida">Salir</clic>
        </div>
    </div>
</div>
<script src="js/salida.js"></script>
<?php
    else:
        header('login');
    endif
?>

<br>
<br>
<div class="container">
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead  style="background-color:greenyellow;">
                                    <th class="text-center border-5">monto</th>
                                    <th class="text-center border-5">categoria</th>
                                    <th class="text-center border-5">fecha</th>
                        <tbody id="busqueda">
                                
                        </tbody>
                    </thead>
                </table>
            </div>
        </div>
    <div class="modal fade" id="btn_ganancias" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ganancia</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-8">
                            <form id="fromd_ganancia">
                            <div class="mb-3">
                                <label class="form-label">Monto</label>
                                <input type="text" class="form-control" id="monto_ganancia" name="monto_ganancia">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Categoria</label>
                                <select class="form-control" id="categoria_ganancia" name="categoria_ganancia"></select>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Fecha</label>
                                <input type="date" class="form-control" id="fecha_ganancia" name="fecha_ganancia">
                            </div>
                            </form>  
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <span class="btn btn-outline-secondary" data-bs-dismiss="modal">Cerrar</span>
                    <span class="btn btn-outline-warning" id="btn_guardar_ganancia">Guardar</span>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="btn_gastos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Gastos</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-8">
                            <div class="mb-3">
                                <label for="" class="form-label">Monto</label>
                                <input type="text" class="form-control" id="monto_gastos" name="monto_gastos">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Categoria</label>
                                <select class="form-control" id="categoria_gastos" name="categoria_gastos"
                                    rows="3"></select>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Fecha</label>
                                <input type="date" class="form-control" id="fecha_gastos" name="fecha_gastos">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <span  class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</span>
                    <span id="btn_guardar_gastos" class="btn btn-outline-warning">Guardar</span>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="btn_reporte" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Gastos</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-8">
                            <div class="mb-3">
                                <label for="" class="form-label">fecha inicio</label>
                                <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio">
                            </div>
                            <div class="mb-3">
                            <label for="" class="form-label">Fecha final</label>
                                <input type="date" class="form-control" id="fecha_final" name="fecha_final">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Tipo</label>
                                <select name="opcion" id="opcion" class="form-control">
                                    <option value="1">ganancia</option>
                                    <option value="2">gasto</option>
                                    <!-- <option value="3">todas</option>  -->
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                    <span id="btn_buscar" class="btn btn-outline-warning">Buscar</span>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="js/catalogos.js"></script>
