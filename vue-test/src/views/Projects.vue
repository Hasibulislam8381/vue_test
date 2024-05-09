<script>
import VueSlickCarousel from 'vue-slick-carousel'; // Import Vue Slick Carousel component
import 'vue-slick-carousel/dist/vue-slick-carousel.css'; // Import CSS for Vue Slick Carousel

export default {
  components: {
    VueSlickCarousel, // Register Vue Slick Carousel component
  },
  data() {
    return {
      slickOptions: {
        // Slick carousel options
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: true,
        prevArrow: '<button class="prev-arrow">Previous</button>', // Define custom previous arrow button
        nextArrow: '<button class="next-arrow">Next</button>', // Define custom next arrow button

      },
      items: [
        // Your slider items data
        // Add more items as needed
        { image: '../assets/img/banner.jpg', title: 'Slide 1', description: 'Description for slide 1' },
        { image: '../assets/img/banner.jpg', title: 'Slide 2', description: 'Description for slide 2' },
      ],
    };
  },
};
</script>
<template>
    <div class="container">
        <div class="row">
        <div class="col-md-12">
            <div class="title">
              Projects
            </div>
        </div>
        <div class="col-md-6 mt-3">
            <div class="projects">
                <a href="https://dhalishop.com/">Dhalishop:(Click Here to view this project)</a>
                <div class="project_des">
                    a. It was a Single vendor E-commerce Project based on cosmetics products <br>
                    b. Technology Used : Laravel, Ajax, jQuery,Javascricpt,bootstrap,MySQL
                </div>
            </div>
            <div class="projects">
                <a href="https://dhalishop.com/">Dhalishop:(Click Here to view this project)</a>
                <div class="project_des">
                    a. It was a Single vendor E-commerce Project based on cosmetics products <br>
                    b. Technology Used : Laravel, Ajax, jQuery,Javascricpt,bootstrap,MySQL
                </div>
            </div>
            <div class="projects">
                <a href="https://dhalishop.com/">Dhalishop:(Click Here to view this project)</a>
                <div class="project_des">
                    a. It was a Single vendor E-commerce Project based on cosmetics products <br>
                    b. Technology Used : Laravel, Ajax, jQuery,Javascricpt,bootstrap,MySQL
                </div>
            </div>
           
        </div>
        <div class="col-md-6">
        <!-- Vue Slick Carousel component -->
        <VueSlickCarousel :options="slickOptions">
          <!-- Iterate through items array and display each slide -->
          <div v-for="(item, index) in items" :key="index">
            <!-- Content for each slide -->
            <img :src="item.image" alt="Slide Image" />
            <h3>{{ item.title }}</h3>
            <p>{{ item.description }}</p>
          </div>
        </VueSlickCarousel>
      </div>
    </div>
    </div>
   
</template>
<style setup>
.projects a{
    font-size: 22px;
    /* font-weight: bold; */
    color: #333;
    text-decoration: none;
    /* border-bottom: 2px solid #333; */
    transition: 0.3s ease-in-out;
}
.projects {
    padding-bottom: 16px;
}
</style>