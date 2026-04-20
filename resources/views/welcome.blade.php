<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


        <!-- Fonts -->
        {{-- <script src="../js/silder.js" defer></script> --}}
        @vite('resources/js/silder.js')
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    </head>
    <body class="antialiased font-sans">
       <div style="width:100%;display:flex;height: 100vh; flex-direction: column; background-color: snow">
             <header style="width:100%;marging:10px auto; justify-content: space-between; background-color:rgb(230, 221, 221);display:flex;gap:20px;border-bottom:1px solid rgb(201, 197, 197);background-attachment: fixed;">
                        <div style="padding:5px 20px;justify-content: center;gap:10px">
                            <h1 style="padding:5px 20px;">Logo</h1>
                        </div>
                            @if (Route::has('login'))
        <livewire:welcome.navigation />
 @endif
 </header>
 <div class="mt-21">
    <livewire:hero/>
    <livewire:feture/>
    {{-- @livewire('feture') --}}
 </div>
       </div>
    </body>
</html>
