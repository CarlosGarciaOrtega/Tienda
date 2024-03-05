@extends('viewsUser.base')

@section('content')
<div class="login__section section--padding col-4 mx-auto">
            <div class="container">
                <form action="{{route('register')}}" method="POST">
                     @csrf
                    <div class="login__section--inner">
                        <div class="row row-cols-md-1 row-cols-1">
                            <div class="col">
                                <div class="account__login register">
                                    <div class="account__login--header mb-25">
                                        <h2 class="account__login--header__title mb-10">Create an Account</h2>
                                        <p class="account__login--header__desc">Register here if you are a new customer</p>
                                    </div>
                                    <div class="account__login--inner">
                                        <label>
                                            @error('name')
                                                <span>
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                            <input class="account__login--input" placeholder="Username" name="name" value="{{ old('name') }}" type="text">
                                        </label>
                                        
                                        <label>
                                            
                                        @error('email')
                                            <span>
                                                {{ $message }}
                                            </span>
                                        @enderror
                                        <input class="account__login--input" placeholder="Email Addres" name="email" value="{{ old('email') }}" type="email">
                                        </label>
                                        <label>
                                            @error('password')
                                            <span>
                                            {{ $message }}
                                            </span>
                                        @enderror
                                            <input class="account__login--input" placeholder="Password" type="password"  name="password">
                                        </label>
                                        
                                        <label>
                                             @error('password_confirmation')
                                            <span>
                                            {{ $message }}
                                            </span>
                                        @enderror
                                            <input class="account__login--input" placeholder="Confirm Password" type="password" name="password_confirmation">
                                        </label>
                                        <button class="account__login--btn primary__btn mb-10" type="submit">Submit & Register</button>
                                        <div class="account__login--remember position__relative">
                                            <input class="checkout__checkbox--input" id="check2" type="checkbox">
                                            <span class="checkout__checkbox--checkmark"></span>
                                            <label class="checkout__checkbox--label login__remember--label" for="check2">
                                                I have read and agree to the terms & conditions</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>     
        </div>
@endsection