<template>
    <v-container fluid id="our-team" class="bg-grey-lighten-4">
        <h1 class="text-h3 font-weight-bold mb-6 textStyle text-center">Meet Our Team</h1>
        <v-row justify="center" align="center">
            <v-col cols="12" sm="4" class="d-flex justify-center">
                <v-card elevation="0" class="bg-transparent text-center">
                    <img :src="$asset('images/pete.jpg')" alt="Jen" class="profile-img">
                    <h6 class="font-weight-bold textStyle text-center">Engr. Peter June Alaon</h6>
                    <p class="text-subtitle-3 textStyle text-center">Geodetic Engineer <br> President</p>
                </v-card>
            </v-col>
        </v-row>
        <v-row justify="center" align="center">
            <v-col cols="12" sm="4" class="d-flex justify-center">
                <v-card elevation="0" class="bg-transparent text-center">
                    <img :src="$asset('images/jen.jpg')" alt="Jen" class="profile-img">
                    <h6 class="font-weight-bold textStyle text-center">Jenny Rose Masaga</h6>
                    <p class="text-subtitle-3 textStyle text-center">Admin Manager</p>
                </v-card>
            </v-col>
            <v-col cols="12" sm="4" class="d-flex justify-center">
                <v-card elevation="0" class="bg-transparent text-center">
                    <img :src="$asset('images/juls.jpg')" alt="Juls" class="profile-img">
                    <h6 class="font-weight-bold textStyle text-center">Julius Arenz Calinao</h6>
                    <p class="text-subtitle-3 textStyle text-center">Operations Manager</p>
                </v-card>
            </v-col>
            <v-col cols="12" sm="4" class="d-flex justify-center">
                <v-card elevation="0" class="bg-transparent text-center">
                    <img :src="$asset('images/arnold.jpg')" alt="Arnold" class="profile-img">
                    <h6 class="font-weight-bold textStyle text-center">Arnold Bryan Masaga</h6>
                    <p class="text-subtitle-3 textStyle text-center">Construction Manager</p>
                </v-card>
            </v-col>
        </v-row>
        <v-row justify="center" align="center">
            <v-col cols="12" sm="4" class="d-flex justify-center">
                <v-card elevation="0" class="bg-transparent text-center">
                    <img :src="$asset('images/paulo.png')" alt="Paulo" class="profile-img">
                    <h6 class="font-weight-bold textStyle text-center">Dean Paulo Villena</h6>
                    <p class="text-subtitle-3 textStyle text-center">Senior Land Specialist</p>
                </v-card>
            </v-col>
            <v-col cols="12" sm="4" class="d-flex justify-center">
                <v-card elevation="0" class="bg-transparent text-center">
                    <img :src="$asset('images/shane.jpg')" alt="Shane" class="profile-img">
                    <h6 class="font-weight-bold textStyle text-center">Engr. Maryneil Shane Bertiz</h6>
                    <p class="text-subtitle-3 textStyle text-center">Geodetic Engineer - Senior Hydrographer</p>
                </v-card>
            </v-col>
            <v-col cols="12" sm="4" class="d-flex justify-center">
                <v-card elevation="0" class="bg-transparent text-center">
                    <img :src="$asset('images/jes.jpg')" alt="Jes" class="profile-img">
                    <h6 class="font-weight-bold textStyle text-center">Engr. Jessalyn Sibuyo</h6>
                    <p class="text-subtitle-3 textStyle text-center">Junior Geodetic Engineer</p>
                </v-card>
            </v-col>
        </v-row>
        <v-row justify="center" align="center">
            <v-col cols="12" sm="4" class="d-flex justify-center">
                <v-card elevation="0" class="bg-transparent text-center">
                    <img :src="$asset('images/kugs.jpg')" alt="Kugs" class="profile-img">
                    <h6 class="font-weight-bold textStyle text-center">Leonard Ray Alaon</h6>
                    <p class="text-subtitle-3 textStyle text-center">Surveyor</p>
                </v-card>
            </v-col>
            <v-col cols="12" sm="4" class="d-flex justify-center">
                <v-card elevation="0" class="bg-transparent text-center">
                    <img :src="$asset('images/david.jpg')" alt="Dave" class="profile-img">
                    <h6 class="font-weight-bold textStyle text-center">David Ralph Dy</h6>
                    <p class="text-subtitle-3 textStyle text-center">Survey Aide / Maintenance</p>
                </v-card>
            </v-col>
            <v-col cols="12" sm="4" class="d-flex justify-center">
                <v-card elevation="0" class="bg-transparent text-center">
                    <img :src="$asset('images/batman.jpg')" alt="Batman" class="profile-img">
                    <h6 class="font-weight-bold textStyle text-center">Jobelle Sansan</h6>
                    <p class="text-subtitle-3 textStyle text-center">Survey Aide / Maintenance</p>
                </v-card>
            </v-col>
        </v-row>
        <v-row justify="center" align="center">
            <v-col cols="12" sm="4" class="d-flex justify-center">
                <v-card elevation="0" class="bg-transparent text-center">
                    <img :src="$asset('images/joshua.jpg')" alt="Joshua" class="profile-img">
                    <h6 class="font-weight-bold textStyle text-center">John Joshua Gaan</h6>
                    <p class="text-subtitle-3 textStyle text-center">Company Driver</p>
                </v-card>
            </v-col>
            <v-col cols="12" sm="4" class="d-flex justify-center">
                <v-card elevation="0" class="bg-transparent text-center">
                    <img :src="$asset('images/john.jpg')" alt="John" class="profile-img">
                    <h6 class="font-weight-bold textStyle text-center">Roblette John Tindoc</h6>
                    <p class="text-subtitle-3 textStyle text-center">Company Driver</p>
                </v-card>
            </v-col>
        </v-row>
        <v-row class="mt-16 px-4 px-md-16">
            <v-col cols="12" sm="6">
                <div class="d-flex flex-column justify-center fill-height pr-md-8">
                    <p class="textStyle mb-6">
                        We are a local company that focuses on offering top-notch service while using a variety of surveying skills and methods.
                    </p>
                    <p class="text-body-1 textStyle text-grey-darken-1" style="text-align: justify; line-height: 1.8;">
                        Geopete Geodetic Surveying Services is a surveying company with expertise in all areas of surveying, including relocation, verification, topographic, hydrographic, mining, construction, and photogrammetry/mapping surveys throughout the Philippines. We guarantee to give our clients the best and most accurate service possible.
                    </p>
                </div>
            </v-col>

            <v-col cols="12" sm="6" class="d-flex align-center justify-center">
                <v-img 
                    :src="$asset('images/survey.jpg')" 
                    alt="Survey" 
                    class="rounded-lg elevation-4"
                    max-width="100%"
                    contain
                ></v-img>
            </v-col>
        </v-row>
    </v-container>
</template>

<style scoped>
.profile-img {
    width: 100%;
    max-width: 350px; /* Adjust size as needed */
    aspect-ratio: 1 / 1; /* Keeps it perfectly square */
    object-fit: cover;
    border-radius: 12px; /* Smooth rounded corners */
    box-shadow: 0 4px 10px rgba(0,0,0,0.1); /* Subtle professional shadow */
    transition: transform 0.3s ease;
}

.survey-img {
    width: 100%;
    max-width: 700px;
    height: 100vh;
    aspect-ratio: 1 / 1; /* Keeps it perfectly square */
    object-fit: cover;
    border-radius: 12px; /* Smooth rounded corners */
    box-shadow: 0 4px 10px rgba(0,0,0,0.1); /* Subtle professional shadow */
    transition: transform 0.3s ease;
}
</style>