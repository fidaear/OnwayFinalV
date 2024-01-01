@extends('layouts.app')
@section('title','OnWay | Career')
@section('links')
    <link rel="stylesheet" href="{{asset('styles/career.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
@endsection
@section('content')


    <div class="spa">



        <section class="herolayer w-full">
            <div class="m-0 w-2/3 h-0 md:shrink-0 col-start-4 col-end-9 ">
                <img class="md:pr-32  z-10 hidden md:block w-80 md:w-96 lg:w-full " src="{{asset('/assets/images/section_img.png')}}" alt="img" />
            </div>

                <div class="hero md:absolute md:right-0 w-2/4 grid grid-cols-2 gap-4">
                    <div class="textsection mt-10 col-start-1 w-full col-end-4 pt-28 pl-10 ">
                        <h1 class="font-extrabold text-2xl md:text-4xl lg:text-7xl">Career Advice</h1>
                        <p class="text-sm">Lorem ipsuim Lorem ipsuimLorem ipsuim Lorem ipsuim Lorem ipsuim Lorem ipsuim Lorem ipsuim Lorem ipsuim Lorem ipsuim Lorem ipsuim Lorem ipsuim Lorem ipsuim </p>
                        <button class="drop-shadow">Explore</button>
                    </div>
                </div>
            </section>



        <h1 class="headereview text-4xl md:text-6xl lg:text-7xl mb-5">Reviews</h1>

            <!--
            <div style="position: relative;display:flex;justify-content:center">
                <div style="position: absolute;top:0;width: 32px; height: 32px; background: #389B9B; border-radius: 9999px"></div>
                <div style="width: 312.08px; height: 0px; border: 4px #389B9B solid"></div>
            </div>
        -->



        <section class="reviews">
            <div class="flex pl-5 md:pl-0 justify-start md:justify-evenly">

                <div class="textreview w-screen md:w-3/5 flex flex-col items-center justify-center w-100 ">
                    <div>
                        <p>"</p>
                        <p class="w-75">Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.</p>
                        <p>"</p>
                    </div>
                    <div>
                        <!--<img src="{{asset('/assets/backgrounds/background-hero-section.png')}}" alt="img" width="72px" height="72px" />-->
                        <div></div>
                        <p>Youssef Ghannam</p>
                        <small>Web developer</small>
                    </div>
                </div>

                <div class="imgreview ">
                    <img class="hidden md:block" src="{{asset('/assets/images/image-hero-section.png')}}" alt="img" width="300px" height="300px">
                </div>
            </div>
            <img class="layereviewR" src="{{asset('/assets/patterns/review-pattern.png')}}" alt="img"/>
            <img class="layereviewL" src="{{asset('/assets/patterns/review-pattern.png')}}" alt="img"/>

        </section>

        <h1 class="headerexp text-4xl md:text-6xl lg:text-7xl mb-5">Experiences</h1>


        <section class="exp w-full">

                <div class="owl-carousel w-full layerExp">

                    <div class="w-2/4 flex flex-col mx-auto bg-green-100 p-10 rounded-md shadow-sm">
                        <div>
                            <p>"</p>
                            <p class="w-75">Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.</p>
                            <p>"</p>
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <!--<img src="{{asset('/assets/backgrounds/background-hero-section.png')}}" alt="img" width="72px" height="72px" />-->
                            <div class="imgbg"></div>
                            <p>Youssef Ghannam</p>
                            <small>Web developer</small>
                        </div>
                    </div>

                    <div class="w-2/4 flex flex-col mx-auto bg-green-200 p-10 ">

                        <div>
                            <p>"</p>
                            <p class="w-75">Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.</p>
                            <p>"</p>
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <!--<img src="{{asset('/assets/backgrounds/background-hero-section.png')}}" alt="img" width="72px" height="72px" />-->
                            <div class="imgbg"></div>
                            <p>Youssef Ghannam</p>
                            <small>Web developer</small>
                        </div>

                    </div>


                    </div>

        </section>

    </div>


    <script>
        $(document).ready(function(){

  var owl = $('.owl-carousel');
owl.owlCarousel({
    center: true,
    lazyLoad: true,
    items:1,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:4000,
    autoplayHoverPause:true
});

});

    </script>


@endsection
