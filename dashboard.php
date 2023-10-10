<?php
	session_start();
	if (!isset($_SESSION['login']))
		header("location: login.php");	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNACH Galaxy</title>
    <link rel="icon" href="./Image/moonico.png">
    <link href="./CSS/dash-style.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@600&family=Open+Sans&display=swap" rel="stylesheet">

    <!-- Box Icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>
    
    <header class="header">
        
        <div class="logo-container">
            <img src="./Image/moon.png" class="moon" alt="logom">
            <a href="#" class="logo">City<span class="second">UNACH</span></a>
        </div>

        <label for="" class="icons">
            <i class='bx bx-menu'></i>
        </label>

        <nav class="navbar">
            <a class="welcome" href="#">¡Hola,</a>
            <a class="user" href="#"><?php echo $_SESSION['nomusuario']; ?>!</a>
            <a class="close" href="cerrar.php">Cerrar sesión</a>

        </nav>
    </header>

    <main class="table">
        <section class="table__header">
            <h1>Productos en existencia</h1>
            <div class="input-group">
                <input type="search" id="searchInput" placeholder="Buscar por precio...">
                <button type="submit"><i class='bx bx-search'></i></button>
            </div>
        </section>
        <section class="table__body">
        <?php

            include('conexion.php');
            $con = conectaDB();

            $sql ="select id_producto,desc_producto,precio,stock from productos";
                
            echo "<table id='productTable'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>Nombre</th>";
            echo "<th>Precio</th>";
            echo "<th>Stock</th>";
            echo "<th> </th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";

            $resultado = mysqli_query($con,$sql);  
            while($fila = mysqli_fetch_row($resultado)){

                echo "<tr>";
                    echo "<td>".strtoupper($fila[1])."</td>";
                    echo "<td>".$fila[2]."</td>";
                    echo "<td>".$fila[3]."</td>";
                    echo "<td><a href='controller/eliminarProducto.php?idp=".$fila[0]."'><i class='bx bx-minus-circle' ></i></a></td>";
                echo "</tr>";
            }
            echo "</tbody> </table>";
        ?>
        </section>
    </main>

    <div class="addnew">
        <h3>Agregar uno nuevo:</h3>
        <button class="show-modal">Añadir</button>

        <span class="overlay"></span>

        <div class="modal-box">
            <i class='bx bx-calendar-plus'></i>
            <h2>Agrega un nuevo producto.</h2>
            <div class="input-box animation" style="--i:18; --j:1">
                <input id="txtDesc" type="text" required>
                <label>Nombre del producto</label>
            </div>
            <div class="input-box animation" style="--i:18; --j:1">
                <input id="txtPrecio" type="number" required>
                <label>Precio del producto</label>
            </div>
            <div class="input-box animation" style="--i:18; --j:1">
                <input id="txtStock" type="number" required>
                <label>Cantidad en stock</label>
            </div>
            <div class="buttons">
                <button class="close-btn">Cerrar</button>
                <button id="add-btn" class="add-btn">Agregar</button>
            </div> 
        </div>
    </div>

    <div class="images">
        <img src="./Image/back.png" class="back" alt="back">
        <img src="./Image/3drocket.png" class="rocket" alt="rocket">
    </div>

    <script src="./JS/script.js"></script>
    <script src="./JS/insert.js"></script>
</body>
</html>