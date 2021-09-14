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
          <h3 class="card-title">Course Name</h3>
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
                      <span class="info-box-number text-center text-light mb-0">2300</span>
                    </div>
                  </div>
                </div>

                <div class="col-12 col-sm-4">
                  <div class="info-box bg-warning">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-light">No. of Assignments</span>
                      <span class="info-box-number text-center text-light mb-0">2000</span>
                    </div>
                  </div>
                </div>

                <div class="col-12 col-sm-4">
                  <div class="info-box bg-success">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-light">Total Number of Hours</span>
                      <span class="info-box-number text-center text-light mb-0">20</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-12">
                  <h4>Tutor Notes</h4>

                    <div class="post">
                      <p>
                        Lorem ipsum represents a long-held tradition for designers,
                        typographers and the like. Some people hate it and argue for
                        its demise, but others ignore.
                      </p>
                    </div>

                </div>
              </div>
            </div>

            <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
              <h3 class="text-primary"><i class="fas fa-paint-brush"></i> Course Details</h3>
              <p class="text-muted">
                  Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.
              </p>
              <br>
              <div class="text-muted">
                <p class="text-sm">Tutor
                  <b class="d-block">Deveint Inc</b>
                </p>
                <p class="text-sm">Registered on
                  <b class="d-block">Tony Chicken</b>
                </p>
              </div>

              <h5 class="mt-5 text-muted">Course files</h5>
              <ul class="list-unstyled">
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Functional-requirements.docx</a>
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

                    <div class="card border border-primary">
                        <div class="border-bottom border-primary" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" 
                                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Collapsible Group Item #1
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus 
                                terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard 
                                dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, 
                                sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. 
                                Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea 
                                proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, 
                                raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore 
                                sustainable VHS.
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
        loaded: false,
        course: {},
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
            this.course = response.data.lessons,
            this.loaded = true;
        })
    },

}
</script>