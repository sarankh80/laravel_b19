<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'E-Commerce Store') }}</title>
        <!-- Tailwind CSS -->
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- FontAwesome Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
        
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        fontFamily: {
                            sans: ['Plus Jakarta Sans', 'sans-serif'],
                        },
                        colors: {
                            brand: {
                                50: '#eef2ff',
                                100: '#e0e7ff',
                                500: '#6366f1',
                                600: '#4f46e5',
                                700: '#4338ca',
                                900: '#312e81',
                            }
                        }
                    }
                }
            }
        </script>

        <style>
            /* Custom scrollbars */
            ::-webkit-scrollbar {
                width: 8px;
                height: 8px;
            }
            ::-webkit-scrollbar-track {
                background: #f1f5f9;
            }
            ::-webkit-scrollbar-thumb {
                background: #cbd5e1;
                border-radius: 4px;
            }
            ::-webkit-scrollbar-thumb:hover {
                background: #94a3b8;
            }

            /* Glassmorphism utility */
            .glass {
                background: rgba(255, 255, 255, 0.85);
                backdrop-filter: blur(12px);
                -webkit-backdrop-filter: blur(12px);
            }

            .glass-dark {
                background: rgba(15, 23, 42, 0.85);
                backdrop-filter: blur(12px);
                -webkit-backdrop-filter: blur(12px);
            }

            /* Pulse subtle shadow animation */
            @keyframes float {
                0% { transform: translateY(0px); }
                50% { transform: translateY(-6px); }
                100% { transform: translateY(0px); }
            }

            .float-animation {
                animation: float 4s ease-in-out infinite;
            }

            .toast-enter {
                transform: translateY(100%);
                opacity: 0;
            }
            .toast-enter-active {
                transform: translateY(0);
                opacity: 1;
                transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
            }
        </style>
    </head>
    <body class="font-sans antialiased">
        @include('layouts.header')
        @yield('content')
        @include('layouts.footer')
        @include('layouts.script_js')
    </body>
</html>