<template>
  
  <Box class="ml-10 w-1/2">
    <div class="mb-5 flex place-content-end">
    <Link class="btn-outline order-last" :href="route('category.create')" as="button">+ Add New</Link>
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
          <td class="td"><Link class="btn-outline" :href="route('category.edit', {category: category.id})" as="button">Edit</Link></td>
          <td class="td"><Link class="btn-outline" :href="route('category.destroy', {category: category.id})" method="delete" as="button">Delete</Link></td>
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
import { Link } from '@inertiajs/vue3'

defineProps({
    categories: Object
})
</script>