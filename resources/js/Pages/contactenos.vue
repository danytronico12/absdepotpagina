<template>
  <navhead></navhead>
  <div class="p-12">
    <div style="background: #1d3458"
      class="flex flex-col border rounded-lg  shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 w-full md:flex-row"
    >
        <div class="flex w-full flex-col justify-center align-middle p-6">
            <p class="mx-4 mb-0 text-center text-2xl md:text-5xl font-semibold dark:text-white" style="color: #fff">
                Contactanos:
            </p>
        </div>
        <div class="flex w-full flex-col justify-start p-6">
        <div
          class="block w-full  p-6  dark:bg-neutral-700"
        >
          <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
          </div>
          <form @submit.prevent="submit">
            <!--Sign in section-->
            <!-- Separator between social media sign in and email/password sign in -->
              <div class="relative mb-3">
                  <input
                      type="text"
                      class="peer m-0 block h-[58px] w-full rounded border border-b-white border-solid border-transparent bg-transparent bg-clip-padding px-3 py-4 text-base font-normal leading-tight text-neutral-700 transition duration-200 ease-linear placeholder:text-transparent focus:border-primary focus:pb-[0.625rem] focus:pt-[1.625rem] focus:text-neutral-700 focus:outline-none peer-focus:text-primary dark:border-neutral-600 dark:text-neutral-200 dark:focus:border-primary dark:peer-focus:text-primary [&:not(:placeholder-shown)]:pb-[0.625rem] [&:not(:placeholder-shown)]:pt-[1.625rem]"
                      id="floatingInput"
                      placeholder="name@example.com"                 v-model="form.nombre"
                  />
                  <label
                      for="floatingInput"
                      class="pointer-events-none absolute left-0 top-0 origin-[0_0] border border-solid border-transparent px-3 py-4 text-neutral-500 transition-[opacity,_transform] duration-200 ease-linear peer-focus:-translate-y-2 peer-focus:translate-x-[0.15rem] peer-focus:scale-[0.85] peer-focus:text-primary peer-[:not(:placeholder-shown)]:-translate-y-2 peer-[:not(:placeholder-shown)]:translate-x-[0.15rem] peer-[:not(:placeholder-shown)]:scale-[0.85] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                  >Nombre</label
                  >
              </div>
              <InputError class="mt-2" :message="form.errors.nombre" />
              <div class="relative mb-3">
                  <input
                      type="number"
                      class="peer m-0 block h-[58px] w-full rounded  border border-b-white border-solid border-transparent bg-transparent bg-clip-padding px-3 py-4 text-base font-normal leading-tight text-neutral-700 transition duration-200 ease-linear placeholder:text-transparent focus:border-primary focus:pb-[0.625rem] focus:pt-[1.625rem] focus:text-neutral-700 focus:outline-none peer-focus:text-primary dark:border-neutral-600 dark:text-neutral-200 dark:focus:border-primary dark:peer-focus:text-primary [&:not(:placeholder-shown)]:pb-[0.625rem] [&:not(:placeholder-shown)]:pt-[1.625rem]"
                      id="floatingInput"
                      placeholder="name@example.com"                 v-model="form.telefono"
                  />
                  <label
                      for="floatingInput"
                      class="pointer-events-none absolute left-0 top-0 origin-[0_0] border border-solid border-transparent px-3 py-4 text-neutral-500 transition-[opacity,_transform] duration-200 ease-linear peer-focus:-translate-y-2 peer-focus:translate-x-[0.15rem] peer-focus:scale-[0.85] peer-focus:text-primary peer-[:not(:placeholder-shown)]:-translate-y-2 peer-[:not(:placeholder-shown)]:translate-x-[0.15rem] peer-[:not(:placeholder-shown)]:scale-[0.85] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                  >Numero de contacto</label
                  >
              </div>
              <InputError class="mt-2" :message="form.errors.telefono" />

              <div class="relative mb-3">
                  <input
                      type="email"
                      class="peer m-0 block h-[58px] w-full rounded  border border-b-white border-solid border-transparent bg-transparent bg-clip-padding px-3 py-4 text-base font-normal leading-tight text-neutral-700 transition duration-200 ease-linear placeholder:text-transparent focus:border-primary focus:pb-[0.625rem] focus:pt-[1.625rem] focus:text-neutral-700 focus:outline-none peer-focus:text-primary dark:border-neutral-600 dark:text-neutral-200 dark:focus:border-primary dark:peer-focus:text-primary [&:not(:placeholder-shown)]:pb-[0.625rem] [&:not(:placeholder-shown)]:pt-[1.625rem]"
                      id="floatingInput"
                      placeholder="name@example.com"                 v-model="form.comentario"
                  />
                  <label
                      for="floatingInput"
                      class="pointer-events-none absolute left-0 top-0 origin-[0_0] border border-solid border-transparent px-3 py-4 text-neutral-500 transition-[opacity,_transform] duration-200 ease-linear peer-focus:-translate-y-2 peer-focus:translate-x-[0.15rem] peer-focus:scale-[0.85] peer-focus:text-primary peer-[:not(:placeholder-shown)]:-translate-y-2 peer-[:not(:placeholder-shown)]:translate-x-[0.15rem] peer-[:not(:placeholder-shown)]:scale-[0.85] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                  >Comentario</label
                  >
              </div>
              <InputError class="mt-2" :message="form.errors.comentario" />

              <div class="relative mb-3">
                  <input
                      type="email"
                      class="peer m-0 block h-[58px] w-full rounded  border border-b-white border-solid border-transparent bg-transparent bg-clip-padding px-3 py-4 text-base font-normal leading-tight text-neutral-700 transition duration-200 ease-linear placeholder:text-transparent focus:border-primary focus:pb-[0.625rem] focus:pt-[1.625rem] focus:text-neutral-700 focus:outline-none peer-focus:text-primary dark:border-neutral-600 dark:text-neutral-200 dark:focus:border-primary dark:peer-focus:text-primary [&:not(:placeholder-shown)]:pb-[0.625rem] [&:not(:placeholder-shown)]:pt-[1.625rem]"
                      id="floatingInput"
                      placeholder="name@example.com"                 v-model="form.email"
                  />
                  <label
                      for="floatingInput"
                      class="pointer-events-none absolute text-sm mt-12 md:mt-2 left-0 top-0 origin-[0_0] border border-solid border-transparent px-3 py-4 text-neutral-500 transition-[opacity,_transform] duration-200 ease-linear peer-focus:-translate-y-2 peer-focus:translate-x-[0.15rem] peer-focus:scale-[0.85] peer-focus:text-primary peer-[:not(:placeholder-shown)]:-translate-y-2 peer-[:not(:placeholder-shown)]:translate-x-[0.15rem] peer-[:not(:placeholder-shown)]:scale-[0.85] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                  > Puedes enviar un correo directo a absdepot1@gmail.com @absdepot</label
                  >
              </div>
              <InputError class="mt-2" :message="form.errors.email" />


              <!-- Login button -->
            <div class="text-center md:mt-6 mt-24 lg:text-left">
              <div class="form-control mt-6">
                <button
                  class="inline-block rounded bg-primary px-7 pb-2.5 pt-3 text-sm font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                >
                  Enviar
                </button>
              </div>
              <progress class="progress progress-primary w-56" v-if="form.progress" :value="form.progress.percentage" max="100"></progress>
            </div>

                  <div class="grid grid-cols-12 ml-6 text-white mt-20 text-3xl justify-center align-middle ">

                      <div> <svg
                              xmlns="http://www.w3.org/2000/svg"
                              class="h-6 w-6 mt-2"
                              fill="currentColor"
                              viewBox="0 0 24 24">
                              <path
                                  d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                      </svg></div> <div>@absdepot</div>
                  </div>
               <!-- La alerta -->
            <div v-if="alertMessage" class="alert" :class="success == true  ? 'alert-success' : 'alert-error'">
            {{ alertMessage }}
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <footerF></footerF>
</template>

<script setup>
import Navhead from "@/Components/navhead.vue";
import footerF from "@/Components/footerF.vue";
import InputError from '@/Components/InputError.vue';
import { onMounted, ref } from "vue";
import { useForm } from "@inertiajs/vue3";
import { Ripple, Input, initTE,Collapse,
  Dropdown,
 } from "tw-elements";

onMounted(() => {
    initTE({ Input, Ripple,Dropdown,Collapse });
})

defineProps({
    status: String,
});

const form = useForm({
    nombre: '',
    email: '',
    telefono: '',
    comentario: ''
});
const alertMessage = ref(''); // Estado para el mensaje de la alerta
const success = ref('');

const submit = () => {
    form.post(route('contactenos'), {
        onFinish: (response) => {
            response.data['nombre'] = response.data['nombre'].trim();
            response.data['email'] = response.data['email'].trim();
            response.data['telefono'] = response.data['telefono'].trim();
            response.data['comentario'] = response.data['comentario'].trim();

            if (response.data['nombre'] != '' && response.data['email'] != '' && response.data['comentario'] != '' && response.data['telefono'] != '') {
                alertMessage.value = '¡Formulario enviado con éxito!';
                success.value = true;
                form.reset();
            } else {
                alertMessage.value = 'Hubo un error al enviar el formulario.';
                success.value = false;

            }
        },
    });
};
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
