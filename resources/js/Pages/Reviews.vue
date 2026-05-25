<template>
  <!-- Background matches the dark aesthetic of image_bc5afc.jpg -->
  <v-container fluid id="reviews" class="py-16 px-6">
    <v-row justify="center" align="start" class="max-w-7xl mx-auto">
      
      <v-col 
        v-for="(review, index) in reviews" 
        :key="index" 
        cols="12" 
        md="4" 
        class="flex flex-col items-center px-8 mb-10">

        <!-- review text -->
        <div class="textFont text-center md:text-left min-h-[150px]">
          <p class="text-lg leading-relaxed font-light italic mb-6">
            "{{ review.text }}"
          </p>
        </div>

        <!-- reviewer name and image -->
        <div class="w-full flex items-center justify-center md:justify-start gap-4">
          <img :src="review.image" :alt="review.name" class="w-12 h-12 rounded-full object-cover shadow-md" />
          <p class="textFont font-bold text-xl">- {{ review.name }}</p>
        </div>
      </v-col>

    </v-row>
  </v-container>
</template>

<script setup>
import { ref } from 'vue';

const reviews = ref([
  {
    name: 'Roberto O.',
    image: 'images/roberto.png',
    text: 'I highly recommend Geopete Surveying to there performance, NO time delay according to the agreement. the execution of work was done Professionally.'
  },
  {
    name: 'Clarisse L.',
    image: 'images/clarisse.png',
    text: 'We highly recommend Engr. Peter, Engr. Xander and the team! Mabilis sila magrespond at nakuha namin agad ang lot plans within 5 days. Very affordable pa ang kanilang fees. Very professional magtrabaho at kausap.'
  },
  {
    name: 'Patrick D.',
    image: 'images/patrick.png',
    text: 'LEGIT GEODETIC SURVEYORS. QUICK RESPONSE, VERY SATISFIED WITH THEIR WORK. GOOD JOB'
  }
]);
</script>