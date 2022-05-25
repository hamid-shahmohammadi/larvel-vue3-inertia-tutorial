<template>
<div class="flex justify-center">
  <nav aria-label="Page navigation example">
    <ul class="flex list-style-none">
      <li v-for="(link,index) in links" :key="index" class="page-item">
          <Component
          :is="link.url ? 'Link' : 'span'"
          class="page-link relative block py-1.5 px-3 rounded border-0 bg-transparent outline-none transition-all duration-300 rounded hover:text-gray-800 focus:shadow-none"
          :class="{'text-gray-500':!link.url,'font-bold':link.active}"
          :href="link.url" v-html="link.label" />

     </li>

    </ul>
  </nav>
</div>
</template>

<script setup>
defineProps({links:Array})
</script>

<style>

</style>
