 <template>
   <header class="border-b border-gray-200 dark:border-gray-700 dark:bg-gray-800 bg-slate-200 w-full mb-10">
  <div class="container mx-auto">
    <nav class="p-4 flex items-center justify-between ">
      <div class="space-x-4">
        <Link :href="route('index')"> Home</Link>
        <Link :href="route('category.index')"> Categories</Link>
      </div>
      <div class="flex items-center gap-4">
        <Link :href="route('index')" class="text-sm text-gray-500">{{ user.name }}</Link>
      </div>
      <div class="flex items-center gap-3">
        <Link :href="route('login')"> Login</Link>
      </div>
    </nav>
  </div>
</header>

<main class="container mx-auto p-4 w-full">

  <div v-if="flashSuccess" class="mb-4 border rounded-md shadow-sm border-green-600 dark:border-green-900 bg-green-50 dark:bg-green-900 p-2">
  {{ flashSuccess }}
  </div>

  <div v-if="flashDanger" class="mb-4 border rounded-md shadow-sm border-red-600 dark:red-green-900 bg-red-50 dark:bg-red-900 p-2">
  {{ flashDanger }}
  </div>

 <slot>Default</slot>
</main>
 </template>

 <script setup>
    //with usePage function we can have access to all data that we share through the Inertia Laravel Middleware
  import {Link, usePage} from '@inertiajs/vue3';
  import { computed } from '@vue/reactivity';


  // page.props.flash.success
  const page = usePage()

  const flashSuccess = computed(
    () => page.props.flash.success
  )

  const flashDanger = computed(
    () => page.props.flash.danger
  )

  const user = computed(
    () => page.props.user
  )
</script>