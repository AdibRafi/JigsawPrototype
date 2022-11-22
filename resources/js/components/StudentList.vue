<template>
   <div v-for="data in datas">
      <div class="flex items-center gap-4 p-2">
         <img :src="data.img" alt="studentPhoto" class=" w-14 h-14 rounded-full object-scale-down">
         <div class="flex flex-col">
            <strong>{{ data.name }}</strong>
            <span>{{ data.group }}</span>
         </div>
      </div>
   </div>
</template>
<script>
import getDataTest from "../getDataTest.js"
export default {
   setup() {
      const { datas, error, load } = getDataTest();
      load();
      return { datas, error }
   },
}

</script>