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
    <link rel="icon" href="/image/moonico.png">
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
            <a class="welcome" href="#">Bienvenido</a>
            <a class="user" href="#">clxsrdev</a>
            <a class="close" href="#">Cerrar sesión</a>
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
            <table id="productTable">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>iPhone 15</td>
                        <td>12600</td>
                        <td><a href="#"><i class='bx bx-minus-circle' ></i></a></td>
                    </tr>
                    <tr>
                        <td>Apple TV</td>
                        <td>16000</td>
                        <td><a href="#"><i class='bx bx-minus-circle' ></i></a></td>
                    </tr>
                    <tr>
                        <td>MacbookAir</td>
                        <td>20000</td>
                        <td><a href="#"><i class='bx bx-minus-circle' ></i></a></td>
                    </tr>
                    <tr>
                        <td>iPhone 15</td>
                        <td>12600</td>
                        <td><a href="#"><i class='bx bx-minus-circle' ></i></a></td>
                    </tr>
                    <tr>
                        <td>Apple TV</td>
                        <td>16000</td>
                        <td><a href="#"><i class='bx bx-minus-circle' ></i></a></td>
                    </tr>
                    <tr>
                        <td>MacbookAir</td>
                        <td>20000</td>
                        <td><a href="#"><i class='bx bx-minus-circle' ></i></a></td>
                    </tr>
                    <tr>
                        <td>iPhone 15</td>
                        <td>12600</td>
                        <td><a href="#"><i class='bx bx-minus-circle' ></i></a></td>
                    </tr>
                    <tr>
                        <td>Apple TV</td>
                        <td>16000</td>
                        <td><a href="#"><i class='bx bx-minus-circle' ></i></a></td>
                    </tr>
                    <tr>
                        <td>MacbookAir</td>
                        <td>20000</td>
                        <td><a href="#"><i class='bx bx-minus-circle' ></i></a></td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>

    <div class="addnew">
        <h3>Agregar uno nuevo:</h3>
        <button>Añadir</button>
    </div>

    <div class="images">
        <img src="./Image/back.png" class="back" alt="back">
        <img src="./Image/3drocket.png" class="rocket" alt="rocket">
    </div>

    <script src="./JS/script.js"></script>
</body>
</html>