<?php include "Views/Templates/header.php"?>
<div class="mt-16 w-full flex flex-col p-4 overflow-y-auto">
    <h2 class="text-sky-950 text-xl font-bold md:text-2xl">Reuniones</h2>
   <!-- calendar -->
   
    <div class="card flex not-prose p-4 w-full">
       <div class="m-auto w-full">
            <div>
                <div id='calendar'></div>
            </div>
        </div>
        
<button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class=" hidden text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
  Toggle modal
</button>

<!-- Main modal -->
    <!-- Modal con fondo oscuro -->
    <div id="authentication-modal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/50 bg-opacity-50 transition-opacity duration-300">
    <!-- Contenido del modal -->
    <div class="bg-white rounded-lg p-6 w-80 md:w-full max-w-md relative transform transition-all duration-300 scale-95 opacity-0 modal-content overflow-y-auto max-h-[90vh]">
        <!-- Botón cerrar -->
        <button data-modal-hide="authentication-modal" class="absolute top-2 right-2 text-3xl text-gray-500 hover:text-black text-2xl font-bold  ml-16">
            &times;
        </button>
        
        <h2 class="text-xl text-gray-600 font-semibold mb-4 text-center">Nuevo Evento</h2>

        <form id="form-evento" class="space-y-4">
        <input type="hidden" id="id">
        <div>
            <label for="fecha" class="block text-sm font-medium text-sky-700">Fecha</label>
            <input type="text" id="fecha" class="w-full border border-gray-300 rounded px-3 py-2" disabled>
        </div>
        <div>
            <label for="hora" class="block text-sm font-medium text-sky-700">Hora</label>
            <input type="hora" id="hora" class="w-full border border-sky-300 rounded px-3 py-2">
        </div>
        <div class="flex flex-col">
             <label for="doc" class="text-sky-700">Grupo</label>
                <select name="documento" id="grupo" class="p-2 border border-sky-300 rounded-md outline-none">
                    <option value="1">G101-F</option>
                    <option value="">G102-M</option>
                    <option value="" class="text-center" selected>----Seleccione----</option>
                </select>
        </div>
        <div class="flex flex-col">
                <label for="doc" class="text-sky-700">Lider</label>
                <select name="documento" id="lider" class="p-2 border border-sky-300 rounded-md outline-none">
                    <option value="1">Karina vargas Cruz</option>
                    <option value="">Juanito quispe</option>
                    <option value="" class="text-center" selected>----Seleccione----</option>
                </select>
        </div>
        <div>
            <label for="titulo" class="block text-sm font-medium text-sky-700">Típo de Reunion</label>
            <input type="text" id="titulo" class="w-full border border-sky-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300">
        </div>
        <div>
            <label for="descripcion" class="block text-sm font-medium text-sky-700">Detalles</label>
            <textarea id="descripcion" maxlength="100" class="h-24 w-full border border-sky-300 rounded px-3 py-2 resize-none" required></textarea>
        </div>
        <div>
            <label for="lugar" class="block text-sm font-medium text-sky-700">Observaciones</label>
            <textarea id="observaciones" maxlength="100" class="h-24 w-full border border-sky-300 rounded px-3 py-2 resize-none" required></textarea>
        </div>

 

        <div>
            <label for="color" class="block text-sm font-medium text-sky-700">Color</label>
            <input type="color" id="color" value="#404040" class="w-full h-10 rounded cursor-pointer">
        </div>

        <div class="text-center">
            <button type="submit" id="btnsave" class="bg-sky-800 text-white px-4 py-2 rounded hover:bg-blue-700">Guardar</button>
        </div>
        </form>
    </div>
    </div>
   </div>
   <!-- /calendar -->

</div>
        <script>
            flatpickr("#hora", {
                noCalendar: true,
                enableTime: true,
                time_24hr: false,
                dateFormat: "h:i K", // Ej: 02:30 PM
            });
        </script>
<?php include "Views/Templates/footer.php"?>