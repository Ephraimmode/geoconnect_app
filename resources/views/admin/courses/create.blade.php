@extends('layouts.admin')

@section('content')

<!-- admin content -->
<section id="dashboard" class="bg-sky-50">
    <div class="container px-5 py-2 mx-auto">
        {{-- main content --}}
        <h4 class="font-bold text-sky-600 py-2">Add Course(s)</h4>
        <div class="border-1 border-b w-full border-slate-300"></div>
        <section id="login" class="flex items-center justify-center py-10">
            <div class="flex flex-col w-4/12 items-center p-6 space-y-2 bg-slate-200 rounded-md">
                <h6 class="text-gray-600 uppercase text-sm font-medium my-3">All fields are required!</h6>
        
                <div class="px-5 w-full">
                    <form class="flex flex-col w-full space-y-2" method="POST" action="{{ route('admin.courses.store') }}" enctype="multipart/form-data">
        
                        @csrf
    
                        <div class="flex flex-col space-y-2">
                            <label for="name" class="text-slate-800 uppercase text-sm font-medium">Course Name</label>
                            <input id="name" class="py-3 px-3 text-sm rounded-md text-slate-500 shadow-sm appearance-none focus:outline-none focus:ring-1 focus:ring-red-500 @error('name') is-invalid @enderror" type="text" name="name" placeholder="Course Name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="flex flex-col space-y-2">
                            <label for="tag" class="text-slate-800 uppercase text-sm font-medium">Tag Line</label>
                            <input id="tag" class="py-3 px-3 text-sm rounded-md text-slate-500 shadow-sm appearance-none focus:outline-none focus:ring-1 focus:ring-red-500 @error('tag') is-invalid @enderror" type="text" name="tag" placeholder="Three Words Max e.g PHP framework" value="{{ old('tag') }}" required autocomplete="tag" autofocus>
        
                            @error('tag')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="flex flex-col space-y-2">
                            <label for="description" class="text-slate-800 uppercase text-sm font-medium">Description</label>
                            <input id="description" class="py-3 px-3 text-sm rounded-md text-slate-500 shadow-sm appearance-none focus:outline-none focus:ring-1 focus:ring-red-500 @error('description') is-invalid @enderror" type="text" name="description" placeholder="Description" value="{{ old('description') }}" required autocomplete="description" autofocus>
        
                            @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="flex flex-col space-y-2">
                            <label class="text-slate-800 uppercase text-sm font-medium" for="enrolment_type">Duration</label>
                            <div class="flex relative">
                                <select name="duration" id="duration" class="py-3 px-3 w-full text-sm rounded-md text-slate-500 shadow-sm appearance-none text-center focus:outline-none focus:ring-1 focus:ring-red-500">
                                    <option value="0">-- Select --</option>
                                    <option value="1 week">1 Week</option>
                                    <option value="2 weeks">2 Weeks</option>
                                    <option value="1 Month">3 Weeks</option>
                                    <option value="1 Month">1 Month</option>
                                    <option value="2 Month">2 Month</option>
                                    <option value="3 Month">3 Month</option>
                                    <option value="4 Month">4 Month</option>
                                    <option value="5 Month">5 Month</option>
                                    <option value="6 Month">6 Month</option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col space-y-2">
                            <label for="amount" class="text-slate-800 uppercase text-sm font-medium">Amount</label>
                            <input id="amount" class="py-3 px-3 text-sm rounded-md text-slate-500 shadow-sm appearance-none focus:outline-none focus:ring-1 focus:ring-red-500 @error('amount') is-invalid @enderror" min="0" type="number" name="price" placeholder="Amount" value="{{ old('amount') }}" required autocomplete="amount" autofocus>
        
                            @error('amount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="flex flex-col space-y-2">
                            <label for="image" class="text-slate-800 uppercase text-sm font-medium">Upload Image (<span class="text-xs capitalize font-normal">Resize to 1:1</span>)</label>
                            <input id="image" class="py-3 px-3 text-sm rounded-md text-slate-500 shadow-md appearance-none focus:outline-none focus:ring-1 focus:ring-red-500 ring-1 ring-yellow-500 @error('image') is-invalid @enderror" min="0" type="file" name="course_image" value="{{ old('image') }}" required autocomplete="image" autofocus>
        
                            @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="flex">
                            <button class="py-3 mt-3 text-white font-medium text-sm shadow-sm hover:scale-95 hover:bg-red-400 hover:duration-200 uppercase px-3 bg-red-500 w-full">
                                Add
                            </button>
                        </div>
                    </form>
                </div>
            </div>  
        </section>
        {{-- main content --}}
    </div>
</section>
<!-- admin content end -->

@endsection
