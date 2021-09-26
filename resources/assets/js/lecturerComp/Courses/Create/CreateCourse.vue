<template>
<div>
    <div class="row">
        <div class="col-md-6">

          <overview 
            v-on:childToParent="onOverviewClick"
          >
          </overview>
          <br>
          <general
            v-on:childToParent="onGeneralClick"
          ></general>

          <!-- /.card -->
        </div>
        <div class="col-md-6">

          <lesson 
            v-on:childToParent="onLessonClick"
          ></lesson>

          <!-- /.card -->
        </div>
      </div>
</div>
</template>
<script>
import overview from './CreateCourseOverview.vue';
import lesson from './CreateCourseLesson.vue';
import general from './CreateCourseGeneral.vue';

export default {
  components: { overview, lesson, general },
  data() {
    return {
      create_course: {
        overview: {},
        lesson: {},
        general: {},
      },
    }
  },
  created() {
  },
  methods: {
    onOverviewClick (value) {
      this.create_course.overview = value
    },
    onLessonClick (value) {
      this.create_course.lesson = value
    },
    onGeneralClick (value) {
      this.create_course.general = value
    }
  }
}
</script>
