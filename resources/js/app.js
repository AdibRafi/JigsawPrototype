/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// import './bootstrap';
// import "https://js.pusher.com/7.2/pusher.min.js";
// import "https://cdn.jsdelivr.net/npm/vue/dist/vue.js";
import { createApp } from 'vue';
import router from '../router'


/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */



// import ExampleComponent from './components/ExampleComponent.vue';
// const app = createApp(ExampleComponent);

// app.component('example-component', ExampleComponent);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */

// app.mount('#app')



// createApp(app).mount('#app')

import StudentList from './components/StudentList.vue';
createApp(StudentList).mount('#studentList')

// import CreateTopic from './components/CreateTopic.vue'
// createApp(CreateTopic).mount('#createTopic')

import Present from './components/Present.vue'
createApp(Present).mount('#present');




import { library } from '@fortawesome/fontawesome-svg-core'

import { faUserSecret } from '@fortawesome/free-solid-svg-icons'
import { faAnglesLeft, faHouse, faTableColumns } from '@fortawesome/free-solid-svg-icons'

import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

import Sidebar from './components/sidebar/App.vue'


library.add(faUserSecret)
library.add(faAnglesLeft)
library.add(faHouse)
library.add(faTableColumns)



const sidebar = createApp(Sidebar)
sidebar.component('font-awesome-icon', FontAwesomeIcon)
// sidebar.component('sidebarTest', Sidebar)
sidebar.use(router)
sidebar.mount('#sidebar')

import Test from "../views/test.vue";
import LecturerRouter from "./components/lecturer/LecturerRouter";

const test = createApp(Test);
test.use(LecturerRouter)
test.mount("#test");



