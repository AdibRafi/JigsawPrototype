<template>
   <div class="sidebar" :style="{ width: sidebarWidth }">
      <h1>
         <span v-if="collapsed">
            <h1 class=" text-xl">JC</h1>
         </span>
         <span v-else>
            <h1 class=" text-xl">
               Jigsaw Classroom
            </h1>
         </span>
      </h1>
      <SidebarLink to="/test" icon="fa-solid fa-house">Home</SidebarLink>
      <SidebarLink to="/About" icon="fa-solid fa-table-columns">About</SidebarLink>


      <span class="collapse-icon" :class="{ 'rotate-180': collapsed }" @click="toggleSidebar">
         <font-awesome-icon icon="fa-solid fa-angles-left" />
      </span>
   </div>
</template>

<script>
import SidebarLink from './SidebarLink.vue';
import { collapsed, toggleSidebar, sidebarWidth } from './state.js'
export default {
   props: {},
   components: { SidebarLink },
   setup() {
      return { collapsed, toggleSidebar, sidebarWidth }
   }
}

// return { sidebarWidth, toggleSidebar }

</script>

<style>
:root {
   --sidebar-bg-color: #2f855a;
   --sidebar-item-hover: #38a169;
   --sidebar-item-active: #276749;
}
</style>

<style scoped>
.sidebar {
   color: white;
   background-color: var(--sidebar-bg-color);

   float: left;
   position: fixed;
   z-index: 1;
   top: 0;
   left: 0;
   bottom: 0;
   padding: 0.5em;

   transition: 0.3s ease;

   display: flex;
   flex-direction: column;

}

.collapse-icon {
   position: absolute;
   bottom: 0;
   padding: 0.75em;

   color: rgba(255, 255, 255, 0.7);

   transition: 0.2s linear;
}

.rotate-180 {
   transform: rotate(180deg);
   transform: 0.2s linear;
}
</style>