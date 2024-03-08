@extends('plantilla')
@section('titulo')
    Formulario
@endsection

@section('contenido')

<div class="bg-[#F0F6FF] h-auto flex justify-center items-center font-custom">
    <div class="w-full mr-80 mt-10 p-8 bg-white shadow-md rounded-lg text-center">
        <h1 class="text-4xl font-bold ">Detalles del Alumno</h1>
        <h1 class="text-3xl font-semibold mt-2 mb-6">Nombre: {{ $student->name_student }} {{ $student->lastname_student }}</h1>

        <div class="flex flex-col text-center">
            <div class="my-2">
                <p class="font-semibold">Fecha de Nacimiento:</p>
                <p class="px-4 py-2 bg-gray-100 rounded-md">{{ $student->birthday }}</p>
            </div>

            <div class="my-2">
                <p class="font-semibold">Matrícula:</p>
                <p class="px-4 py-2 bg-gray-100 rounded-md">{{ $student->id_student }}</p>
            </div>

            <div class="col-span-2 my-2">
                <p class="font-semibold">Descripcion:</p>
                <p class="px-4 py-2 bg-gray-100 rounded-md">{{ $student->comments }}</p>
            </div>
            <a href="/estudiantes" class="block text-center mt-6 px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Regresar</a>
        </div>
    </div>
</div>

@endsection
