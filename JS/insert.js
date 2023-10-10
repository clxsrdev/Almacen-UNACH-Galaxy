$(document).ready(function(){
	
	$('#add-btn').on('click', function(){
		insertp();
	});
});


// Function to login a user
function insertp(){
	var txtDesc = $('#txtDesc').val();
	var txtPrecio = $('#txtPrecio').val();
    var txtStock = $('#txtStock').val();
	
	$.ajax({
		url: 'controller/insertarProducto.php',
		method: 'POST',
		data: {
			txtDesc: txtDesc,
			txtPrecio: txtPrecio,
            txtStock: txtStock
		},
        success: function(data){
			console.log(data);
			var jsonData = JSON.parse(data);
            if (jsonData.success == 1){				
				window.location = 'dashboard.php';
				alert("Article successfully");
			}else{
				window.location = 'dashboard.php';
				alert("Ocurrio un error intentalo de nuevo");
			}
			
		}
	});
}

