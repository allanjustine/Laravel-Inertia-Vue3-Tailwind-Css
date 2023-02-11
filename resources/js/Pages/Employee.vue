<template>
    <title>Prelim Project</title>
<section>
    <div class="mt-3">
        <span class="text-3xl">Employee List</span>
    </div>
    <table class="table-auto w-full text-left mt-5">
        <thead>
            <tr class="bg-gray-700 text-white">
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Last Name</th>
                <th class="px-4 py-2">First Name</th>
                <th class="px-4 py-2">Designation</th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-gray-100" v-for="employee in employees" :key="employee.id">
                <td class="border px-4 py-2">{{ employee.id }}</td>
                <td class="border px-4 py-2">{{ employee.last_name }}</td>
                <td class="border px-4 py-2">{{ employee.first_name }}</td>
                <td class="border px-4 py-2">{{ employee.designation }}</td>
            </tr>
        </tbody>
    </table>

</section>

</template>

<script setup>
import Layout from '../Shared/Layout.vue'
</script>


<script>
export default {
    layout: Layout,
    props: {
        employees: Array
    }
}

</script>
