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
		  var nombree = button.data('nombree') // Extraer la información de atributos de datos
		  var idempresa = button.data('idempresa') // Extraer la información de atributos de datos
		  var propietarioe = button.data('propietarioe') // Extraer la información de atributos de datos
		  var idalmacen = button.data('idalmacen') // Extraer la información de atributos de datos
		  var fkempresa = button.data('fkempresa') // Extraer la información de atributos de datos
		  var nombrea = button.data('nombrea') // Extraer la información de atributos de datos
		  var direcciona = button.data('direcciona') // Extraer la información de atributos de datos
		  var iddireccion = button.data('iddireccion') // Extraer la información de atributos de datos
		  var fkempresad = button.data('fkempresad') // Extraer la información de atributos de datos
		  var fkdireccion = button.data('fkdireccion') // Extraer la información de atributos de datos
		  var calle = button.data('calle') // Extraer la información de atributos de datos
		  var colonia = button.data('colonia') // Extraer la información de atributos de datos
		  var numero = button.data('numero') // Extraer la información de atributos de datos
		  var tel = button.data('tel') // Extraer la información de atributos de datos
		  var correo = button.data('correo') // Extraer la información de atributos de datos
		  
		  

		  var modal = $(this)
		  //modal.find('.modal-title').text('Modificar país: '+nombre)
		  modal.find('.modal-body #idempresa').val(idempresa)
		  modal.find('.modal-body #nombree').val(nombree)
		  modal.find('.modal-body #propietarioe').val(propietarioe)

		  modal.find('.modal-body #idalmacen').val(idalmacen)
		  modal.find('.modal-body #fkempresa').val(fkempresa)
		  modal.find('.modal-body #nombrea').val(nombrea)
		  modal.find('.modal-body #direcciona').val(direcciona)
		  modal.find('.modal-body #iddireccion').val(iddireccion)
		  modal.find('.modal-body #fkempresad').val(fkempresad)
		  modal.find('.modal-body #calle').val(calle)
		  modal.find('.modal-body #colonia').val(colonia)
		  modal.find('.modal-body #numero').val(numero)
		  modal.find('.modal-body #tel').val(tel)
		  modal.find('.modal-body #correo').val(correo)

	
		
		  
		  $('.alert').hide();//Oculto alert
		})
		
		$('#dataDelete').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var id = button.data('idempresa') // Extraer la información de atributos de datos
		  var modal = $(this)
		  modal.find('#idempresa').val(id)
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
