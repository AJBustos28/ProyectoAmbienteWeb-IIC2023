<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/admin.css">
    <title>Pasteleria</title>
    <?php
    session_start();

    // include "admin.php";
    ?>
</head>


<body>
    <header class="header">
        <div class="menu container">
            <label for="menu">
                <!-- <img src="images/logoKS.png" class="menu-logo" alt=""> -->
            </label>
            <nav class="menuBar">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="postres.php">Postres</a></li>
                    <li><a href="login.php">Admin</a></li>

                </ul>
            </nav>
        </div>


        <div class="menuP-content container">
            <h1>KABY SWEETS</h1>
        </div>
    </header>


    <section class="form-container">

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
                    <label for="tipo_post">Tipo de postre</label>
                    <select class="form_text" name="tipo_disp" id="tipo_disp">
                        <option value="0">--- Seleccione un tipo de postre ---</option>
                        <option value="Chocolate">Chocolate</option>
                        <option value="Vainilla">Vainilla</option>
                        <option value="Para ocacion especial">Para ocaciones especiales</option>
                    </select>
                </div>
                <div class="form_campo">
                    <label for="marca">Cantidad:</label>
                    <input id="marca" name="marca" class="form_text" type="text" placeholder="Ingrese la cantidad que desea ordenar">
                </div>
                <div class="form_campo">
            <label for="fecha">Fecha:</label>
            <input id="fecha" name="fecha" class="form_text" type="date">
        </div>
                <div class="form_campo">
                    <label for="descripcion">Descripcion:</label>
                    <textarea class="form_text" name="problema" id="problema" placeholder="Ingrese aqui informacion sobre el postre deseado"></textarea>
                </div>
            </div>
            <div>
                <button class="boton enviar" type="submit">Ordenar</button>
            </div>
        </form>


    </section>


</body>

</html>