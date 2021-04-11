<div>
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-3">
            <div class="py-4 align-middle inline-block min-w-full sm:px-6 lg:px-3">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <div class="bg-white px-3 py-3 items-center justify-between border-t border-gray-200 sm:px-6">
                        <div class="flex text-gray-500">
                            <select wire:model='perPage'
                                class="focus:ring-indigo-500 focus:border-indigo-500 shadow-sm sm:text-sm border-blue-300 rounded-md">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="15">15</option>
                                <option value="20">20</option>
                            </select>

                            <select wire:model='status'
                                class="focus:ring-indigo-500 focus:border-indigo-500 shadow-sm sm:text-sm border-blue-300 rounded-md">
                                <option value="A">Habilitados</option>
                                <option value="I">Deshabilitados</option>
                            </select>

                            <input type="text"
                                class="focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-blue-300 rounded-full ml-3"
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
                                    <button wire:click="sortable('nombre')" style="color: red;">
                                        <span class="fa fa{{ $field === 'nombre' ? $icon: '-circle'}}"></span>
                                    </button>
                                </th>
                                <th scope="col"
                                    class="px-6 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Apellidos
                                    <button wire:click="sortable('apellidos')" style="color: red;">
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
                                <td class="px-6 py-2 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">
                                        {{ $paciente->nombre }}
                                    </div>
                                </td>
                                <td class="px-6 py-2 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $paciente->apellidos }}</div>
                                </td>
                                <td class="px-6 py-2 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">
                                        {{ $paciente->domicilio }}
                                    </div>
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-200 text-blue-900">
                                        +52 {{ $paciente->telefono_correo }}
                                    </span>
                                </td>
                                <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $paciente->status === 'A' ? 'bg-green-200 text-green-800' : 'bg-red-200 text-gray-800'}}">
                                        {{ $paciente->status === 'A' ? 'Activo' : 'Inactivo'}}
                                    </span>
                                </td>
                                <td class="px-2 py-2 whitespace-nowrap text-center text-sm font-medium">
                                    <button wire:click="disablePatient('{{ $paciente->id }}', '{{ $paciente->status === 'A' ? 'Deshabilitar' : 'Habilitar'}}')" class="inline-flex items-center justify-center px-1 py-1 border border-transparent text-xs rounded-full text-white bg-purple-700 hover:bg-gray-900">
                                        {{ $paciente->status === 'A' ? 'Deshabilitar' : 'Habilitar'}}
                                      </button>{{-- 
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a> --}}
                                </td>
                            </tr>
                            @endforeach
                            <!-- More items... -->
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