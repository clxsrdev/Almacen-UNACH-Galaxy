$(document).ready(function(){
	
	$('#login').on('click', function(){
		login();
	});
});


// Function to login a user
function login(){
	var loginUsername = $('#loginUsername').val();
	var loginPassword = $('#loginPassword').val();
	
	$.ajax({
		url: 'controller/validar.php',
		method: 'GET',
		data: {
			loginUsername:loginUsername,
			loginPassword:loginPassword,
		},
		success: function(data){
			
            console.log(data);
			var jsonData = JSON.parse(data);
            if (jsonData.success == 1)
			{	
                alert("Has iniciado sesión con éxito");
				window.location.href = 'dashboard.php';
			}else{
				alert("Nombre y/o contraseña incorrecta");
			}
		}
		//No esta en uso
		// error: function(xhr, status, error) {
		// 	if (xhr.status === 500) {
		// 		alert("Error en el servidor: " + xhr.responseText); // Muestra el mensaje de error del servidor
		// 	} else {
		// 		alert("Error de solicitud: " + status); // Muestra un mensaje de error genérico
		// 	}
		// 	// Realiza cualquier otra acción necesaria en caso de error
		// 	window.location = 'index.php'; // Por ejemplo, redirige al usuario a la página de inicio
		// }
	});
}

