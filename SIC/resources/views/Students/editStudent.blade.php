@extends('plantilla')
@section('titulo')
    Formulario
@endsection

@section('contenido')
    <div class="bg-[#F0F6FF] min-h-screen flex justify-center items-center">
        <div class="w-full mr-80 max-w-md p-8 bg-white shadow-md rounded-lg">
            <h1 class="text-2xl font-bold mb-4">Formulario</h1>
            <form method="POST" action="{{ url('alumno')}}" class="space-y-4">
                @csrf
                <input type="text" name='name_student' placeholder="Nombre" value="{{old('name_student')}}" class="w-full border-gray-300 rounded-md p-2">
                @error('name_student')
                    <div style='color:red'>{{$message}}</div>
                @enderror
                <input type="text" name='id_student' placeholder="Matricula" value="{{old('id_student')}}" class="w-full border-gray-300 rounded-md p-2">
                @error('id_student')
                    <div style='color:red'>{{$message}}</div>
                @enderror
                <input type="text" name='email_student' placeholder="Correo electrónico" value="{{old('email_student')}}" class="w-full border-gray-300 rounded-md p-2">
                @error('email_student')
                    <div style='color:red'>{{$message}}</div>
                @enderror
                <input type="password" name= 'password_student'placeholder="Contraseña" value="{{old('password_student')}}" class="w-full border-gray-300 rounded-md p-2">
                @error('password_student')
                    <div style='color:red'>{{$message}}</div>
                @enderror
                <button type="submit" class="w-full bg-blue-500 text-white font-semibold py-2 px-4 rounded-md hover:bg-blue-600 transition-colors duration-300">Enviar</button>
            </form>
        </div>
    </div>
@endsection
