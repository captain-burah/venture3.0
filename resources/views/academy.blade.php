@extends('layouts.appTutorCopy')

@section('content')
       <!--- Cover --->
       <div class="page-header header-filter purple-filter" data-parallax="true" 
       style="background-image: url('/img/bg8.jpg'); transform: translate3d(0px, 0px, 0px);">
           <div class="container">
           <div class="row ">
               <div class="col-md-5 text-center">
                   <div class="brand mobile-view">
                       <h3 class="">Academy</h3>
                       <div class="separator line-separator text-white  pb-0 pt-0">♦</div>
                   </div>
                   <div class="">
                       <p class="lead text-light">
                           "Man can learn nothing except by going from the known to the unknown"
                       </p>
                       
                   </div>
               </div>
               <div class="col-md-1"></div>
               <div class="col-md-6 text-right mobile-hide" >
                   <h1 class="title text-right">Acad<span class=" text-warning">emy</span></h1>
               </div>
           </div>
           </div>
       </div>
        <!--- Cover ---> 
        <academy-page ></academy-page> 
@endsection