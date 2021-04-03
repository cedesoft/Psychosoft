<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/login.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@300;600&display=swap" rel="stylesheet">
    <title>Registrar</title>
</head>

<body class="bg-dark">
    <section>
        <div class="row g-0">
            <div class="col-lg-6 d-none d-lg-block">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active min-vh-100 img-r1"></div>
                        <div class="carousel-item min-vh-100 img-r2"></div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <!-- Side form register -->
            <div class="col-lg-6 d-flex flex-column align-items-end min-vh-100">
                <div class="px-lg-5 py-lg-4 p-4 w-100 align-self-center">
                    <h2 class="font-weight-bold mb-4 pt-4">Registrate</h2>
                    <x-jet-validation-errors class="mb-4" />
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row mb-3">
                            <div class="row col-6 me-4">
                                <label for="name" class="form-label font-weight-bold">Nombre</label>
                                <input type="text" class="form-control bg-dark-x border-0" id="name" placeholder="Ingresa tu nombre" name="name" :value="old('name')" required autofocus autocomplete="name" >
                            </div>
                            <div class="row col-6">
                                <label for="lastName" class="form-label font-weight-bold">Apellidos</label>
                                <input type="text" class="form-control bg-dark-x border-0" id="lastName" placeholder="Ingresa tus apellidos" name="lastName" :value="old('lastName')" required autocomplete="lastName" >
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="row col-6 me-3">
                                <label for="exampleInputEmail1" class="form-label font-weight-bold">Correo electronico</label>
                                <input type="email" class="form-control bg-dark-x border-0" id="email" placeholder="Ingresa tu correo" name="email" :value="old('email')" required >
                            </div>

                            <div class="row col-6">
                                <label for="phone" class="form-label font-weight-bold">Telefono</label>
                                <input type="text" class="form-control bg-dark-x border-0" id="phone" placeholder="Ingresa tu numero de teléfono" name="phone" required >
                            </div>
                        </div>
                        <div class="mb-3">
                            <label  for="password" class="form-label font-weight-bold">Contraseña</label>
                            <input type="password" class="form-control bg-dark-x border-0 mb-3"
                                id="password" placeholder="Ingresa tu contraseña" name="password" required autocomplete="new-password" >                            
                        </div>
                        <div class="mb-3">
                            <label  for="password_confirmation" value="" class="form-label font-weight-bold">Confirma tu contraseña</label>
                            <input type="password" class="form-control bg-dark-x border-0 mb-3"
                                id="password_confirmation" placeholder="Confirma tu contraseña" name="password_confirmation" required autocomplete="new-password" >                            
                        </div>
                        <button type="submit" class="btn btn-primary w-100 mt-3">Registrar</button>
                    </form>
                    {{-- @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-4">
                            <x-jet-label for="terms">
                                <div class="flex items-center">
                                    <x-jet-checkbox name="terms" id="terms"/>

                                    <div class="ml-2">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-jet-label>
                        </div>
                    @endif --}}
                </div>
                <div class="text-center px-lg-5 pt-lg-3 pb-lg-3 p-2 w-100">
                    <p class="d-inline-block mb-0">¿Ya tienes una cuenta?</p><a href="{{ route('login') }}"
                        class="text-light font-weight-bold text-decoration-none" style="font-weight: bold;"> Inicia Sesion</a>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
</body>

</html>