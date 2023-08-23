<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="CSS/admin.css">
</head>

<body>
<nav>
    <ul>
      <li><a href="index.php">Inicio</a></li>
      <li><a href="postres.php">Postres</a></li>
    </ul>
  </nav>

    <section class="form-section">
        <form class="form" action="controller/loginController.php" method="POST">
            <legend>Iniciar sesion</legend>
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
                    echo "<p class='error-box'>*No autorizado</p>";
                    break;
                case '2':
                    echo "<p class='error-box'>*Se requiere usuario y contraseña</p>";
                    break;
                case '3':
                    echo "<p class='error-box'>*Credenciales invalidos</p>";
                    break;
                default:
                    echo "<p class='error-box'>*Error</p>";
                    break;
            }
        }
        ?>
    </section>

</body>

</html>