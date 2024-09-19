<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Student List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
                
                <div class="mb-4">
                    <a href="{{ route('students.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Create
                    </a>
                </div>

                <table class="min-w-full table-auto">
                    <thead>
                        <tr class="bg-gray-200 dark:bg-gray-700">
                            <th class="px-4 py-2 text-left text-gray-600 dark:text-gray-300">ID</th>
                            <th class="px-4 py-2 text-left text-gray-600 dark:text-gray-300">Name</th>
                            <th class="px-4 py-2 text-left text-gray-600 dark:text-gray-300">Age</th>
                            <th class="px-4 py-2 text-left text-gray-600 dark:text-gray-300">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                                <td class="px-4 py-2 text-gray-800 dark:text-gray-200">{{ $student->id }}</td>
                                <td class="px-4 py-2 text-gray-800 dark:text-gray-200">{{ $student->name }}</td>
                                <td class="px-4 py-2 text-gray-800 dark:text-gray-200">{{ $student->age }}</td>
                                <td class="px-4 py-2">
                                    <!-- Botón para eliminar -->
                                    <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-blue-600 hover:text-blue-900">Delete</button>
                                    </form>                                    

                                    <!-- Botón para mostrar detalles -->
                                    <a href="{{ route('students.show', $student->id) }}" class="text-blue-600 hover:text-blue-900">Show</a>

                                    <!-- Botón para editar -->
                                    <a href="{{ route('students.edit', $student->id) }}" class="text-blue-600 hover:text-blue-900">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>
