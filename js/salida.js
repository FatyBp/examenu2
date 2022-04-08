$(document).ready(function() {
    $('#btn_salida').click(function() {
        $.ajax({
            type: 'POST',
            url: 'procesos/salir.php',
            success: function() {
                window.location = "login";
            }
        });
    });
});