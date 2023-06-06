@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="form-holder col-6">
            <div class="form-content">
                <div class="form-items">
                    <h3>Add a new message</h3>
                    <p>Fill in the data below</p>
                    <form action="{{route('messages-store')}}" method="post" enctype="multipart/form-data">
                        <div class="col-md-12">
                            <input class="form-control" type="text" name="name" placeholder="Your name" value={{old('name')}}>
                        </div>
                        <div class="col-md-12">
                            <input class="form-control" type="text" name="email" placeholder="Your email" value={{old('email')}}>
                        </div>
                        <div class="col-md-12 form-floating">
                            <textarea class="form-control" name="message" placeholder="Write your message" value={{old('message')}}></textarea>
                            <label for="floatingTextarea2">Your message</label>
                        </div>
                        <div class="form-button mt-3">
                            <button id="submit" type="submit" class="btn btn-primary">Add message</button>
                            @csrf
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-6 mt-6">
            <div class="card">
                <div class="card-header">
                    <h2>Messages</h2>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @forelse($messages as $message)
                        <div class="m-line">
                            <h3>User: {{$message->name}}</h3>
                            <h5>User`s email: {{$message->email}}</h5>
                            <h5>User`s message: {{$message->message}}</h5>
                            <h5>Message was created at: {{$message->created_at}}</h5>
                        </div>
                        @empty
                        <li class="list-group-item">
                            No cars
                        </li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
