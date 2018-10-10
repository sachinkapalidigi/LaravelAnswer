@extends('template')

@section('content')
    <div class="container">
        <h1>Recent Questions</h1>
        <hr>
        @foreach($questions as $question)
        <div class="card w-75">
            <div class="card-body">
              <h5 class="card-title">{{$question->title}}</h5>
              <p class="card-text">{{$question->description}}</p>
              <a href="{{route('questions.show',$question->id)}}" class="btn btn-primary">View Details</a>
            </div>
        </div>
        <br>
        @endforeach

        {{$questions->links()}}
    </div>
    
@endsection