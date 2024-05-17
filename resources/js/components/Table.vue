<script setup>
defineProps(['vehicles'])
</script>

<template>
    <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
        <thead class="text-left">
            <tr>
                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Make</th>
                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Model</th>
                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Color</th>
                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Price</th>
            </tr>
        </thead>

        <tbody class="divide-y divide-gray-200">
            <tr v-for="vehicle in vehicles" :key="vehicle.id" class="odd:bg-gray-50">
                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{ vehicle.make }}</td>
                <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ vehicle.model }}</td>
                <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ vehicle.color }}</td>
                <td class="whitespace-nowrap px-4 py-2 text-gray-700">${{ vehicle.price }}</td>
            </tr>
        </tbody>
    </table>
</template>