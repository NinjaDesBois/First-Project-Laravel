@extends('layouts.app')

@section('contenu')
    

<main class="form-signin mt-5">
 
    <div class="container ">
        <div class="row" >
            <div class="col-md-6 offset-md-3">




              <form class='mt-5 shadow-lg p-3 mb-5 bg-white rounded' method="POST" action="{{route('send-message')}}">
                  @csrf
                  <h1 class="text-center">Formulaire de contact</h1>


                  <div class="form-group mb-3 blurred-box">
                      <label for="">Name</label>
                      <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                      @error('name')
                      <strong class="text-danger">{{$message}}</strong>
                      @enderror
                    </div>


                  <div class="form-group mb-3">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small><br>
                    @error('email')
                      <strong class="text-danger">{{$message}}</strong>
                      @enderror
                  </div>
                  
          
                  <div class="form-group mb-3">
                      <label for="message">Message</label>
                      <textarea class="form-control" name="content" id="message" rows="3"></textarea>
                      @error('content')
                      <strong class="text-danger">{{$message}}</strong>
                      @enderror
                    </div>


                  <button type="submit" class="btn btn-primary">Submit</button>

                </form>
                @if (Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>{{ Session::get('success')}}!</strong>
                  <button type="button" class="close btn btn-success" style="float: right" data-dismiss="alert" aria-label="Close">
                    <span >&times;</span>
                  </button>
                </div>                  
                @endif
            </div>
        </div>
    </div>

</main>
@endsection