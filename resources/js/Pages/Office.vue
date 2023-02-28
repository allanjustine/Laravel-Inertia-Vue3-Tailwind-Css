<template>
    <title>Prelim Project</title>
<section>
    <div class="mt-3">
        <span class="text-3xl">Office List</span>
    </div>
</section>
<div class="flex justify-center">
    <table class="table-auto w-full text-left mt-3">
        <thead>
            <tr class="bg-violet-700 text-white">
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Office Head</th>
                <th class="px-4 py-2">Building</th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-violet-100" v-for="office in offices" :key="office.id">
                <td class="border px-4 py-2">{{ office.id }}</td>
                <td class="border px-4 py-2">{{ office.name }}</td>
                <td class="border px-4 py-2">{{ office.office_head }}</td>
                <td class="border px-4 py-2">{{ office.building }}</td>
            </tr>
        </tbody>
    </table>
</div>

</template>

<script setup>
import Layout from '../Shared/Layout.vue'


</script>


<script>
export default {
    layout: Layout,
    props: {
        offices: Array
    }
}

</script>
