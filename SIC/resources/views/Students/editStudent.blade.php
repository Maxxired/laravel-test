@extends('plantilla')
@section('titulo')
    Formulario
@endsection

@section('contenido')
    <div class="bg-[#F0F6FF] min-h-screen flex justify-center items-center">
        <div class="w-full mr-80 max-w-md p-8 bg-white shadow-md rounded-lg">
            <h1 class="text-2xl font-bold mb-4">Editar Estudiante</h1>
            <form method="POST" action="{{ route('estudiantes.update', $student->id) }}" class="space-y-4">
                @csrf
                @method('PUT')
                <input type="text" name='name_student' placeholder="Nombre" value="{{old('name_student', $student->name_student)}}" class="w-full border-gray-300 rounded-md p-2">
                @error('name_student')
                    <div style='color:red'>{{$message}}</div>
                @enderror
                <input type="text" name='lastname_student' placeholder="Apellido" value="{{old('lastname_student', $student->lastname_student)}}" class="w-full border-gray-300 rounded-md p-2">
                @error('lastname_student')
                    <div style='color:red'>{{$message}}</div>
                @enderror
                <input type="text" name='id_student' placeholder="Matricula" value="{{old('id_student', $student->id_student)}}" class="w-full border-gray-300 rounded-md p-2">
                @error('id_student')
                    <div style='color:red'>{{$message}}</div>
                @enderror
                <input type="date" name='birthday' placeholder="Fecha de nacimiento" value="{{old('birthday', $student->birthday)}}" class="w-full border-gray-300 rounded-md p-2">
                @error('birthday')
                    <div style='color:red'>{{$message}}</div>
                @enderror
                <input type="textarea" name= 'comments'placeholder="Descripcion" value="{{old('comments', $student->comments)}}" class="w-full border-gray-300 rounded-md p-2">
                @error('comments')
                    <div style='color:red'>{{$message}}</div>
                @enderror
                <button type="submit" class="w-full bg-blue-500 text-white font-semibold py-2 px-4 rounded-md hover:bg-blue-600 transition-colors duration-300">Editar</button>
            </form>
        </div>
    </div>
@endsection