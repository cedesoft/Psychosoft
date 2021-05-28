@extends ('adminlte::page')

@section('title', 'Editar Pacientes')

@section('content')
    @livewire('edit-paciente-table')
@stop

@section('css')
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">    
    <link rel="icon" type="image/png" href="fav.png">
    <link rel="stylesheet" href="css/admin_custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    @livewireStyles
@stop

@section('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
@livewireScripts
<script>
    window.addEventListener('closeModal', event => {
        $('#modalForm').modal('hide');
    })
    window.addEventListener('closeModal2', event => {
        $('#modalForm2').modal('hide');
    })
</script>
@stop