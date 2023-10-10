.<?php
	include('../conexion.php');
	$link = conectaDB();

	if(isset($_GET['loginUsername']) && isset($_GET['loginPassword'])){
		$nomUser = $_GET['loginUsername'];
		$userPass = $_GET['loginPassword'];

		$sql="SELECT COUNT(*), nom_usr  FROM usuarios WHERE nom_usr ='$nomUser' and pass ='$userPass'";
		$result = mysqli_query($link,$sql);

		$respuesta = 0;
		$nom_usr = "";
		while($fila = mysqli_fetch_row($result)){
			$respuesta = $fila[0];
			$nom_usr = $fila[1];	
		}

		if($respuesta == 1 && $result == true){
			session_start();
			$_SESSION['login'] = "true";
			$_SESSION['nomusuario'] = $nom_usr;
			echo json_encode(array('success' => 1));
		}else{
			echo json_encode(array('success' => 0)); //Esto se envia al success del ajax js
			//http_response_code(500); // Código de error 500: Internal Server Error --> al error del ajax
		}
		
		mysqli_free_result($result);
		mysqli_close($link);
	} 	

?>
