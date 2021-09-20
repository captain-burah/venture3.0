<template>
<div>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Course Detail</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card ">
        <div class="card-header card-header-primary">
          <h3 class="card-title">Course Name: {{ course.name }}</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-plus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>

        <div class="card-body">
          <div class="row">

            <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
              <div class="row">
                <div class="col-12 col-sm-4">

                  <div class="info-box bg-info">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-light">No. of Lessons</span>
                      <span class="info-box-number text-center text-light mb-0">{{ lessons.length }}</span>
                    </div>
                  </div>
                </div>

                <div class="col-12 col-sm-4">
                  <div class="info-box bg-warning">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-light">No. of Assignments</span>
                      <span class="info-box-number text-center text-light mb-0" v-if="assignments.length">{{ assignments.length }}</span>
                    </div>
                  </div>
                </div>

                <div class="col-12 col-sm-4">
                  <div class="info-box bg-success">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-light">Number of Exams</span>
                      <span class="info-box-number text-center text-light mb-0">{{ exams.length }}</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-12">
                  <h4>Tutor Notes</h4>

                    <div class="post">
                      <p>
                        {{course.description}}
                      </p>
                    </div>

                </div>
              </div>
            </div>

            <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
              <h3 class="text-primary"><i class="fas fa-paint-brush"></i> Course Details</h3>
              <p class="text-muted">
                  {{ course.description }}
              </p>
              <br>
              <div class="text-muted">
                <p class="text-sm">Tutor
                  <b class="d-block">{{ course.tutor }}</b>
                </p>
                <p class="text-sm">Registered on
                  <b class="d-block">{{ regTime }}</b>
                </p>
              </div>

              <h5 class="mt-5 text-muted">Course files</h5>
              <ul class="list-unstyled">
                <li>
                  <a href="" class="btn-link text-secondary">
                    <i class="far fa-fw fa-file-word"></i> 
                    Functional-requirements.docx
                  </a>
                </li>
              </ul>

            </div>
          </div>

          <div class="row">
            <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                <h4>
                    Lessons
                </h4>

                <div id="accordion">
                  <div v-for="(lesson, lessonn) in lessons" :key="'lessonn' + lesson">

                    <div  class="card border border-primary">
                        <div class="border-bottom border-primary" :id="'heading' + lessonn">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" 
                                    :data-target="'#collapse' + lessonn" aria-expanded="true" :aria-controls="'collapse' + lessonn">
                                    Lesson {{ lessonn+1 }}: {{ lesson.name }}
                                </button>
                            </h5>
                        </div>

                        <div :id="'collapse' + lessonn" class="collapse show" :aria-labelledby="'heading' + lessonn" 
                          data-parent="#accordion">
                            <div class="card-body">
                                {{ lesson.description }}

                              <!-- Exams -->
                                <div id="accordion2">
                                  <div v-for="(exam, examm) in exams" :key="'examm' + exam">

                                    <div class="card my-2">
                                        <div class="border-bottom border-dark bg-success" :id="'heading2' + examm">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link text-light" data-toggle="collapse" 
                                                    :data-target="'#collapse2' + examm" aria-expanded="true" :aria-controls="'collapse2' + examm">
                                                    Exam {{ examm+1 }}: {{ exam.name }}
                                                </button>
                                            </h5>
                                        </div>

                                        <div :id="'collapse2' + examm" class="collapse" :aria-labelledby="'heading2' + examm" 
                                          data-parent="#accordion2">
                                            <div class="card-body">
                                                {{ exam.description }}
                                                
                                            </div>
                                        </div>
                                    </div>

                                  </div>
                                </div>
                              <!-- Exams -->


                              <!-- Assignments -->
                                <div id="accordion3">
                                  <div v-for="(assignment, assignmentt) in exams" :key="'assignmentt' + assignment">

                                    <div  class="card my-2">
                                        <div class="border-bottom border-dark bg-danger" :id="'heading3' + assignmentt">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link text-light" data-toggle="collapse" 
                                                    :data-target="'#collapse3' + assignmentt" aria-expanded="true" :aria-controls="'collapse3' + assignmentt">
                                                    Assignment {{ assignmentt+1 }}: {{ assignment.name }}
                                                </button>
                                            </h5>
                                        </div>

                                        <div :id="'collapse3' + assignmentt" class="collapse" :aria-labelledby="'heading3' + assignmentt" 
                                          data-parent="#accordion3">
                                            <div class="card-body">
                                                {{ assignment.description }}
                                                
                                            </div>
                                        </div>
                                    </div>

                                  </div>
                                </div>
                              <!-- Assignments -->
                              
                              
                            </div>
                        </div>
                    </div>

                  </div>
                </div>
            </div>
          </div>
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
        len: null,
        loaded: false,
        course: {},
        lessons: {},
        exams: {},
        quizzes: {},
        assignments: {},
        regTime: '',
      }
    },
    created() {
      this.loaded = true;
      axios 
        .post(`/api/user/course-details`, {
            cid: this.$route.params.id,
            uid: localStorage.getItem('user_id'),
        })
        .then( response => {
            this.course = response.data.course, 
            this.lessons = response.data.lessons, 
            this.exams = response.data.exams, 
            this.quizzes = response.data.quizzes, 
            this.assignments = response.data.assignments,
            this.regTime = response.data.regTime,
            this.loaded = true;
        });
        this.len = Object.keys(this.assignments).lenght;
    },

}
</script>