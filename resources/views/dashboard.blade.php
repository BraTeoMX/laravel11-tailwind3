<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
            <hr>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <h3 class="text-lg font-bold">Hola</h3>
                <p class="text-base">prueba de un boton</p>
                <button class="btn bg-green-500 text-white py-2 px-4 rounded">boton en Tailwind</button>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Botón Primario
                </button>
                <button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                    Botón Secundario
                </button>
                <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    Botón de Éxito
                </button>
                <button class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                    Botón de Advertencia
                </button>

                <h1 class="text-3xl font-bold underline">
                    Esto es un título grande
                </h1>
                <p class="text-base text-gray-700">
                    Este es un párrafo con texto gris.
                </p>
                <div class="p-6 max-w-sm mx-auto bg-white rounded-xl shadow-md space-y-4">
                    <h2 class="text-xl font-medium text-black">Contenido del contenedor</h2>
                    <p class="text-gray-500">Más texto dentro del contenedor.</p>
                </div>
    
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                        Nombre de usuario
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Nombre de usuario">
                </div>
                
            </div>
            
            
        </div>
    </div>
</x-app-layout>
