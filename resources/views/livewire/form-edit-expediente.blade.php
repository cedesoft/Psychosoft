<div>

	@if ($expediente == null)
	<div class="d-flex align-items-center">
		<strong>Cargando...</strong>
		<div class="spinner-border ms-auto" role="status" aria-hidden="true"></div>
	</div>
	@else
	<form wire:submit.prevent='submitData' class="row g-3">
		@if ($opcionExp == 2)
		<div class="col-lg-9 m-auto mt-2 border rounded-3 bg-green-50">
			<div class="col-lg-5 m-auto pb-0">
				<strong class="pb-0 m-0 text-blue-800">Expediente del {{ $fecha }}</strong>
			</div>
		</div>
		<div class="col-lg-12 m-auto mt-3 text-center">
			<hr class="col-11 m-auto">
		</div>

		@endif
		<div class="col-lg-4 col-md-5">
			<div class="form-label-group in-border">
				<label for="motivoConsulta" class="form-label">Motivo de la consulta</label>
				<textarea rows="3" name="motivoConsulta" class="form-control" wire:model='motivoConsulta'
					placeholder="{{ $opcionExp == 2 ? $expediente->motivo_consulta : ''}}"></textarea>
			</div>
		</div>
		<div class="col-lg-4 col-md-7">
			<div class="form-label-group in-border">
				<label for="problemaActual" class="form-label">Problema actual</label>
				<textarea rows="3" name="problemaActual" class="form-control" wire:model='problemaActual'
					placeholder="{{ $opcionExp == 2 ? $expediente->problema_actual : '' }}"></textarea>
			</div>
		</div>
		<div class="col-lg-4 col-md-12">
			<div class="form-label-group in-border">
				<label for="sintomatologia" class="form-label">Cronología de la sintomatología</label>
				<textarea rows="3" name="sintomatologia" class="form-control" wire:model='sintomatologia'
					placeholder="{{ $opcionExp == 2 ? $expediente->crono_sintomatologia : '' }}"></textarea>
			</div>
		</div>
		<div class="col-lg-4 col-md-6">
			<div class="form-label-group in-border">
				<label for="tratamientosPrev" class="form-label">Tratamientos previos</label>
				<textarea rows="3" name="tratamientosPrev" class="form-control" wire:model='tratamientosPrev'
					placeholder="{{ $opcionExp == 2 ? $expediente->trata_previos : '' }}"></textarea>
			</div>
		</div>
		<div class="col-lg-5 col-md-6">
			<div class="form-label-group in-border">
				<label for="diagnostico" class="form-label">Diagnóstico</label>
				<textarea rows="3" name="diagnostico" class="form-control" wire:model='diagnostico'
					placeholder="{{ $opcionExp == 2 ? $expediente->diagnostico : '' }}"></textarea>
			</div>
		</div>
		<div class="col-lg-3 col-md-6">
			<div class="form-label-group in-border">
				<label for="org_economica" class="form-label">Organización economica</label>
				<textarea rows="3" name="org_economica" class="form-control" wire:model='org_economica'
					placeholder="{{ $opcionExp == 2 ? $expediente->org_economica : '' }}"></textarea>
			</div>
		</div>
		<div class="col-lg-4 col-md-6">
			<div class="form-label-group in-border">
				<label for="org_recreativa" class="form-label">Organización recreativa</label>
				<textarea rows="3" name="org_recreativa" class="form-control" wire:model='org_recreativa'
					placeholder="{{ $opcionExp == 2 ? $expediente->org_recreativa : '' }}"></textarea>
			</div>
		</div>
		<div class="col-lg-4 col-md-6">
			<div class="form-label-group in-border">
				<label for="org_personal" class="form-label">Organización personal</label>
				<textarea rows="3" name="org_personal" class="form-control" wire:model='org_personal'
					placeholder="{{ $opcionExp == 2 ? $expediente->org_personal : '' }}"></textarea>
			</div>
		</div>
		<div class="col-lg-4 col-md-6">
			<div class="form-label-group in-border">
				<label for="histFamiliar" class="form-label">Historia familiar</label>
				<textarea rows="3" name="histFamiliar" class="form-control" wire:model='histFamiliar'
					placeholder="{{ $opcionExp == 2 ? $expediente->hist_familiar : '' }}"></textarea>
			</div>
		</div>
		<div class="col-lg-4 col-md-6">
			<div class="form-label-group in-border">
				<label for="histLaboral" class="form-label">Historia laboral</label>
				<textarea rows="3" name="histLaboral" class="form-control" wire:model='histLaboral'
					placeholder="{{ $opcionExp == 2 ? $expediente->hist_laboral : '' }}"></textarea>
			</div>
		</div>

		<div class="col-lg-4 col-md-6">
			<div class="form-label-group in-border">
				<label for="relSentSex" class="form-label">Relaciones sentimentales y/o sexuales</label>
				<textarea rows="3" name="relSentSex" class="form-control" wire:model='relSentSex'
					placeholder="{{ $opcionExp == 2 ? $expediente->rela_senti_sexual : '' }}"></textarea>
			</div>
		</div>
		<div class="col-lg-4 col-md-6">
			<div class="form-label-group in-border">
				<label for="relInterper" class="form-label">Relaciones interpersonales</label>
				<textarea rows="3" name="relInterper" class="form-control" wire:model='relInterper'
					placeholder="{{ $opcionExp == 2 ? $expediente->rela_interpersonales : ''}}"></textarea>
			</div>
		</div>
		<div class="col-lg-4 col-md-6">
			<div class="form-label-group in-border">
				<label for="relIntraper" class="form-label">Relaciones intrapersonales</label>
				<textarea rows="3" name="relIntraper" class="form-control" wire:model='relIntraper'
					placeholder="{{ $opcionExp == 2 ? $expediente->rela_intrapersonales : '' }}"></textarea>
			</div>
		</div>
		<div class="col-lg-4 col-md-6">
			<div class="form-label-group in-border">
				<label for="autoestima" class="form-label">Autoestima</label>
				<textarea rows="3" name="autoestima" class="form-control" wire:model='autoestima'
					placeholder="{{ $opcionExp == 2 ? $expediente->autoestima : '' }}"></textarea>
			</div>
		</div>

		<div class="col-lg-4 col-md-6">
			<div class="form-label-group in-border">
				<label for="autosatisfacciones" class="form-label">Autosatisfacciones</label>
				<textarea rows="3" name="autosatisfacciones" class="form-control" wire:model='autosatisfacciones'
					placeholder="{{ $opcionExp == 2 ? $expediente->autosatisfacciones : '' }}"></textarea>
			</div>
		</div>

		<div class="col-lg-4 col-md-6">
			<div class="form-label-group in-border">
				<label for="idealizaciones" class="form-label">Idealizaciones</label>
				<textarea rows="3" name="idealizaciones" class="form-control" wire:model='idealizaciones'
					placeholder="{{ $opcionExp == 2 ? $expediente->idealizaciones : '' }}"></textarea>
			</div>
		</div>

		<div class="col-lg-8 col-md-6">
			<div class="form-label-group in-border">
				<label for="obsGenerales" class="form-label">Observaciones Generales</label>
				<textarea rows="3" name="obsGenerales" class="form-control" wire:model='obsGenerales'
					placeholder="{{ $opcionExp == 2 ? $expediente->obs_generales : '' }}"></textarea>
			</div>
		</div>
		<div class="form-group mt-3">
			<button type="reset" class="btn btn-dark float-right ms-3 col-2" data-bs-dismiss="modal" aria-label="Close"
				style="border-radius: 12px;background-color: black;margin-top:30px !important">
				Cancelar
			</button>
			<button type="submit" class="btn btn-primary float-right col-2"
				style="border-radius: 12px; background-color: blue;margin-top:30px !important">
				Guardar
			</button>
		</div>
	</form>
	@endif
</div>