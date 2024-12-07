@extends('layouts.app')

@section('title', 'Home Page') <!-- Setting the title for this page -->

@section('content')
<div class="row">
        
    <div class="col-md-4 mb-4">
        <div class="card h-100"> <!-- Use h-100 to make the card full height -->
            <div class="ratio ratio-16x9"> <!-- Use ratio for responsive aspect ratio -->
                <img src="{{ asset('images/sign.jpg') }}" class="card-img-top" alt="Movie Title 1">
            </div>
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">Forex News</h5>
                <p class="card-text">A new forex strategy in this week.</p>
                <a href="#" class="btn-getstarted flex-md-shrink-0">View Details</a>
            </div>
        </div>
    </div>


    <div class="col-md-4  mb-4">
        <div class="card h-100"> <!-- Use h-100 to make the card full height -->
            <div class="ratio ratio-16x9"> <!-- Use ratio for responsive aspect ratio -->
                <img src="{{ asset('images/forex.jpg') }}" class="card-img-top" alt="Movie Title 1">
            </div>
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">Recent Strategy</h5>
                <p class="card-text">What we know about new strategy?</p>
                <a href="#" class="btn-getstarted flex-md-shrink-0">View Details</a>
            </div>
        </div>
    </div>


    <div class="col-md-4  mb-4">
        <div class="card h-100"> <!-- Use h-100 to make the card full height -->
            <div class="ratio ratio-16x9"> <!-- Use ratio for responsive aspect ratio -->
                <img src="{{ asset('images/header.png') }}" class="card-img-top" alt="Movie Title 1">
            </div>
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">Forex Chart</h5>
                <p class="card-text">Cahart anaylysis</p>
                <a href="#" class="btn-getstarted flex-md-shrink-0">View Details</a>
            </div>
        </div>
    </div>


    <div class="col-md-4 mb-4">
        <div class="card h-100"> <!-- Use h-100 to make the card full height -->
            <div class="ratio ratio-16x9"> <!-- Use ratio for responsive aspect ratio -->
                <img src="{{ asset('images/home-3.jpeg') }}" class="card-img-top" alt="Movie Title 1">
            </div>
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">Bullish market</h5>
                <p class="card-text">A new strategy in bullish market.</p>
                <a href="#" class="btn-getstarted flex-md-shrink-0">View Details</a>
            </div>
        </div>
    </div>
      
      <div class="col-md-4 mb-4">
        <div class="card h-100"> <!-- Use h-100 to make the card full height -->
            <div class="ratio ratio-16x9"> <!-- Use ratio for responsive aspect ratio -->
                <img src="{{ asset('images/home-2.jpeg') }}" class="card-img-top" alt="Movie Title 1">
            </div>
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">Waht is new This week?</h5>
                <p class="card-text">This week in forex market.</p>
                <a href="#" class="btn-getstarted flex-md-shrink-0">View Details</a>
            </div>
        </div>
    </div>
      
      <div class="col-md-4 mb-4">
        <div class="card h-100"> <!-- Use h-100 to make the card full height -->
            <div class="ratio ratio-16x9"> <!-- Use ratio for responsive aspect ratio -->
                <img src="{{ asset('images/home-1.jpeg') }}" class="card-img-top" alt="Movie Title 1">
            </div>
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">Japanese Candlestick</h5>
                <p class="card-text">All about Japanese Candlestick.</p>
                <a href="#" class="btn-getstarted flex-md-shrink-0">View Details</a>
            </div>
        </div>
    </div>

      
</div>
                
  
    @include('layouts.state')
    @include('layouts.faq') 
@endsection

