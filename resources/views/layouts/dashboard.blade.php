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
            <div class="w-11">
                <a href="{{ route('dashboard') }}">
                    <img src="../assets/logo.png" alt="">
                </a>
            </div>
            <!-- links & search-->
            <div class="flex md:justify-center w-full flex-col space-y-2">
                <!-- links -->
                <div class="hidden space-x-8 items-center justify-end font-bold md:flex">
                    <!-- <a class="text-gray-500 hover:text-gray-800" href="about.html">About Us</a> -->
                    <!-- <a class="text-gray-500 hover:text-gray-800" href="courses.html">Courses</a> -->
                    <!-- <a class="text-gray-500 hover:text-gray-800" href="contact.html">Contact Us</a> -->
                    <!-- <a class="text-gray-500 hover:text-gray-800" href="career.html">Career</a> -->
                    <!-- <a class="text-gray-500 hover:text-gray-800" href="login.html">Login</a> -->
                    <!-- <a class="text-gray-500 border px-3 rounded-2xl hover:text-gray-800" href="../dashboard/">Switch To User</a> -->
                    <div class="flex flex-row space-x-1 justify-center items-center">
                        <a href="#" class="px-4 py-1 text-white rounded-full">
                            <div class="flex relative flex-row items-center justify-center">
                                <img class="rounded-full w-10 h-10 ring-2 hover:ring-red-500 ring-gray-400" src="../assets/profilepix.jpg" alt="">
                                <span class="text-gray-100 absolute ml-1 hover:opacity-80 top-2 left-9">
                                    <svg width="25px" height="25px" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M17 10.5L12.5 15L8 10.5" stroke="#96989c" stroke-width="1.2"></path> </g></svg>
                                </span>
                            </div>
                        </a>
                        <div class="flex flex-col items-center">
                            <span class="text-slate-500 font-medium capitalize"> {{ Auth::user()->firstname }}  {{ Auth::user()->lastname }}</span>
                            <span class="text-xs font-light text-gray-500 capitalize">student</span>
                        </div>
                    </div>
                    <a class="py-2 px-6 text-sm font-medium text-white rounded-full bg-yellow-500 hover:bg-red-500 shadow-md" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
                <!-- search tool -->
                <!-- <div class="mx-auto">
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
                </div> -->
            
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
                        <img src="../assets/logo.png" alt="" class="w-full md:ml-3">
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
                            <a href="#"><img src="../assets/fb.png" alt="" class="h-6"></a>
                        </div>
                        <!--                    icon 2-->
                        <div class="h-8 group">
                            <a href="#"><img src="../assets/twitter.png" alt="" class="h-6"></a>
                        </div>
                        <!--                    icon 3-->
                        <div class="h-8 group">
                            <a href="#"> <img src="../assets/instagram.png" alt="" class="h-6"></a>
                        </div>
                        <!--                    icon 4-->
                        <div class="h-8 group">
                            <a href="#"> <img src="../assets/inn.png" alt="" class="h-6"></a>
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