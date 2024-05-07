<script setup>
import { onMounted } from 'vue'; 
import axios from 'axios';
onMounted(() => {
    getServices();
});

const getServices = () => {
    axios.get("http://127.0.0.1:8000/api/all-services").then(res => {
        console.log(res.data.data);
    }).catch(err => {
        console.error('Error fetching services:', err);
    });
};
</script>

<template>
    <div class="container">
  <div class="row">
   <div class="col-md-4">
    <div class="services">
  <div class="card service_card">
    <div class="services-img text-center">
      <img style="width: 60px" :src="" alt="Logo">
    </div>
   
  <div class="card-body">
    <div class="text-center">
      <h5 class="card-title">Academic Info</h5>
    </div>
    
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <div class="text-center">
      <a href="#" class="btn btn-primary all_btn">Go somewhere</a>
    </div>
   
  </div>
</div>
</div>
   </div>
   <div class="col-md-4">
    <div class="services">
  <div class="card service_card">
    <div class="services-img text-center">
      <img style="width: 60px" :src="" alt="Logo">
    </div>
   
  <div class="card-body">
    <div class="text-center">
      <h5 class="card-title">Experience</h5>
    </div>
    
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <div class="text-center">
      <a href="#" class="btn btn-primary all_btn">Go somewhere</a>
    </div>
   
  </div>
</div>
</div>
   </div>
   <div class="col-md-4">
    <div class="services">
  <div class="card service_card">
    <div class="services-img text-center">
      <img style="width: 60px" :src="services1" alt="Logo">
    </div>
   
  <div class="card-body">
    <div class="text-center">
      <h5 class="card-title">Hobby</h5>
    </div>
    
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <div class="text-center">
      <a href="#" class="btn btn-primary all_btn">Go somewhere</a>
    </div>
   
  </div>
</div>
</div>
   </div>
  </div>
</div>
</template>