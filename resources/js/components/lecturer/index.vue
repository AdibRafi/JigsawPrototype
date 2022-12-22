<template>
    <Sidebar/>
    <div class="d"
        :style="{ 'margin-left': sidebarWidth }">
        <router-view/>
    </div>
</template>

<script setup>
import Sidebar from "../sidebar/Sidebar.vue";
import {sidebarWidth} from "../sidebar/state";

</script>

<style scoped>
.d{
    transition: 0.3s ease;
}
</style>
