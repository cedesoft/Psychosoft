@extends ('adminlte::page')

@section('title', 'Calendario')

@section('content')

    @livewire('h-d-paciente-table')
@stop

@section('css')
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="css/admin_custom.css">
    @livewireStyles
@stop

@section('js')

@livewireScripts
@stop