@extends ('adminlte::page')

@section('title', 'Calendario')

@section('content')
<div class="bg-white pt-1 pe-2 ps-2 pb-1 rounded-3">
    <div class="card border-dark mt-2" style="border-radius: 20px;">
		<div class="card-header bg-primary"  style="border-radius: 15px;">
			Ficha de Identificación
		</div>
      	<div class="card-body">
			<form class="row g-3">
				<div class="col-lg-3 col-md-4">
					<div class="form-label-group in-border">
						<input type="text" name="nombre" class="form-control lb2" placeholder="Nombre" />
						<label for="nombre" class="lbl">Nombre del Paciente</label>
					</div>
				</div>
				<div class="col-lg-3 col-md-4">
					<div class="form-label-group in-border">
						<input type="text" name="apellidos" class="form-control lb2" placeholder="Apellidos" />
						<label for="apellidos" class="lbl">Apellidos</label>
					</div>
				</div>
				<div class="col-lg-3 col-md-4">
					<div class="form-label-group in-border">
						<input type="text" name="domicilio" class="form-control lb2" placeholder="Domicilio" />
						<label for="domicilio" class="lbl">Domicilio</label>
					</div>
				</div>
				<div class="col-lg-3 col-md-4">
					<div class="form-label-group in-border">
						<input type="text" name="nacimiento" class="form-control lb2" placeholder="Fecha de Nacimiento" />
						<label for="nacimiento" class="lbl">Fecha Nacimiento</label>
					</div>
				</div>

				<div class="col-lg-1 col-md-4 col-sm-12">
					<div class="form-label-group in-border">
						<input type="number" min="1" max="99" name="edad" class="form-control lb2" placeholder="Edad" />
						<label for="edad" class="lbl">Edad</label>
					</div>
				</div>
				<div class="col-lg-2 col-md-4">
					<div class="form-label-group in-border">
						<input type="tel" maxlength="10" minlength="10" name="telefono" class="form-control lb2" placeholder="Teléfono" />
						<label for="telefono" class="lbl">Teléfono</label>
					</div>
				</div>
				<div class="form-label-group in-border col-lg-3 col-md-4">
					<select name="escolaridad" class="custom-select">
						<option selected>Seleccione una opcion...</option>
						<option value="Preescolar">Preescolar</option>
						<option value="Primaria">Primaria</option>
						<option value="Secundaria">Secundaria</option>
						<option value="Preparatoria">Preparatoria</option>
						<option value="Licenciatura">Licenciatura</option>
						<option value="Doctorado">Doctorado</option>
						<option value="Ninguno">Ninguno</option>
					</select>
					<label for="escolaridad" class="lbl">Escolaridad</label>
				</div>
				<div class="col-lg-3 col-md-4">
					<div class="form-label-group in-border">
						<input type="text" maxlength="10" minlength="10" name="ocupacion" class="form-control lb2" placeholder="Ocupación" />
						<label for="ocupacion" class="lbl">Ocupación</label>
					</div>
				</div>
				<div class="form-label-group in-border col-lg-3 col-md-4">
					<select name="escolaridad" class="custom-select">
						<option selected>Seleccione una opcion...</option>
						<option value="Preescolar">Soltero(a)</option>
						<option value="Primaria">Divociado(a)</option>
						<option value="Secundaria">Viudo(a)</option>
						<option value="Secundaria">Casado(a)</option>
					</select>
					<label for="escolaridad" class="lbl">Estado Civil</label>
				</div>
				<div class="col-lg-2 col-md-4">
					<div class="form-label-group in-border">
						<input type="text" name="religion" class="form-control lb2" placeholder="Religión" />
						<label for="religion" class="lbl">Religión</label>
					</div>
				</div>
				<div class="col-lg-3 col-md-4">
					<div class="form-label-group in-border">
						<input type="text" name="adicciones" class="form-control lb2" placeholder="Adicciones" />
						<label for="adicciones" class="lbl">Adicciones (Opcional)</label>
					</div>
				</div>
				<div class="col-lg-3 col-md-4">
					<div class="form-label-group in-border">
						<input type="text" name="viveCon" class="form-control lb2" placeholder="Personas con quien vive" />
						<label for="viveCon" class="lbl">Personas con quien vive</label>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<button type="submit" class="btn btn-primary w-100" style="border-radius: 20px;">Guardar</button>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<button type="reset" class="btn btn-dark w-100" style="border-radius: 20px;">Cancelar</button>
				</div>
			</form>
		</div>
	</div>
	<hr class="bg-primary">
	<div class="card border-dark mt-2" style="border-radius: 20px;">
		<div class="card-header bg-purple" style="border-radius: 15px;">
			Expediente Médico
		</div>
      	<div class="card-body">
			<form class="row g-3">
				<div class="col-lg-3 col-md-5">
					<div class="form-label-group in-border">
						<textarea rows="3" name="motivoConsulta" class="form-control lbl_2" placeholder="Motivo de la consulta"></textarea>
						<label for="motivoConsulta" class="lbl_1">Motivo de la consulta</label>
					</div>
				</div>
				<div class="col-lg-3 col-md-7">
					<div class="form-label-group in-border">
						<textarea rows="3" name="problemaActual" class="form-control lbl_2" placeholder="Problema actual"></textarea>
						<label for="problemaActual" class="lbl_1">Problema actual</label>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="form-label-group in-border">
						<textarea rows="3" name="sintomatologia" class="form-control lbl_2" placeholder="Cronología de la sintomatología"></textarea>
						<label for="sintomatologia" class="lbl_1">Cronología de la sintomatología</label>
					</div>
				</div>
				<div class="col-lg-5 col-md-6">
					<div class="form-label-group in-border">
						<textarea rows="3" name="tratamientosPrev" class="form-control lbl_2" placeholder="Tratamientos previos"></textarea>
						<label for="tratamientosPrev" class="lbl_1">Tratamientos previos</label>
					</div>
				</div>
				<div class="col-lg-7 col-md-6">
					<div class="form-label-group in-border">
						<textarea rows="3" name="diagnostico" class="form-control lbl_2" placeholder="Diagnóstico"></textarea>
						<label for="diagnostico" class="lbl_1">Diagnóstico</label>
					</div>
				</div>


				
				<div class="col-lg-4 col-md-6">
					<div class="form-label-group in-border">
						<textarea rows="3" name="histFamiliar" class="form-control lbl_2" placeholder="Historia familiar"></textarea>
						<label for="histFamiliar" class="lbl_1">Historia familiar</label>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6">
					<div class="form-label-group in-border">
						<textarea rows="3" name="relSentSex" class="form-control lbl_2" placeholder="Relaciones sentimentales y/o sexuales"></textarea>
						<label for="relSentSex" class="lbl_1">Relaciones sentimentales y/o sexuales</label>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6">
					<div class="form-label-group in-border">
						<textarea rows="3" name="autoestima" class="form-control lbl_2" placeholder="Autoestima"></textarea>
						<label for="autoestima" class="lbl_1">Autoestima</label>
					</div>
				</div>
				
				<div class="col-lg-12 col-md-6">
					<div class="form-label-group in-border">
						<textarea rows="3" name="obsGenerales" class="form-control" placeholder="Observaciones generales"></textarea>
						<label for="obsGenerales" class="lbl_1">Observaciones Generales</label>
					</div>
				</div>
				<div class="form-group m-0">
					<button type="reset" class="btn btn-dark float-right ms-3 col-2" style="border-radius: 20px;">
						Cancelar
					</button>
					<button type="submit" class="btn btn-primary float-right col-2" style="border-radius: 20px;">
						Guardar
					</button>
				</div>
			</form>
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
	@livewireStyles
    
@stop

@section('js')
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
@stop