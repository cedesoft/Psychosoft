<div>
    <div class="p-2">
        @if ($paciente == null)
    <div class="d-flex align-items-center">
        <strong>Cargando...</strong>
        <div class="spinner-border ms-auto" role="status" aria-hidden="true"></div>
      </div>
    @else
        <form wire:submit.prevent='submit' class="row g-3" autocomplete="off">
            @if (session()->has('success'))
            @endif
            <div class="col-md-4">
                @error('nombre')
                <span style="color: red;font-size:10px;">{{ $message }}</span>
                @enderror
                <div class="form-label-group in-border">
                    <label for="nombre" class="form-label">Nombre del Paciente</label>
                    <input type="text" name="nombre" class="form-control"
                        wire:model='nombre' placeholder="{{$paciente->nombre }}"/>
                </div>
            </div>
            <div class="col-md-4">
                @error('apellidos')
                <span style="color: red;font-size:10px;">{{ $message }}</span>
                @enderror
                <div class="form-label-group in-border">
                    <label for="apellidos" class="form-label">Apellidos</label>
                    <input type="text" name="apellidos" class="form-control"
                        wire:model='apellidos' placeholder="{{ $paciente->apellidos }}"/>
                </div>
            </div>
            <div class="col-md-4">
                @error('domicilio')
                <span style="color: red;font-size:10px;">{{ $message }}</span>
                @enderror
                <div class="form-label-group in-border">
                    <label for="domicilio" class="form-label">Domicilio</label>
                    <input type="text" name="domicilio" class="form-control"
                        wire:model='domicilio' placeholder="{{ $paciente->domicilio }}" />
                </div>
            </div>
            <div class="col-md-3">
                @error('nacimiento')
                <span style="color: red;font-size:10px;">{{ $message }}</span>
                @enderror
                <div class="form-label-group in-border">
                    <label for="nacimiento" class="form-label">Fecha Nacimiento</label>
                    <input type="text" name="nacimiento" class="form-control"
                        wire:model='nacimiento' placeholder="{{ $paciente->fecha_nacimiento }}" />
                </div>
            </div>

            <div class="col-md-2">
                @error('edad')
                <span style="color: red;font-size:10px;">{{ $message }}</span>
                @enderror
                <div class="form-label-group in-border">
                    <label for="edad" class="form-label">Edad</label>
                    <input type="text" name="edad" class="form-control" wire:model='edad' placeholder="{{ $paciente->edad }}" />
                </div>
            </div>
            <div class="col-md-3">
                @error('telefono')
                <span style="color: red;font-size:10px;">{{ $message }}</span>
                @enderror
                <div class="form-label-group in-border">
                    <label for="telefono" class="form-label">Teléfono</label>
                    <input type="tel" maxlength="10" minlength="10" name="telefono" class="form-control" wire:model='telefono' placeholder="{{ $paciente->telefono_correo }}" />
                </div>
            </div>
            <div class="col-md-4">
                @error('escolaridad')
                <span style="color: red;font-size:10px;">{{ $message }}</span>
                @enderror
                <div class="form-label-group in-border">
                    <label for="escolaridad" class="form-label_1">Escolaridad</label>
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
                </div>
            </div>
            <div class="col-md-4">
                @error('ocupacion')
                <span style="color: red;font-size:10px;">{{ $message }}</span>
                @enderror
                <div class="form-label-group in-border">
                    <label for="ocupacion" class="form-label">Ocupación</label>
                    <input type="text" maxlength="10" minlength="10" name="ocupacion" class="form-control" wire:model='ocupacion' placeholder="{{ $ficha->ocupacion }}" />
                </div>
            </div>
            <div class="col-md-4">
                @error('estado_civil')
                <span style="color: red;font-size:10px;">{{ $message }}</span>
                @enderror
                <div class="form-label-group in-border">
                    <label for="edoCivil" class="form-label_1">Estado Civil</label>
                    <select name="edoCivil" class="custom-select form-control" wire:model='estado_civil'>
                        <option selected>Seleccione una opcion...</option>
                        <option value="Soltero(a)">Soltero(a)</option>
                        <option value="Divociado(a)">Divociado(a)</option>
                        <option value="Viudo(a)">Viudo(a)</option>
                        <option value="Casado(a)">Casado(a)</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                @error('adicciones')
                <span style="color: red;font-size:10px;">{{ $message }}</span>
                @enderror
                <div class="form-label-group in-border">
                    <label for="adicciones" class="form-label">Adicciones</label>
                    <input type="text" name="adicciones" class="form-control"
                        wire:model='adicciones' placeholder="{{ $ficha->adicciones }} "/>
                </div>
            </div>
            <div class="col-md-3">
                @error('religion')
                <span style="color: red;font-size:10px;">{{ $message }}</span>
                @enderror
                <div class="form-label-group in-border">
                    <label for="religion" class="form-label">Religión</label>
                    <input type="text" name="religion" class="form-control" wire:model='religion' placeholder="{{ $ficha->religion }}" />
                </div>
            </div>

            <div class="col-md-4">
                @error('vive_con')
                <span style="color: red;font-size:10px;">{{ $message }}</span>
                @enderror
                <div class="form-label-group in-border">
                    <label for="viveCon" class="form-label">Personas con quien vive</label>
                    <input type="text" name="viveCon" class="form-control"
                        wire:model='vive_con' placeholder="{{ $ficha->vive_con }}" />
                </div>
            </div>
            <div class="col-md-3">
                <button type="submit" class="btn btn-primary w-100"
                    style="border-radius: 12px; background-color: blue;margin-top:30px !important">Actualizar</button>
            </div>
            <div class="col-md-2">
                <button type="reset" class="btn btn-dark w-100" data-bs-dismiss="modal" aria-label="Close"
                    style="border-radius: 12px;background-color: black;margin-top:30px !important">Cancelar</button>
            </div>
        </form>
    @endif
        
    </div>
</div>