<!DOCTYPE html>
<html>

<head>
    <title>InsightHub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>
</head>

<body>
<nav class="navbar navbar-expand-lg  px-5 " style="border-bottom: 2px solid #002C70 !important;">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="#">
      <img src={{URL('img/mylogo.jpg')}} alt="InsightHub Logo" width="150" height="80">
    </a>
    <button class="navbar-toggler btn btn-outline-primary" type="button" data-bs-toggle="collapse" 
    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
    aria-expanded="false" aria-label="Toggle navigation"style="background-color: #002C70;"  >
    <span class="navbar-toggler-icon" style="color: #fff;">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <line x1="3" y1="12" x2="21" y2="12"></line>
          <line x1="3" y1="6" x2="21" y2="6"></line>
          <line x1="3" y1="18" x2="21" y2="18"></line>
        </svg>
    </span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-black" href="{{('login')}}" style="font-size: 20px;">LOGIN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-black" href="{{('register')}}"style="font-size: 20px;">REGISTER</a>
        </li>
      </ul>
    
    </div>
  </div>
</nav>

    <div class="container mt-5">
        @yield('content')
    </div>


  <footer class="py-3 my-4">
    <p class="text-center text-muted">INSIGHTHUB © 2021 Company, Inc</p>
  </footer>
  <!-- Bootstrap JS (jQuery and Popper.js required) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>