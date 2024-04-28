import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import Admin from '@/admin/views/Admin.vue'
import Dashboard from '@/admin/views/Dashboard.vue'
import CircularView from '@/admin/nazad/CircularView.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/login',
      name: 'login',
      component: Admin,
      children: [
        {
          path: '',
          name:'dashboard',
          component: Dashboard,
        },
        {
          path: 'circulation',
          name: 'circulation',
          component:CircularView
        },
        {
          path: 'OnlineAdmission',
          name: 'OnlineAdmission',
          component: () => import('../admin/nazad/OnlineAdmissionView.vue')
        },
        {
          path: '/disability',
          name: 'DisabilityAssesment',
          component: () => import('../views/DisabilityAssView.vue')
        },
        {
          path: '/applicant',
          name: 'applicant',
          component: () => import('../views/ApplicantAssesmentView.vue')
        },
        {
          path: '/eligible',
          name: 'eligible',
          component: () => import('../views/EligibleStudentView.vue')
        },
        {
          path: '/final',
          name: 'final',
          component: () => import('../views/FinalStudentView.vue')
        },
        {
          path: '/admissionfee',
          name: 'admissionfee',
          component: () => import('../views/AdmissionFeeView.vue')
        },
        {
          path: '/registration',
          name: 'registration',
          component: () => import('../views/StudentRegView.vue')
        },
      ]
    },
    {
      path: '/',
      name: 'home',
      component: HomeView
    },
    {
      path: '/about',
      name: 'about',
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import('../views/AboutView.vue')
    },
    
    
    
  ]
})

export default router
