<template>
   <div class="bg-blue-300 p-10 rounded-lg">
      <div class=" flex flex-row flex-wrap">
         <div v-for="data in datas" key="data">
            <div class="m-8 p-9 bg-slate-400 text-2xl rounded-2xl">
               <h1>{{ data.name }}</h1>
               <h1>{{ data.code }}</h1>

            </div>
         </div>
      </div>
   </div>
</template>

<script setup>
const datas = [
   {
      name: 'Class1',
      code: 'TGD1202'
   },
   {
      name: 'Class2',
      code: 'TCP1302'
   },
   {
      name: 'Class3',
      code: 'TMU2231'
   },
   {
      name: 'Class4',
      code: 'TSP3301'
   }

]
</script>

<style>

</style>