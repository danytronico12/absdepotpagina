<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import Navhead from "@/Components/navhead.vue";
import footerF from "@/Components/footerF.vue";
import {
    Dropdown,
    Ripple,
    initTE,
} from "tw-elements";
import {onMounted, ref} from "vue";
onMounted(() =>{
    initTE({ Ripple, Dropdown });
})
</script>

<template>
    <navhead class="fixed top-0 left-0 right-0 "></navhead>

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">You're logged in!</div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
    <footerF></footerF>

</template>
