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
		   
		   var idarticulo = button.data('idarticulo') // Extraer la información de atributos de datos
		  var nombre = button.data('nombre') // Extraer la información de atributos de datos
		  var codigo = button.data('codigo') // Extraer la información de atributos de datos
		  var marca = button.data('marca') // Extraer la información de atributos de datos
		  var foto = button.data('foto') // Extraer la información de atributos de datos
		   var punitario = button.data('punitario') // Extraer la información de atributos de datos
		   var punitariod = button.data('punitariod') // Extraer la información de atributos de datos
		   var punitariot = button.data('punitariot') // Extraer la información de atributos de datos
		   var cantidad = button.data('cantidad') // Extraer la información de atributos de datos
		      var descripcion = button.data('descripcion') // Extraer la información de atributos de datos
		    
		      var estatus = button.data('estatus') // Extraer la información de atributos de datos
		       var fechaInicio = button.data('fechaInicio') // Extraer la información de atributos de datos
		        var fechaFin = button.data('fechaFin') // Extraer la información de atributos de datos
		
		  
		  

		  var modal = $(this)
		  //modal.find('.modal-title').text('Modificar país: '+nombre)
		  modal.find('.modal-body #idarticulo').val(idarticulo)
		  modal.find('.modal-body #nombre').val(nombre)
		  modal.find('.modal-body #codigo').val(codigo)
		  modal.find('.modal-body #marca').val(marca)
		  modal.find('.modal-body #foto').val(foto)
		  modal.find('.modal-body #punitario').val(punitario)
		  modal.find('.modal-body #punitariod').val(punitariod)
		  modal.find('.modal-body #punitariot').val(punitariot)
		  modal.find('.modal-body #cantidad').val(cantidad)
		  modal.find('.modal-body #descripcion').val(descripcion)
		  modal.find('.modal-body #estatus').val(estatus)
		  modal.find('.modal-body #fechaInicio').val(fechaInicio)
		  modal.find('.modal-body #fechaFin').val(fechaFin)
		 
		  

		  
		  
		  $('.alert').hide();//Oculto alert
		})
		$('#dataPromo').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		   var idarticulo = button.data('idarticulo') // Extraer la información de atributos de datos
		  var modal = $(this)
		  //modal.find('.modal-title').text('Modificar país: '+nombre)
		  modal.find('.modal-body #idarticulo').val(idarticulo)
		  
		  
		  $('.alert').hide();//Oculto alert
		})

		$('#myModal').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		   var idarticulo = button.data('idarticulo') // Extraer la información de atributos de datos
		  var modal = $(this)
		  //modal.find('.modal-title').text('Modificar país: '+nombre)
		  modal.find('.modal-body #idarticulo').val(idarticulo)
		  
		  
		  $('.alert').hide();//Oculto alert
		})


		$('#dataDelete').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var idarticulo = button.data('idarticulo') // Extraer la información de atributos de datos
		  var modal = $(this)
		  modal.find('#idarticulo').val(idarticulo)
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


		$( "#agregaPromo" ).submit(function( event ) {
		var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "../guardar/guarda_promo.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#datos_ajax").html("Mensaje: Cargando23...");
					  },
					success: function(datos){
					$("#datos_ajax").html(datos);
					
					load(1);
				  }
			});
		  event.preventDefault();
		});

