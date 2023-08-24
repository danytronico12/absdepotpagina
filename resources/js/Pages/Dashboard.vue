<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import Navhead from "@/Components/navhead.vue";
import footerF from "@/Components/footerF.vue";
import {
    Datatable,
    Dropdown,
    Ripple,
    initTE,

} from "tw-elements";
import {onMounted, ref} from "vue";
defineProps({
    multi11: Array,
    multi22: Array

});

onMounted(() =>{
    initTE({ Ripple, Dropdown, Datatable });
})

</script>

<template>
    <navhead class="fixed top-0 left-0 right-0 "></navhead>
    <div class="p-6">
        <h5 class=" bg-white p-6 shadow-lg md:text-xl text-xl font-medium leading-tight text-red-900">
            Lista de participante del reclutamiento DDI

        </h5>
        <div data-te-datatable-init class="p-12">
            <table>
                <thead>
                <tr>
                    <th>Seguidores</th>
                    <th>Nacimiento</th>
                    <th>Posts</th>
                    <th>Stories</th>
                    <th>Contenido</th>
                    <th>Otros</th>
                    <th>Usuario</th>
                    <th>Redes</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="mul in multi11">
                    <td>{{mul.seguidores}}</td>
                    <td>{{mul.nacimiento}}</td>
                    <td>{{mul.post}}</td>
                    <td>{{mul.stories}}</td>
                    <td>{{mul.contenido}}</td>
                    <td>{{mul.otro}}</td>
                    <td>{{mul.usuario}}</td>
                    <td>{{mul.redes}}</td>
                </tr>
                </tbody>
            </table>
        </div>
        <h5 class=" bg-white p-6 shadow-lg md:text-xl text-xl font-medium leading-tight text-red-900">
            Lista de sugerencias y comentarios
        </h5>
        <div data-te-datatable-init class="p-12">
            <table>
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                    <th>Comentario</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="mul in multi22">
                    <td>{{mul.nombre}}</td>
                    <td>{{mul.telefono}}</td>
                    <td>{{mul.email}}</td>
                    <td>{{mul.comentario}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <footerF></footerF>

</template>
