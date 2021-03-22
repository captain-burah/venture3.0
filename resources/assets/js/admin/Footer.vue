<template>
    <div>
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
        Captain_Burah
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2020-2021 <a href="#">Venture</a>.</strong> All rights reserved.
    </div>
</template>

<script>
    export default {
        
        components: {  },
        data: function(){
            //const lang = localStorage.getItem('lang') || 'en';
            return {
            //lang: lang,
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        },
        mounted() {
            console.log('Footer mounted.')
        }
    }
</script>
