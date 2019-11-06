	function load(page){
		var parametros = {"action":"ajax","page":page};
		$("#loader").fadeIn('slow');
		$.ajax({
			url:'paises_ajax.php',
			data: parametros,
			 beforeSend: function(objeto){
			$("#loader").html("<img src='loader.gif'>");
			},
			success:function(data){
				$(".outer_div").html(data).fadeIn('slow');
				$("#loader").html("");
			}
		})
	}
	




		$('#dataUpdate').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var nombre = button.data('nombre') // Extraer la información de atributos de datos
		  var idcliente = button.data('idcliente') // Extraer la información de atributos de datos
		  var idpersona = button.data('idpersona') // Extraer la información de atributos de datos
		  var apellidop = button.data('apellidop') // Extraer la información de atributos de datos
		  var apellidom = button.data('apellidom') // Extraer la información de atributos de datos
		  var tipoe = button.data('tipoe') // Extraer la información de atributos de datos
		   var password = button.data('password') // Extraer la información de atributos de datos
		  var tel = button.data('tel') // Extraer la información de atributos de datos
		  var fechanac = button.data('fechanac') // Extraer la información de atributos de datos
		  var correo = button.data('correo') // Extraer la información de atributos de datos
		  var telefonofijo = button.data('telefonofijo') // Extraer la información de atributos de datos
		  var celular = button.data('celular') // Extraer la información de atributos de datos
		  
		  

		  var modal = $(this)
		  //modal.find('.modal-title').text('Modificar país: '+nombre)
		  modal.find('.modal-body #idcliente').val(idcliente)
		  modal.find('.modal-body #idpersona').val(idpersona)
		  modal.find('.modal-body #nombre').val(nombre)
		  modal.find('.modal-body #apellidop').val(apellidop)
		  modal.find('.modal-body #apellidom').val(apellidom)
		  modal.find('.modal-body #tipoe').val(tipoe)
		  modal.find('.modal-body #password').val(password)
		  modal.find('.modal-body #tel').val(tel)
		  modal.find('.modal-body #fechanac').val(fechanac)
		  modal.find('.modal-body #correo').val(correo)
		  modal.find('.modal-body #telefonofijo').val(telefonofijo)
		  modal.find('.modal-body #celular').val(celular)
		  
		  $('.alert').hide();//Oculto alert
		})

		$('#dataRegistrar').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var nombre = button.data('nombre') // Extraer la información de atributos de datos
		  var apellidop = button.data('apellidop') // Extraer la información de atributos de datos
		  
		
		  
		  

		  var modal = $(this)
		  //modal.find('.modal-title').text('Modificar país: '+nombre)
		  modal.find('.modal-body #idcliente').val(idcliente)
		  modal.find('.modal-body #nombre').val(nombre)
		  modal.find('.modal-body #apellidop').val(apellidop)
		
		  
		  $('.alert').hide();//Oculto alert
		})
		$('#datacliente').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var fkPersona = button.data('nombre') // Extraer la información de atributos de datos
		  var apellidop = button.data('apellidop') // Extraer la información de atributos de datos
		  var idpersona = button.data('idpersona') // Extraer la información de atributos de datos
		
		  
		  

		  var modal = $(this)
		  //modal.find('.modal-title').text('Modificar país: '+nombre)
		  modal.find('.modal-body #idpersona').val(idpersona)
		  modal.find('.modal-body #nombre').val(nombre)
		  modal.find('.modal-body #apellidop').val(apellidop)
		
		  
		  $('.alert').hide();//Oculto alert
		})
		
		
		$('#dataDelete').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var id = button.data('idpersona') // Extraer la información de atributos de datos
		  var modal = $(this)
		  modal.find('#idpersona').val(id)
		})

	$( "#actualidarDatos" ).submit(function( event ) {
		var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "modificar.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#datos_ajax").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$("#datos_ajax").html(datos);
					
					load(1);
				  }
			});
		  event.preventDefault();
		});
	$( "#agregarCliente" ).submit(function( event ) {
		var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "guarda_personac.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#datos_ajax").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$("#datos_ajax").html(datos);
					
					load(1);
				  }
			});
		  event.preventDefault();
		});
		
		$( "#guardarDatos" ).submit(function( event ) {
		var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "agregar.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#datos_ajax_register").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$("#datos_ajax_register").html(datos);
					
					load(1);
				  }
			});
		  event.preventDefault();
		});
		
		$( "#eliminarDatos" ).submit(function( event ) {
		var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "eliminar.php",
					data: parametros,
					 beforeSend: function(objeto){
						$(".datos_ajax_delete").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$(".datos_ajax_delete").html(datos);
					
					$('#dataDelete').modal('hide');
					load(1);
				  }
			});
		  event.preventDefault();
		});
		
		
		