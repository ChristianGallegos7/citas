@extends('layouts.app')

@section('titulo')
Registrate en SaludPlus
@endsection

@section('contenido')
    <div class="md:flex">
        <div class="md:w-1/2">
            <p>Imagen aqui</p>
        </div>
        <div class="md:w-1/2">
            <form action="">
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
                        E-mail
                    </label>
                    <input
                        type="password"
                        placeholder="password"
                        id="password"
                        name="password"
                        class="border p-3 w-full rounded-lg"
                    >
                </div>
            </form>
        </div>

    </div>
@endsection
