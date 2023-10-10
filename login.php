<!DOCTYPE html>
<html lang="en">
<head>
    <title>UNACH Galaxy</title>
    <link rel="icon" href="./Image/moonico.png">
    <link href="./CSS/log-style.css" rel="stylesheet">

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
    <div class="wrapper">
        <div class="images">
            <img src="./Image/jupiter.gif" class="Saturno">
            <img src="./Image/3drocket.png" class="Rocket">
            <img src="./Image/mundo-chiquito.gif" class="Planeta2">
        </div>
        <div class="images2">
            <img src="./Image/jupiter.gif" class="Saturno2">
            <img src="./Image/3drocket.png" class="Rocket2">
            <img src="./Image/mundo-chiquito.gif" class="Planeta22">
        </div>
        <span class="bg-animate">
            <img src="./Image/mundo-cortado.gif" class="Planeta3">
            <img src="./Image/mundo-cortado.gif" class="Planeta32">
        </span>

        <span class="bg-animate2">
        </span>

        <div class="form-box login">
            <h2 class="animation" style="--i:0; --j:21">Iniciar <span class="span">Sesión</span></h2>
            <form action="#">
                <div class="input-box animation" style="--i:1; --j:22">
                    <input id="loginUsername" type="text" required>
                    <label>Nombre de usuario</label>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box animation" style="--i:2; --j:23">
                    <input id="loginPassword" type="password" required>
                    <label>Contraseña</label>
                    <i class='bx bxs-lock-alt' ></i>
                </div>
                <button type="button" id="login" class="btn animation" style="--i:3; --j:24">Iniciar</button>

                <div class="logreg-link animation" style="--i:4; --j:25">
                    <p>¿Aún no tienes cuenta? <a href="#" class="register-link">Crear Cuenta</a></p>
                </div>
            </form>
        </div>
        <div class="info-text login"></div>

        <div class="form-box signup">
            <h2 class="animation" style="--i:17; --j:0">Crear <span class="span">Cuenta</span></h2>
            <form action="#">
                <div class="input-box animation" style="--i:18; --j:1">
                    <input id="usuario" type="text" required>
                    <label>Nombre de usuario</label>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box animation" style="--i:19; --j:2">
                    <input id="email" type="text" required>
                    <label>Email</label>
                    <i class='bx bxs-envelope'></i>
                </div>
                <div class="input-box animation" style="--i:20; --j:3">
                    <input id="contrasena" type="password" required>
                    <label>Contraseña</label>
                    <i class='bx bxs-lock-alt' ></i>
                </div>
                <button type="button" id="register" class="btn animation" style="--i:21; --j:4">Registrar</button>

                <div class="logreg-link animation" style="--i:22; --j:5">
                    <p>¿Ya tienes cuenta? <a href="#" class="login-link">Iniciar sesión</a></p>
                </div>
            </form>
        </div>
    </div>

    <script src="./JS/script.js"></script>
    <script src="./JS/login.js"></script>
    <script src="./JS/newRegister.js"></script>
</body>
</html>