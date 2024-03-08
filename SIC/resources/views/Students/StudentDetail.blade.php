@extends('plantilla')
@section('titulo')
    Formulario
@endsection

@section('contenido')

<div class="min-h-screen flex items-center justify-center -z-40">
    <div class="max-w-3xl mx-auto mt-10 bg-white rounded-lg shadow-lg p-8">
        <h1 class=" text-4xl font-bold ">Detalles del Alumno</h1>
        <h1 class="text-3xl font-semibold mb-6">{{ $student->name_student }} {{ $student->lastname_student }}</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <p class="font-semibold">Fecha de Nacimiento:</p>
                <p class="px-4 py-2 bg-gray-100 rounded-md">{{ $student->birthdate }}</p>
            </div>

            <div>
                <p class="font-semibold">Matrícula:</p>
                <p class="px-4 py-2 bg-gray-100 rounded-md">{{ $student->id_student }}</p>
            </div>

            <div class="col-span-2">
                <p class="font-semibold">Comentarios:</p>
                <p class="px-4 py-2 bg-gray-100 rounded-md">{{ $student->comments }}</p>
            </div>
            <a href="/students"> Regresar</a>
        </div>
    </div>
</div>

@endsection