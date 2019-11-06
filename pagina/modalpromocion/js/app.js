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
		  var nombref = button.data('nombref') // Extraer la información de atributos de datos
		  var idfisioterapeuta = button.data('idfisioterapeuta') // Extraer la información de atributos de datos
		  var apellidopf = button.data('apellidopf') // Extraer la información de atributos de datos
		  var apellidomf = button.data('apellidomf') // Extraer la información de atributos de datos
		  var sexo = button.data('sexo') // Extraer la información de atributos de datos
		  var edad = button.data('edad') // Extraer la información de atributos de datos
		  var fechanac = button.data('fechanac') // Extraer la información de atributos de datos
		  var celular = button.data('celular') // Extraer la información de atributos de datos
		  var user = button.data('user') // Extraer la información de atributos de datos
		  var password = button.data('password') // Extraer la información de atributos de datos
		  var email = button.data('email') // Extraer la información de atributos de datos
		  var pasadmin = button.data('pasadmin') // Extraer la información de atributos de datos
		  
		  

		  var modal = $(this)
		  //modal.find('.modal-title').text('Modificar país: '+nombre)
		  modal.find('.modal-body #idfisioterapeuta').val(idfisioterapeuta)
		  modal.find('.modal-body #nombref').val(nombref)
		  modal.find('.modal-body #apellidopf').val(apellidopf)
		  modal.find('.modal-body #apellidomf').val(apellidomf)
		  modal.find('.modal-body #sexo').val(sexo)
		  modal.find('.modal-body #edad').val(edad)
		  modal.find('.modal-body #fechanac').val(fechanac)
		  modal.find('.modal-body #celular').val(celular)
		 modal.find('.modal-body #user').val(user)
		  modal.find('.modal-body #password').val(password)
		  modal.find('.modal-body #email').val(email)
		  modal.find('.modal-body #pasadmin').val(pasadmin)
		  
		  $('.alert').hide();//Oculto alert
		})
		
		$('#dataDelete').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var id = button.data('idfisioterapeuta') // Extraer la información de atributos de datos
		  var modal = $(this)
		  modal.find('#idfisioterapeuta').val(id)
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
