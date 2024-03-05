@extends('viewsUser.base')

@section('content')

<main class="main__content_wrapper">

            <!-- Start breadcrumb section -->
            <section class="breadcrumb__section breadcrumb__bg">
                <div class="container">
                    <div class="row row-cols-1">
                        <div class="col">
                            <div class="breadcrumb__content text-center">
                                <h1 class="breadcrumb__content--title mb-20">Pago</h1>
                                <ul
                                    class="breadcrumb__content--menu d-flex justify-content-center">
                                    <li
                                        class="breadcrumb__content--menu__items"><a
                                            href="{{url('pago')}}">Home</a></li>
                                    <li
                                        class="breadcrumb__content--menu__items"><span>Pago</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End breadcrumb section -->

            <!-- Start checkout page area -->
            <div class="checkout__page--area section--padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="main checkout__mian">
                                <form class="contact__form--inner col-md-8 offset-md-2 mt-5 mb-5" action="{{ url('pago') }}" method="post"
        enctype="multipart/form-data">
        @csrf
                                    <div
                                        class="checkout__content--step section__shipping--address">
                                        <div class="section__header mb-25">
                                            <h2
                                                class="section__header--title h3">Billing
                                                Details</h2>
                                        </div>
                                        <div
                                            class="section__shipping--address__content">
                                            <div class="row">
                                                <div
                                                    class="col-lg-6 col-md-6 col-sm-6 mb-20">
                                                    <div
                                                        class="checkout__input--list ">
                                                        <label
                                                            class="checkout__input--label mb-5"
                                                            for="input1">Fist
                                                            Name <span
                                                                class="checkout__input--label__star">*</span></label>
                                                        <input
                                                            class="checkout__input--field border-radius-5"
                                                            placeholder="First name"
                                                            id="input1"
                                                            type="text"
                                                            name="nombre">
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-lg-6 col-md-6 col-sm-6 mb-20">
                                                    <div
                                                        class="checkout__input--list">
                                                        <label
                                                            class="checkout__input--label mb-5"
                                                            for="input2">Last
                                                            Name <span
                                                                class="checkout__input--label__star">*</span></label>
                                                        <input
                                                            class="checkout__input--field border-radius-5"
                                                            placeholder="Last name (optional)"
                                                            id="input2"
                                                            type="text"
                                                            name="apellidos">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mb-20">
                                                    <div
                                                        class="checkout__input--list">
                                                        <label
                                                            class="checkout__input--label mb-5"
                                                            for="country2">Direccion
                                                            <span
                                                                class="checkout__input--label__star">*</span></label>
                                                        <div
                                                            class="checkout__input--select select">
                                                            <select
                                                                class="checkout__input--select__field border-radius-5"
                                                                id="country2" name="direccionGuardada">
                                                                <option selected
                                                                    hidden
                                                                    value>Seleccione
                                                                    una
                                                                    dirreccion</option>
                                                                @foreach($direcciones as $direccion)
                                                                <option value="{{$direccion->id}}">{{$direccion->direccion}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <details>
                                            <summary
                                                class="checkout__checkbox mb-20">
                                                <input
                                                    class="checkout__checkbox--input"
                                                    type="checkbox" name="direccionNueva[nueva]" id = "nuevaDireccion">
                                                   
                                                <span
                                                    class="checkout__checkbox--checkmark"></span>
                                                <span
                                                    class="checkout__checkbox--label">Ship
                                                    to a different
                                                    address?</span>
                                                
                                            </summary>
                                            <div
                                                class="section__shipping--address__content">
                                                <div class="row">
                                                    <div class="col-12 mb-20">
                                                        <div
                                                            class="checkout__input--list">
                                                            <label
                                                                class="checkout__input--label mb-5"
                                                                for="input10">Address
                                                                <span
                                                                    class="checkout__input--label__star">*</span></label>
                                                            <input
                                                                class="checkout__input--field border-radius-5"
                                                                placeholder="Address1"
                                                                id="input10"
                                                                type="text"
                                                                name="direccionNueva[direccion]">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb-20">
                                                        <div
                                                            class="checkout__input--list">
                                                            <input
                                                                class="checkout__input--field border-radius-5"
                                                                placeholder="Apartment, suite, etc. (optional)"
                                                                type="text"
                                                                 name="direccionNueva[apartamento]">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb-20">
                                                        <div
                                                            class="checkout__input--list">
                                                            <label
                                                                class="checkout__input--label mb-5"
                                                                for="input11">Town/City
                                                                <span
                                                                    class="checkout__input--label__star">*</span></label>
                                                            <input
                                                                class="checkout__input--field border-radius-5"
                                                                placeholder="City"
                                                                id="input11"
                                                                type="text"
                                                                 name="direccionNueva[ciudad]">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb-20">
                                                        <div
                                                            class="checkout__input--list">
                                                            <label
                                                                class="checkout__input--label mb-5"
                                                                for="input11">Pais
                                                                <span
                                                                    class="checkout__input--label__star">*</span></label>
                                                            <input
                                                                class="checkout__input--field border-radius-5"
                                                                placeholder="City"
                                                                id="input11"
                                                                type="text"
                                                                 name="direccionNueva[pais]">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 mb-20">
                                                        <div
                                                            class="checkout__input--list">
                                                            <label
                                                                class="checkout__input--label mb-5"
                                                                for="input12">Postal
                                                                Code <span
                                                                    class="checkout__input--label__star">*</span></label>
                                                            <input
                                                                class="checkout__input--field border-radius-5"
                                                                placeholder="Postal code"
                                                                id="input12"
                                                                type="text"
                                                                 name="direccionNueva[cp]">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </details>
                                        <div class="checkout__checkbox">
                                            <input
                                                class="checkout__checkbox--input"
                                                id="checkbox2" type="checkbox" name="direccionNueva[guardar]" value="true">
                                            <span
                                                class="checkout__checkbox--checkmark"></span>
                                            <label
                                                class="checkout__checkbox--label"
                                                for="checkbox2">
                                                Save this information for next
                                                time</label>
                                        </div>
                                    </div>
                                    <div class="order-notes mb-20">
                                        <label
                                            class="checkout__input--label mb-5"
                                            for="order">Order Notes <span
                                                class="checkout__input--label__star">*</span></label>
                                        <textarea
                                            class="checkout__notes--textarea__field border-radius-5"
                                            id="order"
                                            placeholder="Notes about your order, e.g. special notes for delivery."
                                            spellcheck="false" name="notas"></textarea>
                                    </div>

                                    <div class="checkout__total">
                                        <table class="checkout__total--table">
                                            <tbody
                                                class="checkout__total--body">
                                                <tr
                                                    class="checkout__total--items">
                                                    <td
                                                        class="checkout__total--title text-left">Subtotal
                                                    </td>
                                                    <td
                                                        class="checkout__total--amount text-right">{{$total}}</td>
                                                </tr>
                                                <tr
                                                    class="checkout__total--items">
                                                    <td
                                                        class="checkout__total--title text-left">Shipping</td>
                                                    <td
                                                        class="checkout__total--calculated__text text-right">Calculated
                                                        at next step</td>
                                                </tr>
                                            </tbody>
                                            <tfoot
                                                class="checkout__total--footer">
                                                <tr
                                                    class="checkout__total--footer__items">
                                                    <td
                                                        class="checkout__total--footer__title checkout__total--footer__list text-left">Total
                                                    </td>
                                                    <td
                                                        class="checkout__total--footer__amount checkout__total--footer__list text-right">
                                                        {{$total}}
                                                        <input type="hidden" name="total" value=" {{$total}}"/>
                                                        </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    

                                    <div class="payment__history mb-30">
                                        <h3
                                            class="payment__history--title mb-20">Datos de pago</h3>
                                        <ul
                                            class="payment__history--inner d-flex">
                                            <li
                                                class="payment__history--list">
                                                <div class="payment__history--link primary__btn"
        
                                                    id="mostrarFormulario">
                                                    <label for="metodoPago1">Tarjeta de credito</label>
                                                    <input type="radio" id="metodoPago1" name="metodoPago" value="pagado" style="display:none"/>
                                                </div>
                                                    </li>
                                            <li
                                                class="payment__history--list"><div class="payment__history--link primary__btn"
        
                                                    id="ocultarFormulario">
                                                    <label for="metodoPago2">Contra rembolso</label>
                                                    <input type="radio" id="metodoPago2" name="metodoPago" value="noPagado" style="display:none"/>
                                                </div></li>
                                        </ul>
                                        </div class="col-12">
                                        <div id="formulario"
                                            style="display: none;">
                                            <div
                                                class="col-lg-6 col-md-6 col-sm-6 mb-20">
                                                <div
                                                    class="checkout__input--list">
                                                    <label
                                                        class="checkout__input--label mb-5"
                                                        for="cardName">Nombre en
                                                        la
                                                        tarjeta <span
                                                            class="checkout__input--label__star">*</span></label>
                                                    <input
                                                        class="checkout__input--field border-radius-5"
                                                        placeholder="Nombre tal como aparece en la tarjeta"
                                                        id="cardName"
                                                        type="text"
                                                        name="pago[nombre]">
                                                </div>
                                            </div>
                                            <div
                                                class="col-lg-6 col-md-6 col-sm-6 mb-20">
                                                <div
                                                    class="checkout__input--list">
                                                    <label
                                                        class="checkout__input--label mb-5"
                                                        for="cardNumber">Número
                                                        de
                                                        la tarjeta <span
                                                            class="checkout__input--label__star">*</span></label>
                                                    <input
                                                        class="checkout__input--field border-radius-5"
                                                        placeholder="Número de la tarjeta"
                                                        id="cardNumber"
                                                        type="text"
                                                        name="pago[numero]">
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div
                                                    class="col-lg-3 col-md-3 col-sm-3 mb-20" style="margin-right: 20px;">
                                                    <div
                                                        class="checkout__input--list">
                                                        <label
                                                            class="checkout__input--label mb-5"
                                                            for="expiryDate">Fecha
                                                            de
                                                            vencimiento <span
                                                                class="checkout__input--label__star">*</span>\
                                                        </label>
                                                        <input
                                                            class="checkout__input--field border-radius-5"
                                                            placeholder="MM/AA"
                                                            id="expiryDate"
                                                            type="text"
                                                            name="pago[fecha]">
                                                    </div>
                                                </div>

                                                <div
                                                    class="col-lg-3 col-md-3 col-sm-3 mb-20">
                                                    <div
                                                        class="checkout__input--list">
                                                        <label
                                                            class="checkout__input--label mb-5"
                                                            for="cvv">CVV
                                                            <span
                                                                class="checkout__input--label__star">*</span></label>
                                                        <input
                                                            class="checkout__input--field border-radius-5"
                                                            placeholder="CVV"
                                                            id="cvv"
                                                            type="text"
                                                            name="pago[cvv]">
                                                    </div>
                                                </div>

                                            </div>
                                            </div>

                                            <div
                                                class="checkout__content--step__footer d-flex align-items-center">
                                               <button type="submit continue__shipping--btn primary__btn border-radius-5">Pagar
                                                </a></button> 
                                                <a
                                                    class="previous__link--content"
                                                    href="cart.html">Return to
                                                    cart</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
    </main>
                               <script>
    // Obtener los botones y el formulario
    let botonMostrar = document.getElementById('mostrarFormulario');
    let botonOcultar = document.getElementById('ocultarFormulario');
    let formulario = document.getElementById('formulario');
    
    // Añadir un escuchador de eventos al botón para mostrar el formulario
    botonMostrar.addEventListener('click', function(event) {
        formulario.style.display = 'block';
    });
    
    // Añadir un escuchador de eventos al botón para ocultar el formulario
    botonOcultar.addEventListener('click', function(event) {
        
        formulario.style.display = 'none';
    });
    </script>

@endsection