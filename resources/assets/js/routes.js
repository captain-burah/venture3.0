import VueRouter from "vue-router";
// import Classes from "./landing/classes/Classes";

const routes = [
    
    // {
    //     path: "/browse",
    //     component: Browse,
    //     name: "browse",
    // },

    { 
        path: '/academy', 
        component: require('./components/Academy.vue'),
        name: "academy",
        children: [
            { 
                path: '/', 
                component: require('./components/Academy2.vue') 
            },
            {   
                path: ":id",
                component:require('./components/academy/Academic.vue'),
                name: "academic",
            },
            {   
                path: "checkout",
                component:require('./components/academy/Checkout.vue'),
                name: "checkout",
            },

        ]
    },

    //------------------ Student-------------------------------//
    { path: '/student_dashboard', component: require('./components/Dashboard.vue')},
    { path: '/profile', component: require('./components/Profile.vue') },
    { path: '/users', component: require('./components/Users.vue') },
    { path: '/students', component: require('./components/Students.vue') },
    { path: '/developer', component: require('./components/Developer.vue') },
    { path: '/mylessons', component: require('./components/Lessons.vue') },
    { path: '/exams', component: require('./components/Exams.vue') },
    { path: '/orders', component: require('./components/Orders.vue') },
    { path: '/results', component: require('./components/Results.vue') },
    { path: '/assignments', component: require('./components/Assignments.vue') },
    { path: '/Student_Reg', component: require('./components/Student_Reg.vue') },

    
    
    //------------------ Lecturer-------------------------------//
    { path: '/Lessons', component: require('./lecturerComp/Lessons/Lesson.vue'), 
        children: [
        { path: '/', component: require('./lecturerComp/Lessons/Overview.vue') },
        { path: 'Overview', component: require('./lecturerComp/Lessons/Overview.vue') },
        { path: 'Analysis', component: require('./lecturerComp/Lessons/Analysis.vue') },
        { path: 'Syllabus', component: require('./lecturerComp/Lessons/Syllabus.vue') },
        
        ] },
    
    { path: '/CreateLessons', component: require('./lecturerComp/Lessons/CreateLessons/CreateLesson.vue'),
    children: [
        { path: '/', component: require('./lecturerComp/Lessons/CreateLessons/WelcomePage.vue') },
        { path: 'Design', component: require('./lecturerComp/Lessons/CreateLessons/Design.vue') },
        { path: 'Content', component: require('./lecturerComp/Lessons/CreateLessons/Content.vue') },
    
    ] },


    { path: '/createPapers', component: require('./lecturerComp/createPapers/CreatePaper.vue'), 
        children: [
        { path: '/', component: require('./lecturerComp/createPapers/WelcomePage.vue') },

        { path: 'questions', component: require('./lecturerComp/createPapers/Questions.vue') },
        { path: 'exams', component: require('./lecturerComp/createPapers/Exams.vue') },
        { path: 'intro-exit', component: require('./lecturerComp/createPapers/Intro-Exit.vue') },
        { path: 'grading', component: require('./lecturerComp/createPapers/Grading.vue') },
        
        ] },
    
        

    { path: '/tutor', component: require('./lecturerComp/Dashboard.vue')},
    { path: '/tutor/lecProfile',  component: require('./lecturerComp/Profile.vue')},
    //{ path: '/Lessons',  component: require('./lecturerComp/MyLessons.vue')},
    { path: '/Schedules',  component: require('./lecturerComp/MySchedules.vue')},
    { path: '/Layout',  component: require('./lecturerComp/SiteLayout.vue')},
    { path: '/Staff',  component: require('./lecturerComp/StaffMgt.vue')},



    
    
    { path: '/Analytics',  component: require('./admin/Analytics.vue')},
    { path: '/payg',  component: require('./admin/PAYG.vue')},
    // { 
    //     path: '/academy',
    //     component: require('./admin/PAYG.vue'),
    //     name: 'academy',
    // },
    
        
];

const router = new VueRouter({
    routes, 
    mode: "history",
});

export default router;