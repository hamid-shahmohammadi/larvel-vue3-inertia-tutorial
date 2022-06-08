<template>
<div class="block p-6 rounded-lg shadow-lg bg-white m-6">
  <form @submit.prevent="submit">
      <div class="form-group mb-6">
      <label class="form-label inline-block mb-2 text-gray-700">Name</label>
      <input v-model="form.name" type="text" class="form-control
        block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
        aria-describedby="emailHelp" placeholder="Enter Name">
      <small id="emailHelp" class="block mt-1 text-xs text-gray-600">We'll never share your email with anyone
        else.</small>
    </div>
    <div class="form-group mb-6">
      <label class="form-label inline-block mb-2 text-gray-700">Email address</label>
      <input v-model="form.email" type="email" class="form-control
        block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
        aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="block mt-1 text-xs text-gray-600">We'll never share your email with anyone
        else.</small>
    </div>
    <div class="form-group mb-6">
      <label class="form-label inline-block mb-2 text-gray-700">Password</label>
      <input v-model="form.password" type="password" class="form-control block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
        placeholder="Password">
    </div>
    <div class="form-group form-check mb-6">
      <input type="checkbox"
        class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
        id="exampleCheck1">
      <label class="form-check-label inline-block text-gray-800" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="
      px-6
      py-2.5
      bg-blue-600
      text-white
      font-medium
      text-xs
      leading-tight
      uppercase
      rounded
      shadow-md
      hover:bg-blue-700 hover:shadow-lg
      focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
      active:bg-blue-800 active:shadow-lg
      transition
      duration-150
      ease-in-out">Submit</button>
  </form>
</div>
</template>

<script>
import Layout from '../Shared/Layout.vue';
export default{
    layout:Layout
}
</script>

<script setup>
import { Inertia } from '@inertiajs/inertia';
import {reactive} from 'vue';

let form=reactive({
    name:'',
    email:'',
    password:'',
});

let submit = ()=>{
   Inertia.post('/users',form);
}
</script>

<style>

</style>
