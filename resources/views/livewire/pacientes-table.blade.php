<div>
  <div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-3">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-3">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <div class="bg-white px-3 py-3 items-center justify-between border-t border-gray-200 sm:px-6">
            <div class="flex text-gray-500">
              <select wire:model='perPage'
                class="focus:ring-indigo-500 focus:border-indigo-500 shadow-sm sm:text-sm border-gray-300 rounded-md">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="20">20</option>
              </select>
              <input type="text"
                class="focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md ml-3"
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
                <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  ID
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Nombre
                  <button wire:click="sortable('nombre')">
                    <span class="fa fa{{ $field === 'nombre' ? $icon: '-circle'}}"></span>
                  </button>
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Edad

                  <button wire:click="sortable('edad')">
                    <span class="fa fa{{ $field === 'edad' ? $icon: '-circle'}}"></span>
                  </button>
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Domicilio
                </th>
                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Fecha de Registro

                  <button wire:click="sortable('created_at')">
                    <span class="fa fa{{ $field === 'created_at' ? $icon: '-circle'}}"></span>
                  </button>
                </th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              @foreach ($pacientes as $paciente)
              <tr>
                <td class="px-3 py-2 whitespace-nowrap text-sm text-gray-500">
                  {{ $paciente->id }}
                </td>
                <td class="px-6 py-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <div class="flex-shrink-0 h-10 w-10">

                      <img class="h-10 w-10 rounded-full"
                        src="https://ui-avatars.com/api/?name={{$paciente->nombre}}&&background=000000&color=fff&&bold=true"
                        alt="">
                    </div>
                    <div class="ml-3">
                      <div class="text-sm font-medium text-gray-900">
                        {{ $paciente->nombre }}
                      </div>
                      <div class="text-sm text-gray-500">
                        {{ $paciente->apellidos }}
                      </div>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-2 whitespace-nowrap">
                  <div class="text-sm text-gray-900">{{ $paciente->edad }}</div>
                </td>
                <td class="px-6 py-2 whitespace-nowrap">
                  <div class="text-sm font-medium text-gray-900">
                    {{ $paciente->domicilio }}
                  </div>
                  <span
                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                    +52 {{ $paciente->telefono_correo }}
                  </span>
                </td>
                <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">
                  {{ $paciente->created_at }}
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
</td>