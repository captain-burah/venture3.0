<template>
<div>
    <!-- Content Header (Page header) -->
    <section class="content-header my-auto">
      <div class="container-fluid my-auto">
        <div class="row mb-2 my-auto">
          <div class="col-sm-8 my-auto">
            <h1>My Courses</h1>
          </div>
          <div class="col-md-2 text-right my-auto text-light ml-auto">
              <router-link to="/tutor-new-course" class="btn btn-block btn-success text-light">
                <i class="fas fa-plus text-light"></i>
                <span class="text-light"> Create Course</span>
              </router-link>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header card-header-warning">
          <h3 class="card-title">My Courses</h3>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          #
                      </th>
                      <th>
                          Course
                      </th>
                      <th style="width: 20%">
                          Tutor
                      </th>
                      <th style="width: 20%">
                          Registered Date
                      </th>
                  </tr>
              </thead>
              <tbody class="text-center">
                  <tr v-if="loading" class="text-center">
                    <td colspan="4">
                      <div class="spinner-border text-success" role="status">
                        <span class="sr-only">Loading...</span>
                      </div>
                    </td>
                  </tr>
                  <tr v-else v-for="(course, id) in myCourses.courses" :key="id">
                      <td >
                          {{ course.id }}
                      </td>
                      <td>
                        <router-link :to="{ name: 'student-course', params:{ id: course.id } }">
                            {{ course.name }}
                          </router-link>
                      </td>
                      <td>
                          <a>
                          {{ course.tutor }}
                          </a>
                      </td>

                      <td class="project_progress">
                          <a>
                          {{ course.pivot.created_at }}
                          </a>
                      </td>

                      <td class="project-state">
                          <span class="badge badge-success">Reading</span>
                      </td>

                  </tr>
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
</template>
<script>

export default {
  data() {
    return {
      loading: false,
      myCourses: {},
      userId: localStorage.getItem('tutor_id'),
    }
  },
  created() {
    //   this.loading = true;
    //   axios
    //   .get(`/api/user/mycourses/${this.userId}`)
    //   .then(response => {
    //       this.myCourses = response.data.data;
    //       this.loading = false;
    // });
    // this.myCourses.courses[0];
  },
}
</script>
<style scoped>
routerLink:hover {
  text-decoration: underline;
}
tr {
   line-height: 40px;
   min-height: 25px;
   height: 40px;
}
</style>
