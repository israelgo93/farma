<?php 

		session_start();
		include('php_conexion.php'); 
		$usuario=$_SESSION['username'];
		if(!$_SESSION['tipo_usu']=='a' or !$_SESSION['tipo_usu']=='ca'){
			header('location:error.php');
		}
		
		if($_GET['button']=='remover'){ //contado

												
				$borrar_sql="DELETE FROM caja_tmp WHERE usu='$usuario'";//borrar todo de la caja temporal
				mysql_query($borrar_sql);
				
				header('location:caja.php?ddes=0');

		}

?>