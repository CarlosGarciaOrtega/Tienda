document.getElementById('show-pedidos').addEventListener('click', function (event) {
    event.preventDefault();
    let contenedor = document.getElementById('count-content');
    contenedor.innerHTML = '';
    pedirPedidos(contenedor);
});

function creaPedidos(contenedor, pedidos) {

    let h2 = document.createElement('h2');
    h2.className = 'account__content--title h3 mb-20';
    h2.textContent = 'Historial de Pedidos';
    let table = document.createElement('table');
    table.className = 'account__table';
    let thead = document.createElement('thead');
    thead.className = 'account__table--header';
    let trHead = document.createElement('tr');
    trHead.className = 'account__table--header__child';

    let headers = ['Pedido', 'Fecha', 'Estado de pago', 'Estado del pedido', 'Total'];
    headers.forEach(function (header) {
        let th = document.createElement('th');
        th.className = 'account__table--header__child--items';
        th.textContent = header;
        trHead.appendChild(th);
    });

    thead.appendChild(trHead);
    table.appendChild(thead);
    let tbody = document.createElement('tbody');
    tbody.className = 'account__table--body mobile__none';
    pedidos.forEach(function (pedido) {
        let trBody = document.createElement('tr');
        trBody.className = 'account__table--body__child';
        for (const iterator in pedido) {
            if (iterator != 'iduser') {
                let td = document.createElement('td');
                td.className = 'account__table--body__child--items';
                if (iterator == 'fecha') {
                    let fecha = new Date(pedido[iterator]);
                    let opciones = { year: 'numeric', month: 'long', day: 'numeric' };
                    td.textContent = fecha.toLocaleDateString('es-ES', opciones);
                } else if (iterator == 'total') {
                    td.textContent = pedido[iterator] + '€';
                } else {
                    td.textContent = pedido[iterator];
                }

                trBody.appendChild(td);
            }

        }
        tbody.appendChild(trBody);
    });
    table.appendChild(tbody);
    let div = document.createElement('div');
    div.className = 'account__table--area';
    div.appendChild(table);
    contenedor.appendChild(h2);
    contenedor.appendChild(div);

}

function pedirPedidos(contenedor) {
    fetch('https://cgarort2508.ieszaidinvergeles.es/Tienda/public/api/pedidos?idUsuario=' + 5,
        {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
            }
        }).then(response => response.json())
        .then(data => {
            console.log('Pedidos', data);
            creaPedidos(contenedor, data);
        });


}


document.getElementById('show-datos-personales').addEventListener('click', function (event) {
    event.preventDefault();
    let contenedor = document.getElementById('count-content');
    contenedor.innerHTML = '';
    pedirInformacionPerfil(contenedor);
});

function pedirInformacionPerfil(contenedor) {
    fetch('https://cgarort2508.ieszaidinvergeles.es/Tienda/public/api/user/' + 5,
        {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
            }
        }).then(response => response.json())
        .then(data => {
            console.log('Informacion', data);
            creaInformacionPerfil(contenedor, data);
        });
}

function creaInformacionPerfil(contenedor, data) {
    let h2 = document.createElement('h2');
    h2.className = 'account__content--title h3 mb-20';
    h2.textContent = 'Datos Personales';
    let div = document.createElement('div');
    div.className = 'account__form';
    let h4 = document.createElement('h4');
    h4.className = 'account__form--title';
    h4.textContent = 'Nombre';
    let h5 = document.createElement('h5');
    h5.className = 'account__form--data';
    h5.textContent = data.nombre;
    div.appendChild(h4);
    div.appendChild(h5);
    let h4Email = document.createElement('h4');
    h4Email.className = 'account__form--title';
    h4Email.textContent = 'Email';
    let h5Email = document.createElement('h5');
    h5Email.className = 'account__form--data';
    h5Email.textContent = data.email;
    div.appendChild(h4Email);
    div.appendChild(h5Email);
    contenedor.appendChild(h2);
    contenedor.appendChild(div);



}




document.getElementById('show-direccion').addEventListener('click', function (event) {
    event.preventDefault();
    let contenedor = document.getElementById('count-content');
    contenedor.innerHTML = '';
    pedirDireccion(contenedor);
});

function pedirDireccion(contenedor) {
    fetch('https://cgarort2508.ieszaidinvergeles.es/Tienda/public/api/direcciones/' + 5,
        {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
            }
        }).then(response => response.json())
        .then(data => {
            console.log('Direccion', data);
            creaDireccion(contenedor, data);
        });
}
function creaDireccion(contenedor, direcciones) {
    let h2 = document.createElement('h2');
    h2.className = 'account__content--title h3 mb-20';
    h2.textContent = 'Direcciones';
    let table = document.createElement('table');
    table.className = 'account__table';
    let thead = document.createElement('thead');
    thead.className = 'account__table--header';
    let trHead = document.createElement('tr');
    trHead.className = 'account__table--header__child';

    let headers = ['Direccion', 'Puerta', 'Ciudad', 'Pais', 'Cp'];
    headers.forEach(function (header) {
        let th = document.createElement('th');
        th.className = 'account__table--header__child--items';
        th.textContent = header;
        trHead.appendChild(th);
    });

    thead.appendChild(trHead);
    table.appendChild(thead);
    let tbody = document.createElement('tbody');
    tbody.className = 'account__table--body mobile__none';
    direcciones.forEach(function (direccion) {
        let trBody = document.createElement('tr');
        trBody.className = 'account__table--body__child';
        for (const iterator in direccion) {
            
            if (['direccion', 'apartamento', 'ciudad', 'pais', 'cp'].includes(iterator)) {
                console.log(iterator);
                let td = document.createElement('td');
                td.className = 'account__table--body__child--items';
                td.textContent = direccion[iterator];
                trBody.appendChild(td);
            }

        }
        tbody.appendChild(trBody);
    });
    table.appendChild(tbody);
    let div = document.createElement('div');
    div.className = 'account__table--area';
    div.appendChild(table);
    contenedor.appendChild(h2);
    contenedor.appendChild(div);

}


pedirPedidos(document.getElementById('count-content'));