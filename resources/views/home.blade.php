@extends('layouts.nav')

@section('title', 'Home')

@section('content')
<!-- Main Section -->
<div class="container text-center my-5">
    <h1 class="display-4 text-primary">Kuraz Enabra</h1>
    <p class="lead text-secondary">Shining for someone else, like a lamp</p>
    <img src="{{ asset('image/OIP.jpeg') }}" alt="Fundraising for Schools" class="img-fluid rounded shadow-lg">
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

<!-- How You Can Help Section -->
<div id="help" class="help py-5">
    <div class="container text-center">
        <h2 class="text-primary">How You Can Help</h2>
        <p class="lead text-secondary">Your support can make a huge difference in the lives of many students.</p>
        <div class="row">
            <div class="col-md-4">
                <h4>Donate</h4>
                <p>Contribute financially to provide educational resources and scholarships for students.</p>
                <a href="#" class="btn btn-success">Donate Now</a>
            </div>
            <div class="col-md-4">
                <h4>Volunteer</h4>
                <p>Join us in our mission by volunteering your time and skills to help organize events or mentor students.</p>
                <a href="#" class="btn btn-primary">Get Involved</a>
            </div>
            <div class="col-md-4">
                <h4>Partner</h4>
                <p>We collaborate with businesses and organizations to expand our impact and reach more schools.</p>
                <a href="#" class="btn btn-info">Become a Partner</a>
            </div>
        </div>
    </div>
</div>

<!-- Our Impact Section -->
<div id="impact" class="impact bg-light py-5">
    <div class="container">
        <h2 class="text-center text-success">Our Impact</h2>
        <p class="lead text-center">Together, we’ve made a lasting difference in the lives of students across Ethiopia.</p>
        <div class="row text-center">
            <div class="col-md-4">
                <h3 class="text-primary">10,000+</h3>
                <p>Students supported with educational resources</p>
            </div>
            <div class="col-md-4">
                <h3 class="text-primary">500+</h3>
                <p>Schools benefitted from facility upgrades</p>
            </div>
            <div class="col-md-4">
                <h3 class="text-primary">150+</h3>
                <p>Scholarships awarded to deserving students</p>
            </div>
        </div>
    </div>
</div>

<!-- Partners Section -->
<div id="partners" class="partners py-5 bg-secondary text-white">
    <div class="container">
        <h2 class="text-center">Our Partners</h2>
        <p class="lead text-center">We are grateful for the support of our corporate and community partners.</p>
        <div class="row text-center">
            <div class="col-md-3">
                <img src="{{ asset('image/partner1.png') }}" alt="Partner 1" class="img-fluid mb-3">
            </div>
            <div class="col-md-3">
                <img src="{{ asset('image/partner2.png') }}" alt="Partner 2" class="img-fluid mb-3">
            </div>
            <div class="col-md-3">
                <img src="{{ asset('image/partner3.png') }}" alt="Partner 3" class="img-fluid mb-3">
            </div>
            <div class="col-md-3">
                <img src="{{ asset('image/partner4.png') }}" alt="Partner 4" class="img-fluid mb-3">
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="bg-dark text-white py-4">
    <div class="container text-center">
        <p>&copy; 2024 Kuraz Enabra | Empowering Ethiopia's Youth</p>
    </div>
</footer>
@endsection
