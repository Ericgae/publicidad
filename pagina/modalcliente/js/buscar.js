
$( "#busca" ).on('keyup', function( event ) {

		var tipo = $('#tipo').val();
		
			 $.ajax({
					type: "POST",
					url: "../modalpaciente/buscar.php",
					data: 'tipo='+tipo,
					 
					success: function(datos){
					$("#contenido").html(datos);
					
					load(1);
				  }
			});
		  event.preventDefault();
		});