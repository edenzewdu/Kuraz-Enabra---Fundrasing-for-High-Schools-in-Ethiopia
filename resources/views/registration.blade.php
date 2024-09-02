@extends('layout')
@section('title', 'Registration')
@section('content')

    <div class = 'container'>
        <form action = "{{route('registration.post')}}" method='POST' class = 'ms-auto ne-auto mt-3' style ='width:100px'>
            <div class="mb-3">
              <label class="form-label">Full Name</label>
              <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" name="email">
              </div>
              
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" class="form-control" >
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection