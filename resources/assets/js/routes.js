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
        path: "/student-receipt/:id",
        component: require('./2021/academy/Approve.vue'),
        name: "student-receipt"
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
        children: [
            {
                path: '/', 
                name: "student-dashboard",
                component: require('./components/Dashboard.vue'),
            },
            {
                path: '/student-courses', 
                component: require('./studentComp/MyCourses.vue'),
                name: "student-courses"
            },
            {
                path: '/student-course/:id', 
                component: require('./studentComp/MyCourse.vue'),
                name: "student-course"
            },
            { path: '/Lessons', component: require('./lecturerComp/Lessons/Lesson.vue'), 
                children: [
                { path: '/', component: require('./lecturerComp/Lessons/Overview.vue') },
                { path: 'Overview', component: require('./lecturerComp/Lessons/Overview.vue') },
                { path: 'Analysis', component: require('./lecturerComp/Lessons/Analysis.vue') },
                { path: 'Syllabus', component: require('./lecturerComp/Lessons/Syllabus.vue') },
                
                ] 
            },
            { path: '/profile', component: require('./studentComp/Profile.vue') },
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
    
    { path: '/tutor-dashboard', 
        component: require('./lecturerComp/Lmaster.vue'),
        children: [
            {
                path: '/',
                component: require('./lecturerComp/Dashboard.vue'),
                name: 'tutor-dashboard'
            },
            { 
                path: '/tutor-profile',  
                component: require('./lecturerComp/Profile.vue'),
                name: 'tutor-profile',
            },
            {
                path: '/tutor-subscriptions',
                component: require('./lecturerComp/Subscription/Subscriptions.vue'),
                name: 'tutor-subscriptions',
            },
            {
                path: '/tutor-subscription-paynow/:id',
                component: require('./lecturerComp/Subscription/PayNow.vue'),
                name: 'tutor-subscription-paynow',
            },
            
            { 
                path: '/tutor-course',  
                component: require('./lecturerComp/Courses/MyCourses.vue'),
                name: 'tutor-course',
            },
            { 
                path: '/tutor-new-course',  
                component: require('./lecturerComp/Courses/Create/CreateCourse.vue'),
                name: 'tutor-new-course',
            },
            {
                path: '/tutor-new-lesson',
                component: require('./lecturerComp/Lessons/Create/CreateLesson.vue'),
                name: 'tutor-new-lesson',
            },
            { 
                path: '/tutor-lesson',  
                component: require('./lecturerComp/Lessons/MyLessons.vue'),
                name: 'tutor-course',
                // children: [
                //     { 
                //         path: '/', 
                //         component: require('./lecturerComp/Lessons/CreateLessons/WelcomePage.vue'),
                //         name: 'tutor-lesson'
                //     },
                //     { 
                //         path: '/lesson-design', 
                //         component: require('./lecturerComp/Lessons/CreateLessons/Design.vue'),
                //         name: 'lesson-design'
                //     },
                //     { 
                //         path: '/lesson-content', 
                //         component: require('./lecturerComp/Lessons/CreateLessons/Content.vue'),
                //         name: 'lesson-content'
                //     },
                
                // ]
            },

        ],
    },
    {
        path: '/tutor-payment-print/:id/:name/:price',
        component: require('./lecturerComp/Subscription/PaymentView.vue'),
        name: 'tutor-payment-print',
    },
    

    // { path: '/tutor', component: require('./lecturerComp/Dashboard.vue')},
    // { path: '/tutor/lecProfile',  component: require('./lecturerComp/Profile.vue')},
    //{ path: '/Lessons',  component: require('./lecturerComp/MyLessons.vue')},
    { path: '/Schedules',  component: require('./lecturerComp/MySchedules.vue')},
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