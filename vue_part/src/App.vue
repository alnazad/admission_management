<script setup>
import { RouterLink, RouterView } from 'vue-router'
</script>

<template>
        <RouterLink class="btn btn-Primary" to="/">Home</RouterLink>
        <RouterLink class="btn btn-Primary" to="/about">About</RouterLink>
        <RouterLink class="btn btn-Primary" to="/circulation">Circular</RouterLink>
  <router-view></router-view>
</template>
