<template>
    <div>
      <div class="pt-5 section-feature">
        <div class="">
          
          <div class="card">
            <div class="card-body mx-auto col-md-10">
              <div class="row form-group-row">
                <div class="form-group col-md-8">
                  <label class="text-dark ">Choose Storage Size</label>
                  <select class="form-control" v-model="storageForm.storage_id" name="cashier_id">
                      <option v-for="storage in storageList" :key="storage.id" 
                      :value="storage.id">
                        Storage id: {{storage.id}} {{storage.desc}} {{storage.price}}
                      </option>
                  </select>
                </div>
                <div class="form-group col-md-4 text-center">
                  <h4>Cost: {{storageForm.storage_price}}</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
</template>

<script>
    export default {
      data() {
            return {
              csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
              storageList: {},
              storageForm: new Form({
                storage_id: '',
              })
            }
        },
        methods:{
            loadStorage() {
              axios.get("api/storage").then(({data}) => (this.storageList = data.data));
            }
        },
        created() {
          this.loadStorage();
        }
    }
</script>
