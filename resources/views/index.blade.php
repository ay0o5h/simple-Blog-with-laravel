@extends('layouts.app')

@section('content')

    <div class="bg-img m-auto " style=" background-image: url('https://cdn.pixabay.com/photo/2016/03/26/13/09/workspace-1280538_960_720.jpg');
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    height: 300px;">
        <div class="flex-fill pt-2 text-secondary">
            <div class="m-auto pt-4 pb-lg-4 text-center text-capitalize">
                <h1 class="text-white mt-5 text-xl-left text-uppercase font-weight-bold ">
                    do you want become a developer</h1>
                <a href="/blog"
                   class="text-center w-25 m-auto btn-light shadow-lg nav-link text-secondary px-lg-4 font-weight-bold text-uppercase">
                    read more
                </a>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="row mx-auto py-4 border-bottom border-secondary">
            <div class="col-sm-6 ">
                <img src="https://cdn.pixabay.com/photo/2015/01/08/18/27/startup-593341_960_720.jpg" height="100%"
                     width="100%">

            </div>
            <div class="col-sm-6 m-auto text-left">
                <h2 class="m-auto font-weight-bold">
                    struggle to be better web devloper
                </h2>
                <p class="text-sm-left py-4 text-secondary">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                </p>
                <p class="text-sm-left pb-5 text-secondary">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                    standard dummy text ever since the 1500s
                </p>
                <a href="/blog"
                   class="nav-link btn-primary text-center text-white text-capitalize p-2 w-25  rounded-pill">
                    fine out more
                </a>
            </div>
        </div>
    </div>
    <div class="text-center text-capitalize p-5 bg-dark text-white">
        <h2 class="pb-3 text-xl-left">
            I'm an expert in ...
        </h2>
        <span class="py-1 d-block text-lg-left">
            ux design
        </span>
        <span class="py-1 d-block text-lg-left">
            project management
        </span>
        <span class="py-1 d-block text-lg-left">
            digital marketing
        </span>
        <span class="py-1 d-block text-lg-left">
           front-end developer
        </span>
    </div>
    <div class="text-center text-capitalize py-5">
                  <span class=" d-block text-sm-center text-secondary">
            blog
        </span>
        <h2 class="py-5 text-xl-center font-weight-bold">
           recent post
        </h2>
        <p class="text-secondary text-center w-50 m-auto">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
            standard dummy text ever since the 1500s
        </p>


    </div>
   <div class="container">
       <div class="row">
           <div class="col-sm-6 pt-5 bg-warning text-white rounded-3 ">
               <div class="m-auto pt-4 pb-lg-3 d-block">
                   <span class="text-uppercase text-center">
                       php
                   </span>
                   <h3 class="py-5 font-weight-bold text-xl-center">
                       Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                       Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                       standard dummy text ever since the 1500s
                       Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                       Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                       standard dummy text ever since the 1500s
                   </h3>
                   <a href="/blog"
                      class="nav-link btn-warning border border-light text-center text-white text-capitalize p-2 w-25  rounded-pill">
                       fine out more
                   </a>
               </div>
           </div>
           <div class="col-sm-6 ">
               <img src="https://cdn.pixabay.com/photo/2015/01/08/18/27/startup-593341_960_720.jpg" height="100%"
                    width="100%">

           </div>
       </div>
   </div>
@endsection
