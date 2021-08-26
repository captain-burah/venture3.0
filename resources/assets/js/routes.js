import VueRouter from "vue-router";
// import Classes from "./landing/classes/Classes";

const routes = [
    {
        path: "/",
        component: require('./2021/landing/Landing.vue'),
        name: "landing",
    },
    { path: '/home',
        component: require('./2021/landing/Home.vue'),
        name: "home",
        children: [
            // {
            //     path: '/tutor', 
            //     component: require('./2021/landing/Tutor.Vue'),
            // },
            // {
            //     path: '/tutor', 
            //     component: require('./2021/landing/Tutor.Vue'),
            // },
        ],
    },
    { path: '/academy',
        component: require('./2021/academy/Academy2.vue'),
        name: "academy"
    },
    {   
        path: "/academy/:id",
        component:require('./2021/academy/Academicc.vue'),
        name: "academic",
    },
    {   
        path: "/checkout/:id",
        component:require('./2021/academy/Checkout.vue'),
        name: "checkout",
    },
    {   
        path: "/student-login",
        component:require('./2021/auth/StuLogin.vue'),
        name: "student-login"
    },
    {   
        path: "/student-register",
        component:require('./2021/auth/StuRegister.vue'),
        name: "student-register"
    },
    {   
        path: "/tutor-login",
        component:require('./2021/auth/LecLogin.vue'),
        name: "tutor-login"
    },
    {   
        path: "/tutor-register",
        component:require('./2021/auth/LecRegister.vue'),
        name: "tutor-register"
    },
    
    //------------------ Student-------------------------------//
    { path: '/student-dashboard', 
        component: require('./studentComp/Smaster.vue'),
        name: "student-dashboard",
        children: [
            {
                path: '/', 
                component: require('./components/Dashboard.vue'),
            },
            { path: '/Lessons', component: require('./lecturerComp/Lessons/Lesson.vue'), 
                children: [
                { path: '/', component: require('./lecturerComp/Lessons/Overview.vue') },
                { path: 'Overview', component: require('./lecturerComp/Lessons/Overview.vue') },
                { path: 'Analysis', component: require('./lecturerComp/Lessons/Analysis.vue') },
                { path: 'Syllabus', component: require('./lecturerComp/Lessons/Syllabus.vue') },
                
                ] 
            },
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
        ],
    },
    

    
    
    //------------------ Lecturer-------------------------------//
    
    
    // { path: '/CreateLessons', component: require('./lecturerComp/Lessons/CreateLessons/CreateLesson.vue'),
    // children: [
    //     { path: '/', component: require('./lecturerComp/Lessons/CreateLessons/WelcomePage.vue') },
    //     { path: 'Design', component: require('./lecturerComp/Lessons/CreateLessons/Design.vue') },
    //     { path: 'Content', component: require('./lecturerComp/Lessons/CreateLessons/Content.vue') },
    
    // ] },


    // { path: '/createPapers', component: require('./lecturerComp/createPapers/CreatePaper.vue'), 
    //     children: [
    //     { path: '/', component: require('./lecturerComp/createPapers/WelcomePage.vue') },

    //     { path: 'questions', component: require('./lecturerComp/createPapers/Questions.vue') },
    //     { path: 'exams', component: require('./lecturerComp/createPapers/Exams.vue') },
    //     { path: 'intro-exit', component: require('./lecturerComp/createPapers/Intro-Exit.vue') },
    //     { path: 'grading', component: require('./lecturerComp/createPapers/Grading.vue') },
        
    //     ] },
    
        

    { path: '/tutor', component: require('./lecturerComp/Dashboard.vue')},
    { path: '/tutor-dashboard', component: require('./lecturerComp/Lmaster.vue')},
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