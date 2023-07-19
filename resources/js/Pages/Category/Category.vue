<template>
    <div v-for="category in categories">
        <h3 class="text-blue-600">{{category.name }}</h3>
    </div>
</template>

<script setup>

defineProps({
    categories: Array
})
</script>