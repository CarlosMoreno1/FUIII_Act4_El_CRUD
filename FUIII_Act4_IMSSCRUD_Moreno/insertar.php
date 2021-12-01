<?php
include("conexion.php");
$con=conectar();

$idpaciente=$_POST['idpaciente'];
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$numero_seguro_social=$_POST['numero_seguro_social'];
$tipo_de_cita=$_POST['tipo_de_cita'];


$sql="INSERT INTO paciente VALUES('$idpaciente','$nombre','$email','$numero_seguro_social','$tipo_de_cita')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: paciente.php");
    
}else {
}
?>