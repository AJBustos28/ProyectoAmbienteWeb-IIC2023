<!DOCTYPE html>
<html lang="en">
<!-- POR FAVOR EJECUTAR EN LIVE SERVER -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Pastelería</title>
    <link rel="stylesheet" href="CSS/styles.css">
</head>

<body>
    <header class="header">
        <div class="menu container">
            <img src="images/logoKS.png" class="menu-logo" alt="">
            <input type="checkbox" id="menu" />
            <label for="menu">
                <img src="images/menuBar.png" class="menu-logo" alt="">
            </label>
            <nav class="menuBar">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="postres.php">Postres</a></li>
                    <li><a href="login.php">Admin</a></li>

                </ul>
            </nav>
        </div>


        <div class="menuP-content container">
            <h1>KABY SWEETS</h1>
            <p>
                Bienvenido a Kaby Sweets, donde los sueños se hornean con amor y se sirven en porciones de felicidad.
                ¡Descubre el arte de la dulzura con nosotros!
            </p>
            <a href="crear_orden.php" class="boton-1">Ordena aquí</a>
        </div>
    </header>



    <section class="cakes">
        <!-- <img class="cakes-img" src="images/quequeChocolate.png" alt=""> -->
        <img class="cakes-img" src="images/sprinkles.png" alt="">
        <div class="cakes-contenido container">
            <h2>Tipos de Pasteles disponibles</h2>
            <p class="texto">
                Explora un festín de sabores en nuestra tienda de pastelería,
                donde cada dulce es una obra maestra que deleita todos los sentidos.
                Nuestra variedad de postres es una sinfonía de tentación, diseñada para satisfacer los gustos más exigentes.
                Desde los clásicos reconfortantes hasta las creaciones más audaces, tenemos algo para cada paladar dulce:
            </p>

            <div class="cakes-grupo">

                <div class="cakes">
                    <!-- <img src="images/chocoberry.png" alt=""> -->
                    <img src="images/cupCake.png" alt="">
                    <h3>Cupcake Clásico</h3>
                    <p>
                        Nuestro cupcake clásico es perfecto para cualquier ocasión. Su suave textura y delicioso glaseado te transportarán a un mundo de dulzura.
                    </p>
                </div>
                <div class="cakes">
                    <!-- <img src="images/redVelvet.png" alt=""> -->
                    <img src="images/chocoCake.png" alt="">
                    <h3>Pastel de Chocolate</h3>
                    <p>
                        Sumérgete en el placer del chocolate con nuestro pastel de chocolate. Cada rebanada es una explosión de sabor y suavidad que te hará querer más.
                    </p>
                </div>
                <div class="cakes">
                    <!-- <img src="images/tortaChilena.png" alt=""> -->
                    <img src="images/fruitCake.png" alt="">
                    <h3>Pastel de Frutas</h3>
                    <p>
                        Nuestro pastel de frutas es una combinación perfecta de frescura y dulzura. Cada bocado te hará descubrir una explosión de sabores naturales.
                    </p>
                </div>
            </div>
            <a href="postres.php" class="boton-1">Ver más</a>
        </div>
    </section>

    <main class="servicioP">
        <div class="servicioP-contenido container">
            <h2>Servicios Temáticos</h2>
            <div class="servicioP-grupo">
                <div class="paquetes">
                    <img src="images/pack1.png" alt="">
                    <h3>Comunión</h3>
                </div>
                <div class="paquetes">
                    <img src="images/pack2.png" alt="">
                    <h3>Cumpleaños</h3>
                </div>
                <div class="paquetes">
                    <img src="images/pack3.png" alt="">
                    <h3>Bodas</h3>
                </div>
            </div>
            <p>
                En Kaby Sweets, no solo creamos delicias, sino que también transformamos momentos especiales en experiencias inolvidables.
                Nuestros servicios temáticos añaden un toque mágico a tus celebraciones, llevando la dulzura a
                un nivel completamente nuevo.
                Descubre cómo convertimos tus ocasiones más importantes en recuerdos que perduran.
            </p>
            <a href="postres.php" class="boton-1">Reserva Ya!</a>
        </div>
    </main>





</body>

</html>