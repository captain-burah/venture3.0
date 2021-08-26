import Vue from 'vue';
import Vuex from 'vuex';

import payg from "./modules/payg"
import academyPurchase from "./modules/academyPurchase"
import checkout from "./modules/checkout"
import currentUser from "./modules/currentUser"
import currentTutor from "./modules/currentTutor"

Vue.use(Vuex);

export default new Vuex.Store({
    modules: {
        payg,
        academyPurchase,
        checkout,
        currentUser,
        currentTutor,
    }
})