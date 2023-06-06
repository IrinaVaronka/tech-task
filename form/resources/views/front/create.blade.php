@extends('layouts.app')

@section('content')
<div class="form-body">
    <div class="row">
        <div class="form-holder">
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
    </div>
</div>

@endsection
