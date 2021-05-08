@extends('layouts.app')


@section('content')

    <div class="m-auto text-center">
        <div class="py-5 ">
            <h1 class="text-capitalize text-center font-weight-bolder" style="font-family: 'Times New Roman'">
                Blog posts

            </h1>
            @if(Auth::check())
                <a href="{{route('blog.create')}}"
                   class="btn btn-info  text-center text-white text-capitalize px-4 mt-4  rounded-pill">
                    create a post
                </a>
            @endif
            @if(session()->has('message'))
               <center>
                   <div class="alert mt-4 alert-success w-50" role="alert">
                       {{ session()->get('message')}}
                   </div>
               </center>
            @endif

        </div>
    </div>

  @foreach($posts as $post)
      <div class="container">
          <div class="row border-top border-bottom border-1">
              <div class="col-sm-6 py-4 ">
                  <img src="{{asset('images/'.$post->image_path)}}" height="100%"
                       width="100%">

              </div>
              <div class="col-sm-6 py-4 " style="position: relative">
                  <h2 class="pb-4 text-capitalize font-weight-bold text-xl-left" style="font-family: 'Times New Roman'">
                 {{  $post->title }}
                  </h2>
                  <span class="text-secondary text-capitalize" style="font-family: monospace">
                      by <span class="font-weight-bold ">{{$post->user->name}}</span> created on
                      {{date('jS M Y',strtotime($post->created_at))}}
                   </span>
                  <p style="font-family: monospace; overflow: hidden" class="text-capitalize text-secondary w-100 text-lg-left">
                      {{  $post->description }}
                  </p>
                  <a href="{{route('blog.show',$post->slug)}}"
                     class="btn btn-info  text-center text-white text-capitalize px-4   rounded-pill">
                      keep reading
                  </a>
                  @if(isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                      <span class="float-right">
                          <a href="{{route('blog.edit',$post->slug)}}"
                             style="position: absolute;bottom: 5%;right: 5%"
                             class="btn btn-light  shadow-lg border-light text-center text-dark text-capitalize px-4 rounded-pill">
                    edit
                  </a>
                      </span>
                      <span class="float-right">
                  @endif

                      <a href="{{route('blog.delete',$post->slug)}}"  style="position: absolute;bottom: 5%;right: 20%" type="button"
                         class=" px-4 rounded-pill shadow-sm btn btn-danger">Delete</a>

                      </span>
              </div>

          </div>
      </div>

  @endforeach
@endsection
