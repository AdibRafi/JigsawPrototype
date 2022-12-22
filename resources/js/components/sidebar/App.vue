<template>
   <Sidebar>
      <div :style="{ 'margin-left': sidebarWidth }">
         <router-view></router-view>
      </div>
   </Sidebar>
   <div :style="{ 'margin-left': sidebarWidth }">
      <h3>testfrom app</h3>
   </div>
</template>

<script>
import Sidebar from './Sidebar.vue'
import { sidebarWidth } from './state';
export default {
   components: { Sidebar },
   setup() {
      return { sidebarWidth }
   }
}
</script>

<style scoped>
.h3 {
   margin-left: 180;
}
</style>
