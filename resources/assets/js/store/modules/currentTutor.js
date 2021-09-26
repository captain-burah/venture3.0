import axios from "axios";

const state = {
    currentTutorLoginState: false,
    tutor: {},
    tutor_token: null,
};

const mutations = {
    setCurrentTutorLoginState(state, status){
        state.currentTutorLoginState = status;
    },
    setTutorToken(state, token_key){
        state.tutor_token = token_key;
    }
};

const actions = {
    async setCurrentTutorLogin(state){
        state.commit("setCurrentTutorLoginState", true);
    },
    async setCurrentTutorLogout(state){
        state.commit("setCurrentTutorLoginState", false);
    },
    async setTutorTokenValue(state, para){
        state.commit("setTutorToken", para);
    },
    loginTutor( { dispatch, getters}, tutor ) {
        axios
            .post(`/api/tutor/login`, {
                email: tutor.email,
                password: tutor.password,
            })
            .then( response => {
                console.log( response );
                if( response.data.access_token ){
                    if (dispatch('setCurrentTutorLogin')) {
                        dispatch('setTutorTokenValue', response.data.access_token);
                        sessionStorage.setItem(
                            "tutor_token",
                            response.data.access_token
                        );
                        localStorage.setItem(
                            "tutor_id",
                            response.data.tutor_id.id
                        );
                    }
                }
            })
    },
    registerTutor( {}, user ) {
        axios 
            .post(`/api/tutor/register`, {
                fname: user.fname,
                lname: user.lname,
                email: user.email,
                password: user.password,
            })
            .then( response => {
                console.log( response );
                window.location.replace("/tutor-login");
            })
    },
};

const getters = {
    // getCurrentUserLoginState(state) {
    //     return state.currentUserLoginState;
    // }
};

export default {
    namspaced: true,
    state,
    mutations,
    actions,
    getters,
}