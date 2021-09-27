<template>
<div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="/img/favicon/5.png" alt="" width="72" height="72">
    <h2>Subscription Payment</h2>
  </div>

  <div class="row">
    <div class="col-md-8 order-md-2 mb-4 mx-auto">
      <h3 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Your subscription</span>
      </h3>
      <ul v-if="!loaded" class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h4 class="my-0">Subscription Material</h4>
          </div>
        </li>

        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">{{ subscription.name }}</h6>
          </div>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
          <h4 class="w-100 text-muted">Total</h4>
          </div>
          <div class="ml-auto">
          <h4 class="w-100 text-muted" v-text="formatCurrency(subscription.price)"></h4>
          </div>
        </li>
      </ul>
      <div v-else>Data is loading...</div>
      <!-- <div class="w-100">
        <div class="mx-auto w-50"><button class="btn btn-block btn-primary" @click="linkTest(id)">Test Button</button></div>
      </div> -->

      <div>
        <div class="w-100 text-center">
          <div  class="mx-auto w-50" ref="paypal"></div>
        </div>
      </div>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">© 2021 Brought to you by EV Academy</p>
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
      subscription: {},
      id: this.$route.params.id,
      paymentStatus: false,
      timeP: '',
    }
  },
  created() {
    this.loaded = true;
    axios
      .get(`/api/tutor/subscription/${this.$route.params.id}`)
      .then(response => {
          this.subscription = response.data.data,
          this.loaded = false
    });
    localStorage.setItem(
        "subscription_id",
        this.id
    );
  },


  methods: {
    // linkTest(id){
    //   if (setTimeout(() => this.$store.dispatch("userPaymentApprove"), 500)) {
    //     setTimeout(() => this.$router.push({ name: 'student-receipt', params: this.id }), 1500);
    //   }
    // },
    formatCurrency(price){
        // price = (price);
        return price.toLocaleString('ta-LK', { style: "currency", currency: "LKR"});
    },
    setLoaded: function() {
            window.paypal
            .Buttons({
                createOrder: (data, actions) => {
                    return actions.order.create({
                        purchase_units: [
                            {
                                description: this.subscription.name,
                                amount: {
                                    currency_code: "USD",
                                    value: this.subscription.price
                                }
                            }
                        ]
                    });
                },
                onApprove: async (data, actions, resp) => {
                    const order = await actions.order.capture();

                    Toast.fire({
                        icon: 'success',
                        title: 'Payment Success',
                        text: 'Re-directing.. Please wait!',
                    });
                    axios 
                      .post(`/api/tutor/subscribe`, {
                          lecturerId: localStorage.getItem('tutor_id'),
                          subscriptionId: localStorage.getItem('subscription_id'), 

                          tx_status: order.status,
                          tx_id: order.id,
                          tx_payee_fname: order.payer.name.given_name,
                          tx_payee_lname: order.payer.name.surname,
                          tx_payer_id: order.payer.payer_id,
                          tx_currency_code: order.purchase_units[0].amount.currency_code,
                          tx_amount: order.purchase_units[0].amount.value,
                          tx_payee_email: order.purchase_units[0].payee.email_address,
                          tx_payee_merchant_id: order.purchase_units[0].payee.merchant_id,
                      })
                      .then( response => {
                          setTimeout(() => this.$router.push({ name: 'tutor-subscriptions'}), 1500);
                      });
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
    const script = document.createElement("script");
    script.src = "https://www.paypal.com/sdk/js?client-id=AaWDUX9QLm6ZzIUwbMbWyvpwmVJ4ucREyZR4F3xF-5MTm5N3b3qE5anFUj2WMEsnWE8c3JAGamA8OJ-m";
    script.addEventListener("load", this.setLoaded);
    document.body.appendChild(script);
  }
}
</script>