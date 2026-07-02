
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
                                    <!-- NOTE - client_email -->
                            <div class="text-h6 font-weight-bold text-primary mb-1 textFont">
                                <v-icon start color="red">mdi-gmail</v-icon>
                                Email
                            </div>
                            <p class="text-body-1 ml-8 textFont">
                                <a class="text-decoration-none textFont">
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
                            <v-form ref="formRef" @submit.prevent="submitForm">
                                <v-row>
                                    <v-col cols="12" md="6">
                                        <v-autocomplete 
                                            v-model="form.services_needed"
                                            :rules="[rules.required]"
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
                                            v-model="form.purpose"
                                            :rules="[rules.required, rules.purpose]"
                                            label="Purpose"  
                                            color="primary" 
                                            class="textFont">
                                        </v-text-field>
                                    </v-col>
                                    <v-col cols="12" md="6">
                                        <v-text-field 
                                            v-model="form.area"
                                            :rules="[rules.required, rules.area]"
                                            label="Area" 
                                            color="primary" 
                                            class="textFont">
                                        </v-text-field>
                                    </v-col>
                                    <v-col cols="12" md="6">
                                        <v-text-field 
                                            v-model="form.location"
                                            :rules="[rules.required, rules.location]"
                                            label="Location"  
                                            color="primary" 
                                            class="textFont">
                                        </v-text-field>
                                    </v-col>
                                    <v-col cols="12" md="6">
                                        <v-radio-group
                                            class="textFont ml-3"
                                            color="primary"
                                            hide-details
                                            inline
                                            label="Titled?"
                                            :rules="[rules.required, rules.title]"
                                            v-model="form.title">
                                            <v-radio
                                                label="Yes"
                                                value="Yes">
                                            </v-radio>
                                            <v-radio
                                                label="No"
                                                value="No">
                                            </v-radio>
                                        </v-radio-group>
                                    </v-col>
                                    <v-col cols="12" md="6">
                                        <v-text-field 
                                            v-model="form.client_name"
                                            :rules="[rules.required, rules.client_name]"
                                            label="Name of Client"  
                                            color="primary" 
                                            class="textFont">
                                        </v-text-field>
                                    </v-col>
                                    <v-col cols="12" md="6">
                                        <v-text-field 
                                            v-model="form.contact_no"
                                            :rules="[rules.required, rules.contact_no]"
                                            maxLength="11"
                                            label="Contact No."
                                            @input="form.contact_no = form.contact_no.replace(/\D/g, '')"
                                            counter="11"  
                                            color="primary" 
                                            class="textFont">
                                        </v-text-field>
                                    </v-col>
                                    <v-col cols="12" md="6">
                                        <v-text-field 
                                            v-model="form.client_email"
                                            :rules="[rules.required, rules.client_email]"
                                            label="Email"
                                            type="client_email"
                                            color="primary" 
                                            class="textFont">
                                        </v-text-field>
                                    </v-col>

                                </v-row>
                                <v-btn
                                    :loading="isSubmitting"
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
import emailjs from '@emailjs/browser';

const isSubmitting = ref(false)
const formRef = ref(null)
    
const rules = {
    required: v => !!v || 'This field is required',
    client_email: v => /.+@.+\..+/.test(v) || 'E-mail must be valid',
    contact_no: v => {
        const pattern = /^\d{11}$/;
        return pattern.test(v) || 'Contact number must be exactly 11 digits';
    },
};

const form = useForm({
    services_needed: [],
    purpose: '',
    area: '',
    location: '',
    contact_no: '',
    client_email: '',
    client_name: '',
    title: '',
})

const services = ref([])

const submitForm = async () => {
    const { valid } = await formRef.value.validate()
    if(!valid) return
    isSubmitting.value = true
    try{
        const templateParams = {
            //these keys must match the {{ variables }} in your EmailJS Template EXACTLY
            client_name: form.client_name,
            services_needed: Array.isArray(form.services_needed) ? form.services_needed.join(', ') : form.services_needed,
            purpose: form.purpose,
            area: form.area,
            location: form.location,
            title: form.title,
            contact_no: form.contact_no,
            client_email: form.client_email,
        }

        const response = await emailjs.send(
            'service_o9n71yr',     //service ID
            'template_ki6tm14',    //template ID
            templateParams,
            '2qEbF-bGjC43Lcyx2'    //public key
        )

        console.log('SUCCESS!', response.status, response.text)
        alert('Your inquiry has been sent successfully!')
        form.reset()
        formRef.value.resetValidation()
    }catch(error){
        console.error('EmailJS Error:', error)
        alert('There was an issue sending your inquiry. Please check your network and try again.')
    }finally{
        isSubmitting.value = false
    }
}

const fetchServices = async () => {
    try{
        const res = await axios.get('get_services')
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
