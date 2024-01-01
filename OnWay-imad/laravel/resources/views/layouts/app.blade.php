<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    @yield('links')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <header>
        <nav class="switch">
            <div class="logo">
                <img src="{{asset("onway/logo.png")}}" alt="">
            </div>
            <div class="links">
                <div class="link"><a href="/offers" >Jobs</a></div>
                <div class="link"><a href="{{route('communitypost.index')}}">Community</a></div>
                <div class="link"><a href="/career">Career Advice</a></div>
                <div class="link">

                </div>
            </div>
            <div class="less-links">
                <button class="btn btn-outline-success" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><i class="bi bi-list"></i></button>
            </div>
            <div class="join  user">
                @auth
                    <a href="#"><i class="bi bi-bell-fill"></i></a>
                    <a href="#"><i class="bi bi-bookmark-fill"></i></a>

                    <div class="dropdown user">
                        <a class="join-us"  data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ route('file.picture', ['filename' =>Auth::user()->picture])}}" class="user-picture"  alt="">
                        </a>
                        <ul class="dropdown-menu">
                            <li><h6 class="dropdown-header ">OnWay</h6></li>
                            <li><a class="dropdown-item " href="{{route('users.show',['user'=>Auth::id()])}}">Profile</a></li>
                            <li><a class="dropdown-item " href="{{route('app.logout')}}">Log out</a></li>
                            <li><a href="#" >
                                <button class="btn btn-success m-2" id="modeToggle"></button>
                                </a>
                            </li>
                        </ul>
                    </div>
                @else
                    <div class="dropdown">
                        <a class="join-us"  data-bs-toggle="dropdown" aria-expanded="false">
                            Join Us
                        </a>
                        <ul class="dropdown-menu">
                            <li><h6 class="dropdown-header">Recruiter</h6></li>
                            <li><a class="dropdown-item" href="{{route('recruiters.create')}}">Create Recruiter Account</a></li>
                            <li><h6 class="dropdown-header">Job Seeker</h6></li>
                            <li><a class="dropdown-item" href="{{route('jobseekers.create')}}">Create Job Seeker Account</a></li>
                            <li><h6 class="dropdown-header">OnWay</h6></li>
                            <li><a class="dropdown-item" href="{{route('login')}}">Log in</a></li>
                            <li><a href="#">
                                <button class="btn btn-success m-2" id="modeToggle"></button>
                                </a>
                            </li>
                        </ul>
                    </div>
                @endauth
            </div>
        </nav>
    </header>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="{{asset('js/app.js')}}"></script>


    
    <div class="bg-light mt-5">
        <div class="container" bis_skin_checked="1">
             @include('layouts.footer')
          </div>
        </div>
<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">OnWay </h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="link-l text-center">
        <a href="#"><div class="link">Jobs</div></a>
        <a href="#"><div class="link">Community</div></a>
        <a href="#"><div class="link">Career Advice</div></a>
    </div>
  </div>
</div>


</body>
</html>
