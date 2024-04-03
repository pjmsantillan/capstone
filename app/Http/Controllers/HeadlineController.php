<?php

namespace App\Http\Controllers;
use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class HeadlineController extends Controller
{
    public function index()
    {
        $apiKey = 'd1a564a0eadd46a580b976b85286a530';
    
        // Fetch latest news
        $latestNewsUrl = "https://newsapi.org/v2/everything?q=latest%20news&sortBy=publishedAt&apiKey=$apiKey";
        $latestNewsResponse = Http::get($latestNewsUrl);
    
        // Fetch sports news
        $sportsNewsUrl = "https://newsapi.org/v2/everything?q=sports&sortBy=publishedAt&apiKey=$apiKey";
        $sportsNewsResponse = Http::get($sportsNewsUrl);

        //Fetch technologies news
        $techNewsUrl = "https://newsapi.org/v2/everything?q=technologies&sortBy=publishedAt&apiKey=$apiKey";
        $techNewsResponse = Http::get($techNewsUrl);

        //Fetch Entertainment 
        $entertainmentNewsUrl = "https://newsapi.org/v2/everything?q=entertainment&sortBy=publishedAt&apiKey=$apiKey";
        $entertainmentNewsResponse = Http::get($entertainmentNewsUrl);

         //Fetch health
         $healthNewsUrl = "https://newsapi.org/v2/everything?q=health&sortBy=publishedAt&apiKey=$apiKey";
         $healthNewsResponse = Http::get($healthNewsUrl);
    
        $latestNews = [];
        $sportsNews = [];
        $techNews = [];
        $entertainmentNews = [];
        $healthNews =  [];
    
        if ($latestNewsResponse->successful()) {
            $latestNews = $latestNewsResponse->json()['articles'];
        }
    
        if ($sportsNewsResponse->successful()) {
            $sportsNews = $sportsNewsResponse->json()['articles'];
        }

        if ($techNewsResponse->successful()) {
            $techNews = $techNewsResponse->json()['articles'];
        }

        if ($entertainmentNewsResponse->successful()) {
            $entertainmentNews = $entertainmentNewsResponse->json()['articles'];
        }

        if ($healthNewsResponse->successful()) {
            $healthNews = $healthNewsResponse->json()['articles'];
        }
    
        return view('components.latestnews', compact('latestNews', 'sportsNews','techNews','entertainmentNews','healthNews'));
    }
    public function store(){
        return view('layouts.landingpage');
    }
}
