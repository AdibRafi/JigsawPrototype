<template>
   <div class="font-sans text-gray-900 antialiased">
      <div class="min-h-screen flex flex-col items-center pt-6 bg-gray-100 sm:justify-center sm:pt-6">
         <h1 class=" text-xl"> Create Topic</h1>
         <p> contoh -> {{ name }} {{ description }}</p>
         <div class="w-11/12 sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <form @submit="formSubmit">
               <div>
                  <label for="topic" class="block font-medium text-sm text-gray-700">Topic</label>
                  <input type="text" id="" name="" required="required" autofocus="autofocus" class="rounded-md shadow-sm border border-gray-300 focus:border-indigo-300 focus:ring
                  focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full">
               </div>
               <div class="mt-4">
                  <label for="" class="block font-medium text-sm text-gray-700">Module</label>
                  <input type="text" id="" name="" required="required" autofocus="autofocus" class="rounded-md shadow-sm border border-gray-300 focus:border-indigo-300 focus:ring
                focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full">
               </div>
               <div class="mt-4">
                  <label for="" class="block font-medium text-sm text-gray-700">Expert Session</label>
                  <input type="text" id="" name="" required="required" autofocus="autofocus" class="rounded-md shadow-sm border border-gray-300 focus:border-indigo-300 focus:ring
             focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" v-model="name">
               </div>
               <div class="mt-4">
                  <label for="" class="block font-medium text-sm text-gray-700">Jigsaw Session</label>
                  <input type="text" id="" name="" required="required" autofocus="autofocus" class="rounded-md shadow-sm border border-gray-300 focus:border-indigo-300 focus:ring
          focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" v-model="group">
               </div>

               <div class="flex items-center justify-end mt-4">
                  <button @click="clickTest" type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800
                   border border-transparent rounded-md font-semibold text-xs text-white uppercase
                   tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none
                   focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 
                   transition ease-in-out duration-150 ml-3">Create
                     Group</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</template>

<script setup>
import axios from 'axios';
import { ref } from 'vue';
const name = ref('')
const description = ref('')

const clickTest = () => {
   // axios.post
}
</script>