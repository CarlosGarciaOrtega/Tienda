<div class="account__wrapper" id="administradores-form">
            <div class="account__content">
                <h2 class="account__content--title h3 mb-20">Añadir
                    administrador</h2>
                <div class="account__table--area">
                    <form
                        class="contact__form--inner col-md-8 offset-md-2 mt-5 mb-5"
                        action="#" method="post"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-12">
                                <div class="contact__form--list mb-20">
                                    <label class="contact__form--label"
                                        for="nombre">Nombre</label>
                                    @error('name')
                                    <span>
                                        {{ $message }}
                                    </span>
                                    @enderror
                                    <input class="contact__form--input"
                                        name="name" id="nombre"
                                        placeholder="Nombre"
                                        type="text" value="{{ old('name') }}">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="contact__form--list mb-20">
                                    <label class="contact__form--label"
                                        for="email">Email</label>
                                    @error('email')
                                    <span>
                                        {{ $message }}
                                    </span>
                                    @enderror
                                    <input class="contact__form--input"
                                        name="email" id="email"
                                        placeholder="Email"
                                        type="text" value="{{ old('email') }}">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="contact__form--list mb-20">
                                    <label class="contact__form--label"
                                        for="rol">Rol</label>
                                    @error('rol')
                                    <span>
                                        {{ $message }}
                                    </span>
                                    @enderror
                                    <select class="contact__form--input"
                                        name="rol" id="rol">
                                        <option value="n" hidden selected>Seleccione un rol</option>
                                        <option 
                                            value="administrador">Administrador</option>
                                        <option value="root">Root</option>
                                    </select>

                                </div>
                                <div class="col-12">
                                    <div class="contact__form--list mb-20">
                                        <label class="contact__form--label"
                                            for="password">Contraseña</label>
                                        @error('password')
                                        <span>
                                            {{ $message }}
                                        </span>
                                        @enderror
                                        <input class="contact__form--input"
                                            name="password" id="password"
                                            placeholder="Contraseña"
                                            type="password" value="">
                                    </div>
                                </div>

                                <button class="contact__form--btn primary__btn"
                                    type="submit" id="administrador-bt-submit">
                                    <span>Añadir administrador</span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

