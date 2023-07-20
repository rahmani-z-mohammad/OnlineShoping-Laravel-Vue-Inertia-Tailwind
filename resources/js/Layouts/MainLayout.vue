 <template>
   <header class="border-b border-gray-200 dark:border-gray-700 dark:bg-gray-800 bg-slate-200 w-full mb-10">
  <div class="container mx-auto">
    <nav class="p-4 flex items-center justify-between ">
      <div class="text-lg space-x-4">
        <Link :href="route('index')"> Home</Link>
        <Link :href="route('category.index')"> Categories</Link>
      </div>
    </nav>
  </div>
</header>

 <slot>Default</slot>
 
 </template>

 <script setup>
    import { Link } from '@inertiajs/vue3'
</script>