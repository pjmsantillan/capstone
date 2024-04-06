<!-- resources/views/lastestNews.blade.php -->
@extends('layouts.app')
@section('content')
<style>
.carousel-control-prev,
    .carousel-control-next {
        display: block; /* Ensure the buttons are displayed */
        width: 35px; /* Set width */
        height: 35px; /* Set height */
        border-radius: 50%; /* Make it a circle */
        background-color: rgba(0%, 0%, 100%, 0.75); /* Background color */
        color: white; /* Text color */
        position: absolute; /* Positioning */
        top: 50%; /* Position the buttons vertically */
        transform: translateY(-50%); /* Center the buttons vertically */
        opacity: 1; /* Ensure buttons are fully visible */
        display: flex; /* Center content horizontally and vertically */
        justify-content: center; /* Center content horizontally */
        align-items: center; /* Center content vertically */
        text-decoration: none; /* Remove underline */
        cursor: pointer; /* Change cursor to pointer */
    }
</style>
@if(count($favorites ?? []) > 0)
<div id="news" class="carousel slide" data-ride="carousel" >
    <div class="carousel-inner pt-4 ">
        @foreach ($favorites as $key => $favorite)
            <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 mb-4">
                            <div class="card mb-4" style="width: 100%; height: 100%;">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $favorite->title }}</h5>
                                    <p class="card-text">{{ $favorite->description }}</p>
                                    <a href="{{ $favorite->url_link }}" target="_blank">Read more...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#news" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#news" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
@else
    <p>No entertainment news articles available at the moment.</p>
@endif


@endsection


