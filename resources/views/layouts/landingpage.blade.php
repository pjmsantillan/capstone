@extends('layouts.header')
@section('content')
<div class="container-fluid">
        <div class="row">
        <div class="col-8">
            <h1>Step into a World of Informed 
            <br>Perspectives and Deep Insight with 
            <br>InsightHub:</h1>
            <h5>Your Premier Destination for Comprehensive News Coverage,<br>
                Expert Analysis, and Engaging Discussions,<br>
                Where Every Click Unveils a New Layer of Understanding.
            </h5>
            <br>
            <div class="button_join" >
              <a href="{{('login')}}">
                <button class="join_free"style="color:white !important;background-color:blue !important;
                border-radius: 5px; padding: 10px 25px 10px 25px!important;">Join For Free!</button>
              </a>
            </div>
        </div>
        <div class="col-4 ">
            <img src={{URL('img/studying.jpg')}} alt="studying">
        </div>
    </div>
@endsection