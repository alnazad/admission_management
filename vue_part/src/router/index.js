import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import Admin from '@/admin/views/Admin.vue'
import Dashboard from '@/admin/views/Dashboard.vue'
import CircularView from '@/admin/nazad/CircularView.vue'
import LoginView from '@/admin/nazad/LoginView.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    { 
      path: '/admin',
      name: 'admin',
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
          path: '/DisabilityAssesment',
          name: 'DisabilityAssesment',
          component: () => import('../views/DisabilityAssView.vue')
        },
        {
          path: '/ApplicantAssesment',
          name: 'ApplicantAssesment',
          component: () => import('../views/ApplicantAssesmentView.vue')
        },
        {
          path: '/EligibleStudent',
          name: 'EligibleStudent',
          component: () => import('../views/EligibleStudentView.vue')
        },
        {
          path: '/FinalStudent',
          name: 'FinalStudent',
          component: () => import('../views/FinalStudentView.vue')
        },
        {
          path: '/AdmissionFee',
          name: 'AdmissionFee',
          component: () => import('../views/AdmissionFeeView.vue')
        },
        {
          path: '/StudentRegistration',
          name: 'StudentRegistration',
          component: () => import('../views/StudentRegView.vue')
        },
        {
          path: '/AdmissionManagement',
          name: 'AdmissionManagement',
          component: () => import('@/admin/nazad/AdmissionManagement.vue')
        },
      ]
      
    },
    {
      path: '/',
      name: 'home',
      component: HomeView
    },
    {
      path: '/login',
      name: 'login',
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import('@/admin/nazad/LoginView.vue')
    },
    
    
    
  ]
})

export default router
