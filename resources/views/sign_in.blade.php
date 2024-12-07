@extends('layouts.app')
@section('title' ,'Sign-in')
@section('content')

  <!-- sign in -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Sign In</h2>
        
        
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-6">

             <img src="{{ asset('images/contact.png') }}" class="img-fluid" alt="">

          </div>
          <div class="col-lg-6">
            <form action="{{ route('sign-in') }}" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              @csrf
              <div class="row gy-4">

                <div class="col-md-6 ">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="" autocomplete="off" id="email">
                </div>
                <div class="col-md-6 ">
                  <label for="password">Password:</label>
                  <input type="password" class="form-control" name="password" placeholder="Your Password" required="" autocomplete="off" id="password">
                </div>
               <div class="form-group form-check">
                <label >
                  <input class="form-check-input" type="checkbox" name="remember"> Remember me
                </label>
            </div>
              <h6>Don't you have an account? <a href="{{ route('sign-up') }}">Sign Up</a></h6>

              <button type="submit" class="btn btn-primary">Submit</button>

              </div>
            </form>

          </div><!-- end sign in Form -->

        </div>


      </div>

     


    </section><!-- sign in Section -->

@endsection