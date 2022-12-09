import { createRouter, createWebHistory } from 'vue-router'
import LectDashboard from '../js/components/lecturer/Dashboard.vue'
import CreateTopic from '../js/components/lecturer/CreateTopic.vue'
import CreateAssessment from '../js/components/lecturer/CreateAssessment.vue'


const router = createRouter({
   history: createWebHistory(import.meta.env.BASE_URL),
   routes: [
      {
         path: '/lectDashboard',
         name: 'lectDashboard',
         component: LectDashboard
      },
      {
         path: '/lectDashboard/CreateTopic',
         name: 'createTopic',
         component: CreateTopic
      },
      {
         path: '/lectDashboard/CreateAssessment',
         name: 'createAssessment',
         component: CreateAssessment
      }
   ]
})

export default router