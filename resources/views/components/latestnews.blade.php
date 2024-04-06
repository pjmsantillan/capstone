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
    button{
        appearance: button;
    background-color:  #002C70;
    background-image: none;
    border: 1px solid #000;
    border-radius: 4px;
    box-shadow: #fff 4px 4px 0 0,#000 4px 4px 0 1px;
    box-sizing: border-box;
    color: #fff;
    cursor: pointer;
    display: inline-block;
    font-family: ITCAvantGardeStd-Bk,Arial,sans-serif;
    font-size: 14px;
    font-weight: 400;
    line-height: 20px;
    margin: 0 5px 10px 0;
    overflow: visible;
    padding: 12px 40px;
    text-align: center;
    text-transform: none;
    touch-action: manipulation;
    user-select: none;
    -webkit-user-select: none;
    vertical-align: middle;
    white-space: nowrap;
    }

    .button-50:focus {
    text-decoration: none;
    }

    .button-50:hover {
    text-decoration: none;
    }

    .button-50:active {
    box-shadow: rgba(0, 0, 0, .125) 0 3px 5px inset;
    outline: 0;
    }

    .button-50:not([disabled]):active {
    box-shadow: #fff 2px 2px 0 0, #000 2px 2px 0 1px;
    transform: translate(2px, 2px);
    }

    @media (min-width: 768px) {
    .button-50 {
        padding: 12px 50px;
    }
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
                                            <footer class="footer" style="padding-top: 10px;">
                                            <button class="add-favorite" data-title="{{ $latestNews[$i]['title']}}"
                                            data-description=" {{$latestNews[$i]['description']}}"data-url="{{ $latestNews[$i]['url']}}">Add favorite</button>  
                                            </footer>
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
                                            <a href="{{ $sportsNews[$i]['url'] }}"  target="_blank">Read more...</a>
                                            <footer class="footer" style="padding-top: 10px;">
                                            <button class="add-favorite" data-title="{{ $sportsNews[$i]['title']}}"
                                            data-description=" {{$sportsNews[$i]['description']}}"data-url="{{ $sportsNews[$i]['url']}} ">Add favorite</button>
                                            </footer>
                                            
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
                                            <a href="{{ $techNews[$i]['url'] }}"  target="_blank">Read more...</a>
                                            <footer class="footer" style="padding-top: 10px;">
                                            <button class="add-favorite" data-title="{{ $techNews[$i]['title']}}"
                                            data-description=" {{$techNews[$i]['description']}}"data-url="{{ $techNews[$i]['url']}} ">Add favorite</button>
                                            </footer>
                                            
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
                                            <a href="{{ $entertainmentNews[$i]['url'] }}"  target="_blank">Read more...</a>
                                            <footer class="footer" style="padding-top: 10px;">
                                            <button class="add-favorite" data-title="{{ $entertainmentNews[$i]['title']}}"
                                            data-description=" {{$entertainmentNews[$i]['description']}}"data-url="{{ $entertainmentNews[$i]['url']}} ">Add favorite</button>
                                            </footer>
                                           
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
                                            <a href="{{ $healthNews[$i]['url'] }}"  target="_blank">Read more...</a>
                                            <footer class="footer" style="padding-top: 10px;">
                                            <button class="add-favorite" data-title="{{ $healthNews[$i]['title']}}"
                                            data-description="{{$healthNews[$i]['description']}}"data-url="{{ $healthNews[$i]['url']}} ">Add favorite</button>
                                            </footer>
                                            
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

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var addFavoriteButtons = document.querySelectorAll('.add-favorite');

        addFavoriteButtons.forEach(function (button) {
            button.addEventListener('click', function () {
                var articleTitle = button.getAttribute('data-title');
                var articleDescription = button.getAttribute('data-description');
                var articleUrl = button.getAttribute('data-url');
                console.log("Description: " + articleDescription);

                // Create a new XMLHttpRequest object
                var xhr = new XMLHttpRequest();

                // Configure the request
                xhr.open('POST', "{{ route('favorite.store') }}", true);
                xhr.setRequestHeader('Content-Type', 'application/json');
                
                // Define the request payload
                var data = JSON.stringify({
                    _token: '{{ csrf_token() }}',
                    title: articleTitle,
                    description: articleDescription,
                    url: articleUrl
                });

                // Define callbacks for request completion
                xhr.onload = function () {
                    if (xhr.status >= 200 && xhr.status < 300) {
                        // Request was successful
                        var response = JSON.parse(xhr.responseText);
                        console.log(response.message);
                    } else {
                        // Request failed
                        console.error('Request failed with status: ' + xhr.status);
                    }
                };

                xhr.onerror = function () {
                    // Request failed due to a network error
                    console.error('Request failed due to network error');
                };

                // Send the request
                xhr.send(data);
            });
        });
    });
</script>
<script src="https://kit.fontawesome.com/fda9172bfe.js" crossorigin="anonymous"></script>

@endsection
