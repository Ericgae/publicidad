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
		  var idpedido = button.data('idpedido') // Extraer la información de atributos de datos
		  var nombre = button.data('nombre') // Extraer la información de atributos de datos
		 var nombreP = button.data('nombreP') // Extraer la información de atributos de datos
		  var fecha = button.data('fecha') // Extraer la información de atributos de datos
		 var producto = button.data('producto') // Extraer la información de atributos de datos
		  var precio = button.data('precio') // Extraer la información de atributos de datos
		 var cantidad = button.data('cantidad') // Extraer la información de atributos de datos
		  var anticipo = button.data('anticipo') // Extraer la información de atributos de datos
		 var total = button.data('total') // Extraer la información de atributos de datos
		  var status = button.data('status') // Extraer la información de atributos de datos
		
		  
		  

		  var modal = $(this)
		  //modal.find('.modal-title').text('Modificar país: '+nombre)
		  modal.find('.modal-body #idpedido').val(idpedido)
		  modal.find('.modal-body #nombre').val(nombre)
		modal.find('.modal-body #nombreP').val(nombreP)
		  modal.find('.modal-body #fecha').val(fecha)
		  modal.find('.modal-body #producto').val(producto)
		  modal.find('.modal-body #fecha').val(fecha)
		  modal.find('.modal-body #producto').val(producto)
		  modal.find('.modal-body #precio').val(precio)
		  modal.find('.modal-body #cantidad').val(cantidad)
		  modal.find('.modal-body #anticipo').val(anticipo)
		  modal.find('.modal-body #total').val(total)
		  modal.find('.modal-body #status').val(status)
		
		
		
		
		
		  
		  $('.alert').hide();//Oculto alert
		})
		
		$('#dataDelete').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var idpedido = button.data('idpedido') // Extraer la información de atributos de datos
		  var modal = $(this)
		  modal.find('#idpedido').val(idpedido)
		  
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

		$( "#guardaPedido" ).submit(function( event ) {
		var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "agregar.php",
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
		
		
		