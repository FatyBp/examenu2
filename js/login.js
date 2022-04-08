$(document).ready(function() {
    $('#btn_entrar').click(function() {
        console.log($('#entrada').serialize());
        $.ajax({
            type: 'POST',
            data: {
                'usuario': $('#usuario').val(),
                'password': $('#password').val()
            },
            url: 'procesos/login.php',
            success: function(respuesta) {
                if (respuesta.trim() == 1) {
                    window.location = "inicio";
                } else {
                    alert(respuesta)
                }
            },
        });
    });
});