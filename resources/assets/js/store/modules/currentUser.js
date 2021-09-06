import axios from "axios";

const state = {
    currentUserLoginState: false,
    user: {},
    student_token: null,
};

const mutations = {
    setCurrentUserLoginState(state, status){
        state.currentUserLoginState = status;
    },
    setStudentToken(state, token_key){
        state.student_token = token_key;
    }
};

const actions = {
    async setCurrentUserLogin(state){
        state.commit("setCurrentUserLoginState", true);
    },
    async setCurrentUserLogout(state){
        state.commit("setCurrentUserLoginState", false);
    },
    async setStudentTokenValue(state, para){
        state.commit("setStudentToken", para);
    },

    loginUser( { dispatch, getters }, user ) {
        axios
            .post(`/api/user/login`, {
                email: user.email,
                password: user.password,
            })
            .then( response => {
                // console.log( response );
                if( response.data.access_token ){
                    
                    if (dispatch('setCurrentUserLogin')) {
                        //save token
                        console.log(getters.getCurrentUserLoginState);
                        dispatch('setStudentTokenValue', response.data.access_token);
                        localStorage.setItem(
                            "student_token",
                            response.data.access_token
                        );
                        localStorage.setItem(
                            "user_id",
                            response.data.user_id.id
                        )
                    }
                }
                else if (response.data.message) {
                    Toast.fire({
                        icon: 'error',
                        title: 'Oops..',
                        text: response.data.message,
                    });
                };
                // if ( response.data.user_id ) {
                //      console.log(response.data.user_id);
                    
                // };
            })
    },

    registerUser( {}, user ) {
        axios 
            .post(`/api/user/register`, {
                fname: user.fname,
                lname: user.lname,
                email: user.email,
                password: user.password,
            })
            .then( response => {
                console.log( response );
                window.location.replace("/student-login");
            })
    },

    loadDashboard( {}) {
        if (localStorage.student_token != null) {
            return true;
        }
        else {
            return false;
        }
    }
    
};

const getters = {
    getCurrentUserLoginState(state) {
        return state.currentUserLoginState;
    },
    getStudentToken(state) {
        return state.student_token;
    }
};

export default {
    namspaced: true,
    state,
    mutations,
    actions,
    getters,
}