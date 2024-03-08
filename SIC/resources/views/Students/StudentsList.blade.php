@extends('plantilla')
@section('titulo')
    Formulario
@endsection

@section('contenido')
<div class="bg-[#F0F6FF] h-auto flex justify-center items-center">
    <div class="w-full mr-80 mt-10 p-8 bg-white shadow-md rounded-lg">

            <h1 class="text-2xl font-bold mb-4">Lista de estudiantes</h1>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Matricula</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Apellido</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Cumpleaños</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Detalles</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-500">
                        @foreach ($students as $student)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $student->id_student }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $student->name_student }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $student->lastname_student }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $student->birthday }}</td>
                            
                                <td>
                                    <a href="{{ route('estudiantes.show', $student->id) }}" class="text-blue-500 hover:text-blue-700">Ver detalles</a>
                                </td>

                                <td>
                                    <a href="{{ route('estudiantes.edit', $student->id) }}" class="text-green-500 hover:text-green-700">Editar</a>
                                    <form method="POST" action="{{route('estudiantes.destroy', $student->id)}}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('¿Estás seguro de que quieres eliminar este estudiante?')" class="text-red-500 hover:text-red-700">Eliminar</button>
                                    </form>
                                  
                                     </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="flex gap-5 justify-center mt-10">
                    {{$students->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
