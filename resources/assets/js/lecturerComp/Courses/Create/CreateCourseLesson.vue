<template>
    <div>
        <div class="card card-secondary">

            <div class="card-header card-header-rose">
              <h3 class="card-title">Lessons</h3>
            </div>


            <div class="card-body">


             <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Lesson Name</th>
                      <th width="10px">Select</th>
                      <th width="25px">Status</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr v-if="loading">
                        <td colspan="4" class="text-center">
                          <div class="spinner-border text-success" role="status">
                            <span class="sr-only">Loading...</span>
                          </div>
                        </td>
                    </tr>
                    
                    <tr v-else-if="retrieveStatus == 'null'">
                      <td colspan="4" class="text-center">
                        No lessons created. Please create a lesson to add to a course.
                      </td>
                    </tr>

                    <tr v-else>
                      <td>1.</td>
                      <td>Update software</td>
                      <td>
                        <div class="text-center">
                          <input type="checkbox" class="text-center"/>
                        </div>
                      </td>
                      <td>Active  </td>
                    </tr>

                  </tbody>
                </table>
            </div>
            <!-- /.card-body -->
          </div>
    </div>
</template>
<script>

export default {
  data() {
    return {
      loading: false,
      mylessons: {},
      retrieveStatus: '',
      selected_lessons: [],
      tutorId: localStorage.getItem('tutor_id'),
    }
  },
  created() {
    this.loading = true;
    axios
    .post(`/api/tutor/lessons`, {
        lecturerId: this.tutorId,
    })
    .then( response => {
      console.log(response)
      this.mylessons = response.data.lessons;
      this.retrieveStatus = response.data.status;
      this.loading = false;
    });
  },

  methods: {
    click_lesson(id) {
      this.selected_lessons.push(id);
      this.$emit('childToParent', this.selected_lessons);
    }
  }
}
</script>