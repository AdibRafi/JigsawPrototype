<template>
   <div class="bg-slate-300 p-8 rounded-lg">
      <div v-for="i in 4" key="i">
         <div class=" pt-6">
            <label for="mn" class="block font-medium text-sm text-gray-700">Module Number</label>
            <input type="" id="mn" name="mn" required="required" autofocus="autofocus" class="rounded-md shadow-sm border border-gray-300 focus:border-indigo-300 focus:ring
                   focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full">
         </div>
         <div class=" pt-3">
            <label for="mk" class="block font-medium text-sm text-gray-700">Module Keywords</label>
            <input type="" id="mk" name="mk" required="required" autofocus="autofocus" class="rounded-md shadow-sm border border-gray-300 focus:border-indigo-300 focus:ring
                   focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full">
         </div>
         <div class=" pt-3">
            <label for="mq" class="block font-medium text-sm text-gray-700">Module Question</label>
            <input type="" id="mq" name="mq" required="required" autofocus="autofocus" class="rounded-md shadow-sm border border-gray-300 focus:border-indigo-300 focus:ring
                   focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full">
         </div>
         <div class="pt-3">
            <p>Module Answer</p>
            <div v-for="i in 4" :key="i">
               <input type="radio" id="ans1" name="ans">
               <input type="text" for="ans1" required="required" autofocus="autofocus" class="rounded-md shadow-sm border border-gray-300 focus:border-indigo-300 focus:ring
                      focus:ring-indigo-200 focus:ring-opacity-50 ml-3 w-11/12">
            </div>
         </div>
         <hr class="mt-5 bg-black">
      </div>
      <div class="flex justify-end pt-4">
         <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800
                   border border-transparent rounded-md font-semibold text-xs text-white uppercase
                   tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none
                   focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 
                   transition ease-in-out duration-150 ml-3">submit</button>
      </div>
   </div>
</template>

<script setup>
</script>

<style>

</style>