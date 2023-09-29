<?php

$inc = include("con_db.php");
if ($inc) {
	$consulta = "SELECT * FROM clientes";
	$resultado = mysqli_query($conex,$consulta);
	if ($resultado) {
		while($row = $resultado->fetch_array()){
			$id = $row['id'];
			$nombre = $row['cRazonSocial'];
			$rfc = $row['cRFC'];
			?>
			<div>
				<?php echo $nombre; ?>
				<div>
					<p>
						<b>ID: </b><?php echo $id; ?></br>
						<b>RFC: </b><?php echo $rfc; ?>
					</p>
				</div>
			</div>	
			<?php
		}
	}
}

?>