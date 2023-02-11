<template>
    <title>Prelim Project</title>
<section>
    <div class="mt-3">
        <span class="text-3xl">Item List</span>
    </div>
</section>
<table class="table-auto w-full text-left mt-5">
        <thead>
            <tr class="bg-gray-800 text-white">
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Office ID</th>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Description</th>
                <th class="px-4 py-2">Value</th>
                <th class="px-4 py-2">Status</th>
                <th class="px-4 py-2">Date Acquired</th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-gray-100" v-for="item in items" :key="item.id">
                <td class="border px-4 py-2">{{ item.id }}</td>
                <td class="border px-4 py-2">{{ item.office_id }}</td>
                <td class="border px-4 py-2">{{ item.name }}</td>
                <td class="border px-4 py-2">{{ item.description }}</td>
                <td class="border px-4 py-2">{{ item.value }}</td>
                <td class="border px-4 py-2">{{ item.status }}</td>
                <td class="border px-4 py-2">{{ item.date_acquired }}</td>
            </tr>
        </tbody>
    </table>
</template>

<script setup>
import Layout from '../Shared/Layout.vue'


</script>


<script>
export default {
    layout: Layout,
    props: {
        items: Array
    }
}

</script>
