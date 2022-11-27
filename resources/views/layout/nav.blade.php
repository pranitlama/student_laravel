<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/js/app.js'])
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('dashboard')}}">App</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class=" d-flex align-items-center justify-content-center">
          @auth
          <a class="nav-link active" aria-current="page" href="{{route('dashboard')}}">Home</a>
          <a class="nav-link active" aria-current="page" href="{{route('add')}}">Add</a>
         
       
          @endauth
        </li>
          </ul>
          <li class="nav-item d-flex align-items-right justify-content-right">
          @guest
          <a class="nav-link active" aria-current="page" href="{{route('login')}}">Login</a>
          @endguest
          @auth
          <form action="{{route('logout')}}">

        <button type="submit" class="btn btn-secondary">Log Out</button>
    </form>
    @endauth
        </li>

    </div>
  </div>
</nav>
@yield('content')
</body>
</html>