<template>
<div>
    <div class="card shadow">
        <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="card-title mb-0">Staff Accounts</h2>
                </div>
                <div class="card-tools">
                    <button class="btn btn-success" @click="newModalStaffAccounts">
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
                    <th scope="col">Staffs</th>
                    <th scope="col">Price (LKR)</th>
                    <th scope="col">Modify</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="staffAcc in staffAccounts" :key="staffAcc.id">
                    <td>{{staffAcc.desc}}</td>
                    <td>{{staffAcc.price}}</td>
                    <td>
                        <a href="#" @click="editModalStaffAccounts(staffAcc)">
                            <i class="fa fa-edit"></i>
                        </a>
                        /
                        <a href="#" @click="deleteStaffAccounts(staffAcc.id)">
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
        <div class="modal fade" id="addStaffAccount" tabindex="-1" role="dialog" aria-labelledby="addEnroll" 
        aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" v-show="!editModeStaffAccounts" id="addEnroll">Add New Enrollment Info</h5>
                        <h5 class="modal-title" v-show="editModeStaffAccounts" id="addEnroll">Update Enrollment Info</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form @submit.prevent="editModeStaffAccounts ? updateStaffAccounts() : createStaffAccounts()" :value="csrf">
                    <div class="modal-body">
                        <!--  Desc  -->
                        <div class="form-group">
                            <input v-model="staffAccountsForm.desc" type="text" name="name" placeholder="Description"
                                class="form-control" :class="{ 'is-invalid': staffAccountsForm.errors.has('name') }">
                            <has-error :form="staffAccountsForm" field="name"></has-error>
                        </div>
                        <!--  Desc  -->
                        <!--  Price  -->
                        <div class="form-group">
                            <input v-model="staffAccountsForm.price" type="text" name="size" placeholder="Price (LKR)"
                                class="form-control" :class="{ 'is-invalid': staffAccountsForm.errors.has('size') }">
                            <has-error :form="staffAccountsForm" field="size"></has-error>
                        </div>
                        <!--  Price  -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button v-show="editModeStaffAccounts" type="submit" class="btn btn-success">Update</button>
                        <button v-show="!editModeStaffAccounts" type="submit" class="btn btn-primary">Create</button>
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
                editModeStaffAccounts: true,
                staffAccounts: {},
                staffAccountsForm: new Form({
                    id: '',
                    desc: '',
                    price: '',
                })
            }
        },
        methods: {
            editModalStaffAccounts(storage){
                this.editModeStaffAccounts = true;
                this.staffAccountsForm.reset();
                $('#addStaffAccount').modal('show');
                this.staffAccountsForm.fill(storage);
            },
            newModalStaffAccounts(){
                this.editModeStaffAccounts = false;
                this.staffAccountsForm.reset();
                $('#addStaffAccount').modal('show');
            },
            updateStaffAccounts(){
                this.$Progress.start();
                this.staffAccountsForm.put('api/staffinfo/'+this.staffAccountsForm.id)
                .then(() => {
                    $('#addStaffAccount').modal('hide');
                    //success
                    swal.fire(
                        'Update!',
                        'Information has been updated.',
                        'success'
                    )
                    setTimeout(function(){this.loadStaffAccounts()}.bind(this), 1000);
                    this.$Progress.finish();
                })
                .catch(() => {
                    this.$Progress.fail();
                });
            },
            deleteStaffAccounts(id){
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
                            this.staffAccountsForm.delete('api/staffinfo/'+id).then(() => {
                                swal.fire(
                                'Deleted!',
                                'Staff Info. deleted.',
                                'success'
                                )
                            setTimeout(function(){this.loadStaffAccounts()}.bind(this), 1000);
                            }).catch(() => {
                                swal("Failed!", "There was something wrong.", "Warning");
                            });
                        }
                    })
            },
            loadStaffAccounts() {
                axios.get("api/staffinfo").then(({data}) => (this.staffAccounts = data.data));
            },
            createStaffAccounts() {
                this.$Progress.start();
                this.staffAccountsForm.post('api/staffinfo')
                .then(()=>{
                    $('#addStaffAccount').modal('hide');
                    Toast.fire({
                        icon: 'success',
                        title: 'Stock Added!'
                    });
                    setTimeout(function(){this.loadStaffAccounts()}.bind(this), 1500);
                    this.$Progress.finish();
                })
                .catch(()=>{
                    Toast.fire({
                        icon: 'error',
                        title: 'Failled to Add Stock!'
                    });
                    setTimeout(function(){this.loadStaffAccounts()}.bind(this), 1500);
                })
            }
        },
        created() { 
            this.loadStaffAccounts();
        },
    }
</script>