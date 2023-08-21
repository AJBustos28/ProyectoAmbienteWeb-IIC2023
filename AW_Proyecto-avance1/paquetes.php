<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Proyecto Pastelería</title>
        <link rel="stylesheet" href="CSS/styles.css">
    </head>
<body>
    <header class="header" >

        <div class="menu container" >
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
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque architecto veritatis nisi voluptatibus
                molestias omnis quo sequi aperiam quibusdam odit facilis quis iusto, ducimus aut corrupti incidunt
                perspiciatis nulla! Provident?
            </p>
            <a href="/postres.html" class="boton-1">Ordena aquí</a>
        </div>
    </header>

    <section class="cakes">
        <h2>Paquetes tematicos</h2>
            <p class="texto">
                ¡Celebra tus momentos más dulces con nuestra increíble selección de postres temáticos! En Kaby Sweets,
                nos enorgullecemos de crear delicias únicas y exquisitas que harán que tus celebraciones sean
                inolvidables.
            </p>
        <br>
        <br>

        <div id="cakes" class="cakes-grupo">

        </div>

         <br>
        <br>
        <p class="mensaje-postres">
            Además, podemos adaptarnos a cualquier ocasión especial que tengas en mente. ¿Un aniversario, una
            graduación o una reunión especial? No hay problema, nuestros talentosos pasteleros están preparados
            para dar vida a tus ideas y convertirlas en deliciosas realidades.
        </p>
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
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo, porro. Placeat dolorem tempora illum vero, aut nisi
                officia, magni cupiditate, voluptatum atque neque enim ut quia rem consequuntur voluptatibus a?
            </p>
            <a href="/paquetes.html" class="boton-1">info</a>
        </div>
    </main>


    <script src="js/script.js"></script>
</body>
</html>