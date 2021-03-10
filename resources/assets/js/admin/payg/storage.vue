<template>
<div>
    <div class="card shadow">
        <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="mb-0">Storage Capacity</h2>
                </div>
                <div class="card-tools">
                    <button class="btn btn-success" @click="newModal">
                        <!-- data-toggle="modal" data-target="#addUser" -->
                        Add New
                        <i class="fas fa-user-plus fa-fw"></i>
                    </button>
                </div>
            </div>
            <div class="card-body px-0">
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
                <tr>
                    <th scope="col">Capacity</th>
                    <th scope="col">Price (LKR)</th>
                    <th scope="col">Modify</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="storage in storageAccounts" :key="storage.id">
                    <td>{{storage.desc}}</td>
                    <td>{{storage.price}}</td>
                    <td>
                        <a href="#" @click="editModal(storage)">
                            <i class="fa fa-edit"></i>
                        </a>
                        /
                        <a href="#" @click="deleteStorage(storage.id)">
                            <i class="fa fa-trash text-danger"></i>
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>

    

    <!-- Modal -->
        <div class="modal fade" id="addStorage" tabindex="-1" role="dialog" aria-labelledby="addStorage" 
        aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" v-show="!editMode" id="addStock">Add New Storage Info</h5>
                        <h5 class="modal-title" v-show="editMode" id="addStock">Update Storage Info</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form @submit.prevent="editMode ? updateStorage() : createStorage()" :value="csrf">
                    <div class="modal-body">
                        <!--  Desc  -->
                        <div class="form-group">
                            <input v-model="storageForm.desc" type="text" name="name" placeholder="Description"
                                class="form-control" :class="{ 'is-invalid': storageForm.errors.has('name') }">
                            <has-error :form="storageForm" field="name"></has-error>
                        </div>
                        <!--  Desc  -->
                        <!--  Price  -->
                        <div class="form-group">
                            <input v-model="storageForm.price" type="text" name="size" placeholder="Price (LKR)"
                                class="form-control" :class="{ 'is-invalid': storageForm.errors.has('size') }">
                            <has-error :form="storageForm" field="size"></has-error>
                        </div>
                        <!--  Price  -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button v-show="editMode" type="submit" class="btn btn-success">Update</button>
                        <button v-show="!editMode" type="submit" class="btn btn-primary">Create</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
</div>
</template>

<script>
    export default {
        data: function(){
            return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                editMode: true,
                storageAccounts: {},
                storageForm: new Form({
                    id: '',
                    desc: '',
                    price: '',
                })
            }
        },
        methods: {
            editModal(storage){
                this.editMode = true;
                this.storageForm.reset();
                $('#addStorage').modal('show');
                this.storageForm.fill(storage);
            },
            newModal(){
                this.editMode = false;
                this.storageForm.reset();
                $('#addStorage').modal('show');
            },
            updateStorage(){
                this.$Progress.start();
                this.storageForm.put('api/storage/'+this.storageForm.id)
                .then(() => {
                    $('#addStorage').modal('hide');
                    //success
                    swal.fire(
                        'Update!',
                        'Information has been updated.',
                        'success'
                    )
                    setTimeout(function(){this.loadStorage()}.bind(this), 1000);
                    this.$Progress.finish();
                })
                .catch(() => {
                    this.$Progress.fail();
                });
            },
            deleteStorage(id){
                swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.value) {
                            //Send request to server
                            this.storageForm.delete('api/storage/'+id).then(() => {
                                swal.fire(
                                'Deleted!',
                                'Stock deleted.',
                                'success'
                                )
                            setTimeout(function(){this.loadStorage()}.bind(this), 1000);
                            }).catch(() => {
                                swal("Failed!", "There was something wrong.", "Warning");
                            });
                        }
                    })
            },
            loadStorage() {
                axios.get("api/storage").then(({data}) => (this.storageAccounts = data.data));
            },
            createStorage() {
                this.$Progress.start();
                this.storageForm.post('api/storage')
                .then(()=>{
                    $('#addStorage').modal('hide');
                    Toast.fire({
                        icon: 'success',
                        title: 'Stock Added!'
                    });
                    setTimeout(function(){this.loadStorage()}.bind(this), 1500);
                    this.$Progress.finish();
                })
                .catch(()=>{
                    Toast.fire({
                        icon: 'error',
                        title: 'Failled to Add Stock!'
                    });
                    setTimeout(function(){this.loadStorage()}.bind(this), 1500);
                })
            }
        },
        created() { 
            this.loadStorage();
        },
    }
</script>
