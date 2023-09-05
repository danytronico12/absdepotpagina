<template>
    <!-- Main navigation container -->
    <nav
        class=" flex-no-wrap relative flex w-full items-center justify-between bg-[#FBFBFB] py-2 shadow-md shadow-black/5 dark:bg-neutral-600 dark:shadow-black/10 lg:flex-wrap lg:justify-start lg:py-4"
        data-te-navbar-ref>
        <div class="flex w-full flex-wrap items-center justify-between px-3">
            <!-- Hamburger button for mobile view -->
            <button
                class="block border-0 bg-transparent px-2 text-neutral-500 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 dark:text-neutral-200 lg:hidden"
                type="button"
                data-te-collapse-init
                data-te-target="#navbarSupportedContent1"
                aria-controls="navbarSupportedContent1"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <!-- Hamburger icon -->
                <span class="[&>svg]:w-7">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="h-7 w-7">
          <path
              fill-rule="evenodd"
              d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
              clip-rule="evenodd" />
        </svg>
      </span>
            </button>
            <a
                class="mb-4 ml-2 mr-5 mt-3 flex items-center text-neutral-900 hover:text-neutral-900 focus:text-neutral-900 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 lg:mb-0 lg:mt-0"
                href="/">
                <img
                    src="/storage/image/logo.png"
                    alt="TE Logo"
                    class="h-12"
                    loading="lazy" />
            </a>
            <!-- Collapsible navigation container -->
            <div
                class="!visible hidden flex-grow basis-[100%] items-center lg:!flex lg:basis-auto"
                id="navbarSupportedContent1"
                data-te-collapse-item>
                <!-- Logo -->

                <!-- Left navigation links -->
                <div class="!visible hidden   relative flex items-center" id="navbarSupportedContent1"
                     data-te-collapse-item>
                    <ul
                        class="list-style-none mr-auto flex flex-col pl-0 lg:flex-row"
                        data-te-navbar-nav-ref>
                        <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
                            <!-- Dashboard link -->
                            <a
                                class="text-neutral-500 transition duration-200 hover:text-neutral-700 hover:ease-in-out focus:text-neutral-700 disabled:text-black/30 motion-reduce:transition-none dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-zinc-400"
                                href="/#bajarok"
                                data-te-nav-link-ref
                            >Acerca de nosotros</a
                            >
                        </li>
                        <!-- Team link -->
                        <!-- Projects link -->
                        <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
                            <a
                                class="text-neutral-500 transition duration-200 hover:text-neutral-700 hover:ease-in-out focus:text-neutral-700 disabled:text-black/30 motion-reduce:transition-none dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
                                href="/ddi"
                                data-te-nav-link-ref
                            >DDi</a
                            >
                        </li>
                        <!-- Projects link -->
                        <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
                            <a
                                class="text-neutral-500 transition duration-200 hover:text-neutral-700 hover:ease-in-out focus:text-neutral-700 disabled:text-black/30 motion-reduce:transition-none dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
                                href="/contactenos"
                                data-te-nav-link-ref
                            >Contactenos</a
                            >
                        </li>
                    </ul>
                </div>

            </div>

            <!-- Right elements -->
            <div class=" hidden lg:!flex lg:basis-auto relative flex items-center">
                <ul
                    class="list-style-none mr-auto flex flex-col pl-0 lg:flex-row"
                    data-te-navbar-nav-ref>
                    <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
                        <!-- Dashboard link -->
                        <a
                            class="text-neutral-500 transition duration-200 hover:text-neutral-700 hover:ease-in-out focus:text-neutral-700 disabled:text-black/30 motion-reduce:transition-none dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-zinc-400"
                            href="/#bajarok"
                            data-te-nav-link-ref
                        >Acerca de nosotros</a
                        >
                    </li>
                    <!-- Team link -->
                    <!-- Projects link -->
                    <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
                        <a
                            class="text-neutral-500 transition duration-200 hover:text-neutral-700 hover:ease-in-out focus:text-neutral-700 disabled:text-black/30 motion-reduce:transition-none dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
                            href="/ddi"
                            data-te-nav-link-ref
                        >DDi</a
                        >
                    </li>
                    <!-- Projects link -->
                    <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
                        <a
                            class="text-neutral-500 transition duration-200 hover:text-neutral-700 hover:ease-in-out focus:text-neutral-700 disabled:text-black/30 motion-reduce:transition-none dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
                            href="/contactenos"
                            data-te-nav-link-ref
                        >Contactenos</a
                        >
                    </li>
                    <div v-if="$page.props.auth.user" class="navbar-end">
                        <div class="relative" data-te-dropdown-position="dropup">
                            <div class="flex">
                                <div class="flex-initial w-1/2 mt-10">
                                    <Dropdown align="right" width="48">
                                        <template #trigger>
                                        <span class="inline-flex rounded-md">
                                            <button
                                                type="button"
                                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150"
                                            >
                                                {{ $page.props.auth.user.name }}

                                                <svg
                                                    class="ml-2 -mr-0.5 h-4 w-4"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20"
                                                    fill="currentColor"
                                                >
                                                    <path
                                                        fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd"
                                                    />
                                                </svg>
                                            </button>
                                        </span>
                                        </template>

                                        <template #content>
                                            <DropdownLink :href="route('profile.edit')"> Profile </DropdownLink>
                                            <DropdownLink :href="route('logout')" method="post" as="button">
                                                Log Out
                                            </DropdownLink>
                                        </template>
                                    </Dropdown>
                                </div>
                                <div class="flex-initial w-1/2 ">
                                    <div class="avatar">
                                        <div class="w-12 rounded-full">
                                            <img class="w-16 rounded-full"
                                                 alt="Avatar" :src="'storage/'+$page.props.auth.user.avatar" />
                                        </div>
                                    </div>
                                </div>
                                <div class="badge">{{$page.props.auth.user.noti}}</div>
                            </div>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script setup>

import {onMounted, ref} from "vue";
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';

</script>

<style scoped>

</style>
