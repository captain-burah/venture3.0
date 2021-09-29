<template>
<div>
    <div class="card card-primary card-outline">
        
        <div class="card-body p-0">
            <div class="mailbox-controls">

                <div class="form-group pt-3">
                    <select 
                    id="tutors" 
                    class="form-control custom-select"
                    
                    >
                        <option selected disabled>Click to select a discussion topic..</option>
                        <option >fdsa</option>
                    </select>

                    <button type="button" class="btn btn-primary btn-sm btn-block checkbox-toggle">
                        <i class="fas fa-search pr-2"></i>
                        Search
                        </button>
                </div>
            
            </div>
        </div>
    </div>

    <div class="card mt-3">
            
            <div class="card-body">
                <div class="p-0 m-0">
                    <h5>Discussion name</h5>
                </div>

                You can Change Pace Styles, Checkout the <a href="https://adminlte.io/docs/3.1/" target="_blank" rel="noopener noreferrer">AdminLTE Official Docs</a> in Online.
                <br>
                Start creating your amazing application!
            </div>
            
            <div class="card-footer">
                <img src="/img/faces/camp.jpg" 
                    alt="UserImg" 
                    class="brand-image img-circle elevation-3"
                    style="opacity: .8"
                >User Name 
            </div>
        </div>
</div>
</template>
<script>

export default{
    data() {
        return {
            discussions: {},
            selectedTopic: '',
            topics: {},
        }
    },
    created() {
        
    }
}
</script>