
$( "#busca" ).on('keyup', function( event ) {

		var dato = $('#busca').val();
		
			 $.ajax({
					type: "POST",
					url: "../modaltipo/buscar.php",
					data: 'dato='+dato,
					 
					success: function(datos){
					$("#contenido").html(datos);
					
					load(1);
				  }
			});
		  event.preventDefault();
		});