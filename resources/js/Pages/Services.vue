<template>
    <v-container id="services" fluid class="py-16 bg-grey-lighten-4">
         <v-row class="mb-10 px-4 px-md-0 text-center text-md-left" justify="center" align="center">
            <v-col cols="12" md="5" class="d-flex flex-column justify-center pr-md-8 text-md-right">
                <h1 class="text-h3 font-weight-bold mb-4 mb-md-0 textFont">Services</h1>
            </v-col>
            <v-col cols="12" md="6">
                <div class="d-flex flex-column justify-center fill-height pl-md-4">
                    <p class="textStyle mb-2 text-body-small">
                        We are currently working on projects involving with large scale residential partitions and other individual residential properties, industrial parks mining, shipping related surveys, telco companies, local government projects, providing services from Cavite to any part of the Philippines with our Licensed Engineers and Experienced Team Members.
                    </p>
                </div>
            </v-col>
        </v-row>
        
        <v-row justify="center" align="stretch" class="px-2 px-sm-6">
            <v-col cols="12" sm="6" md="4" lg="3" class="d-flex justify-center" v-for="(service, index) in servicesList" :key="index">
                <v-card elevation="0" class="bg-transparent text-center mb-8 w-100 d-flex flex-column">
                    <div class="img-container mx-auto" @click="">
                        <img :src="service.image" :alt="service.title.replace(/<[^>]*>?/gm, '')" class="profile-img">
                        <div class="overlay">
                            <p class="text-body-2 font-weight-medium text-white textFont px-4">{{ service.description }}</p>
                        </div>
                    </div>
                    <p class="font-weight-bold text-h6 text-sm-h5 textFont mt-4" v-html="service.title"></p>
                </v-card>
            </v-col>
        </v-row>
    </v-container>
</template>

<script setup>
import reloImg from '../../../public/images/relo.png';
import veriImg from '../../../public/images/veri.png';
import subdiImg from '../../../public/images/subdi.png';
import consoImg from '../../../public/images/conso.png';
import topoImg from '../../../public/images/topo.png';
import hydroImg from '../../../public/images/hydro.png';
import originalImg from '../../../public/images/original.png';
import resurveyImg from '../../../public/images/resurvey.png';
import constructionImg from '../../../public/images/construction.png';
import asBuiltImg from '../../../public/images/as_built.png';
import roadSurveyImg from '../../../public/images/road_survey.png';
import caapClearancePermitImg from '../../../public/images/caap_clearance_permit.png';
import aerialImg from '../../../public/images/aerial.png';
import verticalControlImg from '../../../public/images/vertical_control.png';
import foreshoreApplicationImg from '../../../public/images/foreshore_application.png';

const servicesList = [
    {
        image: reloImg,
        title: 'Relocation Survey',
        description: 'Determines the exact boundaries of a property and relocates its corners.'
    },
    {
        image: veriImg,
        title: 'Verification Survey',
        description: 'Checks and verifies the technical description and boundaries of a titled property.'
    },
    {
        image: subdiImg,
        title: 'Subdivision Survey',
        description: 'Divides a comparatively large tract of land into smaller lots.'
    },
    {
        image: consoImg,
        title: 'Consolidation Survey',
        description: 'Joins two or more adjacent lots into a single larger lot.'
    },
    {
        image: topoImg,
        title: 'Topographic Survey',
        description: 'Gathers data about the natural and man-made features and elevations of the land.'
    },
    {
        image: hydroImg,
        title: 'Hydrographic Survey',
        description: 'Measures physical features of oceans, seas, coastal areas, lakes, and rivers.'
    },
    {
        image: originalImg,
        title: 'Original Survey',
        description: 'The first survey of a parcel of public land, prior to its titling.'
    },
    {
        image: resurveyImg,
        title: 'Re Survey',
        description: 'Re-establishes lines and corners of a previously surveyed tract of land.'
    },
    {
        image: constructionImg,
        title: 'Construction Survey',
        description: 'Establishes lines and grades for construction projects.'
    },
    {
        image: asBuiltImg,
        title: 'As-built Survey',
        description: 'Records the final location of improvements during or after construction.'
    },
    {
        image: roadSurveyImg,
        title: 'Road Survey',
        description: 'Surveys for planning, design, and construction of roads.'
    },
    {
        image: caapClearancePermitImg,
        title: 'CAAP Height Clearance Permit',
        description: 'Determines building height restrictions near airports.'
    },
    {
        image: aerialImg,
        title: 'Aerial Photogrammetry',
        description: 'Uses aerial photographs to create topographic maps and models.'
    },
    {
        image: verticalControlImg,
        title: 'Vertical Control Survey',
        description: 'Establishes a network of reference points with known elevations.'
    },
    {
        image: foreshoreApplicationImg,
        title: 'Survey for Miscellaneous/<br>Foreshore Application',
        description: 'Surveys for applications to lease or permit public lands or foreshore areas.'
    }
];
</script>

<style scoped>
.img-container {
    position: relative;
    width: 100%;
    max-width: 450px;
    aspect-ratio: 16 / 9;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    cursor: pointer; /* ensures touch tap mimics hover dynamically */
    -webkit-tap-highlight-color: transparent; /* removes default link highlight on mobile tap */
}

.profile-img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    transition: transform 0.3s ease;
    display: block;
}

.img-container:hover .profile-img {
    transform: scale(1.05);
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.75);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.img-container:hover .overlay {
    opacity: 1;
}
</style>