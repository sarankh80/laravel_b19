<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <a href="{{url('/')}}"></a>
                <img src="{{asset('/images/ingg')}}" alt="">
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }} <?php echo $header; ?>
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}

                @if($a)
                    <p>The condition is true.   {{$a}}</p>
                @elseif($b)
                    <p>The condition is false.</p>
                @else
                    <p>The condition is neither true nor false.</p>
                @endif
                <?php 
                if ($a){
                    echo '<p>The condition is true.</p>';
                }else if ($b){
                    echo '<p>The condition is false.</p>';
                }else{
                    echo '<p>The condition is neither true nor false.</p>';
                }
                ?>
                {{$a = [1,2,3]}}
                @for($a as $item)
                    <p>{{$item}}</p>
                @endforeach
            </main>
        </div>
    </body>
</html>
