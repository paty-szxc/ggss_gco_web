<template>
    <v-container fluid id="mission" class="mission-container bg-grey-lighten-4">
        <v-row justify="center" align="start">
            <!-- VISION COLUMN -->
            <v-col cols="12" md="4" class="d-flex flex-column align-center text-center px-4">
                <h2 class="text-hr text-h4 font-weight-bold mb-6 textStyle">VISION</h2>
                <p class="textStyle text-justify">
                    As we keep on developing our skill sets on both technical and actual aspects to provide the best result by doing research on how can we improve every process and being updated on every new knowledge, sharing it with our employees by providing proper training to give the most suitable and optimum solutions for each project / client. We will always push ourselves and continue to be better to provide quality and accurate results for our present and future clients.
                </p>
            </v-col>

            <!-- CORE VALUES COLUMN -->
            <v-col cols="12" md="4" class="d-flex flex-column align-center text-center px-4">
                <h2 class="text-hr text-h4 font-weight-bold mb-6 textStyle">CORE VALUES</h2> 
                <p class="textStyle italic">
                    <span><b>G</b>rowth</span><br>
                    <span><b>E</b>ffective</span><br>
                    <span><b>O</b>utperform</span><br>
                    <span><b>P</b>recision</span><br>
                    <span><b>E</b>fficient</span><br>
                    <span><b>T</b>eamwork</span><br>
                    <span><b>E</b>xcellence</span>
                </p>
            </v-col>

            <!-- MISSION COLUMN -->
            <v-col cols="12" md="4" class="d-flex flex-column align-center text-center px-4">
                <h2 class="text-hr text-h4 font-weight-bold mb-6 textStyle">MISSION</h2>
                <p class="textStyle text-justify">
                    Our mission is to provide the best service and most accurate survey data to our clients on different fields needed. We aim to be diverse as we provide technical expertise on our field and assure that we meet every client's expectation and full satisfaction.
                </p>
            </v-col>
        </v-row>
    </v-container>
</template>

<style scoped>
.mission-container {
    padding: 5% 10%;
}

/* responsive adjustments */
@media (max-width: 960px) {
    .mission-container {
        padding: 8% 5%;
    }
    /* add vertical spacing between columns when stacked on mobile screens */
    .v-col {
        margin-bottom: 2rem;
    }
}
</style>