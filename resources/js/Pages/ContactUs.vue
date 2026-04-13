
<template>
    <v-container fluid id="contact-us" class="py-16 bg-grey-lighten-4">
        <v-row justify="center">
            <v-col cols="12" md="10" lg="8" class="text-center">
                <p class="font-weight-bold mb-6 textFont text-h3">Contact Us</p>
                <p class="mb-8 italic textFont text-h5">Ready to chart new boundaries? We'd love to hear from you.</p>
                
                <v-row class="text-center mt-4 justify-center">
                    <v-col cols="12" md="6" class="px-md-8">
                        <div class="mb-6">
                                    <!-- NOTE - address -->
                            <div class="text-h6 font-weight-bold text-primary mb-1 textFont">
                                <v-icon start>mdi-map-marker</v-icon>
                                Office Address
                            </div>
                            <p class="text-body-1 ml-8 textFont">Blk 8 Lot 29 Elliston Place Abel St.,<br> Pasong Camachile II, General Trias, Cavite</p>
                        </div>
                        
                        <div class="mb-6">
                                    <!-- NOTE - contact no -->
                            <div class="text-h6 font-weight-bold text-primary mb-1 textFont">
                                <v-icon start color="green">mdi-phone</v-icon>
                                Contact No.
                            </div>
                            <p class="text-body-1 ml-8 textFont">0919-077-7886 / 0915-598-5620</p>
                        </div>
                    </v-col>
                    
                    <v-col cols="12" md="6" class="px-md-8">
                        <div class="mb-6">
                                    <!-- NOTE - email -->
                            <div class="text-h6 font-weight-bold text-primary mb-1 textFont">
                                <v-icon start color="red">mdi-email</v-icon>
                                Email
                            </div>
                            <p class="text-body-1 ml-8 textFont">
                                <a href="mailto:geopetesurv@gmail.com" class="text-decoration-none textFont">
                                    geopetesurv@gmail.com
                                </a>
                            </p>
                        </div>
                                    <!-- NOTE - office hours -->
                        <div class="mb-6">
                            <div class="text-h6 font-weight-bold text-primary mb-1 textFont">
                                <v-icon start>mdi-clock-outline</v-icon>
                                Office Hours
                            </div>
                            <p class="text-body-1 ml-8 textFont">Monday to Saturday <br> 8:00 AM to 5:00 PM</p>
                        </div>
                                    <!-- NOTE - socials -->
                        <div class="mb-6">
                            <div class="text-h6 font-weight-bold text-primary mb-1 textFont">
                                <v-icon start>mdi-account-group</v-icon>
                                Stay Connected
                            </div>
                            <div class="ml-8 mt-4 d-flex align-center flex-wrap justify-center textFont" style="gap: 24px;">
                                <a href="https://www.facebook.com/ggsurv" target="_blank" class="d-flex align-center text-decoration-none">
                                    <v-icon color="#1877F2" size="x-large">mdi-facebook</v-icon>
                                </a>
                                
                                <a href="https://www.instagram.com/gg.surv/" target="_blank" class="d-flex align-center text-decoration-none">
                                    <v-icon color="#E4405F" size="x-large">mdi-instagram</v-icon>
                                </a>
                            </div>
                        </div>
                    </v-col>
                </v-row>
                                    <!-- NOTE - inquiry form section -->
                <v-row class="mt-10 justify-center text-left">
                    <v-col cols="12" md="10">
                        <v-card class="pa-8 rounded-xl elevation-3 bg-white">
                            <p class="font-weight-bold mb-6 text-center text-h4 textFont text-primary" style="font-size: larger;">Send Us an Inquiry</p>
                            <v-form @submit.prevent="submitForm">
                                <v-row>
                                    <v-col cols="12" md="6">
                                        <v-autocomplete 
                                            v-model="form.services_needed"
                                            multiple
                                            :items="services" 
                                            item-title="name"
                                            item-value="name"
                                            label="Services Needed"
                                            density="compact"
                                            color="primary" 
                                            class="textFont">
                                        </v-autocomplete>
                                    </v-col>
                                    <v-col cols="12" md="6">
                                        <v-text-field 
                                            v-model="form.purpose" label="Purpose"  color="primary" class="textFont">
                                        </v-text-field>
                                    </v-col>
                                    <v-col cols="12" md="6">
                                        <v-text-field 
                                            v-model="form.area" label="Area" 
                                            color="primary" class="textFont">
                                        </v-text-field>
                                    </v-col>
                                    <v-col cols="12" md="6">
                                        <v-text-field 
                                            v-model="form.location" label="Location"  color="primary" class="textFont">
                                        </v-text-field>
                                    </v-col>
                                    <v-col cols="12" md="6">
                                        <v-text-field 
                                            v-model="form.contact_no" label="Contact No."  color="primary" class="textFont">
                                        </v-text-field>
                                    </v-col>
                                    <v-col cols="12" md="6">
                                        <v-text-field 
                                            v-model="form.email" label="Email"
                                            type="email"
                                            color="primary" class="textFont">
                                        </v-text-field>
                                    </v-col>
                                    <v-col cols="12">
                                        <v-file-input
                                            v-model="form.attachment"
                                            prepend-inner-icon="mdi-paperclip"
                                            prepend-icon=""
                                            label="Attachment for Titles & Other docs"
                                            color="primary"
                                            class="textFont">
                                        </v-file-input>
                                    </v-col>
                                </v-row>
                                <v-btn 
                                    type="submit" 
                                    color="primary" 
                                    size="large" 
                                    block 
                                    class="mt-4 textFont elevation-2 text-none font-weight-bold">
                                    Submit
                                </v-btn>
                            </v-form>
                        </v-card>
                    </v-col>
                </v-row>

            </v-col>
        </v-row>
    </v-container>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import { useForm } from '@inertiajs/vue3';
import axios from 'axios';

const form = useForm({
    services_needed: [],
    purpose: '',
    area: '',
    location: '',
    attachment: [],
    contact_no: '',
    email: '',
})

const services = ref([])

const submitForm = () => {
    const file = (form.attachment && form.attachment.length > 0) ? form.attachment[0] : null

    form.transform((data) => ({
        ...data,
        attachment: file,
        services_needed: Array.isArray(data.services_needed) ? data.services_needed.join(', ') : data.services_needed,
    })).post(route('contact.store'), {
        preserveScroll: true,
        onSuccess: () => {
            alert('Your inquiry has been sent successfully!')
            form.reset()
        },
        onError: () => {
            alert('There was an issue sending your inquiry. Please check your inputs.')
        }
    })
}

const fetchServices = async () => {
    try{
        const res = await axios.get('/get_services')
        services.value = res.data
    }
    catch(error){
        console.error('Error fetching services')
    }
}

onMounted(() => {
    fetchServices()
})
</script>
