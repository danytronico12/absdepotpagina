<script setup>
import { Head, Link } from '@inertiajs/vue3';
import navhead from "@/Components/navhead.vue";
import Navhead from "@/Components/navhead.vue";
import footerF from "@/Components/footerF.vue";
import {
    Carousel,
    initTE,
} from "tw-elements";

import {onMounted, ref} from "vue";
onMounted(() =>{
    initTE({ Carousel });
})
</script>

<template>
    <div class="relative">
    <navhead class="fixed top-0 left-0 right-0 "></navhead>
    <div
        id="carouselExampleIndicators"
        class="relative"
        data-te-carousel-init
        data-te-ride="carousel">
        <!--Carousel indicators-->
        <div
            class="absolute bottom-0 left-0 right-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0"
            data-te-carousel-indicators>
            <button
                type="button"
                data-te-target="#carouselExampleIndicators"
                data-te-slide-to="0"
                data-te-carousel-active
                class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                aria-current="true"
                aria-label="Slide 1"></button>
            <button
                type="button"
                data-te-target="#carouselExampleIndicators"
                data-te-slide-to="1"
                class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                aria-label="Slide 2"></button>
            <button
                type="button"
                data-te-target="#carouselExampleIndicators"
                data-te-slide-to="2"
                class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                aria-label="Slide 3"></button>
        </div>

        <!--Carousel items-->
        <div
            class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
            <!--First item-->
            <div
                class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                data-te-carousel-item
                data-te-carousel-active>
                <div
                    class="block w-full bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                    <img
                        class="w-full"
                        src="/storage/image/1.png"
                        alt="" />

                </div>
            </div>
            <!--Second item-->
            <div
                class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                data-te-carousel-item>
                <div
                    class="block w-full bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                    <img
                        class="w-full"
                        src="/storage/image/2.png"
                        alt="" />

                </div>
            </div>
            <!--Third item-->
            <div
                class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                data-te-carousel-item>
                <div
                    class="block w-full  bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                    <img
                        class="w-full "
                        src="/storage/image/3.png"
                        alt="" />
                </div>
            </div>
            <div
                class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                data-te-carousel-item>
                <div
                    class="block w-full  bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                    <img
                        class="w-full "
                        src="/storage/image/4.png"
                        alt="" />
                </div>
            </div>
        </div>

        <!--Carousel controls - prev item-->
        <button
            class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
            type="button"
            data-te-target="#carouselExampleIndicators"
            data-te-slide="prev">
    <span class="inline-block h-8 w-8">
      <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="currentColor"
          class="h-6 w-6">
        <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M15.75 19.5L8.25 12l7.5-7.5" />
      </svg>
    </span>
            <span
                class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
            >Previous</span
            >
        </button>
        <!--Carousel controls - next item-->
        <button
            class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
            type="button"
            data-te-target="#carouselExampleIndicators"
            data-te-slide="next">
    <span class="inline-block h-8 w-8">
      <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="currentColor"
          class="h-6 w-6">
        <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
      </svg>
    </span>
            <span
                class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
            >Next</span
            >
        </button>
    </div>

    <div id="bajarok"
        class=" p-16 flex flex-col rounded-lg bg-neutral-300 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700  md:flex-row">
        <img
            class="h-1/2 w-1/2 rounded-t-lg object-cover md:h-auto md:!rounded-none md:!rounded-l-lg"
            src="https://tecdn.b-cdn.net/wp-content/uploads/2020/06/vertical.jpg"
            alt="" />
        <div class="flex flex-col my-auto justify-start p-6">
            <h5
                class="mb-2 text-5xl font-medium text-neutral-800 dark:text-neutral-50">
                Card title
            </h5>
            <p class="mb-4 text-2xl text-neutral-600 dark:text-neutral-200">
                This is a wider card with supporting text below as a natural lead-in
                to additional content. This content is a little bit longer.
            </p>

        </div>
    </div>
    <div
        class=" p-16 flex flex-col rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700  md:flex-row">

        <div class="flex flex-col my-auto justify-start p-6">
            <h5
                class="mb-2 text-5xl font-medium text-neutral-800 dark:text-neutral-50">
                Card title
            </h5>
            <p class="mb-4 text-2xl text-neutral-600 dark:text-neutral-200">
                This is a wider card with supporting text below as a natural lead-in
                to additional content. This content is a little bit longer.
            </p>

        </div>
        <img
            class="h-1/2 w-1/2 rounded-t-lg object-cover md:h-auto md:!rounded-none md:!rounded-l-lg"
            src="https://tecdn.b-cdn.net/img/new/standard/nature/182.jpg"
            alt="" />
    </div>
        <div class="relative overflow-hidden bg-cover bg-no-repeat bg-blue-600" style="
        background-position: 50%;
        height: 900px;
      ">
            <div
                class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsla(0,0%,0%,0.75)] bg-fixed">
                <div class="flex h-full items-center justify-center">
                    <div class="p-6 text-center rounded-xl bg-white w-1/3 text-red-600 md:px-12">
                        <h1 class="mt-2 mb-16 text-5xl font-black  md:text-6xl xl:text-7xl">
                            Se parte de un equipo TOP
                        </h1>
                        <h4 class="mt-2 mb-16 text-xl font-medium text-black tracking-tight md:text-2xl xl:text-2xl">
                            Un DDI es un influencer que genera ingresos directos, en dinero por compartir su contenido los beneficios que ofrecen
                            ABS DEPOT como app. como DDi tendras un enlace con el que tus seguidores accedan a la APP, hagan compras y listo!
                        </h4>
                        <button type="button"
                                class="rounded-lg border-light bg-red-600 text-white border-neutral-50 px-[46px] pt-[14px] pb-[12px] text-sm font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-100 hover:bg-neutral-100 hover:bg-opacity-10 hover:text-neutral-100 focus:border-neutral-100 focus:text-neutral-100 focus:outline-none focus:ring-0 active:border-neutral-200 active:text-neutral-200"
                                data-te-ripple-init data-te-ripple-color="light">
                            Recibes un % por cada compra realizada
                        </button>
                    </div>
                </div>
            </div>
        </div>
    <footerF></footerF>
    </div>
</template>

<style>
.bg-dots-darker {
    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
}
@media (prefers-color-scheme: dark) {
    .dark\:bg-dots-lighter {
        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
    }
}
</style>
