<template>
  <v-container id="projects" fluid class="py-10 px-5">
    <h1 class="text-center mb-10 text-h3 font-weight-bold textFont">Projects</h1>
    <div v-for="(project, index) in projectImgs" :key="index" class="mb-12">
      <h2 class="text-2xl font-bold mb-6 border-b pb-2">{{ project.name }}</h2>

                    <!-- NOTE - tailwind grid: 1 col on mobile, 2 on sm, 3 on lg -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <div 
          v-for="(image, imgIndex) in project.images" 
          :key="imgIndex"
          class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
          <v-img
            :src="$asset(image.src)"
            :alt="image.alt || 'Project Image'"
            aspect-ratio="1.7778"
            contain
            class="bg-grey-lighten-2">
                    <!-- loading state -->
            <template v-slot:placeholder>
              <div class="d-flex align-center justify-center fill-height">
                <v-progress-circular color="primary" indeterminate></v-progress-circular>
              </div>
            </template>
          </v-img>
          
                    <!-- NOTE - image info footer -->
          <div v-if="image.title" class="p-4 bg-white text-center">
            <h3 class="font-bold text-lg textFont">{{ image.title }}</h3>
            <p class="text-gray-600 text-sm textFont">{{ image.area }}</p>
          </div>
        </div>
      </div>

                    <!-- NOTE - year established -->
        <div class="w-full flex justify-center py-10">
          <div class="w-full max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-24 text-center justify-items-center">
            <div class="flex flex-col items-center">
              <p class="text-black text-2xl md:text-3xl font-medium leading-tight mb-4 textFont">
                Year<br>Established
              </p>
              <p class="text-blue-600 text-5xl md:text-6xl font-bold tracking-tighter">
                2021
              </p>
            </div>
            <div class="flex flex-col items-center">
              <p class="text-black text-2xl md:text-3xl font-medium leading-tight mb-4 textFont">
                Plans<br>Approved
              </p>
              <p class="text-blue-600 text-5xl md:text-6xl font-bold tracking-tighter">
                800+
              </p>
            </div>
            <div class="flex flex-col items-center">
              <p class="text-black text-2xl md:text-3xl font-medium leading-tight mb-4 textFont">
                Completed<br>Projects
              </p>
              <p class="text-blue-600 text-5xl md:text-6xl font-bold tracking-tighter">
                1,000+
              </p>
            </div>
          </div>
        </div>

        <div>
          <v-img :src="$asset('images/survey_logos.png')" max-height="150" contain></v-img>
        </div>

    </div>
  </v-container>
</template>

<script setup>
import { ref } from 'vue';

const projectImgs = ref([
    { 
        images: [
            { src: '/images/aerial_project.png', alt: 'Aerial', title: 'AERIAL TOPOGRAPHIC SURVEY', area: '110 HECTARES' },
            { src: '/images/relo_and_topo_project.png', alt: 'Relocation & Topographic', title: 'RELOCATION AND TOPOGRAPHIC SURVEY', area: '85 HECTARES' },
            { src: '/images/hydro_project.png', alt: 'Hydrographic', title: 'HYDROGRAPHIC SURVEY', area: '7.8 HECTARES' }
    ]}
])
</script>