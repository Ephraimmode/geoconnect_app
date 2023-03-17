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
        <a class="p-1 hover:text-gray-800 hover:underline" href="{{ url('login') }}">Login</a>   
    </div>
</section>
<!-- page name display end-->

<section id="login" class="flex items-center justify-center py-10">
    <div class="flex flex-col items-center p-6 space-y-2 bg-slate-200 rounded-2xl shadow-2xl">
        <h6 class="text-slate-600">Sign in with</h6>
        <div class="flex uppercase text-slate-800 text-sm font-medium pb-3  space-x-2">
            <a href="#" class="flex items-center shadow-sm hover:shadow-md space-x-1 bg-gray-100 px-3 py-2 rounded-md">
                <!-- https://www.svgrepo.com/svg/493677/github-repo-git-octocat?edit=true -->
                <svg width="23px" height="23px" viewBox="0 0 64 64" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;" fill="#000000" stroke="#000000" stroke-width="0.00064"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <rect id="Icons" x="0" y="-192" width="1280" height="800" style="fill:none;"></rect> <g id="Icons1" serif:id="Icons"> <g id="Strike"> </g> <g id="H1"> </g> <g id="H2"> </g> <g id="H3"> </g> <g id="list-ul"> </g> <g id="hamburger-1"> </g> <g id="hamburger-2"> </g> <g id="list-ol"> </g> <g id="list-task"> </g> <g id="trash"> </g> <g id="vertical-menu"> </g> <g id="horizontal-menu"> </g> <g id="sidebar-2"> </g> <g id="Pen"> </g> <g id="Pen1" serif:id="Pen"> </g> <g id="clock"> </g> <g id="external-link"> </g> <g id="hr"> </g> <g id="info"> </g> <g id="warning"> </g> <g id="plus-circle"> </g> <g id="minus-circle"> </g> <g id="vue"> </g> <g id="cog"> </g> <path id="github" d="M32.029,8.345c-13.27,0 -24.029,10.759 -24.029,24.033c0,10.617 6.885,19.624 16.435,22.803c1.202,0.22 1.64,-0.522 1.64,-1.16c0,-0.569 -0.02,-2.081 -0.032,-4.086c-6.685,1.452 -8.095,-3.222 -8.095,-3.222c-1.093,-2.775 -2.669,-3.514 -2.669,-3.514c-2.182,-1.492 0.165,-1.462 0.165,-1.462c2.412,0.171 3.681,2.477 3.681,2.477c2.144,3.672 5.625,2.611 6.994,1.997c0.219,-1.553 0.838,-2.612 1.526,-3.213c-5.336,-0.606 -10.947,-2.669 -10.947,-11.877c0,-2.623 0.937,-4.769 2.474,-6.449c-0.247,-0.608 -1.072,-3.051 0.235,-6.36c0,0 2.018,-0.646 6.609,2.464c1.917,-0.533 3.973,-0.8 6.016,-0.809c2.041,0.009 4.097,0.276 6.017,0.809c4.588,-3.11 6.602,-2.464 6.602,-2.464c1.311,3.309 0.486,5.752 0.239,6.36c1.54,1.68 2.471,3.826 2.471,6.449c0,9.232 -5.62,11.263 -10.974,11.858c0.864,0.742 1.632,2.208 1.632,4.451c0,3.212 -0.029,5.804 -0.029,6.591c0,0.644 0.432,1.392 1.652,1.157c9.542,-3.185 16.421,-12.186 16.421,-22.8c0,-13.274 -10.76,-24.033 -24.034,-24.033" style="fill:#010101;"></path> <g id="logo"> </g> <g id="radio-check"> </g> <g id="eye-slash"> </g> <g id="eye"> </g> <g id="toggle-off"> </g> <g id="shredder"> </g> <g id="spinner--loading--dots-" serif:id="spinner [loading, dots]"> </g> <g id="react"> </g> <g id="check-selected"> </g> <g id="turn-off"> </g> <g id="code-block"> </g> <g id="user"> </g> <g id="coffee-bean"> </g> <g id="coffee-beans"> <g id="coffee-bean1" serif:id="coffee-bean"> </g> </g> <g id="coffee-bean-filled"> </g> <g id="coffee-beans-filled"> <g id="coffee-bean2" serif:id="coffee-bean"> </g> </g> <g id="clipboard"> </g> <g id="clipboard-paste"> </g> <g id="clipboard-copy"> </g> <g id="Layer1"> </g> </g> </g></svg>
                <span>Github</span>
            </a>
            <a href="#" class="flex items-center shadow-sm hover:shadow-md space-x-1 bg-gray-100 px-3 py-2 rounded-md">
                <svg width="20px" height="20px" viewBox="-0.5 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>Google-color</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Color-" transform="translate(-401.000000, -860.000000)"> <g id="Google" transform="translate(401.000000, 860.000000)"> <path d="M9.82727273,24 C9.82727273,22.4757333 10.0804318,21.0144 10.5322727,19.6437333 L2.62345455,13.6042667 C1.08206818,16.7338667 0.213636364,20.2602667 0.213636364,24 C0.213636364,27.7365333 1.081,31.2608 2.62025,34.3882667 L10.5247955,28.3370667 C10.0772273,26.9728 9.82727273,25.5168 9.82727273,24" id="Fill-1" fill="#FBBC05"> </path> <path d="M23.7136364,10.1333333 C27.025,10.1333333 30.0159091,11.3066667 32.3659091,13.2266667 L39.2022727,6.4 C35.0363636,2.77333333 29.6954545,0.533333333 23.7136364,0.533333333 C14.4268636,0.533333333 6.44540909,5.84426667 2.62345455,13.6042667 L10.5322727,19.6437333 C12.3545909,14.112 17.5491591,10.1333333 23.7136364,10.1333333" id="Fill-2" fill="#EB4335"> </path> <path d="M23.7136364,37.8666667 C17.5491591,37.8666667 12.3545909,33.888 10.5322727,28.3562667 L2.62345455,34.3946667 C6.44540909,42.1557333 14.4268636,47.4666667 23.7136364,47.4666667 C29.4455,47.4666667 34.9177955,45.4314667 39.0249545,41.6181333 L31.5177727,35.8144 C29.3995682,37.1488 26.7323182,37.8666667 23.7136364,37.8666667" id="Fill-3" fill="#34A853"> </path> <path d="M46.1454545,24 C46.1454545,22.6133333 45.9318182,21.12 45.6113636,19.7333333 L23.7136364,19.7333333 L23.7136364,28.8 L36.3181818,28.8 C35.6879545,31.8912 33.9724545,34.2677333 31.5177727,35.8144 L39.0249545,41.6181333 C43.3393409,37.6138667 46.1454545,31.6490667 46.1454545,24" id="Fill-4" fill="#4285F4"> </path> </g> </g> </g> </g></svg>
                <span>Google</span>
            </a>
            <a href="#" class="flex items-center shadow-sm hover:shadow-md space-x-1 bg-gray-100 px-3 py-2 rounded-md">
                <svg fill="#000000" width="23px" height="23px" viewBox="0 -4.63 122.88 122.88" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="enable-background:new 0 0 122.88 113.63" xml:space="preserve" stroke="#000000" stroke-width="0.0012288"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css">  .st0{fill-rule:evenodd;clip-rule:evenodd;}  </style> <g> <path class="st0" d="M41.1,101.17c-20.64-18.34-16.35-28.5-15.85-54.84c0-0.24,0.04-0.47,0.12-0.67l-5.19-1.63 c-0.74-16.4,8.75-26.21,20.52-30.93c4.28-1.72-2.89-11.1,6.97-7.49c13.17,4.82,42.39,11.38,49.31,19.65 c5.62,6.72,5.85,10.36,5.72,19.13c-0.04,2.85-0.48,5.34-1.79,6.27c-0.61,0.43-1.33,0.6-2.18,0.52c0,16.27,2.19,31.67-9.56,44.92 c-6.97,7.86-17.48,12.9-28.06,12.74c-4.17-0.07-6.75-0.66-10.35-2.01C47.21,105.49,44.27,103.98,41.1,101.17L41.1,101.17z M77.25,62.33c2.31,0,4.19,1.87,4.19,4.18c0,2.31-1.87,4.19-4.19,4.19s-4.19-1.88-4.19-4.19C73.06,64.2,74.94,62.33,77.25,62.33 L77.25,62.33L77.25,62.33z M45.61,62.33c2.31,0,4.19,1.87,4.19,4.18c0,2.31-1.87,4.19-4.19,4.19c-2.31,0-4.19-1.88-4.19-4.19 C41.43,64.2,43.3,62.33,45.61,62.33L45.61,62.33L45.61,62.33z M86.77,60.28c0.6,0.8,0.44,1.95-0.37,2.55 c-0.8,0.6-1.95,0.44-2.55-0.37c-1.46-1.95-3.01-2.97-4.65-3.36c-1.67-0.4-3.49-0.14-5.39,0.49c-0.96,0.32-1.99-0.19-2.3-1.15 c-0.31-0.96,0.19-1.99,1.15-2.3c2.49-0.84,4.97-1.16,7.36-0.59C82.47,56.13,84.75,57.59,86.77,60.28L86.77,60.28L86.77,60.28z M42.85,55.55c2.39-0.57,4.87-0.25,7.36,0.59c0.96,0.32,1.47,1.35,1.15,2.3c-0.32,0.96-1.35,1.47-2.3,1.15 c-1.88-0.64-3.71-0.88-5.39-0.49c-1.63,0.39-3.2,1.42-4.65,3.36c-0.6,0.8-1.74,0.97-2.55,0.37c-0.8-0.6-0.97-1.74-0.37-2.55 C38.14,57.59,40.42,56.13,42.85,55.55L42.85,55.55L42.85,55.55z M54.12,90.87c-1.01-0.55-1.37-1.81-0.81-2.81 c0.55-1,1.81-1.37,2.81-0.81c1.9,1.05,3.74,1.62,5.5,1.66c1.71,0.03,3.4-0.44,5.07-1.46c0.97-0.6,2.24-0.3,2.84,0.67 c0.6,0.97,0.3,2.25-0.67,2.84c-2.37,1.46-4.81,2.13-7.31,2.08C59.07,92.98,56.6,92.24,54.12,90.87L54.12,90.87L54.12,90.87z M0,111.17v-18.9h4.91v16.45h12.83v4.91H2.45C1.1,113.63,0,112.53,0,111.17L0,111.17L0,111.17z M105.15,108.72h12.83V92.28h4.91 v18.9c0,1.35-1.09,2.45-2.45,2.45h-15.28V108.72L105.15,108.72L105.15,108.72z M0,20.08V2.45C0,1.1,1.1,0,2.45,0h15.28v4.91H4.91 v15.18H0L0,20.08L0,20.08z M105.15,0h15.28c1.35,0,2.45,1.1,2.45,2.45v17.63h-4.91V4.91h-12.83V0L105.15,0L105.15,0z M53.28,103.38 c2.09,0.83,5.99,1.24,8.26,1.24c4.47,0,8.99-1.01,13.19-2.93c4.22-1.92,8.11-4.73,11.3-8.33c10.71-12.09,8.51-27.51,8.51-42.42 h0.01c-0.04-1.33-0.24-2.54-0.6-3.65c-0.35-1.07-0.85-2-1.52-2.79c-2.56-3-4.98-2.88-8.44-2.7c-0.32,0.01-0.62,0.03-1.07,0.06 c-13.68,0.6-22.64,0.59-29.91-0.04c-6.7-0.6-11.96-1.7-18.1-3.32c-0.58,1.36-1.25,2.69-2.03,3.98c-1,1.65-2.16,3.23-3.49,4.73 c-0.46,24.62-4.75,33.82,14.46,50.87c1.09,0.97,2.24,1.83,3.43,2.57C48.99,101.7,51.51,102.81,53.28,103.38L53.28,103.38z"></path> </g> </g></svg>
                <span>Face Id</span>
            </a>
        </div>
        <div class="border-1 border-b w-full border-slate-300"></div>
        <h6 class="pt-2 text-slate-400">Or sign in with credentials </h6>

        <div class="px-5 w-full">
            <form class="flex flex-col space-y-2" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="flex flex-col space-y-2">
                    <label class="text-slate-800 uppercase text-sm font-medium" for="email">Email</label>
                    <input id="email" class="py-3 px-3 text-sm rounded-md text-slate-500 shadow-sm appearance-none focus:outline-none focus:ring-1 focus:ring-red-500 @error('email') is-invalid @enderror" name="email" type="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="flex flex-col space-y-2">
                    <label class="text-slate-800 uppercase text-sm font-medium" for="password">Password</label>
                    <input id="password" class="py-3 px-3 text-sm rounded-md text-slate-500 shadow-sm appearance-none focus:outline-none focus:ring-1 focus:ring-red-500 @error('password') is-invalid @enderror" name="password" type="password" placeholder="Password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="flex">
                    <button type="submit" class="py-3 mt-3 text-white font-medium text-sm shadow-sm hover:scale-95 hover:bg-red-400 hover:duration-200 uppercase px-3 bg-red-500 w-full">
                        Login
                    </button>
                </div>
            </form>
        </div>

        <div class="w-full flex flex-col items-center text-sm space-y-3">
            @if (Route::has('password.request'))
                <a class="text-sky-500 hover:underline" href="{{ route('password.request') }}">Forgot Password?</a>
            @endif
            <div class="border-1 border-b w-full border-slate-300"></div>
            <div>
                Don't have an account? <a class="text-sky-500 hover:underline" href="{{ url('enrol') }}">Sign Up</a>
            </div>
        </div>
    </div>  
</section>
@endsection
