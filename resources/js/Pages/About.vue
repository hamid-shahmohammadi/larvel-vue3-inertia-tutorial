<template>

        <h1>About</h1>
        {{ name }}
        <ul>
            <li v-for="f in framework" :key="f" v-text="f"></li>
        </ul>

</template>
<script>
import Layout from './Shared/Layout.vue';

export default{
    layout:Layout
}
</script>
<script setup>
import {Link} from '@inertiajs/inertia-vue3';


defineProps({name: String,framework:Array });
</script>

