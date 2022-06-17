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
        aria-describedby="emailHelp" placeholder="Enter Name" required>
      <small v-if="form.errors.name"
       class="text-red-500 block mt-1 text-xs"
        v-text="form.errors.name"
        ></small>
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
        aria-describedby="emailHelp" placeholder="Enter email" required>
     <small v-if="form.errors.email"
       class="text-red-500 block mt-1 text-xs"
        v-text="form.errors.email"
        ></small>
    </div>
    <div class="form-group mb-6">
      <label class="form-label inline-block mb-2 text-gray-700">Password</label>
      <input v-model="form.password" type="password" class="form-control block
        w-full
        px-3

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
        placeholder="Password" >
        <small v-if="form.errors.password"
       class="text-red-500 block text-xs"
        v-text="form.errors.password"
        ></small>
    </div>


    <input type="submit" class="
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
      ease-in-out" :disabled="form.processing" value="Submit" />
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
import {useForm} from '@inertiajs/inertia-vue3'

let form=useForm({
    name:'',
    email:'',
    password:'',
});

let submit = ()=>{
   form.post('/users');
}
</script>

<style>

</style>
