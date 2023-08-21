<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="CSS/styles.css">
</head>

<body>
    <header class="header">
        <div class="menu container">
            <a href="index.php" class="logo">Logo</a>
            <input type="checkbox" id="menu" />
            <label for="menu">
                <<img src="images/menuBar.png" class="menu-logo" alt="logo-menu">
                    <!-- <img src="images/logoKS.png" class="menu-logo" alt=""> -->
            </label>
            <nav class="menuBar">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="postres.php">Postres</a></li>
                    <li><a href="paquetes.php">Paquetes</a></li>
                    <li><a href="login.php">Admin</a></li>

                </ul>
            </nav>
        </div>
    </header>

    <section class="form-section">
        <form class="form" action="controller/loginController.php" method="POST">
            <legend>Admin Login</legend>
            <div>
                <div class="form-input">
                    <label for="usuario">Usuario:</label>
                    <input id="usuario" name="usuario" class="form_text" type="text" placeholder="Ingrese el nombre de usuario">
                </div>
                <div class="form-input">
                    <label for="password">Contraseña:</label>
                    <input id="password" name="password" class="form_text" type="password" placeholder="Ingrese la contraseña">
                </div>
            </div>
            <div>
                <button class="Enviar" type="submit">Ingresar</button>
            </div>
        </form>
        
        <?php
        if (isset($_GET["error"])) {
            switch ($_GET["error"]) {
                case '1':
                    echo "<p class='text-tertiary'>*No autorizado</p>";
                    break;
                case '2':
                    echo "<p class='text-tertiary'>*Se requiere usuario y contraseña</p>";
                    break;
                case '3':
                    echo "<p class='text-tertiary'>*Credenciales invalidos</p>";
                    break;
                default:
                    echo "<p class='text-teriary'>*Error</p>";
                    break;
            }
        }
        ?>
    </section>

</body>

</html>