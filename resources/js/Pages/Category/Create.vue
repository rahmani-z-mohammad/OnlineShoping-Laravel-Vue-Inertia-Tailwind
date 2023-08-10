<template>
    <Box class="ml-10 w-1/2">
        <div class="mb-5 flex place-content-end">
        <Link class="btn-outline order-last" :href="route('category.index')" as="button"> &lt;- Back</Link>
        </div>
    <form @submit.prevent="create">
         <div class="grid grid-cols-6 gap-4">
            <div class="col-span-6">
            <label class="label">Name</label>
            <input v-model="form.name" type="text" class="input"/>
            <div v-if="form.errors.name" class="input-error">
                {{ form.errors.name }}
            </div>
            </div>
        
            <div class="col-span-6">
            <button type="submit" class="btn-primary">Create</button>
            </div>
        </div>
     </form>
    </Box>
   </template>
   
     <script setup>
     import { useForm, Link } from '@inertiajs/vue3'
     import Box from '@/Components/UI/Box.vue';

     const form = useForm({
     name: null
     })

     const create = () => form.post(route('category.store'))
     </script>
   
 