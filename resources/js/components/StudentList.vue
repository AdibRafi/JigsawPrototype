<template>
   <div v-for="data in datas" :key="data">
      <div class="flex items-center gap-4 p-2">
         <img :src="data.img" alt="studentPhoto" class="w-14 h-14 rounded-full object-scale-down">
         <div class="flex flex-col items-start">
            <strong>{{ data.name }}</strong>
            <span>{{ data.group }}</span>
         </div>
      </div>
   </div>
   <button class="m-2 p-2 border-none rounded bg-slate-400 text-white">Go to material</button>
</template>
<script>
// import '../bootstrap.js'
import { onMounted, ref } from "vue";
import axios from 'axios';

export default {
   setup() {
      const datas = ref([])
      let testData = ref([]);

      onMounted(() => {
         axios.get("http://jigsawprototype.test/api/test")
            .then((res) => {
               datas.value = res.data.datas;
               console.log('it work')
               console.log(datas.value)
            })
            .catch((err) =>
               console.log(err.data.datas))
      })
      return { testData, datas }

   }

}

</script>