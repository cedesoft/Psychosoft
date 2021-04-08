<div>
    <link rel="stylesheet" href="css/admin_custom.css">
	<link rel="stylesheet" href={{ asset('css/floating-labels.css') }}>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
	  integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <form wire:submit.prevent='submit' class="row g-3">
        <div class="col-lg-3 col-md-4">
            <div class="form-label-group in-border">
                @error('nombre')
                    <span style="color: red;font-size:10px;">{{ $message }}</span>
                @enderror

                <input type="text" name="nombre" class="form-control lb2" wire:model='nombre' />
                <label for="nombre" class="lbl">Nombre del Paciente</label>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
            <div class="form-label-group in-border">
                @error('apellidos')
                    <span style="color: red;font-size:10px;">{{ $message }}</span>
                @enderror
                
                <input type="text" name="apellidos" class="form-control lb2" wire:model='apellidos' />
                <label for="apellidos" class="lbl">Apellidos</label>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
            <div class="form-label-group in-border">
                @error('domicilio')
                    <span style="color: red;font-size:10px;">{{ $message }}</span>
                @enderror
                <input type="text" name="domicilio" class="form-control lb2" wire:model='domicilio' />
                <label for="domicilio" class="lbl">Domicilio</label>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
            <div class="form-label-group in-border">
                @error('nacimiento')
                    <span style="color: red;font-size:10px;">{{ $message }}</span>
                @enderror
                <input type="text" name="nacimiento" class="form-control lb2" wire:model='nacimiento' />
                <label for="nacimiento" class="lbl">Fecha Nacimiento</label>
            </div>
        </div>

        <div class="col-lg-1 col-md-4 col-sm-12">
            <div class="form-label-group in-border">
                @error('edad')
                    <span style="color: red;font-size:10px;">{{ $message }}</span>
                @enderror
                <input type="number" min="1" max="99" name="edad" class="form-control lb2" wire:model='edad' />
                <label for="edad" class="lbl">Edad</label>
            </div>
        </div>
        <div class="col-lg-2 col-md-4">
            <div class="form-label-group in-border">
                @error('telefono')
                    <span style="color: red;font-size:10px;">{{ $message }}</span>
                @enderror
                <input type="tel" maxlength="10" minlength="10" name="telefono" class="form-control lb2" wire:model='telefono' />
                <label for="telefono" class="lbl">Teléfono</label>
            </div>
        </div>
        <div class="form-label-group in-border col-lg-3 col-md-4">
            @error('escolaridad')
                <span style="color: red;font-size:10px;">{{ $message }}</span>
            @enderror
            <select name="escolaridad" class="custom-select" wire:model='escolaridad'>
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
                @error('ocupacion')
                    <span style="color: red;font-size:10px;">{{ $message }}</span>
                @enderror
                <input type="text" maxlength="10" minlength="10" name="ocupacion" class="form-control lb2" wire:model='ocupacion' />
                <label for="ocupacion" class="lbl">Ocupación</label>
            </div>
        </div>
        <div class="form-label-group in-border col-lg-3 col-md-4">
            @error('estado_civil')
                <span style="color: red;font-size:10px;">{{ $message }}</span>
            @enderror
            <select name="edoCivil" class="custom-select" wire:model='estado_civil' >
                <option selected>Seleccione una opcion...</option>
                <option value="Preescolar">Soltero(a)</option>
                <option value="Primaria">Divociado(a)</option>
                <option value="Secundaria">Viudo(a)</option>
                <option value="Secundaria">Casado(a)</option>
            </select>
            <label for="edoCivil" class="lbl">Estado Civil</label>
        </div>
        <div class="col-lg-2 col-md-4">
            <div class="form-label-group in-border">
                @error('religion')
                    <span style="color: red;font-size:10px;">{{ $message }}</span>
                @enderror
                <input type="text" name="religion" class="form-control lb2" wire:model='religion' />
                <label for="religion" class="lbl">Religión</label>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
            <div class="form-label-group in-border">
                @error('adicciones')
                    <span style="color: red;font-size:10px;">{{ $message }}</span>
                @enderror
                <input type="text" name="adicciones" class="form-control lb2" wire:model='adicciones' />
                <label for="adicciones" class="lbl">Adicciones (Opcional)</label>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
            <div class="form-label-group in-border">
                @error('vive_con')
                    <span style="color: red;font-size:10px;">{{ $message }}</span>
                @enderror
                <input type="text" name="viveCon" class="form-control lb2" wire:model='vive_con' />
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