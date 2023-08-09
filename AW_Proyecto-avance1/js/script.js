let cakes = [
    {
        "img": "PrimeraC.png",
        "nombre": "Pastel para primeras comuniones",
        "descripcion":"¿Es la primera comunión de tu hijo o hija? Celebra este importante hito con nuestros postres temáticos religiosos. Desde angelicales galletas con forma de ángeles hasta preciosos pasteles con detalles sagrados",
        "precio": 19000
    },
    {
        "img": "Cumpleaños.jpg",
        "nombre": "Pastel de cumpleaños",
        "descripcion":"¿Un cumpleaños se acerca? Nuestros postres temáticos para cumpleaños son la manera perfecta de hacer que la fiesta sea única y emocionante. Desde coloridos cupcakes con diseños personalizados hasta pastelitos que representen la pasión del cumpleañero",
        "precio": 9900
    },
    {
        "img": "Bodas.jpg",
        "nombre": "Pastel de bodas",
        "descripcion":"¿Tienes una boda en el horizonte? Nuestros postres temáticos para bodas agregarán un toque de elegancia y romanticismo a tu gran día. Desde elegantes cupcakes decorados con flores hasta deliciosos pasteles de múltiples pisos con diseños personalizados",
        "precio": 29000
    }
]

cakes.forEach(Cake => {

    let imgCake = document.createElement("img");
    imgCake.alt = "Cake";
    imgCake.src = "images/" + Cake.img;

    let cakeName = document.createElement("h3");
    cakeName.textContent = Cake.nombre;

    let cakeDesc = document.createElement("p");
    cakeDesc.textContent = Cake.descripcion;

    let cakePrice = document.createElement("p");
    cakePrice.innerHTML = "₡" + Cake.precio;

    let cakeBtt = document.createElement("button");
    cakeBtt.textContent = "Hacer Pedido";
    cakeBtt.onclick = function () {
        hacerPedido(cakeBtt);
    };
    cakeBtt.classList.add("boton-1")

    let cakeDiv = document.createElement("div");
    cakeDiv.classList.add("cake");
    cakeDiv.classList.add("cakes-contenido")
    cakeDiv.classList.add("boton") 
    cakeDiv.appendChild(imgCake);
    cakeDiv.appendChild(cakeName);
    cakeDiv.appendChild(cakeDesc);
    cakeDiv.appendChild(cakePrice);
    cakeDiv.appendChild(cakeBtt);

    //document.querySelector("cakesP").appendChild(cakeDiv);
    document.getElementById("cakes").appendChild(cakeDiv)

});