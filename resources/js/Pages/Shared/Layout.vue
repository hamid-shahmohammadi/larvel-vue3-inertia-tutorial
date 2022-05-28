<template>
<Head>
    <title>APP</title>
    <meta type="description" content="information this app" head-key="description">
</Head>
<section class="p-6 bg-gray-200">
    <header class="flex justify-between">
        <h1 class="font-bold text-lg">My App</h1>
        <!-- <input type="text" value="my app" />
        <p class="text-sm ml-4">{{name}}</p> -->

    <Nav />
    </header>
</section>
<section class="p-6">
    <div class="mx-w-3xl mx-auto">
        <slot />
    </div>
</section>
</template>
<script setup>
import { computed } from 'vue';
import { usePage,Head } from '@inertiajs/inertia-vue3';
import Nav from './Nav.vue';

const name=computed(()=> usePage().props.value.auth.user.name)



</script>
