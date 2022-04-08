$(document).ready(function() {
    $('#pasivo').click(function() {
        console.log($('#pasivos').serialize());
        $.ajax({
            type: 'POST',
            data: {
                'monto': $('#monto').val(),
                'categoria': $('#categoria').val(),
                'fecha': $('#fecha').val(),
            },
            url: 'procesos/insertar_datos.php',
            success: function(respuesta) {
                window.location = "login";
            }
        });
    });
});