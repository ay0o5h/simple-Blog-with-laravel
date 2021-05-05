@extends('layouts.app')


@section('content')

    <div class="m-auto text-left">
        <div class="py-5 ">
            <h1 class="text-capitalize text-xl-center">
               edit posts

            </h1>
        </div>
    </div>
    <div class="pt-5 m-auto">
        <form action="/blog/{{$post->slug}}"  method="post" enctype="multipart/form-data">
            @csrf
            @method('Put' )
            <div class="container">
                <div class="row mb-3 " >
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">

                        <input type="text" name="title" class="form-control text-dark shadow-sm border-0 btn-outline-light bg-light border-bottom"
                              value="{{$post->title}}" id="title">
                        @error('title')
                        <div class="alert alert-danger" role="alert">
                            this filed is required
                        </div>
                        @enderror
                    </div>

                    <div class="col-sm-3"></div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                       <textarea rows="4" name="description"  class="form-control
                       shadow-sm btn-outline-light bg-light text-dark border-0  border-bottom"   id="description">
                           {{$post->description}}
                       </textarea>
                        @error('description')
                        <div class="alert alert-danger" role="alert">
                            this filed is required
                        </div>
                        @enderror
                    </div>
                    <div class="col-sm-3"></div>
                </div>
                @error('description')
                <div class="alert alert-danger" role="alert">
                    this filed is required
                </div>
                @enderror
                <div class="row mb-3 " >
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">

                        <input type="file" name="image" class="form-control border-0  btn-outline-light bg-light shadow-sm  border-bottom"
                               id="image">
                        @error('image')
                        <div class="alert alert-danger" role="alert">
                            this filed is required
                        </div>
                        @enderror

                    </div>
                    <div class="col-sm-3"></div>
                </div>
                <div class="row mb-3 " >
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">

                        <button type="submit"
                                class="btn text-capitalize btn-light p-2 w-100 shadow-lg">create post</button>

                    </div>
                    <div class="col-sm-3"></div>
                </div>

            </div>
        </form>
    </div>

@endsection
