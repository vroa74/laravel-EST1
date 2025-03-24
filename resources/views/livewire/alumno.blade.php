<div>
    <h1 class="text-yellow-300"> Alumnos</h1>
    <hr>
    <br>
    <div class="space-y-4">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
            <input type="text" wire:model.defer="filters.Fnom" placeholder="Fnom" class="border p-1 rounded">
            <input type="text" wire:model.defer="filters.nombres" placeholder="Nombres" class="border p-1 rounded">
            <input type="text" wire:model.defer="filters.apa" placeholder="Apellido paterno" class="border p-1 rounded">
            <input type="text" wire:model.defer="filters.ama" placeholder="Apellido materno" class="border p-1 rounded">
            <input type="number" wire:model.defer="filters.grado" placeholder="Grado" class="border p-1 rounded">
            <input type="text" wire:model.defer="filters.grupo" placeholder="Grupo" class="border p-1 rounded">
            <input type="date" wire:model.defer="filters.fnac" class="border p-1 rounded">
            <select wire:model.defer="filters.sex" class="border p-1 rounded">
                <option value="">Sexo</option>
                <option value="1">Masculino</option>
                <option value="0">Femenino</option>
            </select>
            <select wire:model.defer="filters.status" class="border p-1 rounded">
                <option value="">Estado</option>
                <option value="1">Activo</option>
                <option value="0">Inactivo</option>
            </select>
            <select wire:model="perPage" class="border p-1 rounded">
                <option value="5">5 por página</option>
                <option value="10">10 por página</option>
                <option value="25">25 por página</option>
                <option value="50">50 por página</option>
            </select>
            <button wire:click="$refresh" class="bg-blue-600 text-white px-4 py-1 rounded hover:bg-blue-700">Buscar</button>
        </div>
{{--------------------------------------------------------------------------------------------------------------------------------------}}

{{--------------------------------------------------------------------------------------------------------------------------------------------------------}}



        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="p-4">
                        <div class="flex items-center">
                           Ful lname
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        nombres
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Apellido paterno
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Apellido Materno
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Grado
                    </th>
                    <th scope="col" class="px-6 py-3">
                        grupo
                    </th>
                    <th scope="col" class="px-6 py-3">
                        sexo
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Fecha de Nacimiento
                    </th>
                    <th scope="col" class="px-6 py-3">
                        estatus
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Accion
                    </th>
                </tr>
                </thead>
                <tbody>
                @forelse ($alumnos as $alumno)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="w-4 p-4">
                        <div class="flex items-center">
                            {{ $alumno->Fnom }}
                        </div>
                    </td>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $alumno->nombres }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $alumno->apa }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $alumno->ama }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $alumno->grado }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $alumno->grupo }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $alumno->sex ? 'M' : 'F' }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $alumno->fnac ?? '—' }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $alumno->status ? 'Activo' : 'Inactivo' }}
                    </td>
                    <td class="flex items-center px-6 py-4">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Remove</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <br>
            {{ $alumnos->links() }}

        </div>


</div>
