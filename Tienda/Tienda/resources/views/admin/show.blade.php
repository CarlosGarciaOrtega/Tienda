@extends('admin.base')
@section('content')
<section class="product__details--section section--padding">
    <div class="container">
        <div class="row row-cols-lg-2 row-cols-md-2">
            <div class="col">
                <div class="product__details--media">
                    <div class="single__product--preview  swiper mb-25">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="product__media--preview__items">
                                    <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" href="data:image/jpeg;base64,{{ $producto->imagen }}">
                                        <img class="product__media--preview__items--img" src = "{{url('productos/'.$producto->rutaimg)  }}" alt="product-media-img"></a>
                                   
                                </div>
                            </div>
                           
                            
                        </div>
                    </div>
                    
                </div>
            </div>   
            <div class="col">
                <div class="product__details--info">
                    <form action="#">
                        <h2 class="product__details--info__title mb-15">{{$producto->nombre}}</h2>
                        <div class="product__details--info__price mb-12">
                            <span class="current__price">{{$producto->precio}}</span>
                            
                        </div>
                        <ul class="rating product__card--rating mb-15 d-flex">
                            <li class="rating__list">
                                <span class="rating__icon">
                                    <svg width="14" height="13" viewbox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </li>
                            <li class="rating__list">
                                <span class="rating__icon">
                                    <svg width="14" height="13" viewbox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </li>
                            <li class="rating__list">
                                <span class="rating__icon">
                                    <svg width="14" height="13" viewbox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </li>
                            <li class="rating__list">
                                <span class="rating__icon"> 
                                    <svg width="14" height="13" viewbox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.4141 4.53125L8.99219 4.03906L7.44531 0.921875C7.1875 0.382812 6.39062 0.359375 6.10938 0.921875L4.58594 4.03906L1.14062 4.53125C0.53125 4.625 0.296875 5.375 0.742188 5.82031L3.20312 8.23438L2.61719 11.6328C2.52344 12.2422 3.17969 12.7109 3.71875 12.4297L6.78906 10.8125L9.83594 12.4297C10.375 12.7109 11.0312 12.2422 10.9375 11.6328L10.3516 8.23438L12.8125 5.82031C13.2578 5.375 13.0234 4.625 12.4141 4.53125ZM9.53125 7.95312L10.1875 11.75L6.78906 9.96875L3.36719 11.75L4.02344 7.95312L1.25781 5.28125L5.07812 4.71875L6.78906 1.25L8.47656 4.71875L12.2969 5.28125L9.53125 7.95312Z" fill="currentColor"></path>
                                     </svg>
                                </span>
                            </li>
                            <li class="rating__list">
                                <span class="rating__icon"> 
                                    <svg width="14" height="13" viewbox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.4141 4.53125L8.99219 4.03906L7.44531 0.921875C7.1875 0.382812 6.39062 0.359375 6.10938 0.921875L4.58594 4.03906L1.14062 4.53125C0.53125 4.625 0.296875 5.375 0.742188 5.82031L3.20312 8.23438L2.61719 11.6328C2.52344 12.2422 3.17969 12.7109 3.71875 12.4297L6.78906 10.8125L9.83594 12.4297C10.375 12.7109 11.0312 12.2422 10.9375 11.6328L10.3516 8.23438L12.8125 5.82031C13.2578 5.375 13.0234 4.625 12.4141 4.53125ZM9.53125 7.95312L10.1875 11.75L6.78906 9.96875L3.36719 11.75L4.02344 7.95312L1.25781 5.28125L5.07812 4.71875L6.78906 1.25L8.47656 4.71875L12.2969 5.28125L9.53125 7.95312Z" fill="currentColor"></path>
                                     </svg>
                                </span>
                            </li>
                            <li>
                                <span class="rating__review--text">(126) Review</span>
                            </li>
                        </ul>
                        <p class="product__details--info__desc mb-15">{{$producto->descripcion}}</p>
                        <p class="product__details--info__desc mb-15">{{$producto->imagen}}</p>
                        <p class="product__details--info__desc mb-15">{{$producto->descripcion}}</p>
                        <p class="product__details--info__desc mb-15">{{$producto->descripcion}}</p>
                        <div class="product__variant">
                            <div class="product__variant--list quantity d-flex align-items-center mb-20">
                                <a class="primary__btn quickview__cart--btn" type="submit">Editar</a>  
                            
                                <a class="primary__btn quickview__cart--btn" type="submit">Eliminar</a>  
                            </div>
                            
                        </div>
    
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection