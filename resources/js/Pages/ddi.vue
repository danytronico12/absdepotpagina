<template>
    <navhead ></navhead>
    <div
        class="block bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
        <img
            class=" w-full h-full "
            src="/storage/image/222.png"
            alt="" />
    </div>
    <div class="flex h-full items-center justify-center py-3 px-6">
        <div style="background: #fff" class="grid grid-cols-1 rounded-[5px] px-2 md:p-6 p-2 text-center rounded-xs bg-white w-full md:w-3/4 text-red-600 md:px-12">
            <img
                class="rounded-t-lg"
                src="/storage/image/ok.png"
                alt="Hollywood Sign on The Hill" />
        </div>
    </div>
    <div class="grid-cols-1 h-full mb-16 sm:grid md:grid-cols-2 lg:grid-cols-4 ">
        <div
            class="mx-3 mt-6 flex flex-col self-start rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 sm:shrink-0 sm:grow sm:basis-0">
            <a href="#!">
                <img
                    class="rounded-t-lg h-96"
                    src="/storage/image/26.png"
                    alt="Hollywood Sign on The Hill" />
            </a>
        </div>
        <div
            class="mx-3 mt-6 flex flex-col self-start rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 sm:shrink-0 sm:grow sm:basis-0">
            <a href="#!">
                <img
                    class="rounded-t-lg h-96"
                    src="/storage/image/27.png"
                    alt="Hollywood Sign on The Hill" />
            </a>
        </div>
        <div
            class="mx-3 mt-6 flex flex-col self-start rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 sm:shrink-0 sm:grow sm:basis-0">
            <a href="#!">
                <img
                    class="rounded-t-lg h-96"
                    src="/storage/image/28.png"
                    alt="Hollywood Sign on The Hill" />
            </a>
        </div>
        <div
            class="mx-3 mt-6 flex flex-col self-start rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 sm:shrink-0 sm:grow sm:basis-0">
            <a href="#!">
                <img
                    class="rounded-t-lg h-96"
                    src="/storage/image/29.png"
                    alt="Hollywood Sign on The Hill" />
            </a>
        </div>
    </div>
    <div class="flex h-full items-center justify-center py-3 px-6">
        <div style="background: #fff" class="grid grid-cols-1 rounded-[5px] border-blue-900 px-2 md:p-6 p-2 text-center rounded-xs bg-white w-full md:w-3/4 text-red-600 md:px-12">
            <a href="/formularioddi">
            <img
                class="rounded-t-lg mx-auto h-36"
                src="/storage/image/okok-02.png"
                alt="Hollywood Sign on The Hill" /></a>
        </div>
    </div>
    <footerF></footerF>
</template>

<script setup>
    import Navhead from "@/Components/navhead.vue";
    import footerF from "@/Components/footerF.vue";
    import {
        Carousel,
        Ripple,
        initTE,
        Collapse,
        Dropdown,
    } from "tw-elements";

    import {onMounted, ref} from "vue";
    onMounted(() =>{
        initTE({ Carousel,Ripple,Collapse,Dropdown });
    })
</script>

<style scoped>
/* Estilos para la alerta aquí */
.alert {
  padding: 10px;
  margin-top: 10px;
  border-radius: 4px;
  font-weight: bold;
  text-align: center;
}

.alert-success {
  background-color: #4CAF50; /* Color verde para éxito */
  color: white;
}

.alert-error {
  background-color: #f44336; /* Color rojo para error */
  color: white;
}
</style>
