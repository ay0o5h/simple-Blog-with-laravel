@extends('layouts.app')

@section('content')

    <div class="bg-img m-auto " style="background-image: url('{{asset('./images/computer_bg.jpg')}}')">
        <div class="overlay">
            <div class="flex-fill pt-2 text-secondary">
                <div class="m-auto pt-4 pb-lg-4 text-center text-capitalize">
                    <h1 class="text-white header text-xl-center text-uppercase font-weight-bold ">
                        do you want become <br> a developer</h1>
                    <a href="/blog"
                       class="text-dark btn btn-light mt-5  m-auto btn-light shadow-lg nav-link text-secondary
                   font-weight-bold text-capitalize" style="width: 20%;font-family: monospace">
                        read more
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mx-auto py-xl-5 " style="border-bottom: 1px solid rgba(0,0,0,0.1)">
            <div class="col-sm-6 ">
                <img src="{{asset('./images/labtop_cup.jpg')}}"
                     height="100%" width="100%" style="  border-top-right-radius: 50px;
                        border-top-left-radius: 50px; border-bottom-right-radius: 200px;border-bottom-left-radius: 200px;">

            </div>
            <div class="col-sm-6 m-auto text-left">
                <h2 class="m-auto text-capitalize font-weight-bolder" style="font-family: 'Times New Roman';">
                    struggle to be better web devloper
                </h2>
                <p class="text-sm-left py-4 text-secondary" style="font-family: monospace;">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                </p>
                <p class="text-sm-left pb-5 text-secondary" style="font-family: monospace;">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                    standard dummy text ever since the 1500s
                </p>
                <a href="/blog"
                   class=" btn btn-info text-center text-white text-capitalize px-4  rounded-pill"
                   style="font-family: monospace;">
                    fine out more
                </a>
            </div>
        </div>
    </div>
    <div class="text-center text-capitalize text-dark font-weight-bolder  p-5" style="font-family: 'Times New Roman';">
        <h2 class="pb-xl-5 text-xl-center ">
            I'm an expert in ...
        </h2>
        <div class="container">
            <div class="row text-lg-center pb-xl-5 "  style="border-bottom: 1px solid rgba(0,0,0,0.1)">
                <div class="col-sm-3 ">
                    <img src="{{asset('./images/ui.png')}}" height="100px" width="100px">
                     <span class="py-2 d-block mt-3 ">
            ui & ux design
        </span>
                </div>
                <div class="col-sm-3">
                    <img src="{{asset('./images/project_management.png')}}" height="100px" width="100px">
                    <span class="py-2 d-block mt-3">

            project management
        </span>
                </div>
                <div class="col-sm-3">
                    <img src="{{asset('./images/dihital_marketing.png')}}" height="100px" width="100px">
                     <span class="py-2 d-block mt-3">
            digital marketing
        </span>
                </div>
                <div class="col-sm-3">
                    <img src="{{asset('./images/web.png')}}" height="100px" width="100px">
                      <span class="py-2 d-block  mt-3">
           front-end developer
        </span>
                </div>
            </div>
        </div>


    </div>
    <div class="text-center text-capitalize py-5">

        <h2 class="py-5 text-xl-center font-weight-bold" style="font-family: 'Times New Roman'">
            recent post
        </h2>
        <p class="text-secondary text-center w-50 m-auto" style="font-family: monospace">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
            standard dummy text ever since the 1500s
        </p>


    </div>
    <div class="container">
        <div class="row pb-5-xxl-5" >
            <div class="col-sm-6 pt-5 bg-light  shadow-lg rounded-3 ">
                <div class="m-auto pt-4 pb-lg-3 d-block">
                 <center>
                       <h1 class="text-capitalize font-weight-bold text-dark text-lg" style="font-family: 'Times New Roman'">
                       post title
                   </h1>

                    <p class="py-5 font-weight-bold text-l-center text-secondary" style="font-family: monospace">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                        standard dummy text ever since the 1500s
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                        standard dummy text ever since the 1500s
                    </p>
                    <a href="/blog"
                       class="btn btn-info border text-center text-white text-capitalize px-5  rounded-pill"
                       style="font-family: monospace">
                        fine out more
                    </a>
                 </center>
                </div>
            </div>
            <div class="col-sm-6 shadow-sm " style="padding-left: 0">
                <img src="{{asset('./images/work.jpg')}}"  height="100%" width="100%">

            </div>
        </div>
    </div>
@endsection
