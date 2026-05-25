<template>
    <Head title="Welcome" />
    
    <v-app>
        <!-- mobile navigation drawer -->
        <v-navigation-drawer v-model="drawer" location="right" temporary>
            <v-list>
                <v-list-item title="About Us" link></v-list-item>
                <v-list-item title="Services" link></v-list-item>
                <v-list-item title="Projects" link></v-list-item>
                <v-list-item title="Our Team" link></v-list-item>
                <v-list-item title="Gallery" link></v-list-item>
                <v-list-item title="Contact Us" link></v-list-item>
            </v-list>
        </v-navigation-drawer>

        <v-app-bar 
            flat 
            class="px-4 px-md-10 py-2" 
            scroll-behavior="elevate"
            density="compact">
            <p class="text-h5 textFont">Geopete Geodetic Surveying Services</p>
            <v-spacer></v-spacer>

            <div class="d-none d-md-flex">
                <v-btn class="nav-link-btn textStyle" variant="text" @click="scrollToAbout">About Us</v-btn>
                <v-btn class="nav-link-btn textStyle" variant="text" @click="scrollToOurTeam">Our Team</v-btn>
                <v-btn class="nav-link-btn textStyle" variant="text" @click="scrollToServices">Services</v-btn>
                <v-btn class="nav-link-btn textStyle" variant="text" @click="scrollToProjects">Projects</v-btn>
                <v-btn class="nav-link-btn textStyle" variant="text" @click="scrollToGallery">Gallery</v-btn>
                <!-- <v-btn class="nav-link-btn textStyle" variant="text" @click="scrollToReviews">Reviews</v-btn> -->
                <v-btn class="nav-link-btn textStyle" variant="text" @click="scrollToContact">Contact Us</v-btn>
            </div>
            
            <v-btn icon="mdi-menu" class="d-md-none" variant="text" @click="drawer = !drawer"></v-btn>
        </v-app-bar>

        <v-main class="bg-grey-lighten-4">
            <v-container class="mt-32 mb-32 d-flex align-center justify-center"> 
                <div class="w-100 text-center">
                    <p class="text-h3 text-md-h1 font-weight-bold mb-8 textFont">
                        Charting Boundaries, Building Confidence.
                    </p>
                    <v-btn
                        color="primary" 
                        size="x-large" 
                        elevation="4"
                        class="ma-16 px-8 pt-2 pb-2 textFont" 
                        @click="scrollToContact">
                        Get in Touch
                    </v-btn>
                </div>
            </v-container>
            <AboutUs/>
            <OurTeam/>
            <Services/>
            <Gallery/>
            <Project/>
            <Reviews/>
            <ContactUs/>
        </v-main>
    </v-app>
</template>

<script setup>
import { ref } from 'vue';
import { Head } from '@inertiajs/vue3';
import AboutUs from './AboutUs.vue';
import OurTeam from './OurTeam.vue';
import Services from './Services.vue';
import Gallery from './Gallery.vue';
import Project from './Project.vue';
import Reviews from './Reviews.vue';
import ContactUs from './ContactUs.vue';

const drawer = ref(false);

const scrollToAbout = () => {
    document.getElementById('about-us')?.scrollIntoView({ behavior: 'smooth' })
}

const scrollToOurTeam = () => {
    document.getElementById('our-team')?.scrollIntoView({ behavior: 'smooth' })
}

const scrollToServices = () => {
    document.getElementById('services')?.scrollIntoView({ behavior: 'smooth' })
}

const scrollToProjects = () => {
    document.getElementById('projects')?.scrollIntoView({ behavior: 'smooth' })
}

const scrollToGallery = () => {
    document.getElementById('gallery')?.scrollIntoView({ behavior: 'smooth' })
}

const scrollToReviews = () => {
    document.getElementById('reviews')?.scrollIntoView({ behavior: 'smooth' })
}

const scrollToContact = () => {
    document.getElementById('contact-us')?.scrollIntoView({ behavior: 'smooth' })
}
</script>