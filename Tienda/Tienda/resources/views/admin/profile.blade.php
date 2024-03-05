@extends('admin.base')
@section('content')
<style type="text/css">
    #administradores,
    #administradores-form{
        display:none;
    }
</style>
   <section class="my__account--section section--padding">
            <div class="container">
                <p class="account__welcome--text">Hello, Admin welcome to your dashboard!</p>
                <div class="my__account--section__inner border-radius-10 d-flex">
                    <div class="account__left--sidebar">
                        <h2 class="account__content--title mb-20">My Profile</h2>
                        <ul class="account__menu">
                            <li class="account__menu--list"><a href="{{ url('admin')}}" id="datos-personales-li">Datos personales</a></li>
                            @if(auth()->user()->rol == 'root')
                                <li class="account__menu--list" id="administradores-li"><a>Administradores</a></li>
                                <li class="account__menu--list" id="administradores-form-li"><a>Añadir administrador</a></li>
                            @endif
                            <li class="account__menu--list"><a href="{{ url('/ ')}}">Tienda</a></li>
                            <li class="account__menu--list">
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </li>
                        </ul>
                    </div>
                    <div class="account__wrapper contenido" id="datos-personales">
                        <div class="account__content">
                            <h1 class="account__content--title h2 mb-20">Datos personales</h1>
                            <h4>Nombre</h4>
                            <h5>{{auth()->user()->name}}</h5>
                            <h4>Email</h4>
                            <h5>{{auth()->user()->email}}</h5>
                            <h4>Rol</h4>
                            <h5>{{auth()->user()->rol}}</h5>
            
                           
                        </div>
                    </div>
                    @include('root.createUsers')
                    @include('root.indexUsers')
                    
                </div>
            </div>
        </section>
        
        <script>
        
            document.getElementById('datos-personales-li').addEventListener('click', function(event) {
                  event.preventDefault();
                  document.getElementById('datos-personales').style.display = 'block';
                  document.getElementById('administradores-form').style.display = 'none';
                  document.getElementById('administradores').style.display = 'none';
                 
                });
            document.getElementById('administradores-form-li').addEventListener('click', function(event) {
                  event.preventDefault();
                  document.getElementById('datos-personales').style.display = 'none';
                  document.getElementById('administradores-form').style.display = 'block';
                  document.getElementById('administradores').style.display = 'none';
                  
                
                 
                });
            document.getElementById('administradores-li').addEventListener('click', function(event) {
                  event.preventDefault();
                  document.getElementById('datos-personales').style.display = 'none';
                  document.getElementById('administradores-form').style.display = 'none';
                  document.getElementById('administradores').style.display = 'block';
                  pedirAdministradores();
                 
                 
                });
                
                
                
            
            function crearTableAdmin(data) {
                let table = document.getElementById('administradores-table');
                table.innerHTML = '';
            
                for (let admin of data) {
            
                    let tr = document.createElement('tr');
                    tr.className = 'account__table--body__child';
            
                    let td1 = document.createElement('td');
                    td1.className = 'account__table--body__child--items';
                    td1.textContent = admin.name;
            
                    let td2 = document.createElement('td');
                    td2.className = 'account__table--body__child--items';
                    td2.textContent = admin.email;
            
                    let td3 = document.createElement('td');
                    td3.className = 'account__table--body__child--items';
                    td3.textContent = admin.rol;
            
                    tr.appendChild(td1);
                    tr.appendChild(td2);
                    tr.appendChild(td3);
                    table.appendChild(tr);
                }
            }
            
            function pedirAdministradores() {
                fetch('https://cgarort2508.ieszaidinvergeles.es/Tienda/public/administradores',
                    {
                        method: 'GET',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json'
                        }
                    }).then(response => response.json())
                    .then(data => {
                        console.log(data)
                        crearTableAdmin(data);
                    });
            }
            
            
            
            function insertarAdministradores(admin) {
                fetch('https://cgarort2508.ieszaidinvergeles.es/Tienda/public/administradores',
                    {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN':document.querySelector('meta[name="csrf-token"]')['content']
                            
                        },
                        body: JSON.stringify(admin)
                    }).then(response => response.json())
                    .then(data => {
                        console.log(data)
                        pedirAdministradores();
                    });
            }
            
            let div = document.getElementById('administrador-bt-submit');
            div.addEventListener('click', function (event) {
                event.preventDefault();
                let admin = {
                    name: document.getElementById('nombre').value,
                    email: document.getElementById('email').value,
                    rol: document.getElementById('rol').value,
                    password: document.getElementById('password').value
                };
                
                
                console.log(admin);
                insertarAdministradores(admin);
            });
                
                
                
           
            

            
            
            
            
        </script>
        
@endsection