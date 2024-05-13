
<script setup>
import TheWelcome from '../components/TheWelcome.vue';
import bannerImg from '../assets/img/banner.jpg';
import Services from './Services.vue';
import Skills from './Skills.vue';
import Projects from './Projects.vue';
import Footer from './Footer.vue';
import Contact from './Contact.vue';
</script>

<template>
  <div>
    <div class="banner">
      <img style="width: 100%;" :src="bannerImg" alt="Logo">
    </div>
    
      <Services />
 
    
      <Skills/>
    
    
      <Projects/>
     <Contact/>
   
  </div>
</template>

