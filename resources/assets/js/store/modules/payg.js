import axios from "axios";

const state = {
    storage: {}
};

const getters = {

};



const actions = {
    getStorage( {commit} ){
        axios.get("api/storage")
        .then( response => {
            commit('setStorage', response.data );
        });
    }
};



const mutations = {
    setStorage( state, data ) {
        state.storage = data;
    }
};

export default {
    namspaced: true,
    state,
    getters,
    actions,
    mutations
}