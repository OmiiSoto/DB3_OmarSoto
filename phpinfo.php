<?php
	include ('conexion.php');
	$query=mysqli_query($conecta,"SHOW DATABASES");

	while($registro=mysqli_fetch_array($query)){
		echo '
			<p>'.$registro['Database'].'<p>
		';
	}//end of while

?>