<template>
<div class="container pt-5">
        <div class="col-12 ">
            <div class="invoice p-3 mb-3 border border-2 border-dark">
                <!-- title row -->
                <div class="row">
                    <div class="col-12">
                    <h4>
                        <i class="fas fa-globe"></i> Subscription Payment Invoice
                        <small class="float-right">ID: {{ id }} </small>
                    </h4>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- info row -->
                

                <!-- Table row -->
                <div class="row pt-5 mt-2">
                    <div class="col-12 table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th width="80%">Subscription</th>
                            <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ name }}</td>
                                <td>{{ price }}</td>
                            </tr>
                        
                        </tbody>
                    </table>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <div class="row pt-5 mt-2">
                    <!-- accepted payments column -->
                     <div class="col-6">
                    <p class="lead">Payment Methods:</p>
                    <img src="img/logos/paypal2.png" alt="Paypal">
                    <img src="img/logos/visa.png" alt="Visa">
                    <img src="img/logos/mastercard.png" alt="Mastercard">

                    <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                        Payment button will be available to make payments 07 days in advance to the deadline.
                        Once you are in the process of making payments, please have patience as the server needs
                        to await for instructions from the payment gateway. Any interruptions before the payment is
                        complete, will effect the payment status and cancel the current transaction.
                    </p>
                    </div>
                    <!-- /.col -->
                    <div class="col-6">
                    <p class="lead">Amount Due 2/22/2014</p>

                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th style="width:50%">Subtotal:</th>
                                    <td>LKR {{ price }}</td>
                                </tr>
                                <tr>
                                    <th>Tax (2.3%)</th>
                                    <td>LKR {{ tax }}</td>
                                </tr>
                                <tr>
                                    <th><h3>Total:</h3></th>
                                    <td><h3>LKR {{ total }}.00</h3></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- this row will not appear when printing -->
                <div class="row no-print ">
                    <div class="col-12">
                        <button
                            type="button"
                            class="btn btn-primary btn-lg"
                            v-on:click="printme"
                        >
                            Print
                        </button>

                    </div>
                </div>
            </div>

        </div>
</div>
</template>
<script>
export default{
    data(){
        return {
            loaded: false,
            target: {},
            target2: {},
            id: this.$route.params.id,
            name: this.$route.params.name,
            price: 10000,
            tax: null,
            total: null
        };
    },
    created() {
        this.loaded = true;
        axios
        .post(`/api/tutor/print-subscription`, {
            tx_id: this.$route.params.id,
            tutor_id: localStorage.getItem('tutor_id'),
        })
        .then(response => {
            this.target = response.data.target,
            this.target2 = response.data.target2,
            this.loaded = false
            
        });
        this.price = this.$route.params.price;
        this.tax = parseFloat((this.price * 2.3)/100).toFixed(2);
        this.total = (parseInt(this.tax) + parseInt(this.price));
    },
    methods: 
    {
        printme() {
            window.print();
        },
    }    

}
</script>