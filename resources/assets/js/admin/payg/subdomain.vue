<template>
<div>
    <div class="card shadow">
        <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="card-title mb-0">Personalized Subdomain</h2>
                </div>
                <div class="card-tools">
                    <button class="btn btn-success" @click="newModalSubdomain">
                        <!-- data-toggle="modal" data-target="#addUser" -->
                        Add New
                        <i class="fas fa-user-plus fa-fw"></i>
                    </button>
                </div>
            </div>
            <div class="card-body table-responsive px-0">
            <table class="table align-items-center text-nowrap">
                <thead class="thead-light">
                <tr>
                    <th scope="col">Subdomain</th>
                    <th scope="col">Price (LKR)</th>
                    <th scope="col">Modify</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="domain in subdomainAccounts" :key="domain.id">
                    <td>{{domain.desc}}</td>
                    <td>{{domain.price}}</td>
                    <td>
                        <a href="#" @click="editModalSubdomain(domain)">
                            <i class="fa fa-edit"></i>
                        </a>
                        /
                        <a href="#" @click="deleteSubdomain(domain.id)">
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
        <div class="modal fade" id="addSubdomain" tabindex="-1" role="dialog" aria-labelledby="addEnroll" 
        aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" v-show="!editModeSubdomain" id="addSubdomain">Add New Subdomain Info</h5>
                        <h5 class="modal-title" v-show="editModeSubdomain" id="addSubdomain">Update Subdomain Info</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form @submit.prevent="editModeSubdomain ? updateSubdomain() : createSubdomain()" :value="csrf">
                    <div class="modal-body">
                        <!--  Desc  -->
                        <div class="form-group">
                            <input v-model="subdomainForm.desc" type="text" name="name" placeholder="Description"
                                class="form-control" :class="{ 'is-invalid': subdomainForm.errors.has('name') }">
                            <has-error :form="subdomainForm" field="name"></has-error>
                        </div>
                        <!--  Desc  -->
                        <!--  Price  -->
                        <div class="form-group">
                            <input v-model="subdomainForm.price" type="text" name="size" placeholder="Price (LKR)"
                                class="form-control" :class="{ 'is-invalid': subdomainForm.errors.has('size') }">
                            <has-error :form="subdomainForm" field="size"></has-error>
                        </div>
                        <!--  Price  -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button v-show="editModeSubdomain" type="submit" class="btn btn-success">Update</button>
                        <button v-show="!editModeSubdomain" type="submit" class="btn btn-primary">Create</button>
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
                editModeSubdomain: true,
                subdomainAccounts: {},
                subdomainForm: new Form({
                    id: '',
                    desc: '',
                    price: '',
                })
            }
        },
        methods: {
            editModalSubdomain(storage){
                this.editModeSubdomain = true;
                this.subdomainForm.reset();
                $('#addSubdomain').modal('show');
                this.subdomainForm.fill(storage);
            },
            newModalSubdomain(){
                this.editModeSubdomain = false;
                this.subdomainForm.reset();
                $('#addSubdomain').modal('show');
            },
            updateSubdomain(){
                this.$Progress.start();
                this.subdomainForm.put('api/subdomaininfo/'+this.subdomainForm.id)
                .then(() => {
                    $('#addSubdomain').modal('hide');
                    //success
                    swal.fire(
                        'Update!',
                        'Information has been updated.',
                        'success'
                    )
                    setTimeout(function(){this.loadSubdomain()}.bind(this), 1000);
                    this.$Progress.finish();
                })
                .catch(() => {
                    this.$Progress.fail();
                });
            },
            deleteSubdomain(id){
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
                            this.subdomainForm.delete('api/subdomaininfo/'+id).then(() => {
                                swal.fire(
                                'Deleted!',
                                'Settings Deleted.',
                                'success'
                                )
                            setTimeout(function(){this.loadSubdomain()}.bind(this), 1000);
                            }).catch(() => {
                                swal("Failed!", "There was something wrong.", "Warning");
                            });
                        }
                    })
            },
            loadSubdomain() {
                axios.get("api/subdomaininfo").then(({data}) => (this.subdomainAccounts = data.data));
            },
            createSubdomain() {
                this.$Progress.start();
                this.subdomainForm.post('api/subdomaininfo')
                .then(()=>{
                    $('#addSubdomain').modal('hide');
                    Toast.fire({
                        icon: 'success',
                        title: 'Enrollment Info. Added!'
                    });
                    setTimeout(function(){this.loadSubdomain()}.bind(this), 1500);
                    this.$Progress.finish();
                })
                .catch(()=>{
                    Toast.fire({
                        icon: 'error',
                        title: 'Failled to Add Stock!'
                    });
                    setTimeout(function(){this.loadSubdomain()}.bind(this), 1500);
                })
            }
        },
        created() { 
            this.loadSubdomain();
        },
    }
</script>
