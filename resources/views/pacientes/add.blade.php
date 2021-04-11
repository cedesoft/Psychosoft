@extends ('adminlte::page')

@section('title', 'Calendario')

@section('content')
<div class="bg-white pt-1 pe-2 ps-2 pb-1 rounded-3">
    <div class="card border-light mt-2" style="border-radius: 18px;">
		<div class="card-header text-white font-weight-bold" style="border-radius: 18px 18px 0px 0px; background-color: #1a5767; border-bottom: none;">
			Ficha de Identificación
		</div>
      	<div class="card-body">
			@livewire('ficha-paciente')
		</div>
	</div>
	<hr class="bg-primary">
	<div class="card border-light mt-2" style="border-radius: 20px;">
		<div class="card-header text-white font-weight-bold" style="border-radius: 18px 18px 0px 0px; background-color: #244b82; border-bottom: none;">
			Expediente Médico
		</div>
      	<div class="card-body">
			@livewire('expediente-medico')
		</div>
	</div>
</div>
@stop

@section('css')

    <link rel="stylesheet" href="css/admin_custom.css">
	<link rel="stylesheet" href={{ asset('css/floating-labels.css') }}>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
	  integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ mix('css/app.css') }}">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
		integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		@livewireStyles
	
@stop

@section('js')
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
@livewireScripts
@stop