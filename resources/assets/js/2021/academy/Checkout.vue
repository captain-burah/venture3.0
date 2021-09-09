<template>
<div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="/img/favicon/5.png" alt="" width="72" height="72">
    <h2>Checkout</h2>
  </div>

  <div class="row">
    <div class="col-md-8 order-md-2 mb-4 mx-auto">
      <h3 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Your cart</span>
      </h3>
      <ul v-if="!loaded" class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h4 class="my-0">Course Material</h4>
          </div>
        </li>

        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">{{ course.name }} - {{ course.tutor }}</h6>
            <small class="text-muted">{{ course.description }}</small>
          </div>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
          <h4 class="w-100 text-muted">Total</h4>
          </div>
          <div class="ml-auto">
          <h4 class="w-100 text-muted" v-text="formatCurrency(course.price)"></h4>
          </div>
        </li>
      </ul>
      <div v-else>Data is loading...</div>
      <div class="w-100">
        <div class="mx-auto w-50"><button class="btn btn-block btn-primary" @click="linkTest(id)">Test Button</button></div>
      </div>

      <div>
        <div class="w-100">
            <div class="mx-auto w-50" ref="paypal"></div>
        </div>
    </div>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">© 2021 Brought to you by Captain Burah</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>
</template>
<script>
export default {
  data() {
    return {
      loaded: false,
      course: {},
      id: this.$route.params.id,
      paymentStatus: false,
    }
  },
  created() {
    this.loaded = true;
    axios
      .get(`/api/user/academies/${this.$route.params.id}`)
      .then(response => {
          this.course = response.data.data,
          this.loaded = false
    });
    console.log(this.course);
  },


  methods: {
    linkTest(id){
      if (setTimeout(() => this.$store.dispatch("userPaymentApprove"), 500)) {
        setTimeout(() => this.$router.push({ name: 'student-receipt', params: { id } }), 1500);
      }
    },
    formatCurrency(price){
        price = (price / 100);
        return price.toLocaleString('ta-LK', { style: "currency", currency: "LKR"});
    },

    paymentApproval: function () {
      
    },
    setLoaded: function() {
            window.paypal
            .Buttons({
                createOrder: (data, actions) => {
                    return actions.order.create({
                        purchase_units: [
                            {
                                description: this.course.tutor,
                                amount: {
                                    currency_code: "USD",
                                    value: this.course.price
                                }
                            }
                        ]
                    });
                },
                onApprove: async (data, actions, resp) => {
                    // This section handles all the functions that happens after 
                    // payment is successful. You can submit form to database to.
                    const order = await actions.order.capture();
                    // console.log(order);
                    // console.log(order.status);
                    // console.log(order.create_time);
                    // console.log(order.update_time);
                    // console.log(order.payer.email_address);
                    // console.log(order.payer.name.given_name);
                    // console.log(order.payer.name.surname);
                    // console.log(order.payer.payer_id);
                    // console.log(order.purchase_units[0].amount.currency_code);
                    // console.log(order.purchase_units[0].amount.value);
                    // console.log(order.purchase_units.payee.merchant_id);
                    // console.log(order.purchase_units.payee.email_address);

                    // Toast.fire({
                    //     icon: 'success',
                    //     title: 'Payment Success',
                    //     text: 'Re-directing.. Please wait!',
                    // });
                    if (setTimeout(() => this.$store.dispatch("userPaymentApprove", this.order), 1000)) {
                      console.log('Got to new page')
                      // setTimeout(() => this.$router.push({ name: 'student-receipt', params: { id } }), 1500);
                    }
                },
                onError: err => {
                    console.log(err);
                    Toast.fire({
                        icon: 'error',
                        title: 'Oops..',
                        text: 'Something went wrong! Please try again.',
                    });
                }
            })
            .render(this.$refs.paypal);
    }
  },


  mounted() {
    if (localStorage.student_token != null) {
      console.log('token is true')
    }
    else {
        console.log('token is false');
        this.$router.push({ name: 'student-login' });

    };
    const script = document.createElement("script");
    script.src = "https://www.paypal.com/sdk/js?client-id=AaWDUX9QLm6ZzIUwbMbWyvpwmVJ4ucREyZR4F3xF-5MTm5N3b3qE5anFUj2WMEsnWE8c3JAGamA8OJ-m";
    script.addEventListener("load", this.setLoaded);
    document.body.appendChild(script);
  }
}
</script>