<template>
   <div class="body">
      <h1 class="text-3xl">Expert Session | JigsawSession</h1>
      <h2 class="text-2xl pt-3">Timer: 25:00</h2>
      <div class="mainComponent">
         <div v-for="data in datas" :key="data">
            <div class="container hover:bg-fuchsia-400">
               <p>{{ data.group }}</p>
               <br>
               <div v-for="index in 4" :key="index">
                  <div class="flex">
                     <p>Student Name </p>
                     <p class="ml-5"> Teach</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</template>

<script>
import getDataTest from "../getDataTest.js"
import '../bootstrap.js'
export default {
   setup() {
      const { datas, error, load } = getDataTest();
      load();
      return { datas, error }
   },
}
</script>

<style scoped>
h1 {
   font-size: 1.875rem;
   line-height: 2.25rem;
}

.body {
   display: flex;
   flex-direction: column;
   align-items: center;
   padding-top: 5em;
}

.mainComponent {
   margin-top: 3rem;
   display: grid;
   grid-template-rows: repeat(2, minmax(0, 1fr));
   grid-auto-flow: column;
   gap: 13rem;
   align-items: flex-start;
}

.container {
   width: auto;
   height: auto;
   padding: 1.25rem;
   background-color: cadetblue;
   border-radius: 0.75rem;
}
</style>