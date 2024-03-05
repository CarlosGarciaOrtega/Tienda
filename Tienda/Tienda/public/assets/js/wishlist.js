const url = "https://cgarort2508.ieszaidinvergeles.es/Tienda/public/api/wishlist";
const urlImagenes = "https://cgarort2508.ieszaidinvergeles.es/Tienda/public/productos/"
const user =parseInt( document.getElementById('user-id').textContent);
console.log(user)

function crearWishlist(productos) {
    let wishlist = document.getElementById("wishlist-table");
    wishlist.innerHTML = "";
    for (let producto of productos) {
        
        crearProductoWishlist(producto);
    }
}

function crearProductoWishlist(producto) {
    console.log(producto);
    let wishlist = document.getElementById("wishlist-table");
    let tr = document.createElement('tr');
    tr.className = 'cart__table--body__items';

    // Crear el primer td
    let td1 = document.createElement('td');
    td1.className = 'cart__table--body__list';

    // Crear el div del producto
    let divProducto = document.createElement('div');
    divProducto.className = 'cart__product d-flex align-items-center';

    // Crear el botón de eliminar
    let botonEliminar = document.createElement('button');
    botonEliminar.className = 'cart__remove--btn';
    botonEliminar.setAttribute('aria-label', 'search button');
    botonEliminar.type = 'button';
    botonEliminar.onclick = function () {
        eliminarProductoWishlist(producto.id);
    };

    // Crear el svg del botón de eliminar
    let svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
    svg.setAttribute('fill', 'currentColor');
    svg.setAttribute('viewBox', '0 0 24 24');
    svg.setAttribute('width', '16px');
    svg.setAttribute('height', '16px');

    // Crear el path del svg
    let path = document.createElementNS('http://www.w3.org/2000/svg', 'path');
    path.setAttribute('d', 'M 4.7070312 3.2929688 L 3.2929688 4.7070312 L 10.585938 12 L 3.2929688 19.292969 L 4.7070312 20.707031 L 12 13.414062 L 19.292969 20.707031 L 20.707031 19.292969 L 13.414062 12 L 20.707031 4.7070312 L 19.292969 3.2929688 L 12 10.585938 L 4.7070312 3.2929688 z');

    // Añadir el path al svg
    svg.appendChild(path);

    
    botonEliminar.appendChild(svg);

    // Crear el div de la miniatura
    let divMiniatura = document.createElement('div');
    divMiniatura.className = 'cart__thumbnail';

    // Crear el enlace de la miniatura
    let enlaceMiniatura = document.createElement('a');
    enlaceMiniatura.href = 'product-details.html';

    // Crear la imagen de la miniatura
    let imgMiniatura = document.createElement('img');
    imgMiniatura.className = 'border-radius-5';
    imgMiniatura.src = 'productos/' + producto.rutaimg;
    imgMiniatura.alt = 'cart-product';

    // Añadir la imagen al enlace de la miniatura
    enlaceMiniatura.appendChild(imgMiniatura);

    // Añadir el enlace a la miniatura
    divMiniatura.appendChild(enlaceMiniatura);

    // Crear el div del contenido
    let divContenido = document.createElement('div');
    divContenido.className = 'cart__content';

    // Crear el h3 del título
    let h3Titulo = document.createElement('h3');
    h3Titulo.className = 'cart__content--title h4';

    // Crear el enlace del título
    let enlaceTitulo = document.createElement('a');
    enlaceTitulo.href = '#';
    enlaceTitulo.textContent = producto.nombre;

    // Añadir el enlace al h3 del título
    h3Titulo.appendChild(enlaceTitulo);

    // Crear los span de las variantes
    let spanColor = document.createElement('span');
    spanColor.className = 'cart__content--variant';
    spanColor.textContent = 'Marca: ' + producto.marca;

    let spanPeso = document.createElement('span');
    spanPeso.className = 'cart__content--variant';
    spanPeso.textContent = 'Categoria: '+ producto.categoria;

    // Añadir el h3 del título y los span de las variantes al div del contenido
    divContenido.appendChild(h3Titulo);
    divContenido.appendChild(spanColor);
    divContenido.appendChild(spanPeso);

    // Añadir el botón de eliminar, la miniatura y el contenido al div del producto
    divProducto.appendChild(botonEliminar);
    divProducto.appendChild(divMiniatura);
    divProducto.appendChild(divContenido);

    // Añadir el div del producto al primer td
    td1.appendChild(divProducto);

    // Crear el segundo td
    let td2 = document.createElement('td');
    td2.className = 'cart__table--body__list';

    // Crear el span del precio
    let spanPrecio = document.createElement('span');
    spanPrecio.className = 'cart__price';
    spanPrecio.textContent = producto.precio + '€';

    // Añadir el span del precio al segundo td
    td2.appendChild(spanPrecio);

    // Crear el tercer td
    let td3 = document.createElement('td');
    td3.className = 'cart__table--body__list text-center';

    // Crear el span del stock
    let spanStock = document.createElement('span');
    spanStock.className = 'in__stock text__secondary';
    spanStock.textContent = 'in stock';

    // Añadir el span del stock al tercer td
    td3.appendChild(spanStock);

    // Crear el cuarto td
    let td4 = document.createElement('td');
    td4.className = 'cart__table--body__list text-right';

    // Crear el enlace del botón de añadir al carrito
    let enlaceBotonCarrito = document.createElement('a');
    enlaceBotonCarrito.className = 'wishlist__cart--btn primary__btn';
    enlaceBotonCarrito.href = 'cart.html';
    enlaceBotonCarrito.textContent = 'Add To Cart';
    enlaceBotonCarrito.addEventListener('click', function (event) {
        event.preventDefault();
        añadirAlCarrito(producto.id);
        eliminarProductoWishlist(producto.id);
    });

    // Añadir el enlace del botón de añadir al carrito al cuarto td
    td4.appendChild(enlaceBotonCarrito);

    // Añadir los td al tr
    tr.appendChild(td1);
    tr.appendChild(td2);
    tr.appendChild(td3);
    tr.appendChild(td4);


    // Añadir el tr a la tabla de la wishlist
    wishlist.appendChild(tr);
}


function pedirWislist() {
    fetch(url + "?id=" + user,{
        method: "GET",
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json",
        }
    
    })
        .then(response => response.json())
        .then(data => {
            console.log(data);
            crearWishlist(data);
        });
}

function eliminarProductoWishlist(id) {
    fetch(url + "/" + user +'/'+ id, {
        method: "DELETE",
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json",
        }
    })
        .then(response => response.json())
        .then(data => {
            console.log(data);
            pedirWislist();
        });
}


function añadirAlCarrito(id) {
    fetch("https://cgarort2508.ieszaidinvergeles.es/Tienda/public/api/carrito", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json",
        },
        body: JSON.stringify({
            idusuario: user,
            idproducto: id,
            cantidad: 1,
        })
    })
        .then(response => response.json())
        .then(data => {
            console.log(data);
        });
}

pedirWislist();




function insertarWishlist(id){
    fetch("https://cgarort2508.ieszaidinvergeles.es/Tienda/public/api/wishlist", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json",
        },
        body: JSON.stringify({
            idusuario: user,
            idproducto: id,
            cantidad: 1
        })
    })
        .then(response => response.json())
        .then(data => {
            console.log(data);
        });
}