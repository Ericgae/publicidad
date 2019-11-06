<?php
//include("connect_db.php");
//$miconexion = new connect_db;
session_start();
require("connect_db.php");

$username = $_POST['mail'];
$pass = $_POST['pass'];



//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
$sql2 = mysqli_query($con, "SELECT * FROM empleado WHERE usuario='$username' and tipoE='Administrador'");
if ($f2 = mysqli_fetch_assoc($sql2)) {
    if ($pass == $f2['password']) {
        $_SESSION['idEmpleado'] = $f2['idEmpleado'];
        $_SESSION['usuario'] = $f2['usuario'];
        echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
        echo "<script>location.href='pagina/index.php'</script>";
//    } else {
//        $_SESSION['idprofesor'] = $f2['idprofesor'];
//        $_SESSION['user'] = $f2['user'];
//        echo '<script>alert("BIENVENIDO PROFESOR")</script> ';
//        echo "<script>location.href='usuario/index.php'</script>";
    }
}

$sql = mysqli_query($con, "SELECT * FROM empleado WHERE usuario='$username' and tipoE='socio'");
if ($f = mysqli_fetch_assoc($sql)) {
    if ($pass == $f['password']) {
        $_SESSION['idEmpleado'] = $f['idEmpleado'];
        $_SESSION['usuario'] = $f['usuario'];
        echo '<script>alert("BIENVENIDO")</script> ';
        echo "<script>location.href='socio/index.php'</script>";
    } else {
        echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';

        echo "<script>location.href='index.php'</script>";
    }
} else {

    echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';

    echo "<script>location.href='index.php'</script>";
}
?>