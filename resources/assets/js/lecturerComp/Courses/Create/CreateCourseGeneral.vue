<template>
    <div>
        <div class="card card-primary">
            
            
            <div class="card-header card-header-success">

              <h3 class="card-title">General</h3>
            </div>


            <div class="card-body">


              <div class="form-group">
                <label for="duration">Duration</label>
                <input 
                  type="text" 
                  id="duration" 
                  class="form-control" 
                  v-model="courseGeneral.duration" 
                  v-on:keyup="emitToParent" 
                >
              </div>


              <div class="form-group">
                <label for="price">Price</label>
                <input 
                  type="number"
                  id="price" 
                  class="form-control" 
                  rows="4"
                  v-model="courseGeneral.price" 
                  v-on:keyup="emitToParent"   
                >
              </div>


              <div class="form-group">
                <label for="author">Author</label>
                <input 
                  type="text"
                  id="author" 
                  class="form-control" 
                  rows="4"
                  v-model="courseGeneral.author" 
                  v-on:keyup="emitToParent"   
                >
              </div>


              <div class="form-group">
                <label for="tutors">Tutors</label>
                <select 
                  id="tutors" 
                  class="form-control custom-select"
                  v-model="courseGeneral.tutors"
                  v-on:keyup="emitToParent"
                >
                  <option selected disabled>Select one</option>
                  <option v-for="(tutor, id) in tutors" :key="id" :value="tutor.id">{{ tutor.name }}</option>
                </select>
              </div>


              <div class="form-group">
                <label for="certificate">Certificate</label>
                <input 
                  type="text" 
                  id="certificate" 
                  class="form-control"
                  v-model="courseGeneral.certificate"
                  v-on:keyup="emitToParent"
                >
              </div>


              <div class="form-group">
                <label for="inputProjectLeader">Course Leader</label>
                <input 
                  type="text" 
                  id="inputProjectLeader" 
                  class="form-control"
                  v-model="courseGeneral.courseLeader"
                  v-on:keyup="emitToParent"
                >
              </div>

              
            </div>
            <!-- /.card-body -->
          </div>
    </div>
</template>
<script>
export default {
  data() {
    return {
      tutors: {},
      courseGeneral: {
        duration: '',
        pricing: null,
        author: '',
        tutors: {},
        certificate: '',
        courseLeader: '',
      }
    }
  },
  methods: {
    emitToParent (event) {
      this.$emit('childToParent', this.courseGeneral);
    },
  }
}
</script>