<?php
$nombre=$_POST['Nama'];
$apellido=$_POST['LastName'];

include ('conexion.php');

$query=mysqli_query($conecta,"INSERT INTO user VALUES(null,'$nombre','$apellido')");
mysqli_close($conecta);

if($query){
	echo ('Dato insertado');
	header("Refresh:1; URL=http://localhost/Tics17A/getAllusers.php");
}
?>