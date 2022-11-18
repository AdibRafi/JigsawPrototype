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
export default {
   setup() {
      const datas = [
         { name: 'student one', group: 'group one', img: '/images/emoji.png' },
         { name: 'student two', group: 'group two', img: '/images/emoji.png' },
         { name: 'student three', group: 'group three', img: '/images/emoji.png' },
         { name: 'student four', group: 'group four', img: '/images/emoji.png' },
         { name: 'student five', group: 'group five', img: '/images/emoji.png' },
         { name: 'student six', group: 'group six', img: '/images/emoji.png' },
      ]

      return { datas }
   }
}
</script>