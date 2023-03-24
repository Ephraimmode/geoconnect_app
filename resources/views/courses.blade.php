@extends('layouts.app')

@section('content')


<!-- page name display -->
<section class="bg-gray-500" id="course-category">
    <div class="container flex mx-auto py-2 px-5 text-gray-800 text-sm space-x-1">
        <a class="bg-white rounded-md hover:bg-sky-300 p-1 hover:rounded-md" href="{{ url('/') }}">
            <!-- https://www.svgrepo.com/svg/22031/home-icon-silhouette?edit=true //svg generator link -->
            <svg fill="#6b7280" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px" viewBox="0 0 495.40 495.40" xml:space="preserve" stroke="#ef4444"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M487.083,225.514l-75.08-75.08V63.704c0-15.682-12.708-28.391-28.413-28.391c-15.669,0-28.377,12.709-28.377,28.391 v29.941L299.31,37.74c-27.639-27.624-75.694-27.575-103.27,0.05L8.312,225.514c-11.082,11.104-11.082,29.071,0,40.158 c11.087,11.101,29.089,11.101,40.172,0l187.71-187.729c6.115-6.083,16.893-6.083,22.976-0.018l187.742,187.747 c5.567,5.551,12.825,8.312,20.081,8.312c7.271,0,14.541-2.764,20.091-8.312C498.17,254.586,498.17,236.619,487.083,225.514z"></path> <path d="M257.561,131.836c-5.454-5.451-14.285-5.451-19.723,0L72.712,296.913c-2.607,2.606-4.085,6.164-4.085,9.877v120.401 c0,28.253,22.908,51.16,51.16,51.16h81.754v-126.61h92.299v126.61h81.755c28.251,0,51.159-22.907,51.159-51.159V306.79 c0-3.713-1.465-7.271-4.085-9.877L257.561,131.836z"></path> </g> </g> </g> </g></svg>
        </a>
        <span class="p-1">|</span>
        <a class="p-1 hover:text-gray-800 hover:underline" href="{{ url('courses') }}">Courses</a>   
    </div>
</section>
<!-- page name display end-->

<!-- page bar -->
<section id="page-bar">
    <div class="container bg-sky-600 mx-auto py-2 px-5 mt-4">
        <h3 class="text-white font-bold">Our Courses</h3>
    </div>
</section>
<!-- page bar end -->

<!-- sort -->
<section id="sort">
    <div class="container flex flex-row px-5 py-5 mx-auto justify-end">
        <div>
            <form class="w-full max-w-lg"  action="#">
                <label class="text-gray-500 text-sm md:text-1xl" for="sort">Sort By</label>
                <div class="inline-block relative w-64">
                    <select class="block text-sm appearance-none w-full bg-white border border-gray-400 hover:border-red-500 px-4 py-1 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                      <option>All Courses</option>
                      <option>Course Categories</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                      <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                  </div>
            </form>
        </div>
    </div>
</section>
<!-- sort end -->

<!-- courses -->
<section class="courses-list flex">
    <div class="container grid grid-cols-2 text-xs sm:text-sm md:text-1xl md:grid-cols-3 mx-5 sm:mx-auto mb-5 gap-1 justify-between">
        
        @foreach ($courses as $course)
        <a href="#">
            <div class="flex flex-row px-5 hover:bg-slate-50 hover:text-sky-500 py-1 justify-between items-center border hover:border-none">
                <h3> {{ $course->name }} </h3>
                <span>
                    <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#b0b0b0"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7 10L12 15L17 10" stroke="#b0b0b0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>

                    <!-- chevron up -->
                    <!-- <svg width="25px" height="25px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#b0b0b0" stroke-width="1" stroke-linecap="round" stroke-linejoin="miter"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><polyline points="17 14 12 9 7 14"></polyline></g></svg> -->
                    <!-- chevron up end -->
                </span>
            </div>
        </a>
        @endforeach
        
    </div>
    
</section>
<!-- pagination -->
<section id="pagination">
    <div class="container flex flex-row px-5 pb-3 mx-auto justify-between">
        <div>
            <a href="#" class="px-4 py-1 text-sm md:text-1xl hover:shadow-md text-sky-500 bg-slate-200 rounded-full hover:opacity-80">
                Previous
            </a>
        </div>
        <div>
            <a href="#" class="px-4 py-1 text-sm md:text-1xl hover:shadow-md text-sky-500 bg-slate-200 rounded-full hover:opacity-80">
                1
            </a>
            <a href="#" class="px-4 py-1 text-sm md:text-1xl hover:shadow-md text-sky-500 bg-slate-200 rounded-full hover:opacity-80">
                2
            </a>
            <a href="#" class="px-4 py-1 text-sm md:text-1xl hover:shadow-md text-white hover:bg-black bg-red-500 rounded-full hover:opacity-80">
                3
            </a>
        </div>
        <div>
            <a href="#" class="px-4 py-1 hover:shadow-md text-sm md:text-1xl text-sky-500 bg-slate-200 rounded-full hover:opacity-80">
                Next
            </a>
        </div>
    </div>
</section>
<!-- pagination end -->
<!-- courses end -->



@endsection