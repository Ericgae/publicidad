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
		  var fkpersona = button.data('fkpersona') // Extraer la información de atributos de datos
		  var ididentificacion = button.data('ididentificacion') // Extraer la información de atributos de datos
		  var ocupacion = button.data('ocupacion') // Extraer la información de atributos de datos
		  var actividadfisica = button.data('actividadfisica') // Extraer la información de atributos de datos
		  var deporte = button.data('deporte') // Extraer la información de atributos de datos
		  var atraumaticos = button.data('atraumaticos') // Extraer la información de atributos de datos
		  var pactual = button.data('pactual') // Extraer la información de atributos de datos
		  var efisica = button.data('efisica') // Extraer la información de atributos de datos
		  var estatura = button.data('estatura') // Extraer la información de atributos de datos
		  var peso = button.data('peso') // Extraer la información de atributos de datos
		  var atraumaticos = button.data('atraumaticos') // Extraer la información de atributos de datos
		  var pactual = button.data('pactual') // Extraer la información de atributos de datos
		  var efisica = button.data('efisica') // Extraer la información de atributos de datos
		  var estatura = button.data('estatura') // Extraer la información de atributos de datos
		  var peso = button.data('peso') // Extraer la información de atributos de datos
		  var talla = button.data('talla') // Extraer la información de atributos de datos
		  var temperatura = button.data('temperatura') // Extraer la información de atributos de datos
		  var diagnostico = button.data('diagnostico') // Extraer la información de atributos de datos
		  var patologiasa = button.data('patologiasa') // Extraer la información de atributos de datos
		  var objtratamiento = button.data('objtratamiento') // Extraer la información de atributos de datos
		  var electroestimulacion = button.data('electroestimulacion') // Extraer la información de atributos de datos
		  var corrientee = button.data('corrientee') // Extraer la información de atributos de datos
		  var modulacione = button.data('modulacione') // Extraer la información de atributos de datos
		  var duracione = button.data('duracione') // Extraer la información de atributos de datos
		  var ultrasonido = button.data('ultrasonido') // Extraer la información de atributos de datos
		  var frecuenciau = button.data('frecuenciau') // Extraer la información de atributos de datos
		  var potenciau = button.data('potenciau') // Extraer la información de atributos de datos
		  var duracionu = button.data('duracionu') // Extraer la información de atributos de datos
		  var laserinfrarojo = button.data('laserinfrarojo') // Extraer la información de atributos de datos
		  var modalidadl = button.data('modalidadl') // Extraer la información de atributos de datos
		  var duracionl = button.data('duracionl') // Extraer la información de atributos de datos
		  var termoterapia = button.data('termoterapia') // Extraer la información de atributos de datos
		  var modalidadt = button.data('modalidadt') // Extraer la información de atributos de datos
		  var duraciont = button.data('duraciont') // Extraer la información de atributos de datos
		  var ejercicio = button.data('ejercicio') // Extraer la información de atributos de datos
		  var fktipo = button.data('fktipo') // Extraer la información de atributos de datos
		  var notaingreso = button.data('notaingreso') // Extraer la información de atributos de datos
		  var notaalta = button.data('notaalta') // Extraer la información de atributos de datos
		  var fecha = button.data('fecha') // Extraer la información de atributos de datos

		  var modal = $(this)
		  //modal.find('.modal-title').text('Modificar país: '+nombre)
		  modal.find('.modal-body #ididentificacion').val(ididentificacion)
		  modal.find('.modal-body #fkpersona').val(fkpersona)
		  modal.find('.modal-body #ocupacion').val(ocupacion)
		  modal.find('.modal-body #actividadfisica').val(actividadfisica)
		  modal.find('.modal-body #deporte').val(deporte)
		  modal.find('.modal-body #atraumaticos').val(atraumaticos)
		  modal.find('.modal-body #pactual').val(pactual)
		  modal.find('.modal-body #efisica').val(efisica)
		  modal.find('.modal-body #estatura').val(estatura)
		  modal.find('.modal-body #peso').val(peso)
		  modal.find('.modal-body #talla').val(talla)
		  modal.find('.modal-body #temperatura').val(temperatura)
		  modal.find('.modal-body #diagnostico').val(diagnostico)
		  modal.find('.modal-body #patologiasa').val(peso)
		  modal.find('.modal-body #objtratamiento').val(objtratamiento)
		  modal.find('.modal-body #electroestimulacion').val(electroestimulacion)
		  modal.find('.modal-body #corrientee').val(corrientee)
		  modal.find('.modal-body #modulacione').val(modulacione)
		  modal.find('.modal-body #duracione').val(duracione)
		  modal.find('.modal-body #ultrasonido').val(ultrasonido)
		  modal.find('.modal-body #frecuenciau').val(frecuenciau)
		  modal.find('.modal-body #potenciau').val(potenciau)
		  modal.find('.modal-body #duracionu').val(duracionu)
		  modal.find('.modal-body #laserinfrarojo').val(laserinfrarojo)
		  modal.find('.modal-body #modalidadl').val(modalidadl)
		  modal.find('.modal-body #duracionl').val(duracionl)
		  modal.find('.modal-body #termoterapia').val(termoterapia)
		  modal.find('.modal-body #modalidadt').val(modalidadt)
		  modal.find('.modal-body #duraciont').val(duraciont)
		  modal.find('.modal-body #ejercicio').val(ejercicio)
		  modal.find('.modal-body #fktipo').val(fktipo)
		  modal.find('.modal-body #notaingreso').val(notaingreso)
		  modal.find('.modal-body #notaalta').val(notaalta)
		  modal.find('.modal-body #fecha').val(fecha)
		  
		  $('.alert').hide();//Oculto alert
		})

	$('#dataimp').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var fkpersona = button.data('fkpersona') // Extraer la información de atributos de datos
		  var nombre = button.data('nombre') // Extraer la información de atributos de datos
		  var ididentificacion = button.data('ididentificacion') // Extraer la información de atributos de datos
		  var ocupacion = button.data('ocupacion') // Extraer la información de atributos de datos
		  var actividadfisica = button.data('actividadfisica') // Extraer la información de atributos de datos
		  var deporte = button.data('deporte') // Extraer la información de atributos de datos
		  var atraumaticos = button.data('atraumaticos') // Extraer la información de atributos de datos
		  var pactual = button.data('pactual') // Extraer la información de atributos de datos
		  var efisica = button.data('efisica') // Extraer la información de atributos de datos
		  var estatura = button.data('estatura') // Extraer la información de atributos de datos
		  var peso = button.data('peso') // Extraer la información de atributos de datos
		  var atraumaticos = button.data('atraumaticos') // Extraer la información de atributos de datos
		  var pactual = button.data('pactual') // Extraer la información de atributos de datos
		  var efisica = button.data('efisica') // Extraer la información de atributos de datos
		  var estatura = button.data('estatura') // Extraer la información de atributos de datos
		  var peso = button.data('peso') // Extraer la información de atributos de datos
		  var talla = button.data('talla') // Extraer la información de atributos de datos
		  var temperatura = button.data('temperatura') // Extraer la información de atributos de datos
		  var diagnostico = button.data('diagnostico') // Extraer la información de atributos de datos
		  var patologiasa = button.data('patologiasa') // Extraer la información de atributos de datos
		  var objtratamiento = button.data('objtratamiento') // Extraer la información de atributos de datos
		  var electroestimulacion = button.data('electroestimulacion') // Extraer la información de atributos de datos
		  var corrientee = button.data('corrientee') // Extraer la información de atributos de datos
		  var modulacione = button.data('modulacione') // Extraer la información de atributos de datos
		  var duracione = button.data('duracione') // Extraer la información de atributos de datos
		  var ultrasonido = button.data('ultrasonido') // Extraer la información de atributos de datos
		  var frecuenciau = button.data('frecuenciau') // Extraer la información de atributos de datos
		  var potenciau = button.data('potenciau') // Extraer la información de atributos de datos
		  var duracionu = button.data('duracionu') // Extraer la información de atributos de datos
		  var laserinfrarojo = button.data('laserinfrarojo') // Extraer la información de atributos de datos
		  var modalidadl = button.data('modalidadl') // Extraer la información de atributos de datos
		  var duracionl = button.data('duracionl') // Extraer la información de atributos de datos
		  var termoterapia = button.data('termoterapia') // Extraer la información de atributos de datos
		  var modalidadt = button.data('modalidadt') // Extraer la información de atributos de datos
		  var duraciont = button.data('duraciont') // Extraer la información de atributos de datos
		  var ejercicio = button.data('ejercicio') // Extraer la información de atributos de datos
		  var fktipo = button.data('fktipo') // Extraer la información de atributos de datos
		  var notaingreso = button.data('notaingreso') // Extraer la información de atributos de datos
		  var notaalta = button.data('notaalta') // Extraer la información de atributos de datos
		  var fecha = button.data('fecha') // Extraer la información de atributos de datos

		  var modal = $(this)
		  //modal.find('.modal-title').text('Modificar país: '+nombre)
		  modal.find('.modal-body #ididentificacion').val(ididentificacion)
		  modal.find('.modal-body #fkpersona').val(fkpersona)
		  modal.find('.modal-body #ocupacion').val(ocupacion)
		  modal.find('.modal-body #actividadfisica').val(actividadfisica)
		  modal.find('.modal-body #deporte').val(deporte)
		  modal.find('.modal-body #atraumaticos').val(atraumaticos)
		  modal.find('.modal-body #pactual').val(pactual)
		  modal.find('.modal-body #efisica').val(efisica)
		  modal.find('.modal-body #estatura').val(estatura)
		  modal.find('.modal-body #peso').val(peso)
		  modal.find('.modal-body #talla').val(talla)
		  modal.find('.modal-body #temperatura').val(temperatura)
		  modal.find('.modal-body #diagnostico').val(diagnostico)
		  modal.find('.modal-body #patologiasa').val(peso)
		  modal.find('.modal-body #objtratamiento').val(objtratamiento)
		  modal.find('.modal-body #electroestimulacion').val(electroestimulacion)
		  modal.find('.modal-body #corrientee').val(corrientee)
		  modal.find('.modal-body #modulacione').val(modulacione)
		  modal.find('.modal-body #duracione').val(duracione)
		  modal.find('.modal-body #ultrasonido').val(ultrasonido)
		  modal.find('.modal-body #frecuenciau').val(frecuenciau)
		  modal.find('.modal-body #potenciau').val(potenciau)
		  modal.find('.modal-body #duracionu').val(duracionu)
		  modal.find('.modal-body #laserinfrarojo').val(laserinfrarojo)
		  modal.find('.modal-body #modalidadl').val(modalidadl)
		  modal.find('.modal-body #duracionl').val(duracionl)
		  modal.find('.modal-body #termoterapia').val(termoterapia)
		  modal.find('.modal-body #modalidadt').val(modalidadt)
		  modal.find('.modal-body #duraciont').val(duraciont)
		  modal.find('.modal-body #ejercicio').val(ejercicio)
		  modal.find('.modal-body #fktipo').val(fktipo)
		  modal.find('.modal-body #notaingreso').val(notaingreso)
		  modal.find('.modal-body #notaalta').val(notaalta)
		  modal.find('.modal-body #fecha').val(fecha)
		  
		  $('.alert').hide();//Oculto alert
		})

	$('#dataRegistrar').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		 //var nombre = button.data('fkidentificacion') // Extraer la información de atributos de datos
		  var diagnostico = button.data('diagnostico') // Extraer la información de atributos de datos
		  var ididentificacion = button.data('ididentificacion') // Extraer la información de atributos de datos
		
		  
		  

		  var modal = $(this)
		  //modal.find('.modal-title').text('Modificar país: '+nombre)
		  modal.find('.modal-body #ididentificacion').val(ididentificacion)
		  modal.find('.modal-body #diagnostico').val(diagnostico)
		  //modal.find('.modal-body #apellidop').val(apellidop)
		
		  
		  $('.alert').hide();//Oculto alert
		})


		
		$('#dataDelete').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var id = button.data('ididentificacion') // Extraer la información de atributos de datos
		  var modal = $(this)
		  modal.find('#ididentificacion').val(id)
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
		
	
		