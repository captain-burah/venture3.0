<template>
<div>
    <div class="row">
        <div class="col-md-6">

          <overview 
            v-on:childToParent="onOverviewClick"
          ></overview>
          
        </div>
        <div class="col-md-6">

          <exam 
            v-on:childToParent="onExamClick"
          ></exam>

          <!-- /.card -->
        </div>
      </div>
</div>
</template>
<script>
import exam from './CreateLessonExam.vue';
import overview from './CreateLessonOverview.vue';

export default {
  components: { overview, exam },
  data() {
    return {
      create_lesson: {
        overview: {},
        exam: {},
      },
    }
  },
  created() {
  },
  methods: {
    onOverviewClick (value) {
      this.create_lesson.overview = value
    },
    onExamClick (value) {
      this.create_lesson.exam = value
    },
  }
}
</script>
