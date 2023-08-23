<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css">
    <title>Pasteleria</title>
    <?php
    session_start();

    // include "admin.php";
    ?>
</head>


<body>
    <header class="header">
        <div class="menu container">
            <a href="#" class="logo">Logo</a>
            <input type="checkbox" id="menu" />
            <label for="menu">
                <img src="images/menuBar.png" class="menu-logo" alt="">
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


        <div class="menuP-content container">
            <h1>KABY SWEETS</h1>
        </div>
    </header>


    <section class="menuP-content container">

        <div class="h_ordenes">
            <h2>Agrega la siguiente información</h2>
            <div class="b_ordenes">
                <a class="boton-1" href="admin.php">Ordenes creadas</a>
            </div>
        </div>

        <form class="form" action="controller/orden.php" method="post">
            <legend>Nueva Orden</legend>
            <div>
                <div class="form_campo">
                    <label for="cliente">Nombre del cliente:</label>
                    <input id="cliente" name="cliente" class="form_text" type="text" placeholder="Ingrese el nombre del cliente">
                </div>
                <div class="form_campo">
                    <label for="tipo_disp">Tipo de dispositivo</label>
                    <select class="form_text" name="tipo_disp" id="tipo_disp">
                        <option value="0">--- Seleccione un tipo de dispositivo ---</option>
                        <option value="Laptop">Laptop</option>
                        <option value="Celular">Celular</option>
                        <option value="Tablet">Tablet</option>
                        <option value="PC">PC</option>
                    </select>
                </div>
                <div class="form_campo">
                    <label for="marca">Marca:</label>
                    <input id="marca" name="marca" class="form_text" type="text" placeholder="Ingrese la marca del dispositivo">
                </div>
                <div class="form_campo">
                    <label for="problema">Problema:</label>
                    <textarea class="form_text" name="problema" id="problema" placeholder="Ingrese el problema que presenta el dispositivo"></textarea>
                </div>
            </div>
            <div>
                <button class="boton enviar" type="submit">Crear</button>
            </div>
        </form>


    </section>


</body>

</html>