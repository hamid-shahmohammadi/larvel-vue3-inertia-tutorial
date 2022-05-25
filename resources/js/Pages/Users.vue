<template>
<Head>
    <title>users</title>
    <meta type="description" content="information this users" head-key="description">
</Head>

<div>

    <h1>Users</h1>

    <ul class="m-3">
        <li v-for="(user,index) in users.data" :key="index" v-text="user.name"></li>
    </ul>

    <Pagination :links="users.links" />

</div>

</template>

<script>
import Layout from './Shared/Layout.vue';



export default{
    layout:Layout
}
</script>

<script setup>
import Pagination from '@/Components/Pagination.vue';


defineProps({time: String,users:Object});
</script>
