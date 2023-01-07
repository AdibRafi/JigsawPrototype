<template>
    <div class="navbar bg-base-100 bg-emerald-500">
        <div class="navbar-start">
            <div class="dropdown">
                <label tabindex="0" class="btn btn-ghost btn-circle">
                    <font-awesome-icon class="scale-125" icon="fa-solid fa-bars" />
                </label>
                <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                    <li><router-link :to="{name:'dashboard'}">Home</router-link></li>
                    <li><router-link :to="{name:'createTopic'}">Topic</router-link></li>
                    <li><router-link :to="{name:'createModule'}">Module</router-link></li>
                    <li><router-link :to="{name:'createAssessment'}">Assessment</router-link></li>
                </ul>
            </div>
        </div>
        <div class="navbar-center">
            <router-link class="btn btn-ghost normal-case text-xl" :to="{name:'dashboard'}">PuzzlePoint</router-link>
        </div>
        <div class="navbar-end">
            <button class="btn btn-ghost btn-circle">
                <font-awesome-icon class="scale-125" icon="fa-solid fa-arrow-right-from-bracket" />
            </button>
        </div>
    </div>
    <router-view></router-view>
</template>

<script setup>
</script>

<style scoped>
</style>
