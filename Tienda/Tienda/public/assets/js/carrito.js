const user =  parseInt(document.getElementById('user-id').textContent);
console.log(user);
const urlImagenes = 'https://cgarort2508.ieszaidinvergeles.es/Tienda/public/productos/';

function crearProducto(producto) {
    let table = document.getElementById('tabla-carrito');
    
    let tr = document.createElement('tr');
    tr.classList.add('cart__table--body__items');
    let td1 = document.createElement('td');
    td1.classList.add('cart__table--body__list');
    let divProducto = document.createElement('div');
    divProducto.className = 'cart__product d-flex align-items-center';
    let botonEliminar = document.createElement('button');
    botonEliminar.className = 'cart__remove--btn';
    botonEliminar.setAttribute('aria-label', 'search button');
    botonEliminar.type = 'button';
    botonEliminar.addEventListener('click', function(event) {
        event.preventDefault();
        eliminarCarrito(producto);
    });

    let svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
    svg.setAttribute('fill', 'currentColor');
    svg.setAttribute('viewBox', '0 0 24 24');
    svg.setAttribute('width', '16px');
    svg.setAttribute('height', '16px');
    let path = document.createElementNS('http://www.w3.org/2000/svg', 'path');
    path.setAttribute('d', 'M 4.7070312 3.2929688 L 3.2929688 4.7070312 L 10.585938 12 L 3.2929688 19.292969 L 4.7070312 20.707031 L 12 13.414062 L 19.292969 20.707031 L 20.707031 19.292969 L 13.414062 12 L 20.707031 4.7070312 L 19.292969 3.2929688 L 12 10.585938 L 4.7070312 3.2929688 z');
    svg.appendChild(path);
    botonEliminar.appendChild(svg);
    let divImagen = document.createElement('div');
    divImagen.className = 'cart__thumbnail';
    let enlaceImagen = document.createElement('a');
    enlaceImagen.href = 'product-details.html';
    let imagen = document.createElement('img');
    imagen.className = 'border-radius-5';
    imagen.src = urlImagenes + producto.rutaimg; 
    imagen.alt = 'cart-product';
    enlaceImagen.appendChild(imagen);
    divImagen.appendChild(enlaceImagen);
    let divContenido = document.createElement('div');
    divContenido.className = 'cart__content';
    let titulo = document.createElement('h3');
    titulo.className = 'cart__content--title h4';
    let enlaceTitulo = document.createElement('a');
    enlaceTitulo.href = 'product-details.html';
    enlaceTitulo.textContent = producto.nombre;
    titulo.appendChild(enlaceTitulo);
    let spanColor = document.createElement('span');
    spanColor.className = 'cart__content--variant';
    spanColor.textContent = 'Marca: ' + producto.marca;
    let spanPeso = document.createElement('span');
    spanPeso.className = 'cart__content--variant';
    spanPeso.textContent = 'Categoria: ' + producto.categoria;  
    divContenido.appendChild(titulo);
    divContenido.appendChild(spanColor);
    divContenido.appendChild(spanPeso);
    divProducto.appendChild(botonEliminar);
    divProducto.appendChild(divImagen);
    divProducto.appendChild(divContenido);
    td1.appendChild(divProducto);
    tr.appendChild(td1);
    let td2 = document.createElement('td');
    td2.classList.add('cart__table--body__list');
    let spanPrecio = document.createElement('span');
    spanPrecio.className = 'cart__price';
    spanPrecio.textContent = producto.precio + '€';
    td2.appendChild(spanPrecio);
    tr.appendChild(td2);
    let td3 = document.createElement('td');
    td3.className = 'cart__table--body__list';
    let divCantidad = document.createElement('div');
    divCantidad.className = 'quantity__box';
    let botonDisminuir = document.createElement('button');
    botonDisminuir.type = 'button';
    botonDisminuir.className = 'quantity__value quickview__value--quantity decrease';
    botonDisminuir.setAttribute('aria-label', 'quantity value');
    botonDisminuir.value = 'Decrease Value';
    botonDisminuir.textContent = '-';
    botonDisminuir.addEventListener('click', function(event) {
        event.preventDefault();
        restarCarrito(producto);
    });
    let label = document.createElement('label');
    let input = document.createElement('input');
    input.type = 'number';
    input.className = 'quantity__number quickview__value--number';
    input.value = producto.cantidad;
    input.setAttribute('data-counter', '');
    label.appendChild(input);
    let botonAumentar = document.createElement('button');
    botonAumentar.type = 'button';
    botonAumentar.className = 'quantity__value quickview__value--quantity increase';
    botonAumentar.setAttribute('aria-label', 'quantity value');
    botonAumentar.value = 'Increase Value';
    botonAumentar.textContent = '+';
    botonAumentar.addEventListener('click', function(event) {
        event.preventDefault();
        sumarCarrito(producto);
    });

    divCantidad.appendChild(botonDisminuir);
    divCantidad.appendChild(label);
    divCantidad.appendChild(botonAumentar);
    td3.appendChild(divCantidad);
    tr.appendChild(td3);

    let td4 = document.createElement('td');
    td4.className = 'cart__table--body__list';
    let spanTotal = document.createElement('span');
    spanTotal.className = 'cart__price end cart__price--total-amount';
    spanTotal.textContent = producto.precio * producto.cantidad + '€';
    td4.appendChild(spanTotal);
    tr.appendChild(td4);
    table.appendChild(tr);


}
function crearProductos(productos) {
    console.log('creaProductos')
    let table = document.getElementById('tabla-carrito');
    table.innerHTML = '';
    for (let producto of productos) {
        console.log(producto);
        crearProducto(producto);
    }
}
function pedirProductos(){
    fetch('https://cgarort2508.ieszaidinvergeles.es/Tienda/public/api/carrito?id=' + user,
    {
        method: 'GET',
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json'
        }
    })
    .then(response => response.json())
    .then(data => {
        console.log('Productos', data);
        crearProductos(data);
        actualizarCarritoPrecio();
    });
}

function sumarCarrito(producto) {
    actualizarCarrito(producto, 1);
}

function restarCarrito(producto) {
    actualizarCarrito(producto, -1);
}

function eliminarCarrito(producto) {
    actualizarCarrito(producto, 0);
}
function actualizarCarrito(producto, cantidad) {
    let urlCarrito = 'https://cgarort2508.ieszaidinvergeles.es/Tienda/public/api/carrito/'+user+'/'+producto.id;
    let options = {
        method: 'PUT',
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json'
        },
        body: JSON.stringify({ idusuario: user, idproducto: producto.id, cantidad: producto.cantidad + 1})
    };
    if (cantidad == 0) {
        options = {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            }
        };
    }
    else if(cantidad == -1){
        options.body = JSON.stringify({ idusuario: user, idproducto: producto.id, cantidad: producto.cantidad - 1});
    }
    fetch(urlCarrito,options)
            .then(response => response.json())
            .then(data => {
                console.log(data);
               pedirProductos();
            });




}

function vaciarCarrito(){
    let vaciarCarrito = document.getElementById('vaciar-carrito');
    vaciarCarrito.addEventListener('click', function(event) {
        event.preventDefault();
        console.log('Vaciar carrito');
        fetch('https://cgarort2508.ieszaidinvergeles.es/Tienda/public/api/carrito/vaciar/'+user,
        {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => {
            console.log(data);
            pedirProductos();
        });
    });
}

function actualizarCarritoPrecio(){
    let subTotal = document.getElementById('sub-total-carrito-precio'); 
    let total = document.getElementById('total-carrito-precio');
    let productos = document.querySelectorAll('.cart__price--total-amount');
    let totalCarrito = 0;
    for (let producto of productos) {
       totalCarrito += parseFloat(producto.textContent);
    }
    totalCarrito = totalCarrito.toFixed(2);
    subTotal.textContent = totalCarrito + '€';

    let cupon = localStorage.getItem('cupon');

    if(cupon == 'DESCUENTO'){
        totalCarrito = totalCarrito * 0.9;
    }
    total.textContent = totalCarrito + '€';


}
function aplicarCupon(){
    let cupon = localStorage.getItem('cupon');
    if(cupon == 'DESCUENTO'){
        let cuponCarrito = document.getElementById('cupon-carrito');
        cuponCarrito.value = cupon;
    }

    let botonCupon = document.getElementById('aplicar-cupon');
    botonCupon.addEventListener('click', function(event) {
        event.preventDefault();
        console.log('Aplicar cupon');
        let cupon = document.getElementById('cupon-carrito').value;
        localStorage.setItem('cupon', cupon);
        actualizarCarritoPrecio();
    });
}

aplicarCupon();
vaciarCarrito();
pedirProductos();

