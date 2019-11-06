<?php  
$para  = 'espectrooocho@gmail.com';

$asunto = "pedido"; 
$cuerpo ='
<html>
<head>
<title></title> 
</head> 
<body> 
<h1>Contenido</h1> 


<table align="left" style="width:50px;overflow-x:auto;font-size:15px;" media="all" border="1">

 
</body> 
</html> 
';

$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=utf-8\r\n"; 
$headers .= "From: Titulo etiqueta<correo_envia@gmail.com>\r\n"; 
$headers .= "Reply-To: correo_envia@gmail.com\r\n"; // Responder a 

if(mail($para,$asunto,$cuerpo,$headers)){
  // si el mensaje se envia
echo '
<script type="text/javascript">
  alert("Correo enviado");
</script>';

}
else{
  // si el mensaje no se envia
  echo '
  <script type="text/javascript">
  alert("Correo no enviado");
</script>';

}


?>
