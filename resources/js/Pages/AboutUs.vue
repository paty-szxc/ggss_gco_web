<template>
    <v-container fluid id="about-us" class="about-container bg-grey-lighten-4">
        <v-row class="mb-6">
            <v-col cols="12" md="7" class="d-flex flex-column justify-center pr-md-10">
                <h1 class="text-h3 font-weight-bold mb-6 textStyle">About Us</h1>
                <p class="textStyle">
                    <u>Geopete Geodetic Surveying Services</u> was founded on May 10, 2021 by Engr. Peter June Alaon, Licensed Geodetic Engineer. GGSS currently offers Land Surveying Services and will soon be offering Land Titling Assistance.
                </p>
            </v-col>
            <v-col cols="12" md="5" class="d-flex justify-center align-center">
                <img src="/public/images/boss.png" alt="Engr. Peter June Alaon" class="profile-img"/>
            </v-col>
        </v-row>
        <v-row>
            <v-col cols="12">
                <p class="textStyle">
                    Just like any other Geodetic Engineers, Engr. Alaon started his career working for private companies with a wide variety of experience from mining, construction, hydrographic to cadastral surveys. Seeing firms hired by his company for certain projects made him think about trying to build his own firm seem to be more profitable. With the growing demand for survey services, he didn’t think twice and submitted his resignation. Having only himself and no relatives on the field of surveying, he worked hard day and night together with his team composed of 3 individuals to find clients on every platform we knew. Starting by relocating small parcels with his 3-year-old, total station, renting private cars for our surveys or sometimes taking public transportation with our bulky equipment, he little by little, continues to receive more projects including topographic, hydrographic and subdivision surveys.
                </p>
            </v-col>
        </v-row>
    </v-container>
</template>

<style scoped>
.about-container {
    padding: 5% 10%;
    background-color: transparent; /* assuming the background is handled by a parent or we leave it transparent */
}

.profile-img {
    width: 100%;
    max-width: 320px;
    height: auto;
    object-fit: cover;
    border-radius: 20px 20px 80px 80px;
    box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.15);
}

/* responsive adjustments */
@media (max-width: 960px) {
    .about-container {
        padding: 5%;
    }
    .about-title {
        font-size: 3.5rem;
    }
    .title-underline {
        margin-bottom: 1.5rem;
    }
    .profile-img {
        margin-top: 2rem;
        max-width: 260px;
    }
}
</style>