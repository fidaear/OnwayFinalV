<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('styles/emp.css')}}">
    <title>Career Advice</title>


    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>

    <div class="spa">
        <header>
            <nav>
                <ul>
                    <li>
                        <x-nav-link class="h-0"  :href="route('home')" :active="request()->routeIs('/')"><img width="150px" src={{asset('/assets/images/logo.png')}} alt="logo"/></x-nav-link>
                    </li>
                    <li>
                        <x-nav-link :href="route('home')" :active="request()->routeIs('/')">Jobs</x-nav-link>
                    </li>
                    <li>
                        <x-nav-link :href="route('home')" :active="request()->routeIs('/')">Community</x-nav-link>
                    </li>
                    <li>
                        <x-nav-link :href="route('career')" :active="request()->routeIs('career')">Career Advice</x-nav-link>
                    </li>
                    <li>
                    @auth
                    <div>
                        <a href="#"><i></i>o</a>
                        <a href="#"><i></i>l</a>
                        <a href="#"><i></i>j</a>
                    </div>
                    @else
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                            </svg>
                        Join us</a>
                    @endauth
                    </li>
                </ul>
            </nav>
        </header>




        <section class="herolayer w-full">

                <div class="hero grid grid-cols-2 gap-4">
                    <div class="textsection col-start-1 w-full col-end-4 pt-28 pl-10 ">
                        <h1 class="text-3xl md:text-6xl lg:text-8xl">Welwcome, Name</h1>
                        <p class="text-sm w-96">Lorem ipsuim Lorem ipsuimLorem ipsuim Lorem ipsuim Lorem ipsuim Lorem ipsuim Lorem ipsuim Lorem ipsuim Lorem ipsuim Lorem ipsuim Lorem ipsuim Lorem ipsuim </p>
                        <button>Explore</button>
                    </div>
                    <div class="h-0 md:shrink-0  col-start-4 col-end-9 ">
                        <img class="pr-0 md:pr-32 " src="{{asset('/assets/images/exp.png')}}" alt="img" />
                        <small class="hidden md:block ">Some Design</small>
                    </div>
                </div>

        </section>

        <div class="logodiv flex justify-between flex-wrap mx-auto">
            <img  width="150px" src={{asset('/assets/images/logo.png')}} alt="logo"/>
            <img  width="150px" src={{asset('/assets/images/logo.png')}} alt="logo"/>
            <img  width="150px" src={{asset('/assets/images/logo.png')}} alt="logo"/>
            <img  width="150px" src={{asset('/assets/images/logo.png')}} alt="logo"/>
            <img  width="150px" src={{asset('/assets/images/logo.png')}} alt="logo"/>
        </div>




        <h1 class="headereview text-4xl md:text-6xl lg:text-7xl mb-5">Make an Offer</h1>

            <!--
            <div style="position: relative;display:flex;justify-content:center">
                <div style="position: absolute;top:0;width: 32px; height: 32px; background: #389B9B; border-radius: 9999px"></div>
                <div style="width: 312.08px; height: 0px; border: 4px #389B9B solid"></div>
            </div>
        -->



        <section class="offer">
            <div class="flex pl-5 md:pl-0 justify-start md:justify-evenly">

                <div class="textoffer w-screen md:w-3/5 flex flex-col items-center justify-center w-100 ">
                    <div>
                    <form method="POST" action="">
                        <label for="title">Title: </label></br>
                        <input type="text" name="title" id="title" /></br></br>
                        <label for="desc">Description: </label></br>
                        <textarea name="desc" id="desc" cols="30" rows="4"></textarea></br></br>
                        <label for="location">Location: </label></br>
                        <input type="text" name="location" id="location" /></br></br>
                        <label for="skills">Skills: </label></br>
                        <input type="text" name="skills" id="skills"></br></br>
                        <input type="submit" value="submit">
                    </form>
                    </div>
                </div>

                <div class="imgoffer ">
                    <img class="hidden md:block" src="{{asset('/assets/images/image-hero-section.png')}}" alt="img" width="300px" height="300px">
                </div>
            </div>
            <img class="layeofferR" src="{{asset('/assets/patterns/review-pattern.png')}}" alt="img"/>
            <img class="layeofferL" src="{{asset('/assets/patterns/review-pattern.png')}}" alt="img"/>

        </section>



        <footer>

        </footer>













    </div>






</body>
</html>
