@extends ('adminlte::page')

@section('title', 'H/D Pacientes')

@section('content')

    @livewire('h-d-paciente-table')
@stop

@section('css')
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="icon" type="image/png" href="fav.png">
    <link rel="stylesheet" href="css/admin_custom.css">
    @livewireStyles
@stop

@section('js')

@livewireScripts
@stop