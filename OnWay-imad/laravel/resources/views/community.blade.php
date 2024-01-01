<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Community</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net"/>
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


                @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="antialiased">



        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <!-- resources/views/chat/index.blade.php -->
            <div>

                <div>
                <!--
                    <form method="POST" action="/community">
                        @csrf
                        <input type="text" name="message" id="message" />
                        <input type="submit" value="submit" />
                    </form>-->
                    <textarea name="message" id="message" cols="30" rows="5">Hi</textarea>
                    <button onclick={SendMessage()}>Send</button>

                </div>
                <p id="cnv"></p>


            </div>
    </div>
    


    <script>
        function SendMessage() {
            var msg = document.getElementById('message').value;
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "/community", true);
            xhr.setRequestHeader('Content-Type', 'application/json');

            // Send the AJAX request
        xhr.send(JSON.stringify({ _token: '{{ csrf_token() }}', message: msg }));
        }
    </script>



<script>


    var pusher = new Pusher('fb30634078f0a2d84d5e', {

        cluster: 'eu',
    });


        const channel = pusher.subscribe('message')

        channel.bind('community', function(data) {

        document.getElementById('cnv').innerHTML += `${data.message}</br>`
    })

</script>





    </body>
</html>
