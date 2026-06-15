<template>
  <footer class="bg-[#111827] text-gray-300 py-4 px-2 md:px-12 lg:px-24 border-t border-gray-800 textFont">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
      
      <!-- company branding / about -->
      <div class="flex flex-col space-y-4">
        <h3 class="text-white text-xl font-bold tracking-wider mb-2">
          Geopete Geodetic Surveying Services
        </h3>
        <p class="text-gray-400 text-sm leading-relaxed max-w-sm">
          Charting boundaries, building confidence. Providing expert Geodetic Surveying and Land Titling assistance services since 2021.
        </p>
        <!-- social icons -->
        <div class="flex space-x-4 pt-4">
          <a href="https://www.facebook.com/ggsurv" target="_blank" class="social-icon-btn facebook">
            <v-icon size="large">mdi-facebook</v-icon>
          </a>
          <a href="https://www.instagram.com/gg.surv/" target="_blank" class="social-icon-btn instagram">
            <v-icon size="large">mdi-instagram</v-icon>
          </a>
        </div>
      </div>

      <!-- quick links -->
      <div class="flex flex-col space-y-3">
        <h3 class="text-white text-lg font-semibold mb-2">Quick Links</h3>
        <ul class="space-y-2 text-sm">
          <li>
            <button @click="scrollTo('about-us')" class="hover:text-green-400 transition-colors duration-300 text-left flex items-center group">
              <v-icon size="x-small" class="mr-1 transform group-hover:translate-x-1 transition-transform duration-300">mdi-chevron-right</v-icon>
              About Us
            </button>
          </li>
          <li>
            <button @click="scrollTo('our-team')" class="hover:text-green-400 transition-colors duration-300 text-left flex items-center group">
              <v-icon size="x-small" class="mr-1 transform group-hover:translate-x-1 transition-transform duration-300">mdi-chevron-right</v-icon>
              Our Team
            </button>
          </li>
          <li>
            <button @click="scrollTo('services')" class="hover:text-green-400 transition-colors duration-300 text-left flex items-center group">
              <v-icon size="x-small" class="mr-1 transform group-hover:translate-x-1 transition-transform duration-300">mdi-chevron-right</v-icon>
              Services
            </button>
          </li>
          <li>
            <button @click="scrollTo('projects')" class="hover:text-green-400 transition-colors duration-300 text-left flex items-center group">
              <v-icon size="x-small" class="mr-1 transform group-hover:translate-x-1 transition-transform duration-300">mdi-chevron-right</v-icon>
              Projects
            </button>
          </li>
          <li>
            <button @click="scrollTo('gallery')" class="hover:text-green-400 transition-colors duration-300 text-left flex items-center group">
              <v-icon size="x-small" class="mr-1 transform group-hover:translate-x-1 transition-transform duration-300">mdi-chevron-right</v-icon>
              Gallery
            </button>
          </li>
          <li>
            <button @click="scrollTo('contact-us')" class="hover:text-green-400 transition-colors duration-300 text-left flex items-center group">
              <v-icon size="x-small" class="mr-1 transform group-hover:translate-x-1 transition-transform duration-300">mdi-chevron-right</v-icon>
              Contact Us
            </button>
          </li>
        </ul>
      </div>

      <!-- contact info -->
      <div class="flex flex-col space-y-3">
        <h3 class="text-white text-lg font-semibold mb-2">Contact Info</h3>
        <div class="space-y-3 text-sm text-gray-400">
          <div class="flex items-start space-x-2">
            <v-icon size="small" color="blue" class="mt-0.5">mdi-map-marker</v-icon>
            <span>
              Blk 8 Lot 29 Elliston Place Abel St., Pasong Camachile II, General Trias, Cavite
            </span>
          </div>
          <div class="flex items-center space-x-2">
            <v-icon size="small" color="green">mdi-phone</v-icon>
            <span>0919-077-7886 / 0915-598-5620</span>
          </div>
          <div class="flex items-center space-x-2">
            <v-icon size="small" color="red">mdi-email</v-icon>
            <a href="mailto:geopetesurv@gmail.com" class="hover:text-white transition-colors duration-300">
              geopetesurv@gmail.com
            </a>
          </div>
          <div class="flex items-center space-x-2">
            <v-icon size="small" color="amber">mdi-clock-outline</v-icon>
            <span>Mon - Sat: 8:00 AM - 5:00 PM</span>
          </div>
        </div>
      </div>

    </div>

    <!-- divider -->
    <div class="border-t border-gray-800 my-8"></div>

    <!-- bottom bar -->
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center text-xs text-gray-500 space-y-4 md:space-y-0">
      <div>
        &copy; {{ currentYear }} Geopete Geodetic Surveying Services. All rights reserved.
      </div>
      <div class="flex items-center space-x-1">
        <span>Designed & Developed with</span>
        <v-icon color="red" class="heart-pulse mx-1" size="small">mdi-heart</v-icon>
        <span>by</span>
        <span class="font-bold text-gradient-brand text-sm ml-1 cursor-default hover:scale-105 transition-transform duration-300 inline-block">Pat</span>
      </div>
    </div>
  </footer>
</template>

<script setup>
import { computed } from 'vue';

const currentYear = computed(() => new Date().getFullYear());

const scrollTo = (id) => {
  document.getElementById(id)?.scrollIntoView({ behavior: 'smooth' });
};
</script>

<style scoped>
@keyframes pulse {
  0%, 100% {
    transform: scale(1);
  }
  50% {
    transform: scale(1.3);
  }
}

.heart-pulse {
  animation: pulse 1.2s infinite;
  display: inline-block;
}

/* Social icons custom hover styling */
.social-icon-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background-color: #1f2937;
  color: #9ca3af;
  transition: all 0.3s ease;
}

.social-icon-btn:hover {
  transform: translateY(-3px);
  color: #ffffff;
}

.social-icon-btn.facebook:hover {
  background-color: #1877f2;
}

.social-icon-btn.instagram:hover {
  background-color: #e4405f;
}

.textFont {
  font-family: "Copperplate" !important;
}
</style>
