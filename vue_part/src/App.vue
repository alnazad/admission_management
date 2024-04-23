<script setup>
import { RouterLink, RouterView } from 'vue-router'
</script>

<template>
        <RouterLink to="/">Home</RouterLink>
        <RouterLink to="/about">About</RouterLink>
        <div><RouterLink  to="/circulation">Admission Circulation</RouterLink></div>
        <div><RouterLink  to="/admission">Online Admission</RouterLink></div>
        <div><RouterLink  to="/disability">Disability Assesment Tools</RouterLink></div>
        <div><RouterLink  to="/applicant">Applicant Assesment</RouterLink></div>
        <div><RouterLink  to="/eligible">Eligible Student List</RouterLink></div>
        <div><RouterLink  to="/final">Final Student Approval</RouterLink></div>
        <div><RouterLink  to="/admissionfee">Admission Fee Management</RouterLink></div>
        <div ><RouterLink  to="/registration">Student Registration</RouterLink></div>
  <RouterView />
</template>


