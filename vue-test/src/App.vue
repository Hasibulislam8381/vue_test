<script setup>
import { RouterLink, RouterView } from 'vue-router'
import HelloWorld from './components/HelloWorld.vue'
import Footer from "./components/Footer.vue";
import imageSrc from './assets/img/6YXk7lXbPClp7zkCwEhXkZMbz9W8i2fKO0PkF2Kx.png';
import bannerImg from './assets/img/banner.jpg';
</script>

<template>
  <header>
    <div class="wrapper">
      <nav class="navbar navbar-expand-lg navbar-dark nav_color">
  <div class="container">
    <router-link to="/" class="navbar-brand">
        <img :src="imageSrc" alt="Logo">
      </router-link>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 padd_left_50">
        <li class="nav-item">
          <router-link class="nav-link active" aria-current="page" to="/">Home</router-link> 
        </li>
        <li class="nav-item">
          <router-link  class="nav-link" to="/about">About</router-link>
        </li>
        <li class="nav-item">
          <router-link  class="nav-link" to="/projects">Projects</router-link>
        </li>
        <li class="nav-item">
          <router-link  class="nav-link" to="/skills">Skills</router-link>
        </li>
        <li class="nav-item">
          <router-link  class="nav-link" to="/contact">Contact</router-link>
        </li>
      
      </ul>
      <!-- <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </div>
  </div>
</nav>

     
    </div>
  </header>

  <RouterView />
  <Footer/>
</template>

<style scoped>
.padd_left_50{
padding-left: 50px;}
</style>
