<template>

    <div class="card bg-white image-preview mx-auto">
        
        <router-link :to="{ name: 'academic', params: { id } }">
            <img src="/img/faces/christian.jpg" 
                alt="Card image cap" 
                class="image-preview__image card-img-top img-raised rounded img-fluid mt-3"
            > 
        </router-link>
        
        <div class="card-header card-header-info p-3">
            <h4 class="text-center description p-0 m-0 text-white">
                {{ tutor }}
            </h4>
        </div> 
        <div class="card-body">
            <h5 class="mt-0 description text-center">
                {{ name }}
            </h5>
            <h4 class="mt-2 text-secondary text-justify">
                {{ description }}
            </h4>
        </div>
        <div class="card-footer text-muted mx-auto">
            <p v-text="formatCurrency(price)"></p>
        </div>
    </div>
</template>
<script>

export default {
    props: {'name': String, 'description': String, 'tutor': String, 'thumbnail': String, 'id': Number, 'price': Number}, 
    methods: {
        formatCurrency(price){
            price = (price / 100);
            return price.toLocaleString('ta-LK', { style: "currency", currency: "LKR"});
        }
    },
    mounted(){
        console.log(this.$store.getters.getCurrentUserLoginState);
    },
    
    };
</script>