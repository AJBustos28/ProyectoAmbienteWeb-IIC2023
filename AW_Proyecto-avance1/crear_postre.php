<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Postre Personalizado</title>
    <link rel="stylesheet" href="CSS/styles.css">
    <script src="js/script.js"></script>
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
                    <li><a href="#">Inicio</a></li>
                    <li><a href="postres.php">Postres</a></li>
                    <li><a href="paquetes.php">Paquetes</a></li>
                    
                </ul>
            </nav>
        </div>


        <div class="menuP-content container">
            <h1>KABY SWEETS</h1>
        </div>
    </header>
    <section class="create-cake">
        <h2>Crea tu propio postre</h2>
        <form id="createCakeForm" class="cakes-contenido">
            <label for="cakeName">Tipo del postre:</label>
            <input type="text" id="cakeName" required>
            
            <label for="cakeDesc">Nombre de pedido:</label>
            <input type="text"id="cakeName" required></input>
            
            <label for="cakeDesc">Descripción:</label>
            <textarea id="cakeDesc" required></textarea>
            
            <button type="submit" class="boton-1">Agregar Postre</button>
        </form>
    </section>
            </form>
        </section>
        </form>
    </section>
    <script src="js/script.js"></script>
</body>
</html>