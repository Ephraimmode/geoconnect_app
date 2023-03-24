@extends('layouts.app')

@section('content')
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
            <a href="{{ route('courses') }}" class="border border-red-500 px-3 py-1 hover:bg-red-500 uppercase hover:text-white rounded-md md:block hover:opacity-80">
                see all
            </a>
        </div>
        <!-- grid container -->
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4 items-center justify-between w-full mx-auto">
        <!-- grid item -->
        @foreach($courses as $course)
            <div class="shadow-lg hover:shadow-none bg-white py-3 px-6 rounded-2xl">
                <!-- flex -->
                <div class="flex items-center flex-row p-0.5">
                    <!-- items -->
                    <img class="w-12 h-12 ring-2 mr-4 rounded-full ring-white shadow-md shadow-slate-400" src="assets/1.png" alt="">
                    <div class="flex flex-col w-full">
                        <h5 class="font-bold text-sky-800">{{ $course->name }}</h5>
                        <p class="text-1xl font-thin">{{ $course->description}}</p>
                        <div class="flex items-center justify-between">
                            <p class="text-1xl text-sky-500">${{$course->price}} <span class="text-red-500 text-xs"><strike>$340</strike></span></p>
                            <a href="#" class="px-3 py-0 text-sm text-white bg-sky-500 rounded-full hover:opacity-80">Buy</a>
                        </div>
                    </div>
                </div>
                <!-- flex end -->
            </div>
        @endforeach
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

@endsection