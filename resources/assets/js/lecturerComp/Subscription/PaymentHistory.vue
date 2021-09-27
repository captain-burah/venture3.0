<template>
<div class="w-100">
    <div class="col-12 w-100">
            <div class="invoice p-3 mb-3">

                <!-- title row -->
                <div class="row">
                    <div class="col-12">
                        <h4>
                            Payment History
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
                                <th>Subscription</th>
                                <th>Date</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th width="40px">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(payment, pid) in payments" :key="pid">
                                <td>{{ payment.name }}</td>
                                <td>{{ payment.pivot.created_at }}</td>
                                <td>LKR {{ payment.price }}</td>
                                <td>{{ payment.pivot.tx_status }}</td>
                                <td> 
                                    <router-link 
                                        :to="{ name: 'tutor-payment-print', params: { 
                                            id: payment.pivot.tx_id,
                                            name: payment.name,
                                            price: payment.price } }"
                                    >
                                        <button class="btn btn-sm btn-block btn-primary">
                                            Print Statement
                                        </button>
                                     </router-link>
                                </td>
                            </tr>
                        
                        </tbody>
                    </table>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                
            </div>

        </div>
</div>
</template>
<script>
export default{
    data(){
        return {
            loaded: false,
            payments: {},
            sid: localStorage.getItem('subscription_id'),

        };
    },
    created() {
        this.loaded = true;
        axios
        .get(`/api/tutor/payments/${localStorage.getItem('tutor_id')}`)
        .then(response => {
            this.payments = response.data.data,
            this.loaded = false
        });
    }

}
</script>