@extends('layout.main')

@section('title')
    Post
@endsection

@section('body')


    <div class="container">
        <div class="row">
            <div class="col-sm">

            </div>
            <div class="col-sm">

            </div>
            <div class="col-sm">
                <a href="http://localhost:8000/">Go Back to Welcome Page</a>
            </div>
        </div>
    </div>





        <section class="row post" style="background: padding-top: 3px;">

            <div class="col-md-6 col-md-offset-1">
                <header><h1 style="font-family: Monoton; color: #2980B9 ;"> What people Post..</h1></header>


                <div class="container">
                    <div class="row">
                        <div class="col-sm">

                        </div>
                        <div class="col-sm">

                            @foreach($posts as $post)

                                <article class="post" style="padding-top: 10px;">
                                    <p class="font-weight-bold" style="font-size: 25px; font-family: Righteous;">
                                        {{ $post->title }}
                                    </p>
                                    <br>
                                    <p class="font-italic">
                                        {{ $post->description }}
                                    </p>

                                    <div class="info">
                                        <p>
                                            Posted by {{ $post->user->name }} on {{ $post->created_at }}

                                        </p>
                                        </div>
                                </article>


                                <hr>

                            @endforeach


                        </div>
                        <div class="col-sm">

                        </div>
                    </div>
                </div>


                <style>
                    hr {
                        color: #f00;
                        background-color: #f00;
                        height: 5px;
                    }
                </style>

























            </div>

        </section>

    @endsection