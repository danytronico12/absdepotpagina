<template>
  <navhead></navhead>
  <div class="p-12">
    <div
      class="flex flex-col rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 w-full md:flex-row"
    >
      <img
        class="h-96 md:w-1/2 w-full rounded-t-lg object-cover md:h-auto md:!rounded-none md:!rounded-l-lg"
        src="/storage/image/pexel4.jpg"
        alt=""
      />
      <div class="flex w-full flex-col justify-start p-6">
        <div
          class="block w-full rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700"
        >
          <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
          </div>
          <form @submit.prevent="submit">
            <!--Sign in section-->
            <!-- Separator between social media sign in and email/password sign in -->
            <div
              class="my-4 flex items-center before:mt-0.5 before:flex-1 before:border-t before:border-neutral-300 after:mt-0.5 after:flex-1 after:border-t after:border-neutral-300"
            >
              <p class="mx-4 mb-0 text-center text-2xl font-semibold dark:text-white">
                Contactanos
              </p>
            </div>
            <div class="relative mb-6" data-te-input-wrapper-init>
              <input required maxlength="255"
                type="text"
                class="peer block min-h-[auto] w-full rounded border-2 bg-transparent px-3 py-[0.32rem] leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                id="exampleFormControlInput2"
                placeholder="Name"
                v-model="form.nombre"
              />
              <label
                for="exampleFormControlInput2"
                class="pointer-events-none mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[2.15] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.15rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.15rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
              >
                Nombre
              </label>
              <InputError class="mt-2" :message="form.errors.nombre" />
            </div>
            <div class="relative mb-6" data-te-input-wrapper-init>
              <input required maxlength="255"
                type="text"
                class="peer block min-h-[auto] w-full rounded border-2 bg-transparent px-3 py-[0.32rem] leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                id="exampleFormControlInput2"
                placeholder="Name"
                v-model="form.telefono"
              />
              <label
                for="exampleFormControlInput2"
                class="pointer-events-none mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[2.15] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.15rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.15rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
              >
                Telefono
              </label>
              <InputError class="mt-2" :message="form.errors.telefono" />
            </div>
            <!-- Email input -->
            <div class="relative mb-6" data-te-input-wrapper-init>
              <input required maxlength="255"
                type="email"
                class="peer block min-h-[auto] w-full rounded border-2 bg-transparent px-3 py-[0.32rem] leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                id="exampleFormControlInput2"
                placeholder="Email address"
                v-model="form.email"
              />
              <label
                for="exampleFormControlInput2"
                class="pointer-events-none mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[2.15] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.15rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.15rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
              >
                Email address
              </label>
              <InputError class="mt-2" :message="form.errors.email" />
            </div>
            <!--Message textarea-->
            <div class="relative mb-6" data-te-input-wrapper-init>
              <textarea required maxlength="10000000"
                class="peer block min-h-[auto] w-full rounded border-2 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                id="exampleFormControlTextarea13"
                rows="3"
                placeholder="Message"
                v-model="form.comentario"
              ></textarea>
              <label
                for="exampleFormControlTextarea13"
                class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
              >
                Comentario
              </label>
              <InputError class="mt-2" :message="form.errors.comentario" />
            </div>

            <!-- Login button -->
            <div class="text-center lg:text-left">
              <div class="form-control mt-6">
                <button
                  class="inline-block rounded bg-primary px-7 pb-2.5 pt-3 text-sm font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                >
                  Enviar
                </button>
              </div>
              <progress class="progress progress-primary w-56" v-if="form.progress" :value="form.progress.percentage" max="100"></progress>
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
