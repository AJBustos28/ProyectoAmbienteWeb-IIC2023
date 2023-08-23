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

        <form class="form" action="admin.php" method="post">
            <legend>Nueva Orden</legend>
            <div>
                <div class="form_campo">
                    <label for="new_tipo_pastel">Tipo de postre:</label>
                    <input id="new_tipo_pastel" name="new_tipo_pastel" class="form_text" type="text" placeholder="Ingrese el nombre del postre...">
                </div>
                <div class="form_campo">
                    <label for="new_persona_orden">Nombre del cliente:</label>
                    <input id="new_persona_orden" name="new_persona_orden" class="form_text" type="text" placeholder="Ingrese el nombre del cliente...">
                </div>
                <div class="form_campo">
                    <label for="new_cantidad">Cantidad:</label>
                    <input id="new_cantidad" name="new_cantidad" class="form_int" type="number" placeholder="Ingrese cantidad a ordenar...">
                </div>
                <div class="form_campo">
                    <label for="new_comentario">Comentarios:</label>
                    <textarea class="form_text" name="new_comentario" id="new_comentario" placeholder="Ingrese algun dato importante..."></textarea>
                </div>
            </div>
            <div>
                <button class="boton-1" type="submit">Crear</button>
            </div>
        </form>


    </section>


</body>

</html>