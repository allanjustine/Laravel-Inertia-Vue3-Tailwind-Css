<template>
    <title>Prelim Project</title>
<section>
    <div class="mt-3">
        <span class="text-3xl">Employee List</span>
    </div>
</section>
    <div class="flex justify-center">
        <table class="table-auto w-7/12 text-left">
            <thead>
                <tr class="bg-violet-700 text-white">
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">Last Name</th>
                    <th class="px-4 py-2">First Name</th>
                    <th class="px-4 py-2">Designation</th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-violet-100" v-for="employee in employees" :key="employee.id">
                    <td class="border px-4 py-2">{{ employee.id }}</td>
                    <td class="border px-4 py-2">{{ employee.last_name }}</td>
                    <td class="border px-4 py-2">{{ employee.first_name }}</td>
                    <td class="border px-4 py-2">{{ employee.designation }}</td>
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
        employees: Array
    }
}

</script>
