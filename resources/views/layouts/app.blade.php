<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/x-icon" href="{{asset('assets/favicon.png')}}">
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
</head>
<body>
<!-- nav -->
<section id="nav" class="border-b border-gray-50">
    <nav class="relative container mx-auto p-5">
        <!-- flex container for parent items -->
        <div class="flex">
            <!-- logo -->
            <div class="w-20">
                <a href="{{ url('/') }}">
                    <img src="{{asset('assets/logo.png')}}" alt="">
                </a>
            </div>
            <!-- links & search-->
            <div class="flex md:justify-center w-full flex-col space-y-2">
                <!-- links -->
                <div class="hidden space-x-8 items-center justify-end font-bold md:flex">
                    <a class="text-gray-500 hover:text-gray-800" href="about.html">About Us</a>
                    <a class="text-gray-500 hover:text-gray-800" href="courses.html">Courses</a>
                    <a class="text-gray-500 hover:text-gray-800" href="contact.html">Contact Us</a>
                    <a class="text-gray-500 hover:text-gray-800" href="career.html">Career</a>
                    <a class="text-gray-500 hover:text-gray-800" href="{{ route('login') }}">Login</a>
                    <a class="text-gray-500 hover:text-gray-800" href="{{ route('register') }}">Enrol</a>
                    <a href="cart.html" class="px-4 py-1 text-white bg-red-500 rounded-full hover:opacity-80">
                        <svg width="20px" height="20px" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" fill="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M0 0h48v48H0z" fill="none"></path> <g id="Shopicon"> <path d="M4,40c0,2.2,1.8,4,4,4h32c2.2,0,4-1.8,4-4l0-26h-8.18C34.863,8.334,29.934,4,24,4S13.137,8.334,12.181,14H4L4,40z M24,8 c3.719,0,6.845,2.555,7.737,6H16.263C17.155,10.555,20.281,8,24,8z"></path> </g> </g></svg>
                    </a>
                </div>
                <!-- search tool -->
                <div class="mx-auto">
                    <form class="flex mt-4 md:mt-0 items-center text-sm space-x-2 group relative">
                        <svg width="20" height="20" fill="currentColor" class="absolute left-3 top-1/2 -mt-2.5 text-slate-400 pointer-events-none group-focus-within:text-red-500" aria-hidden="true">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" />
                        </svg>
                        <input class="focus:ring-2 focus:ring-red-500 h-6 md:h-8 w-full focus:outline-none appearance-none text-sm leading-6 text-slate-900 placeholder-slate-400 rounded-md py-2 pl-10 ring-1 ring-slate-200 shadow-sm" type="text" aria-label="Filter projects" placeholder="Search courses...">
                        
                        <input name="search" type="radio">
                        <label for="">course</label>

                        <input name="search" type="radio">
                        <label for="">Keywords</label>
                        <button href="#" class="px-3 py-1 text-white bg-red-500 rounded-tr-md rounded-br-md hover:opacity-80">Search</button>
                    </form>
                </div>
            
            </div>
            <!-- humburger menu -->
            <div class="lg:hidden">
                <button id="menu-btn" type="button" class="z-40 block hamburger md:hidden focus:outline-none">
                    <span class="hamburger-top"></span>
                    <span class="hamburger-middle"></span>
                    <span class="hamburger-bottom"></span>
                </button>
            </div>
        </div>
    <!--    mobile menu to be here-->
    <div id="menu" class="absolute top-0 bottom-0 left-0 flex-col self-end hidden w-full min-h-screen py-1 pt-40 pl-12 space-y-3 text-sm text-white uppercase bg-slate-300">
        <a href="about.html" class="hover:text-red-500">About</a>
        <a href="courses.html" class="hover:text-red-500">Courses</a>
        <a href="contact.html" class="hover:text-red-500">Contact Us</a>
        <a href="career.html" class="hover:text-red-500">Career</a>
        <a href="login.html" class="hover:text-red-500">Login</a>
        <a href="enrol.html" class="hover:text-red-500">Enrol</a>
        <a href="cart.html" class="hover:text-red-500">Cart</a>
    </div>
    </nav>
</section>

<!-- nav end -->

{{-- yeild start --}}
<main>
    @yield('content')
</main>
{{-- yeild end --}}

<!--footer-->

<footer class="bg-slate-600">
    <!--    container-->
        <div class="container py-10 mx-auto md:p-3">
    <!--       footer flex container -->
            <div class="flex flex-col items-center mb-8 space-y-6 md:flex-row md:space-y-0 md:justify-between md:items-end">
    <!--            menu and logo container-->
                <div class="flex flex-col items-center space-y-8 md:items-start md:space-y-4">
    <!--                logo-->
                    <div class="w-16 h-16">
                        <img src="assets/logo.png" alt="" class="w-full md:ml-3">
                    </div>
    <!--                menu container-->
                    <div class="flex flex-col items-center space-y-4 font-bold text-white md:flex-row md:space-y-0 md:space-x-6 md:ml-3">
    <!--                    item 1-->
                        <div class="h-10 group">
                            <a href="#">About</a>
                            <div class="mx-2 group-hover:border-b group-hover:border-red-500"></div>
                        </div>
    
                        <!--                    item 2-->
                        <div class="h-10 group">
                            <a href="#">Career</a>
                            <div class="mx-2 group-hover:border-b group-hover:border-red-500"></div>
                        </div>
    
                        <!--                    item 3-->
                        <div class="h-10 group">
                            <a href="#">Events</a>
                            <div class="mx-2 group-hover:border-b group-hover:border-red-500"></div>
                        </div>
                        <!--                    item 4-->
                        <div class="h-10 group">
                            <a href="#">Support</a>
                            <div class="mx-2 group-hover:border-b group-hover:border-red-500"></div>
                        </div>
                        <!--                    item 5-->
                        <div class="h-10 group">
                            <a href="#">Product</a>
                            <div class="mx-2 group-hover:border-b group-hover:border-red-500"></div>
                        </div>
                    </div>
                </div>
    <!--            social media and copy right container-->
                <div class="flex flex-col items-start justify-between space-y-4 text-gray-500">
    <!--                icons container-->
                    <div class="flex flex-col mx-auto md:mx-0">
                        <div>
                            <span>Phone:</span><span> +234(0)8167645936</span>
                        </div>
                        <div>
                            <span>Email:</span><span> info@geoconnectonline.com</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-center mx-auto md:mx-0 space-x-4 md:justify-end">
    <!--                    icon 1-->
                        <div class="h-8 group">
                            <a href="#"><img src="assets/fb.png" alt="" class="h-6"></a>
                        </div>
                        <!--                    icon 2-->
                        <div class="h-8 group">
                            <a href="#"><img src="assets/twitter.png" alt="" class="h-6"></a>
                        </div>
                        <!--                    icon 3-->
                        <div class="h-8 group">
                            <a href="#"> <img src="assets/instagram.png" alt="" class="h-6"></a>
                        </div>
                        <!--                    icon 4-->
                        <div class="h-8 group">
                            <a href="#"> <img src="assets/inn.png" alt="" class="h-6"></a>
                        </div>
                    </div>
    <!--                copy right -->
                    <div class="font-bold">
                        &copy; 2022 GEOCONNECT ICT LIMITED
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>




