$(document).ready(function() {
    $('#btn_registrar').click(function() {
        console.log($('#registro').serialize());
        $.ajax({
            type: 'POST',
            data: {
                'usuario': $('#usuario').val(),
                'password': $('#password').val(),
                'nombre': $('#nombre').val(),
                'apellido_paterno': $('#apellido_paterno').val(),
                'apellido_materno': $('#apellido_materno').val()
            },
            url: 'procesos/usuarios/insertar.php',
            success: function(respuesta) {
                $('#usuario').val("");
                $('#password').val("");
                $('#nombre').val("");
                $('#apellido_paterno').val("");
                $('#apellido_materno').val("");
                if (respuesta == 1) {
                    window.location = "login";
                } else {
                    alert("falla de la conexion");
                }
            }
        });
    });
});