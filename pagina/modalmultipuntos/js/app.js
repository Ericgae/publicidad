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
		  var idmulti = button.data('idmulti') // Extraer la información de atributos de datos
		  var nitrogeno = button.data('nitrogeno') // Extraer la información de atributos de datos
		  var tipoliza = button.data('tipoliza') // Extraer la información de atributos de datos
		  var alineacion = button.data('alineacion') // Extraer la información de atributos de datos
		  var balatas = button.data('balatas') // Extraer la información de atributos de datos
		  var suspencion = button.data('suspencion') // Extraer la información de atributos de datos
		var usuario = button.data('usuario') // Extraer la información de atributos de datos
		var llantas = button.data('llantas') // Extraer la información de atributos de datos
		var baterias = button.data('baterias') // Extraer la información de atributos de datos
		var pulidofaro = button.data('pulidofaro') // Extraer la información de atributos de datos
		var rotacion = button.data('rotacion') // Extraer la información de atributos de datos
		var llantadesecha = button.data('llantadesecha') // Extraer la información de atributos de datos
		var especificacion = button.data('especificacion') // Extraer la información de atributos de datos

		
		  
		  

		  var modal = $(this)
		  //modal.find('.modal-title').text('Modificar país: '+nombre)
		  modal.find('.modal-body #idmulti').val(idmulti)
		  modal.find('.modal-body #nitrogeno').val(nitrogeno)
		  modal.find('.modal-body #tipoliza').val(tipoliza)
		  modal.find('.modal-body #alineacion').val(alineacion)
		  modal.find('.modal-body #balatas').val(balatas)
		  modal.find('.modal-body #suspencion').val(suspencion)
		  modal.find('.modal-body #usuario').val(usuario)
		  modal.find('.modal-body #llantas').val(llantas)
		  modal.find('.modal-body #baterias').val(baterias)
		  modal.find('.modal-body #pulidofaro').val(pulidofaro)
		  modal.find('.modal-body #rotacion').val(rotacion)
		  modal.find('.modal-body #llantadesecha').val(llantadesecha)
		  modal.find('.modal-body #especificacion').val(especificacion)

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
					url: "../guardar/guarda_multi.php",
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
