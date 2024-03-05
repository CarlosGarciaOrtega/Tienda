const inicio = document.getElementById('inicio');
const url = "https://cgarort2508.ieszaidinvergeles.es/Tienda/public/api/productos";
const urlImagenes = "https://cgarort2508.ieszaidinvergeles.es/Tienda/public/productos/"
const optionsFilter = {
    page: 1,
    itemPage: 15,
    sortValue: 'asc',
    sortField: 'created_at',
    priceMin: 0,
    priceMax: 0,
    category: 'Todos',
    subcategory: '',
    brand: 'Todas',
    q: ''

};
let productos = [];
const user =parseInt( document.getElementById('user-id').textContent);
console.log(user)
function crearProducto(producto) {
    let divProducto = document.getElementById("productos");
    let divContainer = document.createElement("div");
    divContainer.className = "col-lg-4 col-md-4 col-sm-6 col-6 custom-col mb-30";
    let article = document.createElement("article");
    article.className = "product__card";
    let divThumbnail = document.createElement("div");
    divThumbnail.className = "product__card--thumbnail";
    let a = document.createElement("a");
    a.className = "product__card--thumbnail__link display-block";
    a.href = "#";
    a.addEventListener('click', function (event) {
        event.preventDefault();
    });
    let img1 = document.createElement("img");
    img1.src =  urlImagenes+producto.rutaimg;
    img1.alt = producto.nombre;
    img1.className = "product__card--thumbnail__img product__primary--img";
    a.appendChild(img1);
    let img2 = document.createElement("img");
    img2.src = urlImagenes+producto.rutaimg;
    img2.alt = producto.nombre;
    img2.className = "product__card--thumbnail__img product__secondary--img";
    a.appendChild(img2);
    divThumbnail.appendChild(a);
    let ul = document.createElement("ul");
    ul.className = "product__card--action d-flex align-items-center justify-content-center";
    let li1 = document.createElement("li");
    li1.className = "product__card--action__list";
    let a1 = document.createElement("a");
    a1.href = "#";
    a1.title = "Ver Producto";
    a1.className = "product__card--action__btn";
    a1.setAttribute('data-open', 'modal1');
    a1.addEventListener('click', function (event) {
        event.preventDefault();
        llenarModal(producto);
        
    });
    
    let svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
    svg.setAttribute('class', 'product__card--action__btn--svg');
    svg.setAttribute('width', '16');
    svg.setAttribute('height', '16');
    svg.setAttribute('viewBox', '0 0 16 16');
    svg.setAttribute('fill', 'none');

    let path = document.createElementNS('http://www.w3.org/2000/svg', 'path');
    path.setAttribute('d', 'M15.6952 14.4991L11.7663 10.5588C12.7765 9.4008 13.33 7.94381 13.33 6.42703C13.33 2.88322 10.34 0 6.66499 0C2.98997 0 0 2.88322 0 6.42703C0 9.97085 2.98997 12.8541 6.66499 12.8541C8.04464 12.8541 9.35938 12.4528 10.4834 11.6911L14.4422 15.6613C14.6076 15.827 14.8302 15.9184 15.0687 15.9184C15.2944 15.9184 15.5086 15.8354 15.6711 15.6845C16.0166 15.364 16.0276 14.8325 15.6952 14.4991ZM6.66499 1.67662C9.38141 1.67662 11.5913 3.8076 11.5913 6.42703C11.5913 9.04647 9.38141 11.1775 6.66499 11.1775C3.94857 11.1775 1.73869 9.04647 1.73869 6.42703C1.73869 3.8076 3.94857 1.67662 6.66499 1.67662Z');
    path.setAttribute('fill', 'currentColor');
    svg.appendChild(path);
    a1.appendChild(svg);
    let span1 = document.createElement("span");
    span1.className = "visually-hidden";
    span1.innerHTML = "Ver Producto";
    a1.appendChild(span1);
    li1.appendChild(a1);
    ul.appendChild(li1);
    let li2 = document.createElement("li");
    li2.className = "product__card--action__list";
    let a2 = document.createElement("a");
    a2.href = "#";
    a2.title = "Wishlist";
    a2.className = "product__card--action__btn";
    a2.addEventListener('click', function (event) {
        event.preventDefault();
        insertarWishlist(producto.id);
    });
    let svg2 = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
    svg2.setAttribute('class', 'product__card--action__btn--svg');
    svg2.setAttribute('width', '16');
    svg2.setAttribute('height', '16');
    svg2.setAttribute('viewBox', '0 0 16 16');
    svg2.setAttribute('fill', 'none');

    let path2 = document.createElementNS('http://www.w3.org/2000/svg', 'path');
    path2.setAttribute('d', 'M13.5379 1.52734C11.9519 0.1875 9.51832 0.378906 8.01442 1.9375C6.48317 0.378906 4.04957 0.1875 2.46364 1.52734C0.412855 3.25 0.713636 6.06641 2.1902 7.57031L6.97536 12.4648C7.24879 12.7383 7.60426 12.9023 8.01442 12.9023C8.39723 12.9023 8.7527 12.7383 9.02614 12.4648L13.8386 7.57031C15.2879 6.06641 15.5886 3.25 13.5379 1.52734ZM12.8816 6.64062L8.09645 11.5352C8.04176 11.5898 7.98707 11.5898 7.90504 11.5352L3.11989 6.64062C2.10817 5.62891 1.91676 3.71484 3.31129 2.53906C4.3777 1.63672 6.01832 1.77344 7.05739 2.8125L8.01442 3.79688L8.97145 2.8125C9.98317 1.77344 11.6238 1.63672 12.6902 2.51172C14.0847 3.71484 13.8933 5.62891 12.8816 6.64062Z');
    path2.setAttribute('fill', 'currentColor');
    svg2.appendChild(path2);
    a2.appendChild(svg2);
    let span2 = document.createElement("span");
    span2.className = "visually-hidden";
    span2.innerHTML = "Wishlist";
    a2.appendChild(span2);
    li2.appendChild(a2);
    ul.appendChild(li2);
    divThumbnail.appendChild(ul);
    article.appendChild(divThumbnail);

    //Contenido del producto
    let divContent = document.createElement("div");
    divContent.className = "product__card--content";
    let ulrating = document.createElement("ul");
    ulrating.className = "rating product__card--rating d-flex";
    let lirating = document.createElement("li");
    lirating.className = "rating__list";
    let spanrating = document.createElement("span");
    spanrating.className = "rating__icon";
    let svgStarFill = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
    svgStarFill.setAttribute('width', '14');
    svgStarFill.setAttribute('height', '13');
    svgStarFill.setAttribute('viewBox', '0 0 14 13');
    svgStarFill.setAttribute('fill', 'none');
    let pathStarFill = document.createElementNS('http://www.w3.org/2000/svg', 'path');
    pathStarFill.setAttribute('d', 'M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z');
    pathStarFill.setAttribute('fill', 'currentColor');
    svgStarFill.appendChild(pathStarFill);
    spanrating.appendChild(svgStarFill);
    lirating.appendChild(spanrating);
    ulrating.appendChild(lirating);
    ulrating.appendChild(lirating);
    ulrating.appendChild(lirating);

    let liReview = document.createElement("li");
    let spanReview = document.createElement("span");
    spanReview.className = "rating__review--text";
    spanReview.innerHTML = "(126) Review";
    liReview.appendChild(spanReview);
    ulrating.appendChild(liReview);
    divContent.appendChild(ulrating);
    let h3 = document.createElement("h3");
    h3.className = "product__card--title";
    let a3 = document.createElement("a");
    a3.href = "#";
    a3.innerHTML = producto.nombre;
    h3.appendChild(a3);
    divContent.appendChild(h3);
    let divPrice = document.createElement("div");
    divPrice.className = "product__card--price";
    let spanPrice = document.createElement("span");
    spanPrice.className = "current__price";
    spanPrice.innerHTML = producto.precio + "€";
    divPrice.appendChild(spanPrice);
    divContent.appendChild(divPrice);
    let divAddToCart = document.createElement("div");
    divAddToCart.className = "product__card--footer";
    let aAddToCart = document.createElement("a");
    aAddToCart.href = "#";
    aAddToCart.title = "Añadir al carrito";
    aAddToCart.className = "product__card--btn primary__btn";
    aAddToCart.innerHTML = "Añadir al carrito";
    aAddToCart.addEventListener('click', function (event) {
        event.preventDefault();
        insertarCarrito({ idusuario: user, idproducto: producto.id, cantidad: 1 });
    });
    let svgAddToCart = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
    svgAddToCart.setAttribute('width', '16');
    svgAddToCart.setAttribute('height', '16');
    svgAddToCart.setAttribute('viewBox', '0 0 16 16');
    svgAddToCart.setAttribute('fill', 'none');
    let pathAddToCart = document.createElementNS('http://www.w3.org/2000/svg', 'path');

    pathAddToCart.setAttribute('d', 'M13.2371 4H11.5261L8.5027 0.460938C8.29176 0.226562 7.9402 0.203125 7.70582 0.390625C7.47145 0.601562 7.44801 0.953125 7.63551 1.1875L10.0496 4H3.46364L5.8777 1.1875C6.0652 0.953125 6.04176 0.601562 5.80739 0.390625C5.57301 0.203125 5.22145 0.226562 5.01051 0.460938L1.98707 4H0.299574C0.135511 4 0.0183239 4.14062 0.0183239 4.28125V4.84375C0.0183239 5.00781 0.135511 5.125 0.299574 5.125H0.721449L1.3777 9.78906C1.44801 10.3516 1.91676 10.75 2.47926 10.75H11.0339C11.5964 10.75 12.0652 10.3516 12.1355 9.78906L12.7918 5.125H13.2371C13.3777 5.125 13.5183 5.00781 13.5183 4.84375V4.28125C13.5183 4.14062 13.3777 4 13.2371 4ZM11.0339 9.625H2.47926L1.86989 5.125H11.6433L11.0339 9.625ZM7.33082 6.4375C7.33082 6.13281 7.07301 5.875 6.76832 5.875C6.4402 5.875 6.20582 6.13281 6.20582 6.4375V8.3125C6.20582 8.64062 6.4402 8.875 6.76832 8.875C7.07301 8.875 7.33082 8.64062 7.33082 8.3125V6.4375ZM9.95582 6.4375C9.95582 6.13281 9.69801 5.875 9.39332 5.875C9.0652 5.875 8.83082 6.13281 8.83082 6.4375V8.3125C8.83082 8.64062 9.0652 8.875 9.39332 8.875C9.69801 8.875 9.95582 8.64062 9.95582 8.3125V6.4375ZM4.70582 6.4375C4.70582 6.13281 4.44801 5.875 4.14332 5.875C3.8152 5.875 3.58082 6.13281 3.58082 6.4375V8.3125C3.58082 8.64062 3.8152 8.875 4.14332 8.875C4.44801 8.875 4.70582 8.64062 4.70582 8.3125V6.4375Z');
    pathAddToCart.setAttribute('fill', 'currentColor');
    svgAddToCart.appendChild(pathAddToCart);
    aAddToCart.appendChild(svgAddToCart);
    divAddToCart.appendChild(aAddToCart);
    divContent.appendChild(divAddToCart);
    article.appendChild(divContent);
    divContainer.appendChild(article);
    divProducto.appendChild(divContainer);
}
function crearProductos(productos) {
    document.getElementById("productos").innerHTML = "";
    for (let producto of productos) {
        crearProducto(producto);
    }
}

function pedirProductos(options = optionsFilter) {

    let urlFilter = url +
        "?page=" + options.page +
        "&itemPage=" + options.itemPage +
        "&sortValue=" + options.sortValue +
        "&sortField=" + options.sortField +
        "&q=" + options.q +
        "&priceMin=" + options.priceMin +
        "&priceMax=" + options.priceMax +
        "&category=" + options.category +
        "&subcategory=" + options.subcategory +
        "&brand=" + options.brand;

    fetch(urlFilter,
        {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => {
            console.log(data.data);
            productos = data.data;
            console.log(productos);
            crearProductos(data.data);
            crearPaginacion(data.current_page, data.last_page);
            insertarNumeroProductos(data);
        });
}

function crearPaginacion(currentPage, totalPages) {
    let div = document.getElementById('paginacion');
    div.innerHTML = '';

    let nav = document.createElement('nav');
    nav.className = 'pagination justify-content-center';

    let ul = document.createElement('ul');
    ul.className = 'pagination__wrapper d-flex align-items-center justify-content-center';

    let li1 = document.createElement('li');
    li1.className = 'pagination__list';

    let a1 = document.createElement('a');
    a1.href = 'shop.html';
    a1.className = 'pagination__item--arrow  link ';
    a1.addEventListener('click', function (event) {
        event.preventDefault();
        optionsFilter.page = currentPage - 1;
        pedirProductos(optionsFilter);
        inicio.scrollIntoView({ behavior: 'smooth' });
    });

    let svg1 = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
    svg1.setAttribute('width', '22.51');
    svg1.setAttribute('height', '20.443');
    svg1.setAttribute('viewBox', '0 0 512 512');

    let path1 = document.createElementNS('http://www.w3.org/2000/svg', 'path');
    path1.setAttribute('fill', 'none');
    path1.setAttribute('stroke', 'currentColor');
    path1.setAttribute('stroke-linecap', 'round');
    path1.setAttribute('stroke-linejoin', 'round');
    path1.setAttribute('stroke-width', '48');
    path1.setAttribute('d', 'M244 400L100 256l144-144M120 256h292');

    let span1 = document.createElement('span');
    span1.className = 'visually-hidden';
    span1.textContent = 'page left arrow';




    let li2 = document.createElement('li');
    li2.className = 'pagination__list';

    let a2 = document.createElement('a');
    a2.href = 'shop.html';
    a2.className = 'pagination__item--arrow  link ';
    a2.addEventListener('click', function (event) {
        event.preventDefault();
        optionsFilter.page = currentPage + 1;
        pedirProductos(optionsFilter);
        inicio.scrollIntoView({ behavior: 'smooth' });
    });

    let svg2 = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
    svg2.setAttribute('width', '22.51');
    svg2.setAttribute('height', '20.443');
    svg2.setAttribute('viewBox', '0 0 512 512');

    let path2 = document.createElementNS('http://www.w3.org/2000/svg', 'path');
    path2.setAttribute('fill', 'none');
    path2.setAttribute('stroke', 'currentColor');
    path2.setAttribute('stroke-linecap', 'round');
    path2.setAttribute('stroke-linejoin', 'round');
    path2.setAttribute('stroke-width', '48');
    path2.setAttribute('d', 'M268 112l144 144-144 144M392 256H100');

    let span2 = document.createElement('span');
    span2.className = 'visually-hidden';
    span2.textContent = 'page left arrow';
    svg1.appendChild(path1);
    a1.appendChild(svg1);
    a1.appendChild(span1);
    li1.appendChild(a1);
    ul.appendChild(li1);



    let page1 = crearPaginacionItem(currentPage, 1);
    let page2 = crearPaginacionItem(currentPage, 2);
    let lastPage = crearPaginacionItem(currentPage, totalPages - 1);
    let lastPage2 = crearPaginacionItem(currentPage, totalPages);

    ul.appendChild(page1);
    ul.appendChild(page2);
    if (currentPage > 2 && currentPage < totalPages - 1) {
        let middlePage = crearPaginacionItem(currentPage, currentPage);
        ul.appendChild(middlePage);
    }
    ul.appendChild(lastPage);
    ul.appendChild(lastPage2);
    svg2.appendChild(path2);
    a2.appendChild(svg2);
    a2.appendChild(span2);
    li2.appendChild(a2);
    ul.appendChild(li2);
    // Repetir para los otros elementos de la lista...


    div.appendChild(nav);
    nav.appendChild(ul);
    div.appendChild(nav);
}

function crearPaginacionItem(currentPage, itemPage) {
    let pageItem = document.createElement('li');
    pageItem.className = 'pagination__list';
    if (currentPage == itemPage) {
        let span = document.createElement('span');
        span.className = 'pagination__item pagination__item--current';
        span.textContent = itemPage;
        pageItem.appendChild(span);
    } else {
        let a = document.createElement('a');
        a.href = 'shop.html';
        a.className = 'pagination__item link';
        a.textContent = itemPage;
        a.addEventListener('click', function (event) {
            event.preventDefault();
            optionsFilter.page = itemPage;
            pedirProductos(optionsFilter);
            inicio.scrollIntoView({ behavior: 'smooth' });
        });
        pageItem.appendChild(a);
    }

    return pageItem;
}

function crearFiltros() {
    let itemPage = document.getElementById('item-page');
    itemPage.addEventListener('change', function (event) {
        event.preventDefault();
        optionsFilter.itemPage = itemPage.value;
        optionsFilter.page = 1;
        pedirProductos(optionsFilter);
        inicio.scrollIntoView({ behavior: 'smooth' });
    });

    let sort = document.getElementById('ordenacion');
    sort.addEventListener('change', function (event) {
        event.preventDefault();
        let [sortField, sortValue] = sort.value.split('-');
        optionsFilter.page = 1;
        optionsFilter.sortField = sortField;
        optionsFilter.sortValue = sortValue;
        pedirProductos(optionsFilter);
        inicio.scrollIntoView({ behavior: 'smooth' });
    });

    //Categorias
    let categorias = {
        'Neumaticos': ['Neumaticos de verano', 'Neumaticos de invierno', 'Neumaticos mixtos'],
        'Frenos': ['Discos de freno', 'Pastillas de freno', 'Freno de tambor'],
        'Amortiguacion': ['Amortiguadores', 'Resortes helicoidales', 'Copela de amortiguador'],
        'Motor': ['Kit de distribucion', 'Bomba de agua', 'Turbo'],
        'Carroceria': ['Faro principal', 'Piloto trasero', 'Espejo retrovisor', 'Amortiguador de maletero'],
        'Aceites y liquidos': ['Aceite de motor', 'Liquido de frenos'],
        'Escape': ['Catalizador', 'Sonda lambda', 'Valvula egr'],
        'Todos': []
    };

    console.log(document.getElementById('Neumaticos de verano'));
    for (let categoria in categorias) {
        let item = document.getElementById(categoria);
        filtroCategoria(item, categoria);
        for (let subcategoria of categorias[categoria]) {
            let itemSub = document.getElementById(subcategoria);
            console.log(subcategoria);
            filtroSubcategoria(itemSub, subcategoria, categoria);
        }
    }

    filtroPrecio();
    filtroBusqueda();



}


function filtroCategoria(categoria, valor) {
    categoria.addEventListener('click', function (event) {
        event.preventDefault();
        optionsFilter.page = 1;
        optionsFilter.subcategory = '';
        optionsFilter.category = valor.replaceAll(' ', '-');
        console.log(optionsFilter);
        pedirProductos(optionsFilter);
        inicio.scrollIntoView({ behavior: 'smooth' });
    });
}

function filtroSubcategoria(subcategoria, valorSubcategoria, valorCategoria) {
    subcategoria.addEventListener('click', function (event) {
        event.preventDefault();
        optionsFilter.page = 1;
        optionsFilter.category = valorCategoria.replaceAll(' ', '-');
        optionsFilter.subcategory = valorSubcategoria.replaceAll(' ', '-');
        pedirProductos(optionsFilter);
        inicio.scrollIntoView({ behavior: 'smooth' });
    });
}

function filtroPrecio() {
    let precioMin = document.getElementById('price-min');
    let precioMax = document.getElementById('price-max');
    let precioSubmit = document.getElementById('price-filter');
    precioSubmit.addEventListener('click', function (event) {
        event.preventDefault();
        optionsFilter.page = 1;
        optionsFilter.priceMin = precioMin.value == '' ? 0 : precioMin.value;
        optionsFilter.priceMax = precioMax.value == '' ? 0 : precioMax.value;
        console.log(optionsFilter);
        pedirProductos(optionsFilter);
        inicio.scrollIntoView({ behavior: 'smooth' });
    });

    let precioReset = document.getElementById('price-clear');
    precioReset.addEventListener('click', function (event) {
        event.preventDefault();
        precioMin.value = 0;
        precioMax.value = 0;
        optionsFilter.page = 1;
        optionsFilter.priceMin = 0;
        optionsFilter.priceMax = 0;
        pedirProductos(optionsFilter);
        inicio.scrollIntoView({ behavior: 'smooth' });
    });
}
function filtroBusqueda() {
    let busquedaBtn = document.getElementById('busqueda-btn');
    let busquedaValue = document.getElementById('busqueda-value');
    busquedaBtn.addEventListener('click', function (event) {
        event.preventDefault();
        optionsFilter.page = 1;
        optionsFilter.q = busquedaValue.value;
        console.log(optionsFilter);
        pedirProductos(optionsFilter);
        inicio.scrollIntoView({ behavior: 'smooth' });
    });
}

function pedirMarcas() {
    fetch('https://cgarort2508.ieszaidinvergeles.es/Tienda/public/api/marcas',
        {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            }
        }).then(response => response.json())
        .then(data => {
            crearMarcas(data);
        });


}

function crearMarcas(marcas) {
    marcas.unshift({ marca: 'Todas', cantidad: 0 });
    let div = document.getElementById('marcas');
    div.innerHTML = '';
    for (let marca of marcas) {
        let limarca = document.createElement('li');
        limarca.className = 'widget__tagcloud--list';
        let a = document.createElement('a');
        a.href = '#';
        a.className = 'widget__tagcloud--link';
        a.textContent = marca.marca;
        a.addEventListener('click', function (event) {
            event.preventDefault();
            optionsFilter.page = 1;
            optionsFilter.brand = marca.marca;
            pedirProductos(optionsFilter);
            inicio.scrollIntoView({ behavior: 'smooth' });
        });
        limarca.appendChild(a);
        div.appendChild(limarca);
    }


}

function insertarNumeroProductos(data) {
    let span1 = document.getElementById('productos-iniciales');
    span1.innerHTML = '';
    span1.innerHTML = data.from;
    let span2 = document.getElementById('productos-finales');
    span2.innerHTML = '';
    span2.innerHTML = data.to;
    let span3 = document.getElementById('productos-totales');
    span3.innerHTML = '';
    span3.innerHTML = data.total;
}


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

function llenarModal(producto){
    console.log('modal')
    let imagenModal = document.getElementById('imagen-quick-view');
    imagenModal.src = 'productos/' + producto.rutaimg;
    let imagenModalSpan = document.getElementById('imagen-span-quick-view');
    imagenModal.href = 'productos/' + producto.rutaimg;
    let nombreModal = document.getElementById('nombre-quick-view');
    nombreModal.innerHTML = '';
    nombreModal.innerHTML = producto.nombre;
    let precioModal = document.getElementById('precio-quick-view');
    precioModal.innerHTML = '';
    precioModal.innerHTML = producto.precio + '€';
    let descripcionModal = document.getElementById('descripcion-quick-view');
    descripcionModal.innerHTML = '';
    descripcionModal.innerHTML = producto.descripcion;
    let marcaModal = document.getElementById('marca-quick-view');
    marcaModal.innerHTML = '';
    marcaModal.innerHTML = 'Marca: ' +producto.marca;
    let categoriaModal = document.getElementById('categoria-quick-view');
    categoriaModal.innerHTML = '';
    categoriaModal.innerHTML = 'Categoria: ' + producto.categoria;
    let subcategoriaModal = document.getElementById('subcategoria-quick-view');
    subcategoriaModal.innerHTML = '';
    subcategoriaModal.innerHTML = 'Subcategoria: ' + producto.subcategoria;
    let compatibilidadModal = document.getElementById('compatibilidad-quick-view');
    compatibilidadModal.innerHTML = '';
    compatibilidadModal.innerHTML = 'Compatibilidad: ' + producto.compatibilidad;
    let carrito = document.getElementById('carrito-quick-view');
    carrito.addEventListener('click', function (event) {
        event.preventDefault();
        insertarCarrito({ idusuario: user, idproducto: producto.id, cantidad: cantidadProducto.value });
    });
    let wishlist = document.getElementById('wishlist-quick-view');
    wishlist.addEventListener('click', function (event) {
        event.preventDefault();
        insertarWishlist(producto.id);
    });
    let sumarProducto = document.getElementById('sumar-quick-view');
    sumarProducto.addEventListener('click', function (event) {
        event.preventDefault();
        cantidadProducto.value = parseInt(cantidadProducto.value) + 1;
    });
    let cantidadProducto = document.getElementById('value-quick-view');
    cantidadProducto.value = 1;
    let restarProducto = document.getElementById('restar-quick-view');
    restarProducto.addEventListener('click', function (event) {
        event.preventDefault();
        if (cantidadProducto.value > 1) {
            cantidadProducto.value = parseInt(cantidadProducto.value) - 1;
        }
    });
    
}



crearFiltros();
pedirProductos();
pedirMarcas();



