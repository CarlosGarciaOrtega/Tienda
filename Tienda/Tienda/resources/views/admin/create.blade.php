@extends('admin.base')
@section('content')
<style type="text/css">
    span{
        color: red;
    }
</style>
    <form class="contact__form--inner col-md-8 offset-md-2 mt-5 mb-5" action="{{ url('admin') }}" method="post"
        enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-12">
                <div class="contact__form--list mb-20">
                    <label class="contact__form--label" for="nombre">Nombre</label>
                    @error('nombre')
                        <span>
                            {{ $message }}
                        </span>
                    @enderror
                    <input class="contact__form--input" name="nombre" id="nombre" placeholder="Nombre del producto"
                        type="text" value="{{ old('nombre') }}">
                </div>
            </div>
            <div class="col-12">
                <div class="contact__form--list mb-20">
                    <label class="contact__form--label" for="marca">Marca</label>
                    @error('marca')
                        <span>
                            {{ $message }}
                        </span>
                    @enderror
                    <input class="contact__form--input" name="marca" id="marca" placeholder="Marca del producto"
                        type="text" value="{{ old('marca') }}">
                </div>
            </div>
            <div class="col-12">
                <div class="contact__form--list mb-20">
                    <label class="contact__form--label" for="categoria">Categoría</label>
                    @error('categoria')
                        <span>
                            {{ $message }}
                        </span>
                    @enderror
                    <select class="contact__form--input" name="categoria" id="categoria">
                        <option hidden value="n" <?php echo old('categoria', 'n') == 'n' ? 'selected' : ''; ?>></option>
                        @foreach ($categorias as $index => $categoria)
                            <option value="{{ $index }}" <?php echo old('categoria') == $index ? 'selected' : ''; ?>>{{ $index }}</option>
                        @endforeach
                    </select>

                </div>
                <div class="col-12">
                    <div class="contact__form--list mb-20">
                        <label class="contact__form--label" for="subcategoria">Subcategoría</label>
                        @error('subcategoria')
                            <span>
                                {{ $message }}
                            </span>
                        @enderror
                        <select class="contact__form--input" name="subcategoria" id="subCategoria">

                        </select>
                    </div>
                </div>
                <div class="col-12">
                    <div class="contact__form--list mb-20">
                        <label class="contact__form--label" for="compatibilidad">Compatibilidad</label>
                        @error('compatibilidad')
                            <span>
                                {{ $message }}
                            </span>
                        @enderror
                        <input class="contact__form--input" name="compatibilidad" id="compatibilidad"
                            placeholder="Compatibilidad del producto" type="text" value="{{ old('compatibilidad') }}">
                    </div>
                </div>
                <div class="col-12">
                    <div class="contact__form--list mb-20">
                        <label class="contact__form--label" for="precio">Precio</label>
                        @error('precio')
                            <span>
                                {{ $message }}
                            </span>
                        @enderror
                        <input class="contact__form--input" name="precio" id="precio" placeholder="Precio del producto"
                            type="number" value="{{ old('precio') }}">
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
            </div>
            <div class="col-12">
                <div class="contact__form--list mb-20">
                    <label class="contact__form--label" for="descripcion">Descripción</label>
                    @error('descripcion')
                        <span>
                            {{ $message }}
                        </span>
                    @enderror
                    <textarea class="contact__form--input" name="descripcion" id="descripcion" placeholder="Descripción del producto">
            {{ old('descripcion') }}
        </textarea>
                </div>
            </div>
            <button class="contact__form--btn primary__btn" type="submit">
                <span>Crear</span></button>
    </form>
    

    <script>
        var select = document.getElementById("categoria");
        var categorias = <?php echo json_encode($categorias); ?>;
        if (categorias[select.value] != undefined) creaSelect(categorias[select.value]);

        select.addEventListener("change", function() {

            var selectedOption = this.options[this.selectedIndex].value;
            var subCategorias = categorias[selectedOption];
            creaSelect(subCategorias);

        });


        function creaSelect(categorias) {

            var selectcategorias = document.getElementById('subCategoria');
            var subcategoriaSelected = <?php echo '"' . old('subcategoria', 'default') . '"'; ?>;
            selectcategorias.innerHTML = '';
            var opcionDefecto = document.createElement('option');
            opcionDefecto.text = 'Selecciones una subcategoria';
            opcionDefecto.hidden = true;
            opcionDefecto.selected = 'default' == subcategoriaSelected ? true : false;
            selectcategorias.appendChild(opcionDefecto);



            for (let categoria of categorias) {

                var opcion = document.createElement('option');
                opcion.value = categoria;
                opcion.text = categoria;
                opcion.selected = categoria == subcategoriaSelected ? true : false;
                selectcategorias.appendChild(opcion);
            }

        }
        
        
        
 
    </script>
@endsection
