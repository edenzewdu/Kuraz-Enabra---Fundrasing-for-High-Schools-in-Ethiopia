@extends('layouts.nav')

@section('title', 'Contact Us')

@section('content')
<!-- Contact Us Section -->
<div class="container text-center" style="margin-top: 50px;">
    <h1 style="font-size: 3rem; color: #2c3e50;">Contact Us</h1>
    <p style="font-size: 1.2rem; color: #7f8c8d; max-width: 600px; margin: 0 auto;">We would love to hear from you! Whether you have questions, feedback, or are looking to get involved, feel free to reach out to us.</p>
</div>

<!-- Contact Information -->
<div class="container" style="margin-top: 50px; display: flex; justify-content: space-around; align-items: center;">
    <div class="contact-info" style="text-align: center; width: 45%;">
        <h3 style="color: #2ecc71;">General Inquiries</h3>
        <p style="color: #7f8c8d;">For questions regarding our project and partnership opportunities, please contact us through the following:</p>
        <p style="color: #34495e;"><strong>Email:</strong> info@kurazenabra.org</p>
        <p style="color: #34495e;"><strong>Phone:</strong> +251-911-123456</p>
    </div>

    <div class="contact-info" style="text-align: center; width: 45%;">
        <h3 style="color: #3498db;">Technical Support</h3>
        <p style="color: #7f8c8d;">For any technical assistance with our platform or support with your donations, reach out to our developers:</p>
        <p style="color: #34495e;"><strong>Email:</strong> support@kurazenabra.org</p>
        <p style="color: #34495e;"><strong>Phone:</strong> +251-911-654321</p>
    </div>
</div>

<!-- Contact Form -->
<div class="container" style="margin-top: 50px; text-align: center;">
    <h2 style="color: #2c3e50;">Send Us a Message</h2>
    <form style="max-width: 600px; margin: 0 auto;">
        <div style="margin-bottom: 15px;">
            <input type="text" name="name" placeholder="Your Name" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
        </div>
        <div style="margin-bottom: 15px;">
            <input type="email" name="email" placeholder="Your Email" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
        </div>
        <div style="margin-bottom: 15px;">
            <textarea name="message" placeholder="Your Message" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; height: 150px;"></textarea>
        </div>
        <button type="submit" style="padding: 10px 20px; background-color: #3498db; color: white; border: none; border-radius: 5px; font-size: 1.2rem;">Submit</button>
    </form>
</div>

<!-- Footer -->
<footer class="bg-dark text-white py-4" style="margin-top: 50px;">
    <div class="container text-center">
        <p>&copy; 2024 Kuraz Enabra | Empowering Ethiopia's Youth</p>
    </div>
</footer>
@endsection
