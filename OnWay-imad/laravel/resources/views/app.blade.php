<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script>


        </script>
        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>
        <form action="">
            <input dir="rtl" type="text" name="keyboard" id="keyboard" />
            <input type="submit" value="submit" />
        </form>
        <div class="text-blue text-lg bg-red-300">
            {{ $slot }}
        </div>

<!--class="w-16 py-2 my-2 mx-2 rounded bg-slate-800 border-b border-b-sky-700 text-white cursor-pointer hover:bg-slate-800 transition ease-in-out"-->
    </body>
</html>
