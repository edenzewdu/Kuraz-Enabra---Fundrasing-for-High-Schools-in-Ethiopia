@extends('layouts.nav')

@section('title', 'Home')

@section('content')
<!-- Main Section -->
<div class="container text-center my-5">
    <h1 class="display-4 text-primary">Kuraz Enabra</h1>
    <p class="lead text-secondary">Shining for someone else, like a lamp</p>
    <img src="{{ asset('image/Kindergarden-Kids-768x496.jpg') }}" alt="Fundraising for Schools" class="img-fluid rounded shadow-lg">
    <a href="#about" class="btn btn-success btn-lg mt-4">Learn More</a>
</div>

<!-- Testimonials Section -->
<div class="testimonials bg-light py-5">
    <div class="container">
        <h2 class="text-center mb-4 text-info">What People Say About Us</h2>
        <div class="row">
            <div class="col-md-4">
                <blockquote class="blockquote text-center border p-4 rounded shadow-sm bg-white">
                    <p class="mb-0">Kuraz Enabra changed our school's future for the better!</p>
                    <footer class="blockquote-footer">Teacher <cite title="Source Title">Addis High School</cite></footer>
                </blockquote>
            </div>
            <div class="col-md-4">
                <blockquote class="blockquote text-center border p-4 rounded shadow-sm bg-white">
                    <p class="mb-0">The best initiative to help high school students.</p>
                    <footer class="blockquote-footer">Principal <cite title="Source Title">Dessie Secondary School</cite></footer>
                </blockquote>
            </div>
            <div class="col-md-4">
                <blockquote class="blockquote text-center border p-4 rounded shadow-sm bg-white">
                    <p class="mb-0">My education was supported by this amazing project.</p>
                    <footer class="blockquote-footer">Student <cite title="Source Title">Gonder High School</cite></footer>
                </blockquote>
            </div>
        </div>
    </div>
</div>

<!-- About Section -->
<div id="about" class="about py-5 bg-secondary text-white">
    <div class="container">
        <h2 class="text-center">About Kuraz Enabra</h2>
        <p class="lead text-center">Our mission is to empower high school students across Ethiopia by raising funds for educational resources, facilities, and scholarships.</p>
        <p class="text-center">We believe that every student deserves a bright future, and we are here to help them shine.</p>
    </div>
</div>

<!-- Footer -->
<footer class="bg-dark text-white py-4">
    <div class="container text-center">
        <p>&copy; 2024 Kuraz Enabra | Empowering Ethiopia's Youth</p>
    </div>
</footer>
@endsection
