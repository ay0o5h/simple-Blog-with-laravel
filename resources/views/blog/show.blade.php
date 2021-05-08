@extends('layouts.app')


@section('content')
   <div class="container">
       <div class="row">
           <div class="col-sm-6">
               <img src="{{asset('images/'.$post->image_path)}}" height="100%"
                    width="100%">
           </div>
           <div class="col-sm-6">
               <div class="m-auto text-left">
                   <div class="py-5 ">
                       <h1 class="text-capitalize">
                           {{$post->title}}

                       </h1>
                   </div>
               </div>
               <div class="pt-5 m-auto">

      <span class="text-secondary text-capitalize">
                      by <span class="font-weight-bold ">{{$post->user->name}}</span> created on
                      {{date('jS M Y',strtotime($post->created_at))}}
                   </span>
                       <p class="text-capitalize text-secondary text-left">
                           {{  $post->description }}
                       </p>
             
               </div>
           </div>
       </div>
   </div>


@endsection
