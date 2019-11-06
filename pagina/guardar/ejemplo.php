<!DOCTYPE html>
<?php
//session_start();
//if (@!$_SESSION['user']) {
//header("Location:../index.php");

?>
<meta charset="utf-8">
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/style.css" rel="stylesheet">
<nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">

        
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>



            </button>
         
                </li>
            </ul>


<h2>ejemplo  </h2>
<input type="text" class="form-control" id="moneda0" readonly   required maxlength="34" value="<?php echo generarCodigo(10);  ?>">    

        </div>
    </div>
</nav>

<?php
function generarCodigo($longitud) {
 $key = '';
 $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
 $max = strlen($pattern)-1;
 for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
 return $key;
}
 
//Ejemplo de uso


 // genera un código de 6 caracteres de longitud.


?>
<?php
echo 'Current PHP version: ' . phpversion();
?>