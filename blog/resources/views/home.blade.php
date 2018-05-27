@extends('layout.main')

@section('title')
    Home
@endsection

@section('body')

   <div class="logdetatils" style="background: #9fcdff; margin-left: 100px; margin-right: 1000px;" >

       <ul>
        <li>Name: {{ Auth::user()->name }} </li>
        <li><a href=" {{ route('signout') }}">Logout</a></li>

       </ul>

   </div>





   <div class="container">
       <div class="row">

           <div class="col-md-8 col-md-offset-2">

               <h1>Write a post</h1>

               <form action="{{ route('post.create') }}" method="POST">



                   <div class="form-group">
                       <label for="title">Title <span class="require">*</span></label>
                       <input type="text" class="form-control" name="title" />
                   </div>

                   <div class="form-group">
                       <label for="description">Description</label>
                       <textarea rows="5" class="form-control" name="description" ></textarea>
                   </div>

                   <div class="form-group">
                       <p><span class="require">*</span> - required fields</p>
                   </div>

                   <div class="form-group">
                       <button type="submit" class="btn btn-primary">Create</button>


                   </div>
                   {{ csrf_field() }}

               </form>

           </div>


       </div>

   </div>



   <br><br><br>




   <div class="container">
       <div class="row">
           <div class="col-sm">

           </div>
           <div class="col-sm">

           </div>
           <div class="col-sm">
               @if( session()->has('message'))
                   <div class="alert alert-success">
                       {{ session()->get('message') }}
                   </div>
               @endif
           </div>
       </div>
   </div>



















@endsection