
<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import Navhead from "@/Components/navhead.vue";
import footerF from "@/Components/footerF.vue";
import { Select, Modal, Datatable, Dropdown, Ripple, initTE } from "tw-elements";
import { onMounted, ref } from "vue";

const data = ref({
    usuarioTitle: "",
    usuario: "",
    seguidores: "",
    contenido: "",
    fecha: "",
    nacimiento: "",
    otro: "",
    redes: "",
    stories: "",
    posts: "",
});


defineProps({
    multi11: Array,
    multi22: Array,
});

const mostrar = (userData) => {
    document.getElementById('usuarioTitle').innerText = userData.usuario;
    data.value.usuario = userData.usuario;
    data.value.seguidores = userData.seguidores;
    data.value.contenido = userData.contenido;
    data.value.fecha = userData.created_at;
    data.value.nacimiento = userData.nacimiento;
    data.value.otro = userData.otro;
    data.value.redes = userData.redes;
    data.value.stories = userData.stories;
    data.seguidores.posts = userData.post;
};



onMounted(() => {
    initTE({ Select, Modal, Ripple, Dropdown, Datatable });
});

</script>


<template>
    <navhead class="fixed top-0 left-0 right-0"></navhead>
    <div class="p-6">
        <div class="mb-6">

            <h5 class="text-2xl font-semibold text-red-900 mb-3">
                Lista de participantes del reclutamiento DDI
            </h5>
            <div class="overflow-x-auto">
                <!-- filtro -->
                <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-6 w-full mb-4">
                    <form action="/dashboard" method="get">
                        <h5 class="text-2xl font-semibold text-gray-800 dark:text-white mb-4">Filtros</h5>
                        <div class="mb-3">
                            <label for="seguidoresCheckbox"
                                class="flex items-center cursor-pointer text-gray-800 dark:text-white">
                                <input type="checkbox" id="seguidoresCheckbox" name="seguidoresCheckbox"
                                    class="h-5 w-5 mr-2 text-primary dark:text-gray-300 border-neutral-300 rounded focus:ring-primary dark:focus:ring-gray-400"
                                   >
                                <span class="text-sm font-medium">Seguidores</span>
                            </label>
                        </div>
                        <div class="mb-3">
                            <label for="nombreCheckbox"
                                class="flex items-center cursor-pointer text-gray-800 dark:text-white">
                                <input id="nombreCheckbox" type="checkbox" name="nombreCheckbox"
                                    class="h-5 w-5 mr-2 text-primary dark:text-gray-300 border-neutral-300 rounded focus:ring-primary dark:focus:ring-gray-400"  >
                                <span class="text-sm font-medium">Usuario</span>
                            </label>
                        </div>
                        <button type="submit"
                            class="bg-primary text-white px-6 py-3 text-sm font-medium uppercase rounded hover:bg-primary-600 focus:ring-2 focus:ring-primary dark:focus:ring-gray-400 focus:outline-none">
                            Aplicar
                        </button>
                    </form>
                </div>




                <table class="min-w-full bg-white rounded-lg overflow-hidden">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="px-6 py-3 text-left">Seguidores</th>
                            <th class="px-6 py-3 text-left">Nacimiento</th>
                            <th class="px-6 py-3 text-left">Posts</th>
                            <th class="px-6 py-3 text-left">Stories</th>
                            <th class="px-6 py-3 text-left">Contenido</th>
                            <th class="px-6 py-3 text-left">Otros</th>
                            <th class="px-6 py-3 text-left">Usuario</th>
                            <th class="px-6 py-3 text-left">Redes</th>
                            <th class="px-6 py-3 text-left">Fecha de Registro</th>
                            <th class="px-6 py-3 text-left">Visualizar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="mul in multi11" :key="mul.id" class="odd:bg-gray-100">
                            <td class="px-6 py-4">{{ mul.seguidores }}</td>
                            <td class="px-6 py-4">{{ mul.nacimiento }}</td>
                            <td class="px-6 py-4">{{ mul.post }}</td>
                            <td class="px-6 py-4">{{ mul.stories }}</td>
                            <td class="px-6 py-4">{{ mul.contenido }}</td>
                            <td class="px-6 py-4">{{ mul.otro }}</td>
                            <td class="px-6 py-4">{{ mul.usuario }}</td>
                            <td class="px-6 py-4">{{ mul.redes }}</td>
                            <td class="px-6 py-4">{{ mul.created_at }}</td>
                            <td class="px-6 py-4 text-center" @click="mostrar(mul)">
                                <button type="button" class="text-blue-600 hover:text-blue-800 focus:outline-none"
                                    data-te-toggle="modal" data-te-target="#exampleModal" data-te-ripple-init
                                    data-te-ripple-color="light">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="mb-6">
            <h5 class="text-2xl font-semibold text-red-900 mb-3">
                Lista de sugerencias y comentarios
            </h5>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white rounded-lg overflow-hidden">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="px-6 py-3 text-left">Nombre</th>
                            <th class="px-6 py-3 text-left">Teléfono</th>
                            <th class="px-6 py-3 text-left">Correo</th>
                            <th class="px-6 py-3 text-left">Comentario</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="mul in multi22" :key="mul.id" class="odd:bg-gray-100">
                            <td class="px-6 py-4">{{ mul.nombre }}</td>
                            <td class="px-6 py-4">{{ mul.telefono }}</td>
                            <td class="px-6 py-4">{{ mul.email }}</td>
                            <td class="px-6 py-4">{{ mul.comentario }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div data-te-modal-init
        class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
        id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div data-te-modal-dialog-ref
            class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
            <div
                class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                <div
                    class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                    <!--Modal title-->
                    <h5 class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200"
                        id="exampleModalLabel">
                        Visualizando a
                        <p id="usuarioTitle"></p>
                    </h5>
                    <!--Close button-->
                    <button type="button"
                        class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                        data-te-modal-dismiss aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!--Modal body-->
                <div class="relative flex-auto p-4" data-te-modal-body-ref>
                    <div class="w-full max-w-md mx-auto">
                        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="usuario">Usuario:</label>
                                <input v-model="data.usuario"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="usuario" type="text" disabled />
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2"
                                    for="seguidores">Seguidores:</label>
                                <input v-model="data.seguidores"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="seguidores" type="text" disabled />
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="nacimiento">Fecha de
                                    Nacimiento:</label>
                                <input v-model="data.nacimiento"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="nacimiento" type="text" disabled />
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="posts">Posts:</label>
                                <input v-model="data.posts"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="posts" type="text" disabled />
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="stories">Stories:</label>
                                <input v-model="data.stories"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="stories" type="text" disabled />
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="contenido">Contenido:</label>
                                <input v-model="data.contenido"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="contenido" type="text" disabled />
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="otros">Otros:</label>
                                <input v-model="data.otros"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="otros" type="text" disabled />
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="redes">Redes:</label>
                                <input v-model="data.redes"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="redes" type="text" disabled />
                            </div>
                            <div class="mb-6">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="fecha">Fecha de
                                    Registro:</label>
                                <input v-model="data.fecha"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="fecha" type="text" disabled />
                            </div>
                        </form>
                    </div>
                </div>

                <!--Modal footer-->
                <div
                    class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                    <button type="button"
                        class="inline-block rounded bg-primary-100 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200"
                        data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>

    <footerF></footerF>
</template>

