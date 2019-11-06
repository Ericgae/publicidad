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
		  var idauto = button.data('idauto') // Extraer la información de atributos de datos
		  var marca = button.data('marca') // Extraer la información de atributos de datos
		  var modelo = button.data('modelo') // Extraer la información de atributos de datos
		  var color = button.data('color') // Extraer la información de atributos de datos
		  var placas = button.data('placas') // Extraer la información de atributos de datos
		  var rodado = button.data('rodado') // Extraer la información de atributos de datos
		
		  
		  

		  var modal = $(this)
		  //modal.find('.modal-title').text('Modificar país: '+nombre)
		  modal.find('.modal-body #idauto').val(idauto)
		  modal.find('.modal-body #marca').val(marca)
		  modal.find('.modal-body #modelo').val(modelo)
		  modal.find('.modal-body #color').val(color)
		  modal.find('.modal-body #placas').val(placas)
		  modal.find('.modal-body #rodado').val(rodado)
		  
		  $('.alert').hide();//Oculto alert
		})
		
		$('#dataDelete').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var id = button.data('idauto') // Extraer la información de atributos de datos
		  var modal = $(this)
		  modal.find('#idauto').val(id)
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
