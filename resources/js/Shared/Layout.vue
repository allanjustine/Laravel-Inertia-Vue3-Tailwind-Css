<template>
<nav class="bg-gray-800 p-2 flex justify-between items-center">
  <a href="/" class="text-white font-bold text-xl ml-10">Prelim Project</a>
  <div class="flex">
    <Link href="/" class="text-white hover:bg-gray-700 p-2 mr-3">Home</Link>
    <Link href="/employees" class="text-white hover:bg-gray-700 p-2 mr-3">Employee</Link>
    <Link href="/offices" class="text-white hover:bg-gray-700 p-2 mr-3">Offices</Link>
    <Link href="/items" class="text-white hover:bg-gray-700 p-2 mr-10">Items</Link>
  </div>
</nav>


<section>
    <div class="container mx-auto">
        <slot />
    </div>
</section>
</template>

<script setup>
import {Link} from '@inertiajs/inertia-vue3'
</script>
