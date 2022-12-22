import { createRouter, createWebHistory } from 'vue-router'
import Dashboard from './Dashboard.vue'
import CreateTopic from './CreateTopic.vue'
import CreateAssessment from './CreateAssessment.vue'


const lectRouter = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes: [
        {
            path: '/LecturerSide',
            name: 'dashboard',
            component: Dashboard
        },
        {
            path: '/LecturerSide/CreateTopic',
            name: 'createTopic',
            component: CreateTopic
        },
        {
            path: '/LecturerSide/CreateAssessment',
            name: 'createAssessment',
            component: CreateAssessment
        }
    ]
})

export default lectRouter
