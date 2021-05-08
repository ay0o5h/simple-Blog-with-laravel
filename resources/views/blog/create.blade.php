@extends('layouts.app')


@section('content')

    <div class="m-auto text-left">
        <div class="py-5 ">
            <h1 class="text-capitalize font-weight-bolder text-center" style="font-family: 'Times New Roman'">
                create posts

            </h1>
        </div>
    </div>
   <div class="pt-5 m-auto">
       <form action="{{route('blog.store')}}" method="post" enctype="multipart/form-data">
           @csrf
           <div class="container text-capitalize">
           <div class="row mb-3 " >
               <div class="col-sm-3"></div>
               <div class="col-sm-6">

             <input type="text" name="title" class="form-control text-dark shadow-sm
             border-0 border-outline-light bg-light  " style="height: 50px"
                    placeholder="title" id="title">
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
                       shadow-sm btn-outline-light bg-light border-0 text-dark  border-bottom" placeholder="description" id="description"></textarea>
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
                               class="btn text-capitalize  btn-light p-2 w-100 shadow-lg"
                               style="font-family:monospace">create post</button>

                   </div>
                   <div class="col-sm-3"></div>
               </div>

           </div>
       </form>
   </div>

@endsection
