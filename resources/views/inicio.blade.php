<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Ejemplos de Tailwind CSS') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Ejemplo de tarjeta con imagen y descripción -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-4">
                <img src="https://nbsp-brateomx-1210d70b8cbcd80ed6ac0247ccba53082fc1a27cba8e3601b.gitlab.io/img/chopper.webp" alt="Placeholder" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Nombre del Producto</h3>
                    <p class="text-gray-700 dark:text-gray-300">Descripción corta del producto.</p>
                    <button class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Ver Producto
                    </button>
                </div>
            </div>

            <!-- Ejemplo de lista de elementos -->
            <ul class="grid grid-cols-2 gap-4">
                <li class="bg-gray-100 dark:bg-gray-700 p-4 rounded-lg shadow-md">
                    <h3 class="text-lg font-bold mb-2">Elemento 1</h3>
                    <p class="text-gray-700 dark:text-gray-300">Descripción del elemento 1.</p>
                </li>
                <li class="bg-gray-100 dark:bg-gray-700 p-4 rounded-lg shadow-md">
                    <h3 class="text-lg font-bold mb-2">Elemento 2</h3>
                    <p class="text-gray-700 dark:text-gray-300">Descripción del elemento 2.</p>
                </li>
                <li class="bg-gray-100 dark:bg-gray-700 p-4 rounded-lg shadow-md">
                    <h3 class="text-lg font-bold mb-2">Elemento 3</h3>
                    <p class="text-gray-700 dark:text-gray-300">Descripción del elemento 3.</p>
                </li>
                <li class="bg-gray-100 dark:bg-gray-700 p-4 rounded-lg shadow-md">
                    <h3 class="text-lg font-bold mb-2">Elemento 4</h3>
                    <p class="text-gray-700 dark:text-gray-300">Descripción del elemento 4.</p>
                </li>
            </ul>

            <!-- Ejemplo de formulario con estilos -->
            <form action="#" method="POST" class="mt-8">
                @csrf
                <div class="mb-4">
                    <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                    <input type="text" id="nombre" name="nombre" class="form-input mt-1 block w-full">
                </div>
                <div class="mb-4">
                    <label for="correo" class="block text-sm font-medium text-gray-700">Correo Electrónico</label>
                    <input type="email" id="correo" name="correo" class="form-input mt-1 block w-full">
                </div>
                <div class="mb-4">
                    <label for="mensaje" class="block text-sm font-medium text-gray-700">Mensaje</label>
                    <textarea id="mensaje" name="mensaje" rows="4" class="form-textarea mt-1 block w-full"></textarea>
                </div>
                <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    Enviar Mensaje
                </button>
            </form>

            <!-- Ejemplo de modal con Tailwind CSS -->
            <!-- Botón para activar el modal -->
            <button id="abrirModal" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Abrir Modal
            </button>

            <!-- Modal oculto -->
            <div id="modal" class="fixed inset-0 flex items-center justify-center hidden">
                <div class="absolute inset-0 bg-gray-900 opacity-50"></div>
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">
                    <h2 class="text-xl font-semibold mb-4">Título del Modal</h2>
                    <p>Contenido del modal.</p>
                    <div class="flex justify-end mt-4">
                        <button id="cerrarModal" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded">
                            Cerrar
                        </button>
                    </div>
                </div>
            </div>
            <!-- Ejemplo de acordeón con Tailwind CSS -->
            <div class="border rounded-lg overflow-hidden mb-4">
                <div class="border-b px-4 py-2 bg-gray-100 dark:bg-gray-700">
                    <button class="w-full text-left font-semibold">Pregunta 1</button>
                </div>
                <div class="px-4 py-2">
                    <p>Respuesta a la pregunta 1.</p>
                </div>
                <div class="border-b px-4 py-2 bg-gray-100 dark:bg-gray-700">
                    <button class="w-full text-left font-semibold">Pregunta 2</button>
                </div>
                <div class="px-4 py-2">
                    <p>Respuesta a la pregunta 2.</p>
                </div>
            </div>


            <!-- Ejemplo de línea de tiempo con Tailwind CSS -->
            <div class="flex items-center mb-4">
                <div class="bg-gray-400 h-1 w-6"></div>
                <div class="bg-gray-400 rounded-full h-6 w-6 flex items-center justify-center">
                    1
                </div>
                <div class="ml-4">
                    <h3 class="font-semibold">Evento 1</h3>
                    <p>Descripción del evento 1.</p>
                </div>
            </div>

            <div class="flex items-center mb-4">
                <div class="bg-gray-400 h-1 w-6"></div>
                <div class="bg-gray-400 rounded-full h-6 w-6 flex items-center justify-center">
                    2
                </div>
                <div class="ml-4">
                    <h3 class="font-semibold">Evento 2</h3>
                    <p>Descripción del evento 2.</p>
                </div>
            </div>

        </div>
    </div>

    <!-- Scripts al final del cuerpo del documento -->
    <script>
        // Obtener elementos del DOM
        const abrirModalBtn = document.getElementById('abrirModal');
        const cerrarModalBtn = document.getElementById('cerrarModal');
        const modal = document.getElementById('modal');

        // Función para abrir el modal
        abrirModalBtn.addEventListener('click', function() {
            modal.classList.remove('hidden');
        });

        // Función para cerrar el modal
        cerrarModalBtn.addEventListener('click', function() {
            modal.classList.add('hidden');
        });
    </script>
</x-app-layout>


