@extends('layouts.app')


@section('content')

    <div class="m-auto text-center">
        <div class="py-5 ">
            <h1 class="text-capitalize text-xl-center">
                Blog posts

            </h1>
        </div>
    </div>
    @if(session()->has('message'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('message')}}
        </div>
    @endif
    @if(Auth::check())
    <a href="/blog/create"
       class="nav-link btn-primary  text-center text-white text-capitalize p-2 w-25  rounded-pill">
        create a post
    </a>
    @endif
  @foreach($posts as $post)
      <div class="container">
          <div class="row border-top border-bottom border-secondary">
              <div class="col-sm-6 py-4 ">
                  <img src="{{asset('images/'.$post->image_path)}}" height="100%"
                       width="100%">

              </div>
              <div class="col-sm-6 py-4 ">
                  <h2 class="pb-4 text-capitalize font-weight-bold text-xl-left">
                 {{  $post->title }}
                  </h2>
                  <span class="text-secondary text-capitalize">
                      by <span class="font-weight-bold font-italic ">{{$post->user->name}}</span> created on
                      {{date('jS M Y',strtotime($post->created_at))}}
                   </span>
                  <p class="text-capitalize text-secondary text-lg-left">
                      {{  $post->description }}
                  </p>
                  <a href="/blog/{{$post->slug}}"
                     class="nav-link btn-primary  text-center text-white text-capitalize p-2 w-25  rounded-pill">
                      keep reading
                  </a>
                  @if(isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                      <span class="float-right">
                          <a href="/blog/{{$post->slug}}/edit"
                             class="nav-link btn-light   text-center text-dark text-capitalize p-2 w-25  rounded-pill">
                    edit
                  </a>
                      </span>
                      <span class="float-right">
                  @endif
                  <form action="/blog/{{$post->slug}}"  method="post" >
                  @csrf
                  @method('delete' )
                      <button type="button" class="btn btn-danger">Delete</button>
                  </form>
                      </span>
              </div>

          </div>
      </div>

  @endforeach
@endsection
