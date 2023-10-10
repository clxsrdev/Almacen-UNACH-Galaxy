<?php
    include('../conexion.php');
	$link = conectaDB();

    if(isset($_POST['rgUsuario']) && isset($_POST['rgEmail']) && isset($_POST['rgContra'])){
        $user=$_POST['rgUsuario'];
        $email=$_POST['rgEmail'];
        $pass=$_POST['rgContra'];

        $sql = "INSERT INTO usuarios(nom_usr, email, pass) values('$user','$email', '$pass')";
        $result = mysqli_query($link,$sql);

        if($result){
            echo json_encode(array('success' => 1));
            //Inicia la sesion
            session_start();
            $_SESSION['login'] = "true";
            $_SESSION['nomusuario'] = $user;
            
        }else{
			echo json_encode(array('success' => 0)); //Esto se envia al success del ajax js
			//http_response_code(500); // Código de error 500: Internal Server Error --> al error del ajax (no esta en uso)
		}

        mysqli_close($link);
    }

?>
