<div>
	<form wire:submit.prevent='submitData' class="row g-3">
		<div class="col-lg-3 col-md-5">
			<div class="form-label-group in-border">
				<textarea rows="3" name="motivoConsulta" class="form-control lbl_2" placeholder="Motivo de la consulta" wire:model='motivoConsulta'>
				</textarea>
				<label for="motivoConsulta" class="lbl_1">Motivo de la consulta</label>
			</div>
		</div>
		<div class="col-lg-3 col-md-7">
			<div class="form-label-group in-border">
				<textarea rows="3" name="problemaActual" class="form-control lbl_2" placeholder="Problema actual" wire:model='problemaActual'></textarea>
				<label for="problemaActual" class="lbl_1">Problema actual</label>
			</div>
		</div>
		<div class="col-lg-6 col-md-12">
			<div class="form-label-group in-border">
				<textarea rows="3" name="sintomatologia" class="form-control lbl_2"
					placeholder="Cronología de la sintomatología" wire:model='sintomatologia'></textarea>
				<label for="sintomatologia" class="lbl_1">Cronología de la sintomatología</label>
			</div>
		</div>
		<div class="col-lg-5 col-md-6">
			<div class="form-label-group in-border">
				<textarea rows="3" name="tratamientosPrev" class="form-control lbl_2"
					placeholder="Tratamientos previos" wire:model='tratamientosPrev'></textarea>
				<label for="tratamientosPrev" class="lbl_1">Tratamientos previos</label>
			</div>
		</div>
		<div class="col-lg-7 col-md-6">
			<div class="form-label-group in-border">
				<textarea rows="3" name="diagnostico" class="form-control lbl_2" placeholder="Diagnóstico" wire:model='diagnostico'></textarea>
				<label for="diagnostico" class="lbl_1">Diagnóstico</label>
			</div>
		</div>
		<div class="col-lg-4 col-md-6">
			<div class="form-label-group in-border">
				<textarea rows="3" name="org_economica" class="form-control lbl_2"
					placeholder="Organización economica" wire:model='org_economica'></textarea>
				<label for="org_economica" class="lbl_1">Organización economica</label>
			</div>
		</div>
		<div class="col-lg-4 col-md-6">
			<div class="form-label-group in-border">
				<textarea rows="3" name="org_recreativa" class="form-control lbl_2"
					placeholder="Organización recreativa" wire:model='org_recreativa'></textarea>
				<label for="org_recreativa" class="lbl_1">Organización recreativa</label>
			</div>
		</div>
		<div class="col-lg-4 col-md-6">
			<div class="form-label-group in-border">
				<textarea rows="3" name="org_personal" class="form-control lbl_2"
					placeholder="Organización personal" wire:model='org_personal'></textarea>
				<label for="org_personal" class="lbl_1">Organización personal</label>
			</div>
		</div>
		<div class="col-lg-6 col-md-6">
			<div class="form-label-group in-border">
				<textarea rows="3" name="histFamiliar" class="form-control lbl_2" placeholder="Historia familiar" wire:model='histFamiliar'></textarea>
				<label for="histFamiliar" class="lbl_1">Historia familiar</label>
			</div>
		</div>
		<div class="col-lg-6 col-md-6">
			<div class="form-label-group in-border">
				<textarea rows="3" name="histLaboral" class="form-control lbl_2" placeholder="Historia laboral" wire:model='histLaboral'></textarea>
				<label for="histLaboral" class="lbl_1">Historia laboral</label>
			</div>
		</div>

		<div class="col-lg-4 col-md-6">
			<div class="form-label-group in-border">
				<textarea rows="3" name="relSentSex" class="form-control lbl_2"
					placeholder="Relaciones sentimentales y/o sexuales" wire:model='relSentSex'></textarea>
				<label for="relSentSex" class="lbl_1">Relaciones sentimentales y/o sexuales</label>
			</div>
		</div>
		<div class="col-lg-4 col-md-6">
			<div class="form-label-group in-border">
				<textarea rows="3" name="relInterper" class="form-control lbl_2"
					placeholder="Relaciones interpersonales" wire:model='relInterper'></textarea>
				<label for="relInterper" class="lbl_1">Relaciones interpersonales</label>
			</div>
		</div>
		<div class="col-lg-4 col-md-6">
			<div class="form-label-group in-border">
				<textarea rows="3" name="relIntraper" class="form-control lbl_2"
					placeholder="Relaciones intrapersonales" wire:model='relIntraper'></textarea>
				<label for="relIntraper" class="lbl_1">Relaciones intrapersonales</label>
			</div>
		</div>
		<div class="col-lg-4 col-md-6">
			<div class="form-label-group in-border">
				<textarea rows="3" name="autoestima" class="form-control lbl_2" placeholder="Autoestima" wire:model='autoestima'></textarea>
				<label for="autoestima" class="lbl_1">Autoestima</label>
			</div>
		</div>

		<div class="col-lg-4 col-md-6">
			<div class="form-label-group in-border">
				<textarea rows="3" name="autosatisfacciones" class="form-control lbl_2"
					placeholder="Autosatisfacciones" wire:model='autosatisfacciones'></textarea>
				<label for="autosatisfacciones" class="lbl_1">Autosatisfacciones</label>
			</div>
		</div>

		<div class="col-lg-4 col-md-6">
			<div class="form-label-group in-border">
				<textarea rows="3" name="idealizaciones" class="form-control lbl_2" placeholder="Idealizaciones" wire:model='idealizaciones'></textarea>
				<label for="idealizaciones" class="lbl_1">Idealizaciones</label>
			</div>
		</div>

		<div class="col-lg-12 col-md-6">
			<div class="form-label-group in-border">
				<textarea rows="3" name="obsGenerales" class="form-control lbl_2"
					placeholder="Observaciones generales" wire:model='obsGenerales'></textarea>
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