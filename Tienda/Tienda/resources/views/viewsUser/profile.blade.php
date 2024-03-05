@extends('viewsUser.base')

@section('content')
<section class="breadcrumb__section breadcrumb__bg">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content text-center">
                            <h1 class="breadcrumb__content--title mb-20">Perfil</h1>
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb__content--menu__items"><span>Perfil</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
</section>
   <section class="my__account--section section--padding">
            <div class="container">
                <p class="account__welcome--text">Hello, Admin welcome to your dashboard!</p>
                <div class="my__account--section__inner border-radius-10 d-flex">
                    <div class="account__left--sidebar">
                        <h2 class="account__content--title mb-20">My Profile</h2>
                        <ul class="account__menu">
                           <li class="account__menu--list active"><a href="my-account.html" id="show-pedidos">Dashboard</a></li>
                            <li class="account__menu--list"><a href="my-account-2.html" id="show-direccion">Addresses</a></li>
                            <li class="account__menu--list"><a href="my-account-2.html" id="show-datos-personales">Datos personales</a></li>
                            <li class="account__menu--list"><a href="{{url('wishlist')}}">Wishlist</a></li>
                            @if(auth()->user()->rol == 'administrador' ||  auth()->user()->rol == 'root')
                            <li class="account__menu--list"><a href="{{ url('admin')}}">Admin area</a></li>
                            @endif
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
                    <div class="account__wrapper">
                        <div class="account__content" id="count-content">
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script type="text/javascript" src="{{url('assets/js/perfil.js')}}"></script>
@endsection