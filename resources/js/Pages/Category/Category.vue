<template>
    <div v-for="category in categories">
        <h3 >{{category.name }}</h3>
    </div>
</template>

<script setup>

defineProps({
    categories: Array
})
</script>