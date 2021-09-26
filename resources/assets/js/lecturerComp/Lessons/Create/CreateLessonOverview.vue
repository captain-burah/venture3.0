<template>
    <div>
        <div class="card card-primary">
            
            
            <div class="card-header card-header-rose">
              <h3 class="card-title">Lesson Overview</h3>
            </div>


            <div class="card-body">


              <div class="form-group">
                <label for="inputName">Lesson Name</label>
                <input 
                  type="text" 
                  id="inputName" 
                  class="form-control" 
                  v-model="lessonOverview.name" 
                  v-on:keyup="emitToParent" 
                >
              </div>


              <div class="form-group">
                <label for="inputDescription">Lesson Description</label>
                <textarea 
                  id="inputDescription" 
                  class="form-control" 
                  rows="4"
                  v-model="lessonOverview.description" 
                  v-on:keyup="emitToParent"   
                ></textarea>
              </div>


              <div class="form-group">
                <label for="inputStatus">Status</label>
                <select 
                  id="inputStatus" 
                  class="form-control custom-select"
                  v-model="lessonOverview.status" 
                  v-on:keyup="emitToParent"
                  >
                    <option selected disabled>Select one</option>
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
              </div>


              <div class="form-group">
                <label for="inputClientCompany">Objectives</label>
                <textarea  
                  id="inputClientCompany"
                  class="form-control" 
                  rows="4"
                  v-model="lessonOverview.objectives" 
                  v-on:keyup="emitToParent"
                ></textarea>
              </div>
              


              <div class="form-group">
                <label for="inputProjectLeader">Learning Outcomes</label>
                <textarea 
                  rows="4"
                  id="inputProjectLeader" 
                  class="form-control"
                  v-model="lessonOverview.learning_outcomes" 
                  v-on:keyup="emitToParent"
                  ></textarea>
              </div>



              <div class="form-group custom-file">
                <label class="custom-file-label" for="courseImage">Lesson Image</label>
                <input 
                  type="file" 
                  class="form-control custom-file-input inputFileVisible" 
                  id="courseImage"
                  name="courseImg"
                  v-on:change="file"
                  v-on:keyup="emitToParent"                  
                >
              </div>
              <p class="small mute text-right">Recommended: 400px x 400px</p>

              

              
            </div>
            <!-- /.card-body -->
          </div>
    </div>
</template>
<script>
export default {
  data() {
    return {
      lessonOverview: {
        name: '',
        description: '',
        status: '',
        image: '',
        objectives: '',
        learning_outcomes: '',
      },
      
    }
  },
  methods: {
    emitToParent (event) {
      this.$emit('childToParent', this.lessonOverview);
    },
    file (event) {
      this.lessonOverview.image = event.target.files[0];
      this.$emit('childToParent', this.lessonOverview);
    }
  }
}
</script>