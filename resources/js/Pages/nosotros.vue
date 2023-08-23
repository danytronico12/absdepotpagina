<template>
    <navhead ></navhead>

    <div
        class="block bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
        <img
            class=" w-full max-h-96 object-cover"
            src="/storage/image/pexel.jpg"
            alt="" />
        <div class="absolute text-center  inset-x-[15%] inset-y-[25%]">
            <h5 class="mb-2 text-4xl font-medium leading-tight text-white">
                Card title
            </h5>
            <p class="mb-4 text-xl text-white">
                This is a wider card with supporting text below as a natural
                lead-in to additional content. This content is a little bit
                longer.
            </p>
        </div>
    </div>
    <div
        class="block w-full bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
        <div class="p-12 text-center">
            <h5
                class="mb-2 text-4xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                Card title
            </h5>
            <p class="text-lg text-neutral-600 dark:text-neutral-200">
                Some quick example text to build on the card title and make up the
                bulk of the card's content.This is a wider card with supporting text below as a natural
                lead-in to additional content. This content is a little bit
                longer.This is a wider card with supporting text below as a natural
                lead-in to additional content. This content is a little bit
                longer.This is a wider card with supporting text below as a natural
                lead-in to additional content. This content is a little bit
                longer.
            </p>
        </div>
    </div>
    <div class="sm:flex sm:justify-center">
        <div
            class="flex flex-col  bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 sm:shrink-0 sm:grow sm:basis-0 sm:rounded-r-none">
                <img
                    class=" sm:rounded-tr-none object-cover h-1/2 w-full"
                    src="https://tecdn.b-cdn.net/img/new/standard/city/041.webp"
                    alt="Hollywood Sign on The Hill" />
            <div class="p-6 ">
                <h5
                    class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                   Mision
                </h5>
                <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                    This is a wider card with supporting text below as a natural
                    lead-in to additional content. This content is a little bit
                    longer.
                </p>
                <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                    <small>Last updated 3 mins ago</small>
                </p>
            </div>
        </div>
        <div
            class="flex  flex-col  bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 sm:shrink-0 sm:grow sm:basis-0 sm:rounded-none">
                <img
                    class=" sm:rounded-none object-cover h-1/2 w-full"
                    src="https://tecdn.b-cdn.net/img/new/standard/city/042.webp"
                    alt="Palm Springs Road" />
            <div class="p-6 ">
                <h5
                    class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                    Vision
                </h5>
                <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                    This card has supporting text below as a natural lead-in to
                    additional content.
                </p>
                <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                    <small>Last updated 3 mins ago</small>
                </p>
            </div>


        </div>

    </div>
    <div
        class="relative block w-full rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
        <img
            class="w-full h-96 object-cover saturate-50"
            src="/storage/image/banner.jpg"
            alt="" />
        <div class="absolute text-center  inset-x-[15%] inset-y-[25%]">
            <h5 class=" bg-white p-6 shadow-2xl md:text-5xl text-xl font-medium leading-tight text-red-900">
                Quieres ganar dinero? unete a nosotros en nuestro formulario de reclutamiento DDI
            </h5>
        </div>
    </div>
    <footerF></footerF>
</template>

<script setup>
import Navhead from "@/Components/navhead.vue";
import footerF from "@/Components/footerF.vue";
</script>

<style scoped>

</style>
