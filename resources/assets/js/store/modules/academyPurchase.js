import axios from "axios";

const state = {
    products: [],
    cart: [],
    order: {},
};

const getters = {

};



const actions = {
    getProducts({ commit }){
        //fecth teh products from the API and add them to the STATE
        axios
            .get(`/api/academies/${this.$route.params.id}`)
            .then((response) => {
                commit("UpdateProducts", response.data);
            })
            .catch((error) => console.error(error));
    },

    clearCart({ commit }) {
        commit('UpdateCart', []);
    }
};



const mutations = {

    updateProducts(state, products){
        state.products = product
    },

    addToCart(state, product){
        let productInCartIndex = state.cart.findIndex(item => item.id == product.id)
        if (productInCartIndex != -1)
        {
            state.cart[productInCartIndex].quantity++;
            return;
        }

        product.quantity = 1;
        state.cart.push(product);
    },

    removeFromCart(state, index){
        state.cart.splice(index, 1);
    },

    updateOrder(state, order){
        state.order = order;
    },

    updateCart(state, cart){
        state.cart = cart;
    }

};

export default {
    namspaced: true,
    state,
    getters,
    actions,
    mutations
}