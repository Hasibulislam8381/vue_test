<script setup>
import { onMounted,ref } from 'vue'; 
import axios from 'axios';

const services = ref([]);

onMounted(() => {
    getServices();
});

const getServices = () => {
    axios.get("http://127.0.0.1:8000/api/all-services").then(res => {
      services.value = res.data.data;
      // console.log(services);
    }).catch(err => {
        console.error('Error fetching services:', err);
    });
};

const removeHtmlTags = (text) => {
   
    const tempElement = document.createElement('div');
    
    tempElement.innerHTML = text;
   
    return tempElement.textContent || tempElement.innerText || '';
};
</script>

<template>
  <section>
    <div class="container">
  <div class="row">
    <div class="col-md-12">
                <div class="title">
                Services
                </div>
            </div>


   <div v-for="service in services" :key="service.id"  class="col-md-4 pt-3">
    <div class="services">
  <div class="card service_card">
    <div class="services-img text-center">
      <img style="width: 60px" :src="service.logo" alt="Logo">
    </div>
   
  <div class="card-body">
    <div class="text-center">
      <h5 class="card-title">{{ service.title }}</h5>
    </div>
    
    <p class="card-text">{{ removeHtmlTags(service.description) }}</p>
    <div class="text-center">
      <a href="#" class="btn btn-primary all_btn">Go somewhere</a>
    </div>
   
  </div>
</div>
</div>
   </div>

 
  </div>
</div>
</section>
</template>