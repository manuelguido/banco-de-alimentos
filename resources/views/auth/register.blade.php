@extends('layouts.app')

@include('components.header_basic')

@include('components.nav')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card my-5">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-5 text-center">
                                <img src="{{ asset('img/login.png') }}" class="donate-image uns">
                                <h3 class="my-2">¿Ya tienes una cuenta?</h3>
                                <a class="link" href="{{ route('login') }}">
                                    {{ __('Inicia sesión') }}
                                </a>
                            </div>
                            <div class="col-md-7 register-form">
                                <h1 class="p-4">Registrarse como donante</h1>    
                                <form method="POST" action="{{ route('register') }}" class="px-4">
                                    @csrf
                                    <!-- Nombre de la empresa -->
                                    <div class="form-group row">
                                        <div class="col-md-10">
                                            <label for="company-name" class="req-tooltip">Nombre de la empresa @include('components.required_tool')</label>

                                            <input id="company-name" type="text" class="form-control @error('company-name') is-invalid @enderror" name="company-name" value="{{ old('company-name') }}" required autocomplete="company-name" autofocus>

                                            @error('company-name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- CUIT -->
                                    <div class="form-group row">
                                        <div class="col-md-10">
                                            <label for="company-cuit" class="req-tooltip">CUIT @include('components.required_tool')</label>

                                            <input id="company-cuit" type="number" class="form-control @error('company-cuit') is-invalid @enderror" name="company-cuit" value="{{ old('company-cuit') }}" required autocomplete="company-cuit" autofocus>

                                            @error('company-cuit')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Numero de telefono -->
                                    <div class="form-group row">
                                        <div class="col-md-10">
                                            <label for="company-phone" class="req-tooltip">Número de teléfono @include('components.required_tool')</label>

                                            <input id="company-phone" type="number" class="form-control @error('company-phone') is-invalid @enderror" name="company-phone" value="{{ old('company-phone') }}" required autocomplete="company-phone" autofocus>

                                            @error('company-phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Dirección -->
                                    <h3 class="mt-5 py-3">Direccion</h3>
                                    <!-- Calle y numero -->
                                    <div class="form-group row">
                                        <!-- Calle -->
                                        <div class="col-md-6">
                                            <label for="address-street" class="req-tooltip">Calle @include('components.required_tool')</label>

                                            <input id="address-street" type="text" class="form-control @error('address-street') is-invalid @enderror" name="address-street" value="{{ old('address-street') }}" required autocomplete="address-street" autofocus>

                                            @error('address-street')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <!-- Numero -->
                                        <div class="col-md-4">
                                            <label for="address-number" class="req-tooltip">Número @include('components.required_tool')</label>

                                            <input id="address-number" type="number" class="form-control @error('address-number') is-invalid @enderror" name="address-number" value="{{ old('address-number') }}" required autocomplete="address-number" autofocus>

                                            @error('address-number')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Piso y depto -->
                                    <div class="form-group row">
                                        <!-- Piso -->
                                        <div class="col-md-4">
                                            <label for="address-floor">Piso</label>

                                            <input id="address-floor" type="number" class="form-control @error('address-floor') is-invalid @enderror" name="address-floor" value="{{ old('address-floor') }}" autocomplete="address-floor" autofocus>

                                            @error('address-floor')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <!-- Depto -->
                                        <div class="col-md-4">
                                            <label for="address-apartment">Depto</label>

                                            <input id="address-apartment" type="text" class="form-control @error('address-apartment') is-invalid @enderror" name="address-apartment" value="{{ old('address-apartment') }}" autocomplete="address-apartment" autofocus>

                                            @error('address-apartment')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                               

                                    <!-- Persona responsable -->
                                    <h3 class="mt-5 py-3">Persona responsable</h3>
                                    <!-- Nombre y apellido -->
                                    <div class="form-group row">
                                        <div class="col-md-10">
                                            <label for="name" class="req-tooltip">Ingresar nombre y apellido @include('components.required_tool')</label>

                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- DNI -->
                                    <div class="form-group row">
                                        <div class="col-md-8">
                                            <label for="dni" class="req-tooltip">DNI (Documento Nacional de Identidad) @include('components.required_tool')</label>
                                            
                                            <input id="dni" type="number" class="form-control @error('dni') is-invalid @enderror" name="dni" value="{{ old('dni') }}" required autocomplete="dni" autofocus>

                                            @error('dni')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Numero de telefono -->
                                    <div class="form-group row">
                                        <div class="col-md-8">
                                            <label for="phone" class="req-tooltip">Número de teléfono @include('components.required_tool')</label>

                                            <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                                            @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Email -->
                                    <div class="form-group row">
                                        <div class="col-md-8">
                                            <label for="email" class="req-tooltip">Email @include('components.required_tool')</label>
                                            
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Contraseña -->
                                    <div class="form-group row pt-5">
                                        <div class="col-md-10">
                                            <label for="password" class="req-tooltip">Ingrese la nueva contraseña @include('components.required_tool')</label>

                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Repetir contraseña -->
                                    <div class="form-group row">
                                        <div class="col-md-10">
                                            <label for="password-confirm" class="req-tooltip">Repita la nueva contraseña @include('components.required_tool')</label>

                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>

                                    <!-- Botones -->
                                    <div class="form-group row pt-5 mb-0">
                                        <div class="col-md-6 text-left">
                                            <button type="button" class="btn btn-outline-danger btn-n m-0" data-toggle="modal" data-target="#cancelRegisterModal">
                                                Cancelar
                                            </button>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <button type="submit" class="btn btn-primary m-0">
                                                {{ __('Regístrate') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal cancelar registro -->
    @include('components.modal', [
        'modal_id' => 'cancelRegisterModal',
        'mainTitle' => "Está seguro que desea cancelar su registro?",
        'mainIcon' => 'fas fa-exclamation-triangle',
        'mainContent' => "Si cancela el registro ahora, los datos que ha ingresado hasta el momento se perderán.",
        'cancelLink' => '/',
        'cancel' => "Si, volver al inicio",
        'accept' => "No, seguir aquí",
    ])

@endsection