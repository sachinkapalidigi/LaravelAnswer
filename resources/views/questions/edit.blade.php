@extends('../template')

@section('content')

    <div class="container">
        <h1>Edit the Question</h1>
        <hr />
        <form action="{{route('questions.update',$question->id)}}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT">
                        {{-- can use @method('PUT')  --}}
            <label for="title">Question:</label>
            <input type="text" value="{{$question->title}}" name="title" id="title" class="form-control">

            <label for="description">More Information:</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{$question->description}}</textarea>

            <input type="submit" class="btn btn-primary" value="Submit Question">
        </form>
    </div>

@endsection
