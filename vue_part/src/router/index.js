import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import Admin from '@/admin/views/Admin.vue'
import Dashboard from '@/admin/views/Dashboard.vue'
import CircularView from '@/admin/nazad/Circular/CircularView.vue'
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
          path: 'addcirculation',
          name: 'addcirculation',
          component: ()=> import('@/admin/nazad/Circular/AddCircular.vue') 
        },
        {
          path: 'OnlineAdmission',
          name: 'OnlineAdmission',
          component: () => import('../admin/nazad/OnlineAdmission/OnlineAdmissionView.vue')
        },
        {
          path: 'AddOnlineAdmission',
          name: 'AddOnlineAdmission',
          component: () => import('../admin/nazad/OnlineAdmission/AddOnlineAdmission.vue')
        },
        {
          path: '/DisabilityAssesment',
          name: 'DisabilityAssesment',
          component: () => import('../admin/nazad/DisabilityAss/DisabilityAssView.vue')
        },
        {
          path: '/AddDisabilityAssesment',
          name: 'AddDisabilityAssesment',
          component: () => import('../admin/nazad/DisabilityAss/AddDisabilityAss.vue')
        },
        {
          path: '/ApplicantAssesment',
          name: 'ApplicantAssesment',
          component: () => import('../admin/nazad/ApplicantAssesment/ApplicantAssesmentView.vue')
        },
        {
          path: '/AddApplicantAssesment',
          name: 'AddApplicantAssesment',
          component: () => import('../admin/nazad/ApplicantAssesment/AddApplicantAssesment.vue')
        },
        {
          path: '/EligibleStudent',
          name: 'EligibleStudent',
          component: () => import('../admin/nazad/EligibleStudent/EligibleStudentView.vue')
        },
        {
          path: '/FinalStudent',
          name: 'FinalStudent',
          component: () => import('../admin/nazad/FinalStudent/FinalStudentView.vue')
        },
        {
          path: '/AdmissionFee',
          name: 'AdmissionFee',
          component: () => import('../admin/nazad/AdmissionFee/AdmissionFeeView.vue')
        },
        {
          path: '/AddAdmissionFee',
          name: 'AddAdmissionFee',
          component: () => import('../admin/nazad/AdmissionFee/AddAdmissionFee.vue')
        },
        {
          path: '/StudentRegistration',
          name: 'StudentRegistration',
          component: () => import('../admin/nazad/StudentReg/StudentRegView.vue')
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
