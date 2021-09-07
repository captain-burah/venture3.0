import axios from "axios";

const state = {
    
};

const getters = {
   
};



const actions = {
    userPaymentApprove( {}, order ) {
        axios 
            .post("/api/user/payment", {
                courseId: localStorage.getItem('course_id'),
                userId: localStorage.getItem('user_id'),
                tx_time: order.create_time,
                tx_id: order.id,
                
            })
            .then( response => {
                // console.log(response.data.status);
                // console.log(response.data.time);
                if (response.data.status === 'Exists'){
                    // localStorage.removeItem('status');
                    // localStorage.removeItem('time');
                    // localStorage.removeItem('precise');
                    localStorage.setItem(
                        'status',
                        response.data.status
                    );
                    localStorage.setItem(
                        'time',
                        response.data.time
                    );
                    localStorage.setItem(
                        'precise',
                        response.data.precise
                    );
                }
                else if (response.data.status === 'Success') {
                    // localStorage.removeItem('status');
                    // localStorage.removeItem('time');
                    localStorage.setItem(
                        'status',
                        response.data.status
                    );
                    localStorage.setItem(
                        'time',
                        response.data.time
                    );
                };
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