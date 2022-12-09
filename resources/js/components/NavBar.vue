<template>
   <div class=" flex p-5 bg-yellow-100 text-xl justify-between">
      <div class=" float-left">
         <div id="nav" class=" bg-slate-300 rounded-xl">
            <router-link to="/lectDashboard">Home</router-link>
            <router-link :to="{ name: 'createTopic' }">Topic</router-link>
            <router-link :to="{ name: 'createAssessment' }">Assessment</router-link>
         </div>
      </div>
      <div class="float-right">
         <div id="nav" class="bg-slate-300 rounded-xl">
            <router-link to="/">Manage Profile</router-link>
            <router-link to="/">Logout</router-link>
         </div>
      </div>
   </div>

   <div class="m-12">
      <router-view></router-view>
   </div>
</template>

<script setup>

</script>

<style>
#nav {
   padding: 30px;
}

#nav a {
   font-weight: bold;
   color: #2c3e50;
   text-decoration: none;
   padding: 10px;
   border-radius: 4px;
}

#nav a.router-link-exact-active {
   color: white;
   background: crimson;
}
</style>