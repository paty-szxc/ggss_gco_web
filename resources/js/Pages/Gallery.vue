<template>
  <v-container id="gallery" fluid class="py-10 px-5">
    <h1 class="text-center mb-10 text-h3 font-weight-bold textFont">Gallery</h1>
    
    <div v-for="(batch, index) in ojtBatches" :key="index" class="mb-12">
      <h2 class="text-h4 mb-6 border-b pb-2 textStyle" >{{ batch.name }}</h2>
      <v-carousel
        crossfade
        hide-delimiters
        show-arrows="hover"
        cycle
        class="rounded-lg elevation-6 custom-carousel">
        <v-carousel-item
          v-for="(image, imgIndex) in batch.images"
          :key="imgIndex"
          :src="image.src"
          contain>
        </v-carousel-item>
      </v-carousel>
    </div>
  </v-container>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';

const ojtBatches = ref([])

const fetchImages = async () => {
  try{
    const response = await axios.get('get_gallery_images');
    ojtBatches.value = response.data;
  }
  catch(error){
    console.error("Error fetching gallery images:", error);
  }
}

onMounted(() => {
  fetchImages()
})

</script>

<style scoped>
#gallery {
  max-width: 1000px; /* reduced for better carousel focus */
  margin: 0 auto;
}
.custom-carousel {
  height: 550px;
}
@media (max-width: 600px) {
  .custom-carousel {
    height: 300px;
  }
}
.bg-black-600 {
  background-color: rgba(0, 0, 0, 0.6);
}
</style>