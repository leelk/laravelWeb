@extends('layout.main')

@section('title')
        Welcomepage
@endsection

@section('body')


    <div class="container">
        <div class="row">
            <div class="col-sm">
               <h1 style="font-family:Monoton;">Welcome</h1>
            </div>
            <div class="col-sm">

            </div>
            <div class="col-sm">

            </div>
        </div>
    </div>




    <div class="container">
        <div class="row">

                    <div class="col-sm" style="background: #60a3bc; margin-right: 5px; border-radius: 5px">


                        <h2 style="color: white;text-align: center;">Register</h2>
                        <form class="form-horizontal" method="post" action=" {{ route('signup') }}">
                            <div class="form-group">
                                <label style="margin-left: 3px;">Name</label>
                                <input type="text" style="margin-left: 2px;width: 370px; " class="form-control" placeholder="Enter Your Name" name="name">
                            </div>

                            <div class="form-group">
                                <label style="margin-left: 3px;">Email</label>
                                <input type="email" style="margin-left: 2px;width: 370px; " class="form-control" placeholder="Enter Your e-mail" name="email">
                            </div>

                            <div class="form-group">
                                <label style="margin-left: 3px;">Phone Number</label>
                                <input type="text" style="margin-left: 2px;width: 370px; " class="form-control" placeholder="Enter Your Phone Number" name="phone">
                            </div>

                            <div class="form-group">
                                <label style="margin-left: 3px;">Password</label>
                                <input type="password" style="margin-left: 2px;width: 370px; " class="form-control" placeholder="Enter a Password" name="password">

                                <br>
                            <button type="submit" class="btn btn-dark float-none" style="margin-left: 145px;">Sign up</button>
                            </div>
                            {{ csrf_field() }}
                        </form>
                    </div>





            {{--Login--}}

            <div class="col-sm" style="background: #60a3bc; margin-right: 5px;border-radius: 5px;">
               {{-- One of three columns--}}



                    <h2 style="color: white;text-align: center">Login</h2>
                    <form class="form-horizontal" method="post" action="{{ route('signin') }}" >
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" style="margin-left: 2px;width: 370px; " class="form-control" placeholder="Enter Your e-mail" name="email">
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" style="margin-left: 2px;width: 370px; " class="form-control" placeholder="Enter a Password" name="password">
                        </div>

                        <button type="submit" class="btn btn-dark" style="margin-left: 145px;" >Sign in </button>

                        {{ csrf_field() }}
                    </form>

            </div>




            {{--View Post--}}

            <div class="col-sm" style="background: #60a3bc; border-radius: 5px;">
                <h2 style="color: white;text-align: center; "></h2>


                <div style="margin-left: 70px;">
                    <p><br><br><br><br><br><br><br><br>
                        <a href="http://localhost:8000/post" style="font-size: 35px;text-align: center; color: #1d2124;">
                            See All Post
                        </a>
                    </p>
                </div>


               {{-- One of three columns--}}
            </div>
        </div> {{--Container Closed div --}}

<div> {{--Error Messages --}}




</div>

        <br><br><br>


        <div class="container">
            <div class="row">
                <div class="col-sm">

                </div>
                <div class="col-sm">

                    @if(count($errors)>0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li> {{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif



                    @if( session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif





                </div>
                <div class="col-sm">

                </div>
            </div>
        </div>













@endsection