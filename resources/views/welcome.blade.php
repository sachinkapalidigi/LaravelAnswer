@extends('template')

    @section('content')                     

            <div class="container">
                <div class="jumbotron">
                    <h1>Ask a Question</h1>
                    <p>Ask a question you want to know about Laravel</p>
                    <p><a href="{{route('questions.create')}}" class="btn btn-primary btn-lg" role="button">Ask Now</a></p>                 

                </div>
                <h2>Recent Questions:</h2>
            </div>
    @endsection