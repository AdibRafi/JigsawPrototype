<template>
   <div v-for="data in datas">
      <div class="flex items-center gap-4 p-2">
         <img src="images/emoji.png" alt="studentPhoto" class=" w-14 h-14 rounded-full object-scale-down">
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
         { name: 'student one', group: 'group one' },
         { name: 'student two', group: 'group two' },
         { name: 'student three', group: 'group three' },
         { name: 'student four', group: 'group four' },
         { name: 'student five', group: 'group five' },
         { name: 'student six', group: 'group six' },
      ]

      return { datas }
   }
}
</script>