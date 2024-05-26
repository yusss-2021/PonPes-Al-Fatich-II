<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    @if (isset($title))
        <title> {{ $title }} - {{ config('app.name', 'Laravel') }}</title>
    @else
        <title> {{ config('app.name', 'Laravel') }}</title>
    @endif

    <meta name="description" content="{{ $description ?? '' }}">
    <meta name="keywords" content="{{ $keywords ?? '' }}">
    <meta name="author" content="{{ $author ?? '' }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.2-web/css/all.min.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>

<body>
    @include('admin::layouts.navbar')
    <div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900">

        @include('admin::layouts.sidebar')

        <div id="main-content" class="relative w-full h-screen overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900">
            <main class="bg-gray-50 dark:bg-gray-900">
                @yield('content')
            </main>

            <p class="my-10 text-sm text-center text-gray-500">
                &copy; 2023-{{ date('Y') }} <a href="#" class="hover:underline" target="_blank">Al Fatich
                    II</a>. All rights
                reserved.
            </p>

        </div>

    </div>


    <script>
        const sidebar = document.getElementById('sidebar');

        if (sidebar) {
            const toggleSidebarMobile = (sidebar, sidebarBackdrop, toggleSidebarMobileHamburger,
                toggleSidebarMobileClose) => {
                sidebar.classList.toggle('hidden');
                sidebarBackdrop.classList.toggle('hidden');
                toggleSidebarMobileHamburger.classList.toggle('hidden');
                toggleSidebarMobileClose.classList.toggle('hidden');
            }

            const toggleSidebarMobileEl = document.getElementById('toggleSidebarMobile');
            const sidebarBackdrop = document.getElementById('sidebarBackdrop');
            const toggleSidebarMobileHamburger = document.getElementById('toggleSidebarMobileHamburger');
            const toggleSidebarMobileClose = document.getElementById('toggleSidebarMobileClose');
            const toggleSidebarMobileSearch = document.getElementById('toggleSidebarMobileSearch');

            toggleSidebarMobileSearch.addEventListener('click', () => {
                toggleSidebarMobile(sidebar, sidebarBackdrop, toggleSidebarMobileHamburger,
                    toggleSidebarMobileClose);
            });

            toggleSidebarMobileEl.addEventListener('click', () => {
                toggleSidebarMobile(sidebar, sidebarBackdrop, toggleSidebarMobileHamburger,
                    toggleSidebarMobileClose);
            });

            sidebarBackdrop.addEventListener('click', () => {
                toggleSidebarMobile(sidebar, sidebarBackdrop, toggleSidebarMobileHamburger,
                    toggleSidebarMobileClose);
            });
        }

        const themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        const themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

        // Change the icons inside the button based on previous settings
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            themeToggleLightIcon.classList.remove('hidden');
        } else {
            themeToggleDarkIcon.classList.remove('hidden');
        }

        const themeToggleBtn = document.getElementById('theme-toggle');

        let event = new Event('dark-mode');

        themeToggleBtn.addEventListener('click', function() {

            // toggle icons
            themeToggleDarkIcon.classList.toggle('hidden');
            themeToggleLightIcon.classList.toggle('hidden');

            // if set via local storage previously
            if (localStorage.getItem('color-theme')) {
                if (localStorage.getItem('color-theme') === 'light') {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                } else {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                }

                // if NOT set via local storage previously
            } else {
                if (document.documentElement.classList.contains('dark')) {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                } else {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                }
            }

            document.dispatchEvent(event);

        });
    </script>
</body>
