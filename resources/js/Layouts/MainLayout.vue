 <template>
 <Link href="/">Index</Link>&nbsp;
 <Link href="/about">About</Link>

 <slot>Default</slot>
 </template>

 <script setup>
    import { Link } from '@inertiajs/vue3'
</script>