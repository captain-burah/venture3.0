<template>
<div>
    <div class="row">
        <div class="col-md-7 mb-5 mb-md-0">
            <div class="card bg-gradient-default shadow" >
                <div class="card-header bg-transparent">
                    <div class="row align-items-center">
                        <div class="col">
                        <h5 class="text-uppercase text-muted ls-1 mb-1">Analytics</h5>
                        <h2 class="mb-0 text-lighter">Income Revenue</h2>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <analytics class="text-light"></analytics>
                </div>
            </div>
        </div>
    </div>
    <analytics></analytics>
</div>
</template>

<script>

    import Analytics from './charts/analytics.vue';
    export default {
        
        components: { Analytics },
        data: function(){
            //const lang = localStorage.getItem('lang') || 'en';
            return {
            //lang: lang,
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        },
        mounted() {
            console.log('Dashboard Charts mounted.')
        }
    }
</script>
