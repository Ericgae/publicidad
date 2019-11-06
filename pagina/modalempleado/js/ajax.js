$(document).ready(function () {
    $('#Empleado').click(function () {
       var parametros = $(this).serialize();
                     
        $.ajax({
            data: parametros,
            url: "../../guardar/guardaEmpleado.php",
            type: 'POST',
            success: function (data) {
                $('#contenido').html(data);
               alert("eres la verga man");
            }
        });
    });
    
    $('#alta').click(function () {
        var parametros = {
            
        };
        cargarUrbano();
        $.ajax({
            data: parametros,
            url: "alta.php",
            type: 'POST',
            success: function (data) {
                $('#contenido').html(data);
                $('#formGuardar').submit(function (e) {
                    
                    e.preventDefault();
                    var parametros = {
                        nombre: $('#txtNombre').val(),
                        direccion: $('#txtDireccion').val(),
                        telefono: $('#txtTelefono').val()
                    }
                    $.ajax({
                        data: parametros,
                        url: "guardarDatos.php",
                        type: 'post',
                        success: function (data) {
                            $('#contenido').html(data);
                        }

                    });
                });
            }
        });
        
    });
     $('#modificar').click(function () {
        var parametros = {
            
        };
        cargarUrbano();
        $.ajax({
            data: parametros,
            url: "modificar.php",
            type: 'POST',
            success: function (data) {
                $('#contenido').html(data);
                $('#formModificar').submit(function (e) {
                    
                    e.preventDefault();
                    var parametros = {
                        nombre: $('#txtNombre').val(),
                        direccion: $('#txtDireccion').val(),
                        telefono: $('#txtTelefono').val()
                    }
                    $.ajax({
                        data: parametros,
                        url: "guardarDatos.php",
                        type: 'post',
                        success: function (data) {
                            $('#contenido').html(data);
                        }

                    });
                });
            }
        });
        
    });
    
    $('#consulta').click(function () {
        var parametros = {
        };
        cargarUrbano();
        $.ajax({
            data: parametros,
            url: "consulta.php",
            type: 'POST',
            success: function (data) {
                $('#contenido').html(data);
                //$('#contenido').html(data);
                
            }

        });
    });
    function cargarUrbano() {
        var $contenidoAjax = $('#contenido').html("<center><img src='img/urbano.jpg'></center>");
    }

    
});

        