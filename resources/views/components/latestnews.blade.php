<!-- resources/views/lastestNews.blade.php -->
@extends('layouts.app')
@section('content')

<style>
    /* Custom CSS to ensure visibility of carousel control buttons */
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
<h1 class="text-left mb-4">Latest News</h1>
@if(count($latestNews ?? []) > 0)
    <div id="latestNewsCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach($latestNews as $key => $article)
                <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                    <div class="container">
                        <div class="row justify-content-center">
                            @for($i = $key; $i < min($key + 3, count($latestNews)); $i++)
                                <div class="col-lg-4 mb-4">
                                    <div class="card mb-4" style="width: 100%; height: 100%;">
                                        <img src="{{ $latestNews[$i]['urlToImage'] ?? '' }}" class="card-img-top" alt="News Image" style="height: 200px; object-fit: cover;">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $latestNews[$i]['title'] }}</h5>
                                            <p class="card-text">{{ $latestNews[$i]['description'] }}</p>
                                            <a href="{{ $latestNews[$i]['url'] }}"  target="_blank">Read more...</a>
                                            <button class="add-favorite" data-title="{{ $latestNews[$i]['title']}}"
                                            data-description=" $latestNews[$i]['description']"data-url="{{ $latestNews[$i]['url']}} ">Add favorite</button>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#latestNewsCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#latestNewsCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
@else
    <p>No latest news articles available at the moment.</p>
@endif
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var addFavoriteButtons = document.querySelectorAll('.add-favorite');

        addFavoriteButtons.forEach(function (button) {
            button.addEventListener('click', function () {
                var articleTitle = button.parentElement.querySelector('.card-title').innerText;
                var articleDescription = button.parentElement.querySelector('.card-text').innerText;
                var articleUrl = button.getAttribute('data-url');
                // Perform further actions with the captured URL
                console.log('Favorite Title: ' + articleTitle+'Favorite Decription: ' + articleDescription+ articleUrl);
                // You can send this URL to your backend for further processing, e.g., storing it in the user's favorites list
                fetch('/favorite', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        url: articleUrl
                    })
                })
            });
        });
    });
</script>

<h1 class="text-left mb-4">Sport News</h1>
@if(count($sportsNews ?? []) > 0)
    <div id="sportNewsCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach($sportsNews as $key => $article)
                <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                    <div class="container">
                        <div class="row justify-content-center">
                            @for($i = $key; $i < min($key + 3, count($sportsNews)); $i++)
                                <div class="col-lg-4 mb-4">
                                    <div class="card mb-4" style="width: 100%; height: 100%;">
                                        <img src="{{ $sportsNews[$i]['urlToImage'] ?? '' }}" class="card-img-top" alt="News Image" style="height: 200px; object-fit: cover;">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $sportsNews[$i]['title'] }}</h5>
                                            <p class="card-text">{{ $sportsNews[$i]['description'] }}</p>
                                            <a href="{{ $sportsNews[$i]['url'] }}"  target="_blank">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#sportNewsCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#sportNewsCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
@else
    <p>No sport news articles available at the moment.</p>
@endif


<h1 class="text-left mb-4">Tech News</h1>
@if(count($techNews ?? []) > 0)
    <div id="techNewsCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach($techNews as $key => $article)
                <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                    <div class="container">
                        <div class="row justify-content-center">
                            @for($i = $key; $i < min($key + 3, count($techNews)); $i++)
                                <div class="col-lg-4 md-4">
                                    <div class="card mb-4" style="width: 100%; height: 100%;">
                                        <img src="{{ $techNews[$i]['urlToImage'] ?? '' }}" class="card-img-top" alt="News Image" style="height: 200px; object-fit: cover;">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $techNews[$i]['title'] }}</h5>
                                            <p class="card-text">{{ $techNews[$i]['description'] }}</p>
                                            <a href="{{ $techNews[$i]['url'] }}" target="_blank">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#sportNewsCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#sportNewsCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
@else
    <p>No sport news articles available at the moment.</p>
@endif

<h1 class="text-left mb-4">Entertainment News</h1>
@if(count($entertainmentNews ?? []) > 0)
    <div id="entertainmentNewsCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach($entertainmentNews as $key => $article)
                <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                    <div class="container">
                        <div class="row justify-content-center">
                            @for($i = $key; $i < min($key + 3, count($entertainmentNews)); $i++)
                                <div class="col-lg-4 mb-4">
                                    <div class="card mb-4" style="width: 100%; height: 100%;">
                                        <img src="{{ $entertainmentNews[$i]['urlToImage'] ?? '' }}" class="card-img-top" alt="News Image" style="height: 200px; object-fit: cover;">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $entertainmentNews[$i]['title'] }}</h5>
                                            <p class="card-text">{{ $entertainmentNews[$i]['description'] }}</p>
                                            <a href="{{ $entertainmentNews[$i]['url'] }}"  target="_blank">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#entertainmentNewsCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#entertainmentNewsCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
@else
    <p>No entertainment news articles available at the moment.</p>
@endif

<h1 class="text-left mb-4">Health News</h1>
@if(count($healthNews ?? []) > 0)
    <div id="healthNewsCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach($healthNews as $key => $article)
                <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                    <div class="container">
                        <div class="row justify-content-center">
                            @for($i = $key; $i < min($key + 3, count($healthNews)); $i++)
                                <div class="col-lg-4 mb-4">
                                    <div class="card mb-4" style="width: 100%; height: 100%;">
                                        <img src="{{ $healthNews[$i]['urlToImage'] ?? '' }}" class="card-img-top" alt="News Image" style="height: 200px; object-fit: cover;">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $healthNews[$i]['title'] }}</h5>
                                            <p class="card-text">{{ $healthNews[$i]['description'] }}</p>
                                            <a href="{{ $healthNews[$i]['url'] }}"  target="_blank">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#healthNewsCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#healthNewsCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
@else
    <p>No health news articles available at the moment.</p>
@endif


    

@endsection
