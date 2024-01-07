@extends('layouts.app')

@section('titulo')
Registrate en SaludPlus
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-4 md:items-center">
        <div class="md:w-6/12  p-5">
            <img src="{{asset('images/registro.avif')}}" alt="IMAGEN DE REGISTRO">
        </div>
        <div class="md:w-4/12 bg-white rounded-lg shadow-2xl p-6">
            <form action="{{route('register')}}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-600 font-bold">
                        Nombre
                    </label>
                    <input
                        type="text"
                        placeholder="Nombre"
                        id="name"
                        name="name"
                        class="border p-3 w-full rounded-lg"
                    >
                </div>
                <div class="mb-5">
                    <label for="apellido" class="mb-2 block uppercase text-gray-600 font-bold">
                        Apellido
                    </label>
                    <input
                        type="text"
                        placeholder="Apellido"
                        id="apellido"
                        name="apellido"
                        class="border p-3 w-full rounded-lg"
                    >
                </div>
                <div class="mb-5">
                    <label for="telefono" class="mb-2 block uppercase text-gray-600 font-bold">
                        Telefono
                    </label>
                    <input
                        type="number"
                        placeholder="Telefono"
                        id="telefono"
                        name="telefono"
                        class="border p-3 w-full rounded-lg"
                    >
                </div>
                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-600 font-bold">
                        E-mail
                    </label>
                    <input
                        type="email"
                        placeholder="Email"
                        id="email"
                        name="email"
                        class="border p-3 w-full rounded-lg"
                    >
                </div>
                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-600 font-bold">
                        Password
                    </label>
                    <input
                        type="password"
                        placeholder="Password de registro"
                        id="password"
                        name="password"
                        class="border p-3 w-full rounded-lg"
                    >
                </div>
                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-600 font-bold">
                        Repetir Password
                    </label>
                    <input
                        type="password"
                        placeholder="Repite tu password"
                        id="password_confirmation"
                        name="password_confirmation"
                        class="border p-3 w-full rounded-lg"
                    >
                </div>

                <input 
                    type="submit" 
                    value="Crear Cuenta"
                    class="bg-green-600 hover:bg-green-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"
                >
            </form>
        </div>

    </div>
@endsection
