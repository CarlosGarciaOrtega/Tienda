@extends('admin.base')
@section('content')
<form class="contact__form--inner col-md-8 offset-md-2 mt-5 mb-5"
    action="{{url('admin/'.$producto->id)}}" method="post">
    @csrf
    @method('put')
    <div class="row">
        <div class="col-12">
            <div class="contact__form--list mb-20">
                <label class="contact__form--label"
                    for="nombre">Nombre</label>
                     @error('nombre')
                        <span>
                            {{ $message }}
                        </span>
                    @enderror
                <input class="contact__form--input" name="nombre"
                    id="nombre" placeholder="Nombre del producto"
                    type="text" value="{{ old('nombre', $producto->nombre) }}">
            </div>
        </div>
        <div class="col-12">
            <div class="contact__form--list mb-20">
                <label class="contact__form--label"
                    for="marca">Marca</label>
                    @error('marca')
                        <span>
                            {{ $message }}
                        </span>
                    @enderror
                <input class="contact__form--input" name="marca"
                    id="marca" placeholder="Marca del producto"
                    type="text" value="{{ old('marca', $producto->marca) }}">
            </div>
        </div>
        <div class="col-12">
            <div class="contact__form--list mb-20">
                <label class="contact__form--label"
                    for="categoria">Categoría</label>
                     @error('categoria')
                        <span>
                            {{ $message }}
                        </span>
                    @enderror
                <input class="contact__form--input" name="categoria"
                    id="categoria" placeholder="Categoría del producto"
                    type="text" value="{{ old('categoria', $producto->categoria) }}">
            </div>
        </div>
        <div class="col-12">
            <div class="contact__form--list mb-20">
                <label class="contact__form--label"
                    for="subcategoria">Subcategoría</label>
                    @error('subcategoria')
                            <span>
                                {{ $message }}
                            </span>
                        @enderror
                <input class="contact__form--input" name="subcategoria"
                    id="subcategoria" placeholder="Subcategoría del producto"
                    type="text" value="{{ old('subcategoria', $producto->subcategoria) }}">
            </div>
        </div>
        <div class="col-12">
            <div class="contact__form--list mb-20">
                <label class="contact__form--label"
                    for="compatibilidad">Compatibilidad</label>
                <input class="contact__form--input" name="compatibilidad"
                    id="compatibilidad" placeholder="Compatibilidad del producto"
                    type="text" value="{{ old('compatibilidad', $producto->compatibilidad) }}">
            </div>
        </div>
        <div class="col-12">
            <div class="contact__form--list mb-20">
                <label class="contact__form--label"
                    for="precio">Precio</label>
                      @error('precio')
                            <span>
                                {{ $message }}
                            </span>
                        @enderror
                <input class="contact__form--input" name="precio"
                    id="precio" placeholder="Precio del producto"
                    type="number" value="{{ old('precio', $producto->precio) }}">
            </div>
        </div>
        <div class="col-12">
                    <div class="contact__form--list mb-20">
                        <label class="contact__form--label" for="rutaimg">Imagen del producto</label>
                        @error('rutaimg')
                            <span>
                                {{ $message }}
                            </span>
                        @enderror
                        <input class="contact__form--input" id="rutaimg" name="rutaimg" type="file">
                    </div>
                </div>
        <div class="col-12">
            <div class="contact__form--list mb-20">
                <label class="contact__form--label"
                    for="descripcion">Descripción</label>
                    @error('descripcion')
                        <span>
                            {{ $message }}
                        </span>
                    @enderror
                <textarea class="contact__form--input" name="descripcion"
                    id="descripcion" placeholder="Descripción del producto">
                    {{ old('descripcion', $producto->descripcion) }}
                </textarea>
            </div>
        </div>
    </div>
    <button class="contact__form--btn primary__btn" type="submit">
        <span>Edit</span></button>
</form>
@endsection