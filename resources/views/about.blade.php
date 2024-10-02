@extends('layouts.nav')

@section('title', 'About Us')

@section('content')
<!-- About Us Section -->
<div class="container text-center" style="margin-top: 50px;">
    <h1 style="font-size: 3rem; color: #2c3e50;">About Kuraz Enabra developer team</h1>
    <p style="font-size: 1.2rem; color: #7f8c8d; max-width: 600px; margin: 0 auto;">We are committed to empowering high school students across Ethiopia by providing access to better educational resources and opportunities.</p>
</div>

<!-- Developers Section -->
<div class="container" style="margin-top: 50px; display: flex; justify-content: space-around; align-items: center;">
    <!-- Developer 1 -->
    <div class="developer" style="text-align: center; width: 40%;">
        <img src="{{ asset('image/developer1.jpg') }}" alt="Developer 1" style="width: 200px; height: 200px; border-radius: 50%; object-fit: cover; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
        <h3 style="margin-top: 20px; color: #2ecc71;">Eden Zewdu</h3>
        <p style="color: #7f8c8d;">Lead Developer</p>
        <p style="color: #34495e; max-width: 300px; margin: 0 auto;">Passionate about solving real-world problems through innovative web solutions. Eden brings expertise in software maintenance and digital finance systems.</p>
    </div>

    <!-- Developer 2 -->
    <div class="developer" style="text-align: center; width: 40%;">
        <img src="{{ asset('image/developer2.jpg') }}" alt="Developer 2" style="width: 200px; height: 200px; border-radius: 50%; object-fit: cover; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
        <h3 style="margin-top: 20px; color: #3498db;">Bezawit sebsibe</h3>
        <p style="color: #7f8c8d;">Backend Developer</p>
        <p style="color: #34495e; max-width: 300px; margin: 0 auto;">With a focus on secure and scalable systems, John ensures the backend of Kuraz Enabra is smooth, fast, and reliable for all users.</p>
    </div>
</div>

<!-- Footer -->
<footer class="bg-dark text-white py-4" style="margin-top: 50px;">
    <div class="container text-center">
        <p>&copy; 2024 Kuraz Enabra | Empowering Ethiopia's Youth</p>
    </div>
</footer>
@endsection
