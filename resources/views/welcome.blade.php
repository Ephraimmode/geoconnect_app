<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geoconnect IT Training</title>
    <link rel="icon" type="image/x-icon" href="{{asset('assets/favicon.png')}}">
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
                <a href="index.html">
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
                    <a class="text-gray-500 hover:text-gray-800" href="login.html">Login</a>
                    <a class="text-gray-500 hover:text-gray-800" href="enrol.html">Enrol</a>
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

<!--hero section -->
<section id="hero">
<!--    hero container -->
    <div class="container flex flex-col-reverse mx-auto p-6 lg:flex-row">
    <!--  content      container -->
        <div class="flex flex-col space-y-10 mb-3 lg:mt-12 lg:w-1/2 xl:mb-3">
            <h1 class="text-3xl font-bold text-center lg:text-4xl lg:max-w-md lg:text-left">
                UNLOCK YOUR CAREER PATH WITH INDUSTRIAL IT TRAINING
            </h1>
            <p class="text-1xl text-center text-gray-400 lg:max-w-md lg:text-left">
                At Geoconnect, you will learn applicable tech skills at your convenience from qualified instructors globally
            </p>
            <div class="mx-auto lg:mx-0">
                <a href="#" class="py-3 px-4 text-1xl lg:text-md font-bold text-white bg-red-500 rounded-full lg:py-3 hover:opacity-80">View Courses</a>
            </div>
        </div>
    <!--        image-->
        <div class="mb-24 md:relative mx-auto md:w-180 lg:mb-0 lg:w-1/2">
            <img src="{{asset('assets/geoconnect_geo.gif')}}" alt="">
        </div>
    </div>
</section>

<!-- search courses -->
<section class="bg-slate-100 py-2" id="search-course">
    <div class="w-1/3 mx-auto">
        <form class="group relative">
            <svg width="20" height="20" fill="currentColor" class="absolute left-3 top-1/2 -mt-2.5 text-slate-400 pointer-events-none group-focus-within:text-red-500" aria-hidden="true">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" />
            </svg>
            <input class="focus:ring-2 focus:ring-red-500 h-7 md:h-9 focus:outline-none appearance-none w-full text-sm leading-6 text-slate-900 placeholder-slate-400 rounded-md py-2 pl-10 ring-1 ring-slate-200 shadow-sm" type="text" aria-label="Filter projects" placeholder="Search courses...">
        </form>
    </div>
</section>
<!-- search courses end -->

<!-- offer section -->

<section id="offer">
    <!-- offer container -->
    <div class="container w-1/2 mx-auto">
            <!-- offer content -->
        <div class="flex items-center justify-between">
    
            <p class="text-sky-800 left">We Offer<span class="text-red-500">:</span></p>
            
            <div class="flex items-center right">
                <img src="assets/left_arrow.png" alt="">
                <img src="assets/right_arrow.png" alt="">
            </div>
        </div>
        <div class="flex justify-center space-x-1 sm:space-x-2 items-center md:space-x-3 lg:space-x-7">
            <div class="shadow-lg bg-salmon rounded-md flex flex-col">
                <img src="assets/online_courses.png" alt="">
                <p class="p-2 sm:p-6 md:p-8 text-white"><span class="text-cyan-600 font-bold animate-pulse">&#8226;</span>&#160;Online<br>&#160;&#160;&#160;Courses</p>
            </div>
            <div class="shadow-lg rounded-md flex flex-col">
                <img class="rounded-t-md" src="assets/offline.png" alt="">
                <p class="p-2 sm:p-6 md:p-8 text-gray-500"><span class="text-cyan-600 font-bold animate-pulse">&#8226;</span>&#160;Offline<br>&#160;&#160;&#160;Courses</p>
            </div>
            <div class="shadow-lg rounded-md flex flex-col">
                <img src="assets/corporate.png" alt="">
                <p class="p-2 sm:p-6 md:p-8 text-gray-500"><span class="text-cyan-600 font-bold animate-pulse">&#8226;</span>&#160;Corporate<br>&#160;&#160;&#160;Training</p>
            </div>
            <div class="shadow-lg rounded-md flex flex-col">
                <img src="assets/24hrs.png" alt="">
                <p class="p-2 sm:p-6 md:p-8 text-gray-500"><span class="text-cyan-600 font-bold animate-ping">&#8226;</span>&#160;24hr<br>&#160;&#160;&#160;Services</p>
            </div>
            <div class="shadow-lg rounded-md flex flex-col">
                <img src="assets/industrial.png" alt="">
                <p class="p-2 sm:p-6 md:p-8 text-gray-500"><span class="text-cyan-600 font-bold animate-pulse">&#8226;</span>&#160;Industial<br>&#160;&#160;&#160;Services</p>
            </div>
        </div>
    </div>
</section>
    <!-- offer section end -->

<!-- courses -->
<section class="bg-slate-100 mt-12 py-5" id="courses">
    <div class="container mx-auto px-6 md:px-0">
        <!--        creations headers-->
        <div class="flex mb-3 items-center justify-between">
            <h4 class="text-1xl tracking-widest text-center uppercase md:text left md:text-1xl">Online courses</h4>
            <button class="btn rounded-md md:block hover:opacity-80">
                see all
            </button>
        </div>
        <!-- grid container -->
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4 items-center justify-between w-full mx-auto">
        <!-- grid item -->
            <div class="shadow-lg hover:shadow-none bg-white py-3 px-6 rounded-2xl">
                <!-- flex -->
                <div class="flex items-center flex-row p-0.5">
                    <!-- items -->
                    <img class="w-12 h-12 ring-2 mr-4 rounded-full ring-white shadow-md shadow-slate-400" src="assets/1.png" alt="">
                    <div class="flex flex-col w-full">
                        <h5 class="font-bold text-sky-800">Laravel</h5>
                        <p class="text-1xl font-thin">Advance PHP framework</p>
                        <div class="flex items-center justify-between">
                            <p class="text-1xl text-sky-500">$200.00</p>
                            <a href="#" class="px-2 py-1  text-white bg-red-500 rounded-full hover:opacity-80">pay</a>
                        </div>
                    </div>
                </div>
                <!-- flex end -->
            </div>
            <!-- grid item end -->

            <!-- grid item -->
            <div class="shadow-lg hover:shadow-none bg-white py-3 px-6 rounded-2xl">
                <!-- flex -->
                <div class="flex items-center flex-row p-0.5">
                    <!-- items -->
                    <img class="w-12 h-12 ring-2 mr-4 rounded-full ring-white shadow-md shadow-slate-400" src="assets/4.png" alt="">
                    <div class="flex flex-col w-full">
                        <h5 class="font-bold text-sky-800">SQL</h5>
                        <p class="text-1xl font-thin">MS Server Management</p>
                        <div class="flex items-center justify-between">
                            <p class="text-1xl text-sky-500">$200.00</p>
                            <a href="#" class="px-2 py-1 text-white bg-red-500 rounded-full hover:opacity-80">pay</a>
                        </div>
                    </div>
                </div>
                <!-- flex end -->
            </div>
            <!-- grid item end -->

            <!-- grid item -->
            <div class="shadow-lg hover:shadow-none bg-white py-3 px-6 rounded-2xl">
                <!-- flex -->
                <div class="flex items-center flex-row p-0.5">
                    <!-- items -->
                    <img class="w-12 h-12 ring-2 mr-4 rounded-full ring-white shadow-md shadow-slate-400" src="assets/3.png" alt="">
                    <div class="flex flex-col w-full">
                        <h5 class="font-bold text-sky-800">Laravel</h5>
                        <p class="text-1xl font-thin">Advance PHP framework</p>
                        <div class="flex items-center justify-between">
                            <p class="text-1xl text-sky-500">$200.00</p>
                            <a href="#" class="px-2 py-1 text-white bg-red-500 rounded-full hover:opacity-80">pay</a>
                        </div>
                    </div>
                </div>
                <!-- flex end -->
            </div>
            <!-- grid item end -->

            <!-- grid item -->
            <div class="shadow-lg hover:shadow-none bg-white py-3 px-6 rounded-2xl">
                <!-- flex -->
                <div class="flex items-center flex-row p-0.5">
                    <!-- items -->
                    <img class="w-12 h-12 ring-2 mr-4 rounded-full ring-white shadow-md shadow-slate-400" src="assets/5.png" alt="">
                    <div class="flex flex-col w-full">
                        <h5 class="font-bold text-sky-800">Laravel</h5>
                        <p class="text-1xl font-thin">Advance PHP framework</p>
                        <div class="flex items-center justify-between">
                            <p class="text-1xl text-sky-500">$200.00</p>
                            <a href="#" class="px-2 py-1 text-white bg-red-500 rounded-full hover:opacity-80">pay</a>
                        </div>
                    </div>
                </div>
                <!-- flex end -->
            </div>
            <!-- grid item end -->

            <!-- grid item -->
            <div class="shadow-lg hover:shadow-none bg-white py-3 px-6 rounded-2xl">
                <!-- flex -->
                <div class="flex items-center flex-row p-0.5">
                    <!-- items -->
                    <img class="w-12 h-12 ring-2 mr-4 rounded-full ring-white shadow-md shadow-slate-400" src="assets/6.png" alt="">
                    <div class="flex flex-col w-full">
                        <h5 class="font-bold text-sky-800">Laravel</h5>
                        <p class="text-1xl font-thin">Advance PHP framework</p>
                        <div class="flex items-center justify-between">
                            <p class="text-1xl text-sky-500">$200.00</p>
                            <a href="#" class="px-2 py-1 text-white bg-red-500 rounded-full hover:opacity-80">pay</a>
                        </div>
                    </div>
                </div>
                <!-- flex end -->
            </div>
            <!-- grid item end -->

            <!-- grid item -->
            <div class="shadow-lg hover:shadow-none bg-white py-3 px-6 rounded-2xl">
                <!-- flex -->
                <div class="flex items-center flex-row p-0.5">
                    <!-- items -->
                    <img class="w-12 h-12 ring-2 mr-4 rounded-full ring-white shadow-md shadow-slate-400" src="assets/7.png" alt="">
                    <div class="flex flex-col w-full">
                        <h5 class="font-bold text-sky-800">Laravel</h5>
                        <p class="text-1xl font-thin">Advance PHP framework</p>
                        <div class="flex items-center justify-between">
                            <p class="text-1xl text-sky-500">$200.00</p>
                            <a href="#" class="px-2 py-1 text-white bg-red-500 rounded-full hover:opacity-80">pay</a>
                        </div>
                    </div>
                </div>
                <!-- flex end -->
            </div>
            <!-- grid item end -->

            <!-- grid item -->
            <div class="shadow-lg hover:shadow-none bg-white py-3 px-6 rounded-2xl">
                <!-- flex -->
                <div class="flex items-center flex-row p-0.5">
                    <!-- items -->
                    <img class="w-12 h-12 ring-2 mr-4 rounded-full ring-white shadow-md shadow-slate-400" src="assets/8.png" alt="">
                    <div class="flex flex-col w-full">
                        <h5 class="font-bold text-sky-800">Laravel</h5>
                        <p class="text-1xl font-thin">Advance PHP framework</p>
                        <div class="flex items-center justify-between">
                            <p class="text-1xl text-sky-500">$200.00</p>
                            <a href="#" class="px-2 py-1 text-white bg-red-500 rounded-full hover:opacity-80">pay</a>
                        </div>
                    </div>
                </div>
                <!-- flex end -->
            </div>
            <!-- grid item end -->

            <!-- grid item -->
            <div class="shadow-lg hover:shadow-none bg-white py-3 px-6 rounded-2xl">
                <!-- flex -->
                <div class="flex items-center flex-row p-0.5">
                    <!-- items -->
                    <img class="w-12 h-12 ring-2 mr-4 rounded-full ring-white shadow-md shadow-slate-400" src="assets/1.png" alt="">
                    <div class="flex flex-col w-full">
                        <h5 class="font-bold text-sky-800">Laravel</h5>
                        <p class="text-1xl font-thin">Advance PHP framework</p>
                        <div class="flex items-center justify-between">
                            <p class="text-1xl text-sky-500">$200.00</p>
                            <a href="#" class="px-2 py-1 text-white bg-red-500 rounded-full hover:opacity-80">pay</a>
                        </div>
                    </div>
                </div>
                <!-- flex end -->
            </div>
            <!-- grid item end -->
            

  
        </div>
        <!-- grid container end -->
        
    </div>
</section>
<!-- courses end-->

<!-- info section -->
<section class="py-6 bg-slate-50" id="info">
    <div class="container flex flex-col-reverse px-6 mx-auto lg:flex-row md:flex-col">
        <!-- item 1 -->
        <div class="flex flex-col lg:w-1/2 lg:pr-10  lg:border-r-2 border-r-0 w-full">
            <div class="flex items-center justify-between w-full">
                <div class="">
                    <h4 class="font-bold">Confused?</h4>
                    <p class="text-sm text-gray-400">The process is simple and interactive.<br>Sign up in 3 simple steps as shown below</p>
                </div>
                <div class="w-12 h-12 hidden md:block">
                    <img src="assets/idea.png" alt="">
                </div>
                <div class="w-12 h-12 md:hidden relative overflow-hidden">
                    <img class="rotate-180 absolute right-1 -top-3" src="assets/idea_red.png" alt="">
                </div>
            </div>
            <div class="relative py-1 w-10/12 mx-auto">
                <div class="absolute inset-0 flex items-center">
                  <div class="w-full border-b border-gray-300"></div>
                </div>
                <div class="relative flex justify-center">
                    <span class="bg-slate-50 px-1 text-sm md:text-lg font-bold text-red-500">&#8226;</span>
                </div>
            </div>
            <div class="flex flex-row justify-between space-x-3 md:space-x-10 xl:space-x-16">
                
                <div class="relative w-full flex flex-col">
                    <img class="w-full" src="assets/infobg.png" alt="">
                    <div class="absolute p-3 top-2 md:p-10 md:text-center lg:top-0 lg:text-sm lg:p-1 xl:top-1 xl:text-md xl:p-2 xl:px-6">
                        <h3 class="text-red-500 font-bold underline">Sign Up</h3>
                        <p class="text-sm">
                            fill your details correctly in the simple form at the top of the page.
                        </p>
                    </div>
                    <p class="italic text-gray-500 text-sm p-2">
                        <span class="text-red-500">*Please check your mail</span><br>
                        to get your Payment code within minutes...
                    </p>
                </div>

                <div class="relative w-full flex flex-col">
                    <img class="w-full" src="assets/infobg.png" alt="">
                    <div class="absolute p-3 top-2 md:p-10 md:text-center lg:top-0 lg:text-sm lg:p-1 xl:top-1 xl:text-md xl:p-2 xl:px-8">
                        <h3 class="text-red-500 font-bold underline">Choose</h3>
                        <p class="text-sm">
                            what you need from our list of courses and services.
                        </p>
                    </div>
                    <p class="italic text-gray-500 text-sm p-2">
                        <span class="text-red-500">*Click the blue button</span><br>
                        to add courses/services and click again to remove. Once done, check the tab above to see cost and duration.
                    </p>
                </div>
                <div class="relative w-full flex flex-col">
                    <img class="w-full" src="assets/infobg.png" alt="">
                    <div class="absolute p-3 top-2 md:p-10 md:text-center lg:top-0 lg:text-sm lg:p-1 xl:top-1 xl:text-md xl:p-2 xl:px-8">
                        <h3 class="text-red-500 font-bold underline">Verify</h3>
                        <p class="text-sm">
                            click the confirm button by the courses/services and make payment.
                        </p>
                    </div>
                    <p class="italic text-gray-500 text-sm p-2">
                        <span class="text-red-500">*Fill in your payment code</span><br>
                        while making payment. Once done, you'll get a second mail listing your courses/services details.
                    </p>
                </div>
            </div>
        </div>
        <!-- item 2 -->
        <div class="w-full pt-6 lg:w-1/2 lg:pl-10">
            <div class="flex flex-col mb-3">
                <h4 class="font-bold">Clear Presentation<span class="text-red-500">.</span></h4>
                <div class="flex flex-row justify-between">
                    <p class="w-8/12 pt-3 text-gray-500 text-sm">
                        With presentation-enabled lectures, we bring the essence of each course to the big screen. step-by-step processes detailed and highlighted in somplified diagram and charts.
                    </p>
                    <img class="w-12 h-12" src="assets/presentation.png" alt="">
                </div>
            </div>
            <div class="flex flex-col mb-3">
                <h4 class="font-bold">Center-based Training<span class="text-red-500">.</span></h4>
                <div class="flex flex-row justify-between">
                    <p class="w-8/12 pt-3 text-gray-500 text-sm">
                        Worried about convenience? Pick the center closest to you from the list in when you <span class="underline text-blue-500">Sign Up</span>. Each center is well equipped and competently staffed.
                    </p>
                    <img class="w-12 h-12" src="assets/map.png" alt="">
                </div>
            </div>
            <div class="flex flex-col mb-3">
                <h4 class="font-bold">Certified Courses<span class="text-red-500">.</span></h4>
                <div class="flex w-full flex-row justify-between">
                    <p class="w-8/12 pt-3 text-gray-500 text-sm">
                        Nothing is so rewarding as "reward". Knowing this, we only provide courses certified with the highest industry standard to ensure your maximum employability and professionalism.
                    </p>
                    <img class="w-12 h-12" src="assets/checked.png" alt="">
                </div>
                <p class="text-gray-500 text-sm italic pt-5">
                    <span class="text-red-500">*</span>
                    Hey there! Have any other questions? <span class="font-bold">Chat us Live</span> we are available 2/47.
                </p>
            </div>
        </div>
        
    </div>
</section>
<!-- info section -->

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