import axios from "axios";

const state = {
    // currentUserLoginState: false,
    tutor: {}
};

const mutations = {
    // setCurrentUserLoginState(state, status){
    //     state.currentUserLoginState = status;
    // }
};

const actions = {
    // async setCurrentUserLogin(state){
    //     state.commit("setCurrentUserLoginState", true);
    // },
    // async setCurrentUserLogout(state){
    //     state.commit("setCurrentUserLoginState", false);
    // },
    loginTutor( {}, tutor ) {
        axios
            .post(`/api/tutor/login`, {
                email: tutor.email,
                password: tutor.password,
            })
            .then( response => {
                console.log( response );
                if( response.data.access_token ){

                    setCurrentUserLogin(true);
                    //save token
                    localStorage.setItem(
                        "tutor_token",
                        response.data.access_token
                    )
                    window.location.replace("/home");
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