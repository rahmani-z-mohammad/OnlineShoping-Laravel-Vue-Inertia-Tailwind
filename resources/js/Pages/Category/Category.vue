<template>
  
  <Box class="ml-10 w-1/2">
    <div class="mb-5 flex place-content-end">
    <button class="btn-outline order-last">+ Add New</button>
    </div>
    <table class="border-collapse table-auto text-sm w-full">
      <thead>
        <tr>
          <th class="th">#</th>
          <th class="th">Name</th>
          <th class="th">Edit</th>
          <th class="th">Delete</th>
        </tr>
      </thead>
      <tbody class="bg-white dark:bg-slate-800">
        <tr v-for="(category, index) in categories.data">
          <td class="td">{{ index + 1 }}</td>
          <td class="td">{{category.name }}</td>
          <td class="td"><button class="btn-outline">Edit</button></td>
          <td class="td"><button class="btn-outline">Delete</button></td>
        </tr>
      </tbody>
    </table>
    <div v-if="categories.data.length" class="w-full flex justify-center mt-4 mb-4">
        <Pagination :links="categories.links"/>
    </div>
  </Box>

</template>

<script setup>
import Box from '@/Components/UI/Box.vue';
import Pagination from '@/Components/UI/Pagination.vue';

defineProps({
    categories: Object
})
</script>