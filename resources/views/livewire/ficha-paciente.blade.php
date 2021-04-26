<div>
    <form wire:submit.prevent='submit' class="row g-3" autocomplete="off">
        @if (session()->has('success'))
        @endif
        <div class="col-lg-3 col-md-4">
            @error('nombre')
                    <span style="color: red;font-size:10px;">{{ $message }}</span>
            @enderror
            <div class="form-label-group in-border">
                <input type="text" name="nombre" class="form-control lb2" placeholder="Nombre del Paciente" wire:model='nombre'/>
                <label for="nombre" class="lbl">Nombre del Paciente</label>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
            @error('apellidos')
                <span style="color: red;font-size:10px;">{{ $message }}</span>
            @enderror
            <div class="form-label-group in-border">
                
                <input type="text" name="apellidos" class="form-control lb2" placeholder="Apellidos" wire:model='apellidos' />
                <label for="apellidos" class="lbl">Apellidos</label>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
            @error('domicilio')
                    <span style="color: red;font-size:10px;">{{ $message }}</span>
            @enderror
            <div class="form-label-group in-border">
                <input type="text" name="domicilio" class="form-control lb2" placeholder="Domicilio" wire:model='domicilio' />
                <label for="domicilio" class="lbl">Domicilio</label>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
            @error('nacimiento')
                    <span style="color: red;font-size:10px;">{{ $message }}</span>
            @enderror
            <div class="form-label-group in-border">
                <input type="text" name="nacimiento" class="form-control lb2" placeholder="Fecha Nacimiento" wire:model='nacimiento' />
                <label for="nacimiento" class="lbl">Fecha Nacimiento</label>
            </div>
        </div>

        <div class="col-lg-1 col-md-4 col-sm-12">
            @error('edad')
                    <span style="color: red;font-size:10px;">{{ $message }}</span>
            @enderror
            <div class="form-label-group in-border">
                <input type="text" name="edad" pattern="[0-9]{2}" class="form-control lb2" placeholder="Edad" wire:model='edad' />
                <label for="edad" class="lbl">Edad</label>
            </div>
        </div>
        <div class="col-lg-2 col-md-4">
            @error('telefono')
                    <span style="color: red;font-size:10px;">{{ $message }}</span>
            @enderror
            <div class="form-label-group in-border">
                <input type="tel" maxlength="10" minlength="10" pattern="[0-9]{10}" name="telefono" class="form-control lb2" placeholder="Teléfono" wire:model='telefono' />
                <label for="telefono" class="lbl">Teléfono</label>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
            @error('escolaridad')
                <span style="color: red;font-size:10px;">{{ $message }}</span>
            @enderror
            <div class="form-label-group in-border">
				<select name="escolaridad" class="custom-select form-control" wire:model='escolaridad'>
					<option selected>Seleccione una opcion...</option>
                    <option value="Preescolar">Preescolar</option>
                    <option value="Primaria">Primaria</option>
                    <option value="Secundaria">Secundaria</option>
                    <option value="Preparatoria">Preparatoria</option>
                    <option value="Licenciatura">Licenciatura</option>
                    <option value="Doctorado">Doctorado</option>
                    <option value="Ninguna">Ninguno</option>
				</select>
				<label for="escolaridad" class="lbl_1">Escolaridad</label>
			</div>
        </div>
        <div class="col-lg-3 col-md-4">
            @error('ocupacion')
                <span style="color: red;font-size:10px;">{{ $message }}</span>
            @enderror
            <div class="form-label-group in-border">
                <input type="text" maxlength="10" minlength="10" name="ocupacion" class="form-control lb2" placeholder="Ocupación" wire:model='ocupacion' />
                <label for="ocupacion" class="lbl">Ocupación</label>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
            @error('estado_civil')
                <span style="color: red;font-size:10px;">{{ $message }}</span>
            @enderror
            <div class="form-label-group in-border">
				<select name="edoCivil" class="custom-select form-control" wire:model='estado_civil' >
					<option selected>Seleccione una opcion...</option>
                    <option value="Soltero(a)">Soltero(a)</option>
                    <option value="Divociado(a)">Divociado(a)</option>
                    <option value="Viudo(a)">Viudo(a)</option>
                    <option value="Casado(a)">Casado(a)</option>
                </select>
                <label for="edoCivil" class="lbl_1">Estado Civil</label>
			</div>
        </div>
        <div class="col-lg-2 col-md-4">
            @error('religion')
                <span style="color: red;font-size:10px;">{{ $message }}</span>
            @enderror
            <div class="form-label-group in-border">
                <input type="text" name="religion" class="form-control lb2" placeholder="Religión" wire:model='religion' />
                <label for="religion" class="lbl">Religión</label>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
            @error('adicciones')
                <span style="color: red;font-size:10px;">{{ $message }}</span>
            @enderror
            <div class="form-label-group in-border">
                <input type="text" name="adicciones" class="form-control lb2" placeholder="Adicciones (Opcional)" wire:model='adicciones' />
                <label for="adicciones" class="lbl">Adicciones</label>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
            @error('vive_con')
                <span style="color: red;font-size:10px;">{{ $message }}</span>
            @enderror
            <div class="form-label-group in-border">
                <input type="text" name="viveCon" class="form-control lb2" placeholder="Personas con quien vive" wire:model='vive_con' />
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