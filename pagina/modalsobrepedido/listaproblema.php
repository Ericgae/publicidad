<!DOCTYPE html>
<script src="../../js/jquery.js"></script>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cargar</title>
        <!-- Latest compiled and minified CSS -->
       
    </head>
    <body>

           <?php include("../menu2.html");
        //include_once $_SERVER['DOCUMENT_ROOT'] . '/clinicav2/calendario/menu2.html'; 
  ?>
      
        <?php include("modal_modificar.php"); ?>
        <?php include("modal_eliminar.php"); ?>
        <?php include("modal_agregar.php"); ?>
        <br>
        <br>
        <div class="container-fluid">
            <div class='col-xs-6'>	
                <h3> Listado De Pedidos</h3>
            </div>
            <div class="col-md-4">
           <h3 class='text-right'>
            <button type="button" class="btn btn-default" ><i class='glyphicon glyphicon-print'> </i><a href="reporte_ok.php" target="_blank"> Imprimir</a></button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#dataRegister"><i class='glyphicon glyphicon-duplicate'></i>Agregar</button>
          
            </h3>

            </div>
           
            <div class="row">
                <div id="contenido" class="col-xs-12">
                    <div id="loader" class="text-center"> <img src="loader.gif"></div>
                    <div class="datos_ajax_delete"></div><!-- Datos ajax Final -->
                    <div class="outer_div"></div><!-- Datos ajax Final -->
                </div>
            </div>


        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="../../js/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="../../js/bootstrap.min.js"></script>


        <script src="js/app.js"></script>
        <script src="js/buscar.js"></script>
        <script>
            $(document).ready(function () {
                load(1);
            });
        </script>

        <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.js"></script>
 
    </body>
</html>

