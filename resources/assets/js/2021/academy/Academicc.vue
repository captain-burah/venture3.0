<template>
<div>
    <navbar></navbar>
        
    <home-cover></home-cover>
    
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
                                      <router-link :to="addToCart" class="btn btn-success h4">
                                            Add to Cart
                                        </router-link>
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
      <!---------- Footer ----------->
  <footer class="bg-light">
    <div class="container">
      <div class="py-5 row text-secondary">
        <div class="col-12 col-md my-auto">
          <small class="d-block mb-3 text-muted">
            &copy; 
            2021
          <a href="https://www.instagram.com/captain_burah" class="footer-a text-rose" target="_blank" >
            Captain Burah
          </a>for a better world. Made in Laravel 8.
          </small>
          
        </div>
        <div class="col-md-6">
          <div class="row col-md-12 pb-5">
            <div class="col-6 col-md text-left">
              <h5 class="font-weight-bold m-0 mt-2">Features</h5>
              <ul class="text-small text-secondary">
                <li class="d-block"><a class="footer-aa py-0 pr-0 text-capitalize" href="#">Home</a></li>
                <li class="d-block"><a class="footer-aa py-0 pr-0 text-capitalize" href="#">Tutors Home</a></li>
                <li class="d-block"><a class="footer-aa py-0 pr-0 text-capitalize" href="#">Cool stuff</a></li>
                <li class="d-block"><a class="footer-aa py-0 pr-0 text-capitalize" href="#">Stuff for developers</a></li>
              </ul>
            </div>
            <div class="col-6 col-md text-left">
              <h5 class="font-weight-bold m-0 mt-2">Resources</h5>
              <ul class="list-unstyled text-small">
                <li class="d-block"><a class="footer-aa py-0 pr-0 text-capitalize" href="#">Resource</a></li>
                <li class="d-block"><a class="footer-aa py-0 pr-0 text-capitalize" href="#">Resource name</a></li>
                <li class="d-block"><a class="footer-aa py-0 pr-0 text-capitalize" href="#">Another resource</a></li>
                <li class="d-block"><a class="footer-aa py-0 pr-0 text-capitalize" href="#">Final resource</a></li>
              </ul>
            </div>
          </div>
          <div class="row col-md-12 ">
            <div class="col-6 col-md text-left">
              <h5 class="font-weight-bold m-0 mt-2">Help</h5>
              <ul class="list-unstyled text-small">
                <li class="d-block"><a class="footer-aa py-0 pr-0 text-capitalize" href="#">Payment Gateways</a></li>
                <li class="d-block"><a class="footer-aa py-0 pr-0 text-capitalize" href="#">Tutors Payout</a></li>
                <li class="d-block"><a class="footer-aa py-0 pr-0 text-capitalize" href="#">Government</a></li>
                <li class="d-block"><a class="footer-aa py-0 pr-0 text-capitalize" href="#">Gaming</a></li>
              </ul>
            </div>
            <div class="col-6 col-md text-left">
              <h5 class="font-weight-bold m-0 mt-2">About</h5>
              <ul class="list-unstyled text-small">
                <li class="d-block"><a class="footer-aa py-0 pr-0 text-capitalize" href="#">Team & DevOps</a></li>
                <li class="d-block"><a class="footer-aa py-0 pr-0 text-capitalize" href="#">Privacy Policy</a></li>
                <li class="d-block"><a class="footer-aa py-0 pr-0 text-capitalize" href="#">Copyright License</a></li>
                <li class="d-block"><a class="footer-aa py-0 pr-0 text-capitalize" href="#">Terms & Conditions</a></li>
              </ul>
            </div>
          </div>
        </div>
        </div>
    </div>
  </footer>
  <!---------- Footer ----------->
</div>

</template>

<script>
export default {    
    data() {
        return {
            academic: {},
            loaded: false,
            product: {
                price: 3.99,
                description: "backlink from",
            },
            addToCart: {},
        };
    },
    // computed: {
        
    // },
    created() {
        
        this.loaded = true;
        axios
        .get(`/api/user/academies/${this.$route.params.id}`)
        .then(response => {
            this.academic = response.data.data,
            this.loaded = false
        });
    },
    methods: {
        
            
        // setLoaded: function() {
        //     window.paypal
        //     .Buttons({
        //         createOrder: (data, actions) => {
        //             return actions.order.create({
        //                 purchase_units: [
        //                     {
        //                         description: this.product.description,
        //                         amount: {
        //                             currency_code: "USD",
        //                             value: this.product.price
        //                         }
        //                     }
        //                 ]
        //             });
        //         },
        //         onApprove: async (data, actions, resp) => {
        //             // This section handles all the functions that happens after 
        //             // payment is successful. You can submit form to database to.
        //             const order = await actions.order.capture();
        //             this.data;
        //             // this.submitDomain();
        //             Toast.fire({
        //                 icon: 'success',
        //                 title: 'Payment Success',
        //                 text: 'Re-directing.. Please wait!',
        //             });
        //         },
        //         onError: err => {
        //             console.log(err);
        //             Toast.fire({
        //                 icon: 'error',
        //                 title: 'Oops..',
        //                 text: 'Something went wrong! Please try again.',
        //             });
        //         }
        //     })
        //     .render(this.$refs.paypal);
        // }
    },
    
    mounted() {
      if (localStorage.student_token != null) {
        console.log('token is true')
        this.addToCart = { name: 'checkout', params: this.academic.id };
      }
      else {
          console.log('token is false');
          this.addToCart = {name: 'student-login'};
      }
      // var state = this.$store.getters.getCurrentUserLoginState;
      // console.log(state);
      // if (this.$store.getters.getCurrentUserLoginState == true) {
      //     this.addToCart = { name: 'checkout', params: this.academic.id };
      // }
      // else if (this.$store.getters.getCurrentUserLoginState == false){
      //     this.addToCart = {name: 'student-login'};
      // }
      // else{
      //     console.log(state);
      //     this.addToCart = 'something went wrong';
      // };

      console.log('Single Academic Mounted');
      // const script = document.createElement("script");
      // script.src = "https://www.paypal.com/sdk/js?client-id=AaWDUX9QLm6ZzIUwbMbWyvpwmVJ4ucREyZR4F3xF-5MTm5N3b3qE5anFUj2WMEsnWE8c3JAGamA8OJ-m";
      // script.addEventListener("load", this.setLoaded);
      // document.body.appendChild(script);
    },
}
</script>
