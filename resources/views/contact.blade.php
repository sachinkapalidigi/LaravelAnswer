@extends('template')

@section('content')                     

    <div class="container">
        <h1>Contact Us</h1>

        <form action="{{route('contact')}}" method="POST">
            {{csrf_field()}}

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            
            <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email">
            </div>
            
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" name="subject">
            </div>
                    
            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" class="form-control" rows="4"></textarea>
            </div>
            
            <input type="submit" class="btn btn-primary" value="send message">
        </form>
    </div>
@endsection