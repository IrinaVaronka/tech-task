@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <div class="card mt-5">
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
