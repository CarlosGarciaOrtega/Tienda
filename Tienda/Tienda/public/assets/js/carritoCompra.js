function insertarCarrito(producto) {
    console.log("producto", producto);
    fetch('https://cgarort2508.ieszaidinvergeles.es/Tienda/public/api/carrito',
        {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                //'X-CSRF-TOKEN':document.querySelector('meta[name="csrf-token"]')['content']

            },
            body: JSON.stringify(producto)
        })
        .then(response => response.json())
        .then(data => {
            console.log(data)
        });
}
function crearCarrito() {
    let carrito = document.getElementById('abrir-carrito');
    let carritoSticky = document.getElementById('carrito-sticky');
    carrito.addEventListener('click', function (event) {
        event.preventDefault();
        pedirCarrito();
    });
    carritoSticky.addEventListener('click', function (event) {
        event.preventDefault();
        pedirCarrito();
    });
}

function pedirCarrito() {
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
            crearProductoCarrito(data);
        });
}

function crearProductoCarrito(productos) {
    let div = document.getElementById('carrito-lista-productos');
    div.innerHTML = '';
    for (let producto of productos) {
        let divProducto = document.createElement('div');
        divProducto.setAttribute('id', 'producto-carrito-' + producto.id);
        divProducto.className = 'minicart__product--items d-flex';
        let divImagen = document.createElement('div');
        divImagen.className = 'minicart__thumb';
        a = document.createElement('a');
        a.href = '#';
        a.addEventListener('click', function (event) {
            event.preventDefault();
        });
        img = document.createElement('img');
        img.src =  urlImagenes+producto.rutaimg;
        img.alt = producto.nombre;
        a.appendChild(img);
        divImagen.appendChild(a);
        divProducto.appendChild(divImagen);
        let divContent = document.createElement('div');
        divContent.className = 'minicart__text';
        let h4 = document.createElement('h4');
        h4.className = 'minicart__subtitle';
        let a2 = document.createElement('a');
        a2.href = '#';
        a2.innerHTML = producto.nombre;
        a2.addEventListener('click', function (event) {
            event.preventDefault();
        });
        h4.appendChild(a2);
        divContent.appendChild(h4);
        let span = document.createElement('span');
        span.className = 'color__variant';
        let b = document.createElement('b');
        b.innerHTML = 'Marca: ';
        span.appendChild(b);
        span.innerHTML += producto.marca;
        divContent.appendChild(span);
        let divPrecio = document.createElement('div');
        divPrecio.className = 'minicart__price';
        let spanCurrent = document.createElement('span');
        spanCurrent.className = 'minicart__current--price';
        spanCurrent.textContent = producto.precio + '€';
        divPrecio.appendChild(spanCurrent);
        divContent.appendChild(divPrecio);



        let divCantidad = document.createElement('div');
        divCantidad.className = 'minicart__text--footer d-flex align-items-center';


        let divInterno = document.createElement('div');
        divInterno.className = 'quantity__box minicart__quantity';
        let botonDisminuir = document.createElement('button');
        botonDisminuir.type = 'button';
        botonDisminuir.className = 'quantity__value decrease';
        botonDisminuir.setAttribute('aria-label', 'quantity value');
        botonDisminuir.value = 'Decrease Value';
        botonDisminuir.textContent = '-';
        botonDisminuir.addEventListener('click', function (event) {
            event.preventDefault();
             restarCarritoProducto(producto);
            let numProductos = document.getElementById('num-producto-' + producto.id);
            console.log(numProductos);
            if (numProductos.value > 1) {
                numProductos.value = parseInt(numProductos.value) - 1;
            }

        });

        let input = document.createElement('input');
        input.setAttribute('id', 'num-producto-' + producto.id);
        input.type = 'number';
        input.className = 'quantity__number';
        input.value = producto.cantidad;
        input.setAttribute('data-counter', '');
        let botonAumentar = document.createElement('button');
        botonAumentar.type = 'button';
        botonAumentar.className = 'quantity__value increase';
        botonAumentar.setAttribute('aria-label', 'quantity value');
        botonAumentar.value = 'Increase Value';
        botonAumentar.textContent = '+';
        botonAumentar.addEventListener('click', function (event) {
            event.preventDefault();
            sumarCarritoProducto(producto);
            let numProductos = document.getElementById('num-producto-' + producto.id);
            console.log(numProductos.value);
            numProductos.value = parseInt(numProductos.value) + 1;

        });


        let botonEliminar = document.createElement('button');
        botonEliminar.className = 'minicart__product--remove';
        botonEliminar.type = 'button';
        botonEliminar.textContent = 'Remove';
        botonEliminar.addEventListener('click', function (event) {
            event.preventDefault();
            eliminarCarritoProducto(producto);
        });

        divInterno.appendChild(botonDisminuir);
        divInterno.appendChild(input);
        divInterno.appendChild(botonAumentar);
        divCantidad.appendChild(divInterno);
        divCantidad.appendChild(botonEliminar);
        divContent.appendChild(divCantidad);
        divProducto.appendChild(divContent);
        div.appendChild(divProducto);

    }
}

function sumarCarritoProducto(producto) {
    actualizarCarritoProducto(producto, 1);
}

function  restarCarritoProducto(producto) {
    actualizarCarritoProducto(producto, -1);
}

function eliminarCarritoProducto(producto) {
    actualizarCarritoProducto(producto, 0);
}
function actualizarCarritoProducto(producto, cantidad) {
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
                pedirCarrito();
            });




}


crearCarrito();