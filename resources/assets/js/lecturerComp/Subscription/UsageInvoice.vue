<template>
<div>
        <div class="col-12">
            <div class="invoice p-3 mb-3">
                <!-- title row -->
                <div class="row">
                    <div class="col-12">
                    <h4>
                        <i class="fas fa-globe"></i> Current Usage
                        <small class="float-right">Date: {{ timestamp }}</small>
                    </h4>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- info row -->
                

                <!-- Table row -->
                <div class="row">
                    <div class="col-12 table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                        <th>subscription</th>
                        <th>Students</th>
                        <th>Storage</th>
                        <th>Staff Accounts</th>
                        <th>Days Remaining</th>
                        <th>Last Payment</th>
                        <th>Subtotal</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                        <td>{{ currentSubscription.subscription.name }}</td>
                        <td>10</td>
                        <td>400 MB</td>
                        <td>01</td>
                        <td>14 days</td>
                        <td>{{ currentSubscription.pivot.created_at }}</td>
                        <td>LKR 0.00</td>
                        </tr>
                        
                        </tbody>
                    </table>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <div class="row">
                    <!-- accepted payments column -->
                    <div class="col-6">
                    <p class="lead">Payment Methods:</p>
                    <img src="img/logos/paypal2.png" alt="Paypal">
                    <img src="img/logos/visa.png" alt="Paypal">
                    <img src="img/logos/mastercard.png" alt="Paypal">

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
                                    <td>LKR 0.00</td>
                                </tr>
                                <tr>
                                    <th>Tax (2.3%)</th>
                                    <td>LKR </td>
                                </tr>
                                <tr>
                                    <th>Online Transactions:</th>
                                    <td>LKR </td>
                                </tr>
                                <tr>
                                    <th>Total:</th>
                                    <td>LKR </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- this row will not appear when printing -->
                <div class="row no-print">
                    <div class="col-10">
                        <router-link :to="{ name: 'tutor-subscription-paynow', params: {id} }">
                            <button type="button" class="btn btn-success float-right">
                                <i class="far fa-credit-card"></i> 
                                Pay Now!
                            </button>
                        </router-link>
                    </div>
                </div>
            </div>

        </div>
</div>
</template>
<script type = "text/javascript">
    export default{
        data() {
            return {
                timestamp: "",
                id: 1,
                currentSubscription: {
                    subscription: {},
                    time: '',
                    precise: '',
                    pivot:''
                },
            }
        },
        created() {
            axios
                .post(`/api/tutor/subscriptions`, {
                    lecturerId: localStorage.getItem('tutor_id'),
                })
                .then(response => {
                    this.currentSubscription.subscription = response.data.subscriptions,
                    this.currentSubscription.time = response.data.time,
                    this.currentSubscription.precise = response.data.precise,
                    this.currentSubscription.pivot = response.data.subscriptions.pivot,
                    this.loaded = false
                });
            const today = new Date();
            const date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
            const time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
            const dateTime = date +' '+ time;
            this.timestamp = dateTime;
        },

    }
</script>