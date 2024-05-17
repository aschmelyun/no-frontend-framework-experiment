<script setup>
import { ref, onMounted, computed } from 'vue'
import Table from '@/components/Table.vue'

const vehicles = ref([])
const filterColor = ref('')
const filterMake = ref('')

onMounted(() => {
    fetch('/api/vehicles')
        .then(response => response.json())
        .then(data => vehicles.value = data)
        .catch(error => console.error(error))
})

const filteredVehicles = computed(() => {
    return vehicles.value.filter(vehicle => {
        return (!filterColor.value || vehicle.color === filterColor.value) &&
            (!filterMake.value || vehicle.make === filterMake.value)
    })
})

const possibleColors = computed(() => {
    return vehicles.value.reduce((colors, vehicle) => {
        if (!colors.includes(vehicle.color)) {
            colors.push(vehicle.color)
        }

        return colors
    }, []).sort()
})

const possibleMakes = computed(() => {
    return vehicles.value.reduce((makes, vehicle) => {
        if (!makes.includes(vehicle.make)) {
            makes.push(vehicle.make)
        }

        return makes
    }, []).sort()
})
</script>

<template>
    <div>
        <form class="flex items-center gap-4 mb-4">
            <div>
                <label for="color" class="block text-sm font-medium text-gray-900">Color</label>

                <select name="color" id="filterColor" v-model="filterColor"
                    class="mt-1.5 w-full rounded-lg border-gray-300 text-gray-700 sm:text-sm">
                    <option value="">Please select</option>
                    <option v-for="color in possibleColors" :key="color" :value="color">{{ color }}</option>
                </select>
            </div>
            <div>
                <label for="make" class="block text-sm font-medium text-gray-900">Make</label>

                <select name="make" id="filterMake" v-model="filterMake"
                    class="mt-1.5 w-full rounded-lg border-gray-300 text-gray-700 sm:text-sm">
                    <option value="">Please select</option>
                    <option v-for="make in possibleMakes" :key="make" :value="make">{{ make }}</option>
                </select>
            </div>
        </form>
        <div class="overflow-x-auto border border-gray-200 rounded-lg">
            <Table :vehicles="filteredVehicles" />
        </div>
    </div>
</template>