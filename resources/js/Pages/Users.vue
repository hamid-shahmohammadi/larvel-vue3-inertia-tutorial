<template>
<div>

    <h1>Users</h1>

    <div style="margin-top:800px">
        <p>{{time}}</p>
        <Link href="/users" class="text-blue-500" preserve-scroll>refresh</Link>
    </div>

</div>

</template>



<script setup>


import { Link } from '@inertiajs/inertia-vue3';
defineProps({time: String});
</script>
