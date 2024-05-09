
<script setup>
import TheWelcome from '../components/TheWelcome.vue';
import bannerImg from '../assets/img/banner.jpg';
import Services from './Services.vue';
import Skills from './Skills.vue';
import Projects from './Projects.vue';
import Footer from './Footer.vue';
</script>

<template>
  <div>
    <div class="banner">
      <img style="width: 100%;" :src="bannerImg" alt="Logo">
    </div>
    <section> <!-- Opening section tag added here -->
      <Services />
    </section>
    <section>
      <Skills/>
    </section>
    <section>
      <Projects/>
    </section>
    <section>
      <Footer/>
    </section>
  </div>
</template>

