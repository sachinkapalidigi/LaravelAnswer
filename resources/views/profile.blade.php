@extends('template')

@section('content')

    <div class="container">
        <img src="{{$user->profile_pic}}" class="img-rounded" style="max-height:100px;">
        <h1>{{$user->name}}'s Profile</h1>
        <p>See what {{$user->name}} has been upto.</p>
        <hr>
        
        <div class="row">
            <div class="col-md-6">
                <h3>Questions</h3>
                @foreach ($user->questions as $question)
                    <div class="card" style="width: 30rem;">
                        <div class="card-body">
                          <h5 class="card-title">{{$question->title}}</h5>
                          
                          <p class="card-text">{{$question->description}}</p>
                          <a href="{{route('questions.show',$question->id)}}" class="btn btn-primary">View Question</a>
                          
                        </div>
                    </div>
                @endforeach
                        
            </div>
            <div class="col-md-6">
                <h3>Answers</h3>
                    @foreach ($user->answers as $answer)
                    <div class="card" style="width:30rem;">
                        <div class="card-header">
                            {{$answer->question->title}}
                        </div>
                        <div class="card-body">                         
                          
                          <p class="card-text">{{$answer->content}}</p>
                          <a href="{{route('questions.show',$answer->question->id)}}" class="btn btn-sm btn-primary">View Question for this answer</a>
                       
                        </div>
                           
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection