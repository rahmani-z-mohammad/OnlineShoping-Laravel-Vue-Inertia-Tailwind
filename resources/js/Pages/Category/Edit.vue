<template>
    <Box class="ml-10 w-1/2">
        <div class="mb-5 flex place-content-end">
        <Link class="btn-outline order-last" :href="route('category.index')" as="button"> &lt;- Back</Link>
        </div>
    <form @submit.prevent="update">
         <div class="grid grid-cols-6 gap-4">
            <div class="col-span-6">
            <label class="label">Name</label>
            <input v-model="form.name" type="text" class="input"/>
            </div>
        
            <div class="col-span-6">
            <button type="submit" class="btn-primary">update</button>
            </div>
        </div>
     </form>
    </Box>
   </template>
   
     <script setup>
     import { useForm, Link } from '@inertiajs/vue3'
     import Box from '@/Components/UI/Box.vue';

     const props = defineProps({
        category: Array
     })

     const form = useForm({
     name: props.category.name
     })

     const update = () => form.put(route('category.update', {category: props.category.id}))
     </script>
   
 