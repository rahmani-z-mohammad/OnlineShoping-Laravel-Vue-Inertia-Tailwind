 <template>
    <header class="">
 <Link href="/">Index</Link>&nbsp;
 <Link href="/category">Categories</Link>&nbsp;
 <Link href="/about">About</Link>
    </header>

 <slot>Default</slot>
 </template>

 <script setup>
    import { Link } from '@inertiajs/vue3'
</script>