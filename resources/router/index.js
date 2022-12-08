import { createRouter, createWebHistory } from 'vue-router'
import LectDashboard from '../js/components/Dashboard.vue'

const router = createRouter({
   history: createWebHistory(import.meta.env.BASE_URL),
   routes: [
      {
         path: '/lectDashboard',
         name: 'lectDashboard',
         component: LectDashboard
      }
   ]
})

export default router