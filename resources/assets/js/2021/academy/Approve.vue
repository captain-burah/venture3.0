<template>
<div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="/img/favicon/5.png" alt="" width="72" height="72">
    <h2>Checkout</h2>
  </div>

  <div class="row">
    <div class="col-md-8 order-md-2 mb-4 mx-auto">
      <h3 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Payment Receipt</span>
      </h3>
      <ul v-if="!loaded" class="list-group mb-3">

        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Course ID</h6>
            <small class="text-muted">{{ course.id }}</small>
          </div>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Course Name</h6>
            <small class="text-muted">{{ course.name }}</small>
          </div>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Course Tutor</h6>
            <small class="text-muted">{{ course.tutor }}</small>
          </div>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Amount</h6>
            <small class="text-muted" v-text="formatCurrency(course.price)"></small>
          </div>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Payment Status</h6>
            <small class="text-muted">{{ exists }}</small>
          </div>
        </li>
        
        <div v-if="precise != null">
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0">Time</h6>
              <small class="text-muted">About {{ time }} at {{ precise }}</small>
            </div>
          </li>
        </div>

        <div v-else>
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0">Time</h6>
              <small class="text-muted">at {{ time }}</small>
            </div>
          </li>
        </div>
      </ul>
      <div v-else>Data is loading...</div>
      <router-link :to="{ name: 'student-courses'}">
        <button class="btn btn-block btn-warning">Go to My Courses</button>
      </router-link>
      <button v-if="precise === null" class="btn btn-block btn-primary" v-on:click="printme">Save as PDF</button>
      <div class="w-100">
          <div class="mx-auto w-50" ref="paypal"></div>
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
      time: localStorage.getItem('time'),
      precise: null,
      exists: 'Success',
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
    if (localStorage.getItem('precise') != null ) {
      this.precise = localStorage.getItem('precise');
    };
  },


  methods: 
  {
    formatCurrency(price){
        price = (price / 100);
        return price.toLocaleString('ta-LK', { style: "currency", currency: "LKR"});
    },
    goTo(){
      return this.$router.push({ name: ''});
    },
    printme() {
        window.print();
    },
  },


  mounted() {

    if (sessionStorage.student_token != null) {
      console.log('token is true')
    }
    else {
        console.log('token is false');
        this.$router.push({ name: 'student-login' });

    };
  }
}
</script>