@extends('template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h1>Upload Picture</h1>
                <hr>
                <form action="{{route('upload')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <input type="file" name="picture" id="picture">
                    <input type="submit" class="btn btn-primary" value="upload">
                
                </form>
            </div>
        </div>

    </div>

@endsection