import axios from "axios";

const state = {
    
};

const getters = {
   
};



const actions = {
    paymentApprove( {} ) {
        axios 
            .post(`/api/user/payment`, {
                courseId: localStorage.getItem('course_id'),
                userId: localStorage.getItem('user_id'),
            })
            .then( response => {
                console.log(reponse.data.status)
                // if (response.status == 'Exists'){

                // }
                // else if (response.data.status == 'Success')
                // console.log( response );
                // localStorage.setItem(
                //     "payment-state",
                //     true
                // );
            })
    },
};



const mutations = {
    
};

export default {
    namspaced: true,
    state,
    getters,
    actions,
    mutations
}