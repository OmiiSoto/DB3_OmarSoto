<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF8">
		<title>Users</title>
	</head>
	<body>
		<h1>List of all Users in DB</h1>

		<table border="1">
			<thead>
				<tr>
					<td>Name</td>
					<td>Last Name</td>
				</tr>
			</thead>
			<tbody>
				<?php
					include('conexion.php');
					$query=mysqli_query($conecta,"SELECT * FROM user");
					while($registro=mysqli_fetch_array($query)){
					echo '
						<tr>
							<td>'.$registro['NameU'].'</td>
							<td>'.$registro['LastNameU'].'</td>
						</tr>
					';
					}//end of while
				?>
			</tbody>
		</table>

		<h2>Add new User</h2>
		<form action="addUser.php" method="POST">
			<label>Name User</label><br>
			<input type="text" name="Nama"><br>
			<label>Last name User</label><br>
			<input type="text" name="LastName"><br>
			<br><input type="submit" name="boton">
		</form>
	</body>
</html>