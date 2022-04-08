$(document).ready(function() {
    $.ajax({
        type: 'POST',
        url: 'procesos/usuarios/catalogo_ganancia.php',
        success: function(resultado) {
            $('#categoria_ganancia').html(resultado);
        }
    })
    $.ajax({
        type: 'POST',
        url: "procesos/usuarios/catalogo_gasto.php",
        success: function(resultado) {
            $('#categoria_gastos').html(resultado);
        }
    })
    $('#btn_guardar_ganancia').click(function() {
        console.log($('#monto_ganancia').val(),
            $('#categoria_ganancia').val(),
            $('#fecha_ganancia').val())
        $.ajax({
            type: 'POST',
            data: {
                'monto_ganancia': $('#monto_ganancia').val(),
                'categoria_ganancia': $('#categoria_ganancia').val(),
                'fecha_ganancia': $('#fecha_ganancia').val()
            },
            url: "procesos/insertar_ganancias.php",
            success: function(resultado) {
                if (resultado == 1) {
                    console.log("guardado");
                } else {
                    console.log(resultado)
                }
            }
        })
    })
    $('#btn_guardar_gastos').click(function() {
        $.ajax({
            type: 'POST',
            data: {
                'monto_gastos': $('#monto_gastos').val(),
                'categoria_gastos': $('#categoria_gastos').val(),
                'fecha_gastos': $('#fecha_gastos').val()
            },
            url: "procesos/insertar_gastos.php",
            success: function(resultado) {
                if (resultado == 1) {
                    console.log("guardado");
                } else {
                    console.log(resultado)
                }
            }
        })
    })
    $('#btn_buscar').click(function() {
        $.ajax({
            type: 'POST',
            data: {
                'fecha_inicio': $('#fecha_inicio').val(),
                'fecha_final': $('#fecha_final').val(),
                'opcion': $('#opcion').val()
            },
            url: "procesos/busqueda.php",
            success: function(resultado) {
                $('#busqueda').html(resultado);
                if (resultado == 1) {
                    console.log('listo');
                } else {
                    console.log(resultado);
                }
            }
        })
    })
})