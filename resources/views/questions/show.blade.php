@extends('template')

@section('content')
    <div class="container">
        <h1>{{$question->title}}</h1>
        <p class="lead">{{$question->description}}</p>
        <p>Submitted By:{{$question->user->name}} ,{{$question->created_at->diffForHumans()}}</p>
        @if($question->user->id == Auth::id())
            <a href="{{route('questions.edit',$question->id)}}" class="badge badge-secondary">Edit</a>
            <a name="_method" value="DELETE" href="{{route('questions.destroy',$question->id)}}" class="badge badge-danger">Delete</a>
       
        @endif
        
        
        <hr>
        {{-- submit ansewer here --}}
        <form action="{{route('answers.store')}}" method="POST">
            {{ csrf_field() }}
            <h5>Submit Answer Here:</h5>
            <textarea class="form-control" name="content" id="content" cols="30" rows="2"></textarea>
            <input type="hidden" value="{{$question->id}}" name="question_id">
            <button type="submit" class="btn btn-primary">Submit Answer</button>
        </form>
        <hr>
        {{-- answers related to this question --}}
        
        @if($question->answers->count()>0)
            @foreach($question->answers as $answer)
            <div class="list-group">
                
                <p class="mb-1">{{$answer->content}}</p>          
                <h6>Answered By: {{$answer->user->name}} ,{{$answer->created_at->diffForHumans()}}</h6>
            </div>
            @endforeach
        @else
            <p>There are no answers to this Question</p>
        @endif
        
    </div>

@endsection