<template>
<div>
    <div class="card shadow">
        <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="card-title mb-0">Student Enrollments</h2>
                </div>
                <div class="card-tools">
                    <button class="btn btn-success" @click="newModalEnroll">
                        <!-- data-toggle="modal" data-target="#addUser" -->
                        Add New
                        <i class="fas fa-user-plus fa-fw"></i>
                    </button>
                </div>
            </div>
            <div class="card-body table-responsive px-0">
            <table class="table align-items-center text-nowrap ">
                <thead class="thead-light">
                <tr>
                    <th scope="col">Enrollments</th>
                    <th scope="col">Price (LKR)</th>
                    <th scope="col">Modify</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="student in enrollAccounts" :key="student.id">
                    <td>{{student.desc}}</td>
                    <td>{{student.price}}</td>
                    <td>
                        <a href="#" @click="editModalEnroll(student)">
                            <i class="fa fa-edit"></i>
                        </a>
                        /
                        <a href="#" @click="deleteEnroll(student.id)">
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
        <div class="modal fade" id="addEnroll" tabindex="-1" role="dialog" aria-labelledby="addEnroll" 
        aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" v-show="!editModeEnroll" id="addEnroll">Add New Enrollment Info</h5>
                        <h5 class="modal-title" v-show="editModeEnroll" id="addEnroll">Update Enrollment Info</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form @submit.prevent="editModeEnroll ? updateEnroll() : createEnroll()" :value="csrf">
                    <div class="modal-body">
                        <!--  Desc  -->
                        <div class="form-group">
                            <input v-model="enrollForm.desc" type="text" name="name" placeholder="Description"
                                class="form-control" :class="{ 'is-invalid': enrollForm.errors.has('name') }">
                            <has-error :form="enrollForm" field="name"></has-error>
                        </div>
                        <!--  Desc  -->
                        <!--  Price  -->
                        <div class="form-group">
                            <input v-model="enrollForm.price" type="text" name="size" placeholder="Price (LKR)"
                                class="form-control" :class="{ 'is-invalid': enrollForm.errors.has('size') }">
                            <has-error :form="enrollForm" field="size"></has-error>
                        </div>
                        <!--  Price  -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button v-show="editModeEnroll" type="submit" class="btn btn-success">Update</button>
                        <button v-show="!editModeEnroll" type="submit" class="btn btn-primary">Create</button>
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
                editModeEnroll: true,
                enrollAccounts: {},
                enrollForm: new Form({
                    id: '',
                    desc: '',
                    price: '',
                })
            }
        },
        methods: {
            editModalEnroll(storage){
                this.editModeEnroll = true;
                this.enrollForm.reset();
                $('#addEnroll').modal('show');
                this.enrollForm.fill(storage);
            },
            newModalEnroll(){
                this.editModeEnroll = false;
                this.enrollForm.reset();
                $('#addEnroll').modal('show');
            },
            updateEnroll(){
                this.$Progress.start();
                this.enrollForm.put('api/enroll/'+this.enrollForm.id)
                .then(() => {
                    $('#addEnroll').modal('hide');
                    //success
                    swal.fire(
                        'Update!',
                        'Information has been updated.',
                        'success'
                    )
                    setTimeout(function(){this.loadEnroll()}.bind(this), 1000);
                    this.$Progress.finish();
                })
                .catch(() => {
                    this.$Progress.fail();
                });
            },
            deleteEnroll(id){
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
                            this.enrollForm.delete('api/enroll/'+id).then(() => {
                                swal.fire(
                                'Deleted!',
                                'Stock deleted.',
                                'success'
                                )
                            setTimeout(function(){this.loadEnroll()}.bind(this), 1000);
                            }).catch(() => {
                                swal("Failed!", "There was something wrong.", "Warning");
                            });
                        }
                    })
            },
            loadEnroll() {
                axios.get("api/enroll").then(({data}) => (this.enrollAccounts = data.data));
            },
            createEnroll() {
                this.$Progress.start();
                this.enrollForm.post('api/enroll')
                .then(()=>{
                    $('#addEnroll').modal('hide');
                    Toast.fire({
                        icon: 'success',
                        title: 'Enrollment Info. Added!'
                    });
                    setTimeout(function(){this.loadEnroll()}.bind(this), 1500);
                    this.$Progress.finish();
                })
                .catch(()=>{
                    Toast.fire({
                        icon: 'error',
                        title: 'Failled to Add Stock!'
                    });
                    setTimeout(function(){this.loadEnroll()}.bind(this), 1500);
                })
            }
        },
        created() { 
            this.loadEnroll();
        },
    }
</script>