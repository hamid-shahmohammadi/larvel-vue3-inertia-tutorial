<template>
<Head>
    <title>users</title>
    <meta type="description" content="information this users" head-key="description">
</Head>

<div>
    <div class="flex justify-between mb-6">
        <div class="flex items-center">
            <h1>Users</h1>
            <Link href="/users/create" class="text-blue-500 text-sm ml-3">New User</Link>

        </div>
        <input v-model="search" type="text" placeholder="search..."
            class="border px-2 rounded-lg"/>
    </div>
    <ul class="m-3">
        <li v-for="(user,index) in users.data" :key="index" v-text="user.name"></li>
    </ul>

    <Pagination :links="users.links" />

</div>

</template>

<script>
import Layout from '../Shared/Layout.vue';
export default{
    layout:Layout
}
</script>

<script setup>
import {ref,watch} from 'vue';
import Pagination from '@/Components/Pagination.vue';
import { Inertia } from '@inertiajs/inertia';
let props=defineProps({time: String,users:Object,filters:Object});
let search=ref(props.filters.search);
watch(search,value=>{
    Inertia.get('/users',{search:value},{
        preserveState:true,
        replace:true
    })
});
</script>
