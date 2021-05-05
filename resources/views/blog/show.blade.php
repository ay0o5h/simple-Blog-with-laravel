@extends('layouts.app')


@section('content')

    <div class="m-auto text-left">
        <div class="py-5 ">
            <h1 class="text-capitalize text-xl-center">
                {{$post->title}}

            </h1>
        </div>
    </div>
    <div class="pt-5 m-auto">
  <center>
      <span class="text-secondary text-capitalize">
                      by <span class="font-weight-bold font-italic ">{{$post->user->name}}</span> created on
                      {{date('jS M Y',strtotime($post->created_at))}}
                   </span>
      <p class="text-capitalize text-secondary text-lg-left">
          {{  $post->description }}
      </p>
  </center>
    </div>

@endsection
