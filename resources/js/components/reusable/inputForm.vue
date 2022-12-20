<template>
    <label :for="labelFor" class="block font-medium text-sm text-gray-700">{{ labelName }}</label>
    <input :type="inputType" :id="inputId" name="" required="required" autofocus="autofocus"
           class="rounded-md shadow-sm border border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full">
</template>

<script setup>
import {ref, defineProps} from 'vue'

const props = defineProps({
    labelName: String,
    labelFor: String,
    inputType: String,
    inputId: String,
});
</script>

<style scoped>

</style>
