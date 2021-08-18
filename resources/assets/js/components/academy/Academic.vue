<template>
<div>
    <div class="main main-raised border border-primary">
            <div class="container-fluid">
                    <div class="row mx-auto">
                        <div class="col-md-10 pb-4 mx-auto mt-3">
                            <div class="card mx-auto bg-white text-dark">
                                <div class="card-header card-header-primary">
                                    <h2 class="card-title">{{ academic.name }}</h2>
                                    <p class="category">by {{ academic.tutor }}</p>
                                </div>
                                <div class="card-body">
                                    <div v-if="!loaded">
                                        <h4>Course Duration | {{ academic.duration }} </h4>
                                        <hr/>
                                        <p class="card-text">{{ academic.description }}</p>
                                        <a href="#" class="btn btn-success h4">Add to Cart</a>
                                        <div class="w-100">
                                            <div class="mx-auto w-50" ref="paypal"></div>
                                        </div>
                                        <h4>Lessons</h4>
                                        <ul>
                                            <li></li>
                                        </ul>
                                    </div>
                                    <div v-else>Data is loaded..</div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
    </div>
</div>

</template>

<script>
export default {    
    data() {
        return {
            academic: null,
            loaded: false,
            showpaypal: false,
            loadding: false,
            paidFor: false,
            product: {
                price: 3.99,
                description: "backlink from"
            },
            form: new Form({
                url: '',
                email: '',
                title: '',
                shortdescription: '',
                description:'',
                img: '',
                category_id:'1',
                subcategory_id:'',
            })
        };
    },
    mounted()
    {
        const script = document.createElement("script");
        script.src = "https://www.paypal.com/sdk/js?client-id=AaWDUX9QLm6ZzIUwbMbWyvpwmVJ4ucREyZR4F3xF-5MTm5N3b3qE5anFUj2WMEsnWE8c3JAGamA8OJ-m";
        script.addEventListener("load", this.setLoaded);
        document.body.appendChild(script);
        
    },
    methods: {
        setLoaded(){
            this.loaded = true;
            window.paypal
            .Buttons({
                createOrder: (data, actions) => {
                    return actions.order.create({
                        purchase_units: [
                        {
                            description: this.product.description,
                            amount: {
                                currency_code: "USD",
                                value: this.product.price
                            }
                        }
                    ]
                    });
                },
                
            })
            .render(this.$refs.paypal);
        }
    },
    created() {
        this.loaded = true;
        axios
        .get(`/api/academies/${this.$route.params.id}`)
        .then(response => {
            this.academic = response.data.data,
            this.loaded = false
        });

        this.$store
            .dispatch('getProducts')
            .then(() => [])
            .catch((error) => console.error(error));
    },
    
}
</script>
