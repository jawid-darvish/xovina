@extends('layouts.app')

@section('title' ,'Sign-up')
@section('content')

  <!-- sign up -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Sign UP</h2>
        <br />
        <h6>Please sign up to access our services</h6>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

          

        <div class="row gy-4">
          <div class="col-lg-6">

             <img src="{{ asset('images/contact.png') }}" class="img-fluid" alt="">

          </div>
          <div class="col-lg-6">
            <form action="{{ route('sign-up') }}" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              @csrf
              <div class="row gy-4">

                <div class="col-md-6">
                  <label for="first_name">First Name:</label>
                  <input type="text" name="first_name" class="form-control" placeholder="Your First Name" required="" autocomplete="off" id="first_name">
                </div>

                <div class="col-md-6">
                  <label for="last_name">Last Name:</label>
                  <input type="text" name="last_name" class="form-control" placeholder="Your Last Name" required="" autocomplete="off"  id="last_name">
                </div>

                <div class="col-md-12 ">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="" autocomplete="on" id="email">
                </div>

                <div class="col-12">
                  <label for="password">Password:</label>
                  <input type="password" class="form-control" name="password" placeholder="Choose a password" required=""  autocomplete="off" id="password">
                </div>
                 <div class="col-12">
                  <label for="re_password">Re Type Password:</label>
                  <input type="password" class="form-control" name="re_password" placeholder="re-type the password" required=""  autocomplete="off" id="re_password" >
                </div>
                <h6>You have already an account? <a href="{{ route('sign-in') }}">Sign In</a></h6>

                 <button type="submit">Sign Up</button>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- sign up Section -->

@endsection