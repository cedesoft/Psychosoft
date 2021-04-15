<div>
	<div class="flex flex-col">
		<div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-3">
			<div class="py-4 align-middle inline-block min-w-full sm:px-6 lg:px-3">
				<div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
					<div class="bg-white px-3 py-3 items-center justify-between border-t border-gray-200 sm:px-6">
						<div class="flex text-gray-500">
							<select wire:model='perPage'
								class="focus:ring-indigo-500 focus:border-indigo-500 shadow-sm sm:text-sm border-blue-100 rounded-full">
								<option value="5">5</option>
								<option value="10">10</option>
								<option value="15">15</option>
								<option value="20">20</option>
							</select>
							<input type="text"
								class="focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-blue-100 rounded-full ml-3"
								wire:model='search' placeholder="Buscar...">
							<button
								class="focus:ring-indigo-500 w-10 focus:border-indigo-500 shadow-sm sm:text-sm border-green-500 rounded-lg ml-3"
								wire:click="clear">
								<span class="fa fa-eraser"></span>
							</button>
						</div>
					</div>
					<table class="min-w-full divide-y divide-gray-200">
						<thead class="bg-gray-50">
							<tr>
								<th scope="col"
									class="px-6 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
									Nombre
									<button wire:click="sortable('nombre')" style="color: rgb(0, 89, 255);">
										<span class="fa fa{{ $field === 'nombre' ? $icon: '-circle'}}"></span>
									</button>
								</th>
								<th scope="col"
									class="px-6 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
									Apellidos
									<button wire:click="sortable('apellidos')" style="color: rgb(0, 89, 255);">
										<span class="fa fa{{ $field === 'apellidos' ? $icon: '-circle'}}"></span>
									</button>
								</th>
								<th scope="col"
									class="px-6 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
									Datos de contacto
								</th>
								<th scope="col"
									class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
									Status
								</th>
								<th scope="col"
									class="px-2 py-2 text-xs font-medium text-gray-500 uppercase tracking-wider text-center">
									Editar
								</th>
							</tr>
						</thead>
						<tbody class="bg-white divide-y divide-gray-200">
							@foreach ($pacientes as $paciente)
							<tr>
								<td class="px-6 py-1 whitespace-nowrap">
									<div class="text-sm font-medium text-gray-900">
										{{ $paciente->nombre }}
									</div>
								</td>
								<td class="px-6 py-1 whitespace-nowrap">
									<div class="text-sm text-gray-900">{{ $paciente->apellidos }}</div>
								</td>
								<td class="px-6 py-1 whitespace-nowrap">
									<div class="text-sm font-medium text-gray-900">
										{{ $paciente->domicilio }}
									</div>
									<span
										class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-200 text-blue-900">
										+52 {{ $paciente->telefono_correo }}
									</span>
								</td>
								<td class="px-4 py-1 whitespace-nowrap text-sm text-gray-500">
									<span
										class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $paciente->status === 'A' ? 'bg-green-100 text-green-800' : 'bg-red-200 text-gray-800'}}">
										{{ $paciente->status === 'A' ? 'Activo' : 'Inactivo'}}
									</span>
								</td>
								<td class="px-2 py-1 whitespace-nowrap text-center text-sm font-medium">
									<div class="flex item-center justify-center">
										<div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110"
											style="color: rgb(255, 0, 98);">
											<button wire:click="editExpediente('{{$paciente->id}}')"
												data-bs-toggle="modal" data-bs-target="#modalForm2" data-bs-toggle="tooltip" title="Agregar Expediente Nuevo"><span
													class="fas fa-folder-plus hover:text-gray-900 shadow-sm"></span></button>
										</div>
										<div class="w-4 mr-2 transform hover:text-blue-900 hover:scale-110"
											style="color: rgb(0, 17, 255);">
											<button wire:click="editFicha('{{$paciente->id}}')" data-bs-toggle="modal"
												data-bs-target="#modalForm" data-bs-toggle="tooltip" title="Editar Ficha del Paciente"><span
													class="fa fa-user-edit hover:text-gray-900 shadow-sm"></span></button>
										</div>
										<div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110"
											style="color: rgb(255, 0, 98);">
											<button wire:click="editExpediente2('{{$paciente->id}}')"
												data-bs-toggle="modal" data-bs-target="#modalForm2" data-bs-toggle="tooltip" title="Editar Expediente"><span
													class="far fa-edit hover:text-gray-900 shadow-md"></span></button>
										</div>
									</div>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>

					<div class="bg-white px-3 py-2 items-center justify-between border-t border-gray-200 sm:px-6">
						{{$pacientes->links()}}
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<!-- Modal -->
<div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
		<div class="modal-content">
			<div class="modal-header bg-gray-300 p-2">
				<h5 class="modal-title" id="exampleModalLabel">Editar Ficha del Paciente
				</h5>
				<button type="button" class="btn-close pe-3" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body p-0">
				@livewire('form-edit-ficha-paciente')
			</div>
		</div>
	</div>
</div>
<!-- Modal 2 -->
<div class="modal fade" id="modalForm2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-fullscreen modal-dialog-centered modal-dialog-scrollable mt-3">
		<div class="modal-content">
			<div class="modal-header bg-gray-300 p-2">
				<h5 class="modal-title" id="exampleModalLabel">Agregar Nuevo Expediente</h5>
				<button type="button" class="btn-close pe-3" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				@livewire('form-edit-expediente')
			</div>
		</div>
	</div>
</div>
