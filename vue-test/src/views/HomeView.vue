
<script setup>
import TheWelcome from '../components/TheWelcome.vue';
import bannerImg from '../assets/img/banner.jpg';
import Services from './Services.vue';
</script>

<template>
  <div>
    <div class="banner">
      <img style="width: 100%;" :src="bannerImg" alt="Logo">
    </div>
    <section> <!-- Opening section tag added here -->
      <Services />
    </section>
  </div>
</template>

