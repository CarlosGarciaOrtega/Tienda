@extends('viewsUser.base')

@section('content')
<div class="login__section section--padding col-4 mx-auto">
            <div class="container">
                <form action="{{route('login')}}" method='POST'>
                    @csrf
                    <div class="login__section--inner">
                        <div class="row row-cols-md-1 row-cols-1">
                            <div class="col">
                                <div class="account__login">
                                    <div class="account__login--header mb-25">
                                        <h2 class="account__login--header__title mb-10">Login</h2>
                                        <p class="account__login--header__desc">Login if you area a returning customer.</p>
                                    </div>
                                    <div class="account__login--inner">
                                        <label>
                                            @error('email')
                                            <span>
                                                {{ $message }}
                                            </span>
                                            @enderror
                                            <input class="account__login--input" placeholder="Email Addres" type="email" name="email" value="{{ old('email') }}">
                                        </label>
                                        <label>
                                             @error('password')
                                            <span>
                                            {{ $message }}
                                            </span>
                                        @enderror
                                            <input class="account__login--input" placeholder="Password" type="password" name="password">
                                        </label>
                                        <div class="account__login--remember__forgot mb-15 d-flex justify-content-between align-items-center">
                                            <div class="account__login--remember position__relative">
                                                <input class="checkout__checkbox--input" id="check1" type="checkbox">
                                                <span class="checkout__checkbox--checkmark"></span>
                                                <label class="checkout__checkbox--label login__remember--label" for="check1">
                                                    Remember me</label>
                                            </div>
                                            <button class="account__login--forgot" type="submit">Forgot Your Password?</button>
                                        </div>
                                        <button class="account__login--btn primary__btn" type="submit">Login</button>
                                        
                                        <p class="account__login--signup__text">Don,t Have an Account? <button type="" ><a href="{{url('register')}}">Registrate</a></button></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>     
        </div>
@endsection
