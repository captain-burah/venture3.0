import axios from "axios";

const state = {
    paymentTime: '',
    paymentStatus: '',
};

const getters = {
   
};



const actions = {
    async setCheckoutStatus(state, time, status){
        state.commit("setCheckoutStatus", time, status);
    },
    userPaymentApprove( {}, order ) {
        axios 
            .post("/api/user/payment", {
                courseId: localStorage.getItem('course_id'),
                userId: localStorage.getItem('user_id'),

                tx_status: order.status,
                tx_id: order.id,
                tx_create_time: order.create_time,
                tx_update_time: order.update_time,
                tx_payee_fname: order.payer.name.given_name,
                tx_payee_lname: order.payer.name.surname,
                tx_payer_id: order.payer.payer_id,
                tx_currency_code: order.purchase_units[0].amount.currency_code,
                tx_amount: order.purchase_units[0].amount.value,
                tx_payee_email: order.purchase_units[0].payee.email_address,
                tx_payee_merchant_id: order.purchase_units[0].payee.merchant_id,
            })
            .then( response => {
                dispatch('setCheckoutStatus', response.data.time, response.data.status);
            })
    },
};



const mutations = {
    setCheckoutStatus(state, time, status){
        state.paymentTime = time;
        state.paymentStatus = status;
    }
};

export default {
    namspaced: true,
    state,
    getters,
    actions,
    mutations
}