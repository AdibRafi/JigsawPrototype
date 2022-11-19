<template>
   <div class="flex flex-col items-center pt-20">
      <h1 class="text-3xl">Expert Session | JigsawSession</h1>
      <h2 class="text-2xl pt-3">Timer: 25:00</h2>
      <div class="mt-12 grid grid-rows-2 grid-flow-col gap-52 items-start">
         <div v-for="data in datas" :key="data">
            <div class=" w-auto h-auto p-5  bg-slate-400 rounded-xl hover:bg-fuchsia-400">
               <p class="text-white">{{ data.group }}</p>
               <br>
               <div v-for="index in 4" :key="index">
                  <div class="flex">
                     <p class=" text-white">Student Name </p>
                     <p class="text-white ml-5"> Teach</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</template>

<script>
export default {
   setup() {
      const datas = [
         { name: 'student one', group: 'Group one', img: '/images/emoji.png' },
         { name: 'student two', group: 'Group two', img: '/images/emoji.png' },
         { name: 'student three', group: 'Group three', img: '/images/emoji.png' },
         { name: 'student four', group: 'Group four', img: '/images/emoji.png' },
         { name: 'student five', group: 'Group five', img: '/images/emoji.png' },
         { name: 'student six', group: 'Group six', img: '/images/emoji.png' },
      ]

      return { datas }
   }
}
</script>