<template>
   <div class="bg-slate-300 p-8 rounded-lg">
      <div v-for="i in 4" key="i">
         <div class=" pt-6">
             <InputForm input-id="" input-type="text"
                        label-for="" label-name="Module Number" />
         </div>
         <div class=" pt-3">
             <InputForm input-id="" input-type="text"
                        label-for="" label-name="Module Keyword" />
         </div>
         <div class=" pt-3">
             <InputForm input-id="" input-type="text"
                        label-for="" label-name="Module Question" />
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
         <SubmitButton button-name="Create Assessment"/>
      </div>
   </div>
</template>

<script setup>
import InputForm from "../reusable/inputForm.vue";
import SubmitButton from "../reusable/submitButton.vue";
</script>

<style>

</style>
