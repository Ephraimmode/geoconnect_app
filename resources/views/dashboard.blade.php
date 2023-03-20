@extends('layouts.dashboard')

@section('content')

<!-- dashboard content -->
<section id="dashboard" class="bg-sky-50">
    <div class="container flex flex-col-reverse justify-between md:flex-row px-5 py-5 sm:px-0 mx-auto">
        <!-- item 1 -->
        <div class="flex justify-start w-full md:w-1/2 py-5 md:py-0">
            <div class="flex flex-col items-start w-full lg:w-11/12 px-0 md:pl-5 md:pr-2">
                <!-- search bar -->
                <div class="w-full mx-auto">
                    <form method="get" class="group relative">
                        <button class="absolute bg-yellow-500 py-2 px-3 right-0 top-4 hover:bg-red-500 -mt-4" type="button">
                            <svg width="20" height="20" fill="currentColor" class="text-white pointer-events-none" aria-hidden="true">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" />
                            </svg>
                        </button>
                        <input class="ring-yellow-500 h-9 focus:outline-none appearance-none w-full text-sm leading-6 text-slate-500 placeholder-slate-400 py-2 pl-10 ring-1 shadow-sm" name="search" type="text" aria-label="Filter projects" placeholder="Search for a new course">
                    </form>
                </div>
                <!-- training mode -->
                <div id="training-mode" class="w-full py-3 rounded-md mt-8 bg-white">
                    <div class="flex flex-row justify-start items-center space-x-1">
                        <span>
                            <svg fill="#d85f5f" width="35px" height="25px" viewBox="0 -7.55 122.88 122.88" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="enable-background:new 0 0 122.88 107.78" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;}</style> <g> <path class="st0" d="M58.84,91.1c0.21-0.2,0.46-0.35,0.71-0.45v-9.39H2.1c-1.16,0-2.1-0.94-2.1-2.1c0-1.16,0.94-2.1,2.1-2.1h9.09 V12.44H2.1c-1.16,0-2.1-0.94-2.1-2.1c0-1.16,0.94-2.1,2.1-2.1h57.12V2.1c0-1.16,0.94-2.1,2.1-2.1s2.1,0.94,2.1,2.1v6.14h57.12 c1.16,0,2.1,0.94,2.1,2.1c0,1.16-0.94,2.1-2.1,2.1h-8.95v64.62h9.18c1.16,0,2.1,0.94,2.1,2.1c0,1.16-0.94,2.1-2.1,2.1H63.75v9.6 c0.1,0.07,0.2,0.14,0.29,0.23l13.12,12.48c0.84,0.8,0.87,2.12,0.07,2.96c-0.8,0.84-2.12,0.87-2.96,0.07L63.75,96.6v9.08 c0,1.16-0.94,2.1-2.1,2.1c-1.16,0-2.1-0.94-2.1-2.1V96.2L48.6,106.61c-0.84,0.8-2.17,0.76-2.96-0.07c-0.8-0.84-0.77-2.17,0.07-2.96 L58.84,91.1L58.84,91.1z M107.39,77.06V12.44h-92v64.62H107.39L107.39,77.06z"></path> </g> </g></svg>
                        </span>
                        <h4 class="font-medium text-sm text-sky-500">Training Access Mode</h4>
                    </div>
                    <!-- course lesson mode and access -->
                    <div class="flex flex-col mx-5 bg-gray-100 my-2 bg- px-5 shadow-sm py-2 rounded-md">
                        <div class="flex flex-col  space-y-2 pt-2">
                            <div class="flex flex-row justify-between items-center text-sm">
                                <div class="flex space-x-2">
                                    <h4 class="font-medium capitalize">HTML Introduction</h4>
                                    <span class="font-light text-red-500">Online Training</span>
                                </div>
                                <button class="px-3">
                                    <svg width="16px" height="20px" viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path opacity="0.4" d="M11 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22H15C20 22 22 20 22 15V13" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M16.0399 3.01976L8.15988 10.8998C7.85988 11.1998 7.55988 11.7898 7.49988 12.2198L7.06988 15.2298C6.90988 16.3198 7.67988 17.0798 8.76988 16.9298L11.7799 16.4998C12.1999 16.4398 12.7899 16.1398 13.0999 15.8398L20.9799 7.95976C22.3399 6.59976 22.9799 5.01976 20.9799 3.01976C18.9799 1.01976 17.3999 1.65976 16.0399 3.01976Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path> <path opacity="0.4" d="M14.9102 4.1499C15.5802 6.5399 17.4502 8.4099 19.8502 9.0899" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </button>
                            </div>
                            <div class="py-2 rounded-md font-light bg-slate-200 text-blue-800 text-sm text-center">
                                <a class="block hover:underline" target="_blank" href="#">Join class here</a>
                            </div>
                            <!-- if link not added -->
                            <div class="py-2 rounded-md font-light bg-slate-200 text-blue-700 text-sm text-center">
                                <span class="text-slate-500"><span class="text-red-500">*</span> Proceed to book appointment</span>
                            </div>
                        </div>
                    </div>
                    <!-- course lesson mode and access -->
                    <div class="flex flex-col mx-5 bg-gray-100 my-2 bg- px-5 shadow-sm py-2 rounded-md">
                        <div class="flex flex-col  space-y-2 pt-2">
                            <div class="flex flex-row justify-between items-center text-sm">
                                <div class="flex space-x-2">
                                    <h4 class="font-medium capitalize">R Programming</h4>
                                    <span class="font-light text-red-500">Home Lesson</span>
                                </div>
                                <button class="px-3">
                                    <svg width="16px" height="20px" viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path opacity="0.4" d="M11 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22H15C20 22 22 20 22 15V13" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M16.0399 3.01976L8.15988 10.8998C7.85988 11.1998 7.55988 11.7898 7.49988 12.2198L7.06988 15.2298C6.90988 16.3198 7.67988 17.0798 8.76988 16.9298L11.7799 16.4998C12.1999 16.4398 12.7899 16.1398 13.0999 15.8398L20.9799 7.95976C22.3399 6.59976 22.9799 5.01976 20.9799 3.01976C18.9799 1.01976 17.3999 1.65976 16.0399 3.01976Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path> <path opacity="0.4" d="M14.9102 4.1499C15.5802 6.5399 17.4502 8.4099 19.8502 9.0899" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </button>
                            </div>
                            <div class="flex flex-row justify-center space-x-2 items-center py-2 rounded-md font-light bg-slate-200 text-slate-500 text-sm text-center">
                                <span>
                                    <svg width="15px" height="15px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#717171"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 8.25C9.92893 8.25 8.25 9.92893 8.25 12C8.25 14.0711 9.92893 15.75 12 15.75C14.0711 15.75 15.75 14.0711 15.75 12C15.75 9.92893 14.0711 8.25 12 8.25Z" fill="#717171"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M12 1.25C12.4142 1.25 12.75 1.58579 12.75 2V3.28169C16.9842 3.64113 20.3589 7.01581 20.7183 11.25H22C22.4142 11.25 22.75 11.5858 22.75 12C22.75 12.4142 22.4142 12.75 22 12.75H20.7183C20.3589 16.9842 16.9842 20.3589 12.75 20.7183V22C12.75 22.4142 12.4142 22.75 12 22.75C11.5858 22.75 11.25 22.4142 11.25 22V20.7183C7.01581 20.3589 3.64113 16.9842 3.28169 12.75H2C1.58579 12.75 1.25 12.4142 1.25 12C1.25 11.5858 1.58579 11.25 2 11.25H3.28169C3.64113 7.01581 7.01581 3.64113 11.25 3.28169V2C11.25 1.58579 11.5858 1.25 12 1.25ZM4.75 12C4.75 16.0041 7.99594 19.25 12 19.25C16.0041 19.25 19.25 16.0041 19.25 12C19.25 7.99594 16.0041 4.75 12 4.75C7.99594 4.75 4.75 7.99594 4.75 12Z" fill="#717171"></path> </g></svg>
                                </span>
                                <span class="">67E Charlotte Street, Aberdeen AB25 1LU</span>
                            </div>
                            <!-- if appointment not booked and location not set.. use the below code -->
                            <div class="flex flex-col justify-center space-y-2 items-center py-2 rounded-md font-light bg-slate-200 text-slate-500 text-sm text-center">
                                <span class="text-slate-500"><span class="text-red-500">*</span> Set your location and then book training appointment! </span>
                                <div class="">
                                    <form class="flex flex-col space-y-1" action="#">
                                        <div class="flex flex-row space-x-1 w-full justify-between">
                                            <input class="py-1 px-3 text-sm rounded-l-md text-slate-500 shadow-sm appearance-none focus:outline-none ring-1 ring-yellow-500" type="text" placeholder="Enter post code">
                                            <button class="bg-yellow-500 py-1 ring-1 ring-yellow-500 rounded-r-md px-3 text-white hover:bg-red-500" type="button">Set</button>
                                        </div>
                                        <div class="relative w-full mx-auto">
                                            <div class="absolute inset-0 flex items-center">
                                              <div class="w-full border-b border-gray-300"></div>
                                            </div>
                                            <div class="relative flex justify-center">
                                                <span class="bg-slate-200 px-1 text-gray-500">or</span>
                                            </div>
                                        </div>
                                        <button class="flex flex-row justify-center items-center space-x-2 font-medium text-blue-700">
                                            <span>
                                                <svg width="15px" height="15px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#717171"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 8.25C9.92893 8.25 8.25 9.92893 8.25 12C8.25 14.0711 9.92893 15.75 12 15.75C14.0711 15.75 15.75 14.0711 15.75 12C15.75 9.92893 14.0711 8.25 12 8.25Z" fill="#717171"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M12 1.25C12.4142 1.25 12.75 1.58579 12.75 2V3.28169C16.9842 3.64113 20.3589 7.01581 20.7183 11.25H22C22.4142 11.25 22.75 11.5858 22.75 12C22.75 12.4142 22.4142 12.75 22 12.75H20.7183C20.3589 16.9842 16.9842 20.3589 12.75 20.7183V22C12.75 22.4142 12.4142 22.75 12 22.75C11.5858 22.75 11.25 22.4142 11.25 22V20.7183C7.01581 20.3589 3.64113 16.9842 3.28169 12.75H2C1.58579 12.75 1.25 12.4142 1.25 12C1.25 11.5858 1.58579 11.25 2 11.25H3.28169C3.64113 7.01581 7.01581 3.64113 11.25 3.28169V2C11.25 1.58579 11.5858 1.25 12 1.25ZM4.75 12C4.75 16.0041 7.99594 19.25 12 19.25C16.0041 19.25 19.25 16.0041 19.25 12C19.25 7.99594 16.0041 4.75 12 4.75C7.99594 4.75 4.75 7.99594 4.75 12Z" fill="#717171"></path> </g></svg>
                                            </span>
                                            <span>Set current map location</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- course lesson mode and access -->
                    <div class="flex flex-col mx-5 bg-gray-100 my-2 bg- px-5 shadow-sm py-2 rounded-md">
                        <div class="flex flex-col  space-y-2 pt-2">
                            <div class="flex flex-row justify-between items-center text-sm">
                                <div class="flex space-x-2">
                                    <h4 class="font-medium capitalize">Java</h4>
                                    <span class="font-light text-red-500">On-site Training</span>
                                </div>
                                <button class="px-3">
                                    <svg width="16px" height="20px" viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path opacity="0.4" d="M11 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22H15C20 22 22 20 22 15V13" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M16.0399 3.01976L8.15988 10.8998C7.85988 11.1998 7.55988 11.7898 7.49988 12.2198L7.06988 15.2298C6.90988 16.3198 7.67988 17.0798 8.76988 16.9298L11.7799 16.4998C12.1999 16.4398 12.7899 16.1398 13.0999 15.8398L20.9799 7.95976C22.3399 6.59976 22.9799 5.01976 20.9799 3.01976C18.9799 1.01976 17.3999 1.65976 16.0399 3.01976Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path> <path opacity="0.4" d="M14.9102 4.1499C15.5802 6.5399 17.4502 8.4099 19.8502 9.0899" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </button>
                            </div>
                            <div class="flex flex-row justify-center space-x-2 items-center py-2 rounded-md font-light bg-slate-200 text-slate-500 text-sm text-center">
                                <span>
                                    <svg height="20px" width="20px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path style="fill:#E1705C;" d="M251.587,361.931v-79.448h52.489l26.756-53.513C383.427,123.772,306.936,0,189.317,0l0,0 C71.698,0-4.793,123.772,47.802,228.97L189.317,512l62.27-124.54V361.931z"></path> <path style="fill:#FFFFFF;" d="M277.594,158.897c0-48.755-39.521-88.276-88.276-88.276s-88.276,39.521-88.276,88.276 s39.521,88.276,88.276,88.276S277.594,207.651,277.594,158.897"></path> <path style="fill:#E2DFDB;" d="M136.354,167.724c-4.882,0-8.828-3.946-8.828-8.828c0-34.066,27.727-61.793,61.793-61.793 c4.882,0,8.828,3.946,8.828,8.828c0,4.882-3.946,8.828-8.828,8.828c-24.338,0-44.138,19.8-44.138,44.138 C145.182,163.778,141.236,167.724,136.354,167.724"></path> <polygon style="fill:#25B99A;" points="410.483,282.483 410.483,361.931 322.207,361.931 322.207,282.483 251.587,282.483 251.587,512 322.207,512 322.207,432.552 410.483,432.552 410.483,512 481.104,512 481.104,282.483 "></polygon> </g> </g></svg>
                                </span>
                                <span class="">67E Charlotte Street, Aberdeen AB25 1LU</span>
                            </div>
                            <!-- if on-site address not set -->
                            <div class="flex flex-col justify-center space-y-2 items-center py-2 rounded-md font-light bg-slate-200 text-slate-500 text-sm text-center">
                                <span class=""><span class="text-red-500"> * </span> Select your nearest training location</span>
                                <form class="flex flex-col justify-center items-center space-y-1" action="#">
                                    <div class="flex flex-row space-x-1 w-10/12 justify-between">
                                        <div class="relative flex">
                                            <select class="py-1 pl-3 pr-7 w-full text-sm rounded-l-md text-slate-500 shadow-sm appearance-none focus:outline-none ring-1 ring-yellow-500" name="location" id="">
                                                <option>Branch office</option>
                                                <option value="LA123NGBT">GC-Tower Benin Edo, BA24 7NG</option>
                                                <option value="LA123NGBT">GC-Tower Ikeja Lagos, LA24 3NG</option>
                                                <option value="LA123NGBT">GC-Tower Wuse Abuja, AA24 5NG</option>
                                                <option value="LA123NGBT">GC-Tower Ibadan Oyo, IA24 9NG</option>
                                            </select>
                                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                            </div>
                                        </div>
                                        <button class="bg-yellow-500 py-1 ring-1 ring-yellow-500 rounded-r-md px-3 text-white hover:bg-red-500" type="button">Add</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- upload project -->
                <div id="upload" class="w-full">
                    <div class="flex flex-row justify-between my-5 items-center text-sm w-full py-2 italic">
                        <div class="flex flex-row justify-start space-x-5 items-center">
                            <button>
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-3.2 -3.2 38.40 38.40" enable-background="new 0 0 32 32" xml:space="preserve" width="20px" height="20px" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-3.2" y="-3.2" width="38.40" height="38.40" rx="19.2" fill="#0fb7ff" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <line fill="none" stroke="#ffffff" stroke-width="2" stroke-miterlimit="10" x1="16" y1="6" x2="16" y2="28"></line> <polyline fill="none" stroke="#ffffff" stroke-width="2" stroke-miterlimit="10" points="7.5,14 16,5.5 24.5,14 "></polyline> </g></svg>
                            </button>
                            <h4 class="font-medium text-slate-500">Upload your work!</h4>
                            <span>
                                <svg fill="#9e9e9e" width="30px" height="30px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" stroke="#9e9e9e"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12.1203717,8.82539569 C11.9406606,8.61573277 11.9649414,8.30008277 12.1746043,8.1203717 C12.3842672,7.94066062 12.6999172,7.96494139 12.8796283,8.17460431 L15.8796283,11.6746043 C16.0401239,11.8618492 16.0401239,12.1381508 15.8796283,12.3253957 L12.8796283,15.8253957 C12.6999172,16.0350586 12.3842672,16.0593394 12.1746043,15.8796283 C11.9649414,15.6999172 11.9406606,15.3842672 12.1203717,15.1746043 L14.8414611,12 L12.1203717,8.82539569 Z M8.1203717,8.82539569 C7.94066062,8.61573277 7.96494139,8.30008277 8.17460431,8.1203717 C8.38426723,7.94066062 8.69991723,7.96494139 8.8796283,8.17460431 L11.8796283,11.6746043 C12.0401239,11.8618492 12.0401239,12.1381508 11.8796283,12.3253957 L8.8796283,15.8253957 C8.69991723,16.0350586 8.38426723,16.0593394 8.17460431,15.8796283 C7.96494139,15.6999172 7.94066062,15.3842672 8.1203717,15.1746043 L10.8414611,12 L8.1203717,8.82539569 Z"></path> </g></svg>
                            </span>
                        </div>
                        <div class="flex flex-row justify-end space-x-4 items-center">
                            <span class="text-green-600 opacity-60">Completed!</span>
                            <span>
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50" xml:space="preserve" width="20px" height="20px" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle style="fill:#1dab83;" cx="25" cy="25" r="25"></circle> <polyline style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" points=" 38,15 22,33 12,25 "></polyline> </g></svg>
                            </span>
                        </div>
                    </div>
                    <!-- projects and assessment -->
                    <div class="flex flex-row justify-between items-center px-5 py-2 bg-sky-100 rounded-t-md">
                        <h4 class="font-medium capitalize text-sm">Project & Assessment</h4>
                        <span>
                            <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#b0b0b0"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7 10L12 15L17 10" stroke="#b0b0b0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
        
                            <!-- chevron up -->
                            <!-- <svg width="25px" height="25px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#b0b0b0" stroke-width="1" stroke-linecap="round" stroke-linejoin="miter"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><polyline points="17 14 12 9 7 14"></polyline></g></svg> -->
                            <!-- chevron up end -->
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- item 2 -->
        <div class="flex flex-col justify-start items-end w-full py-5 md:py-0 md:w-1/2">
            <div class="flex flex-col w-full md:pl-2 md:pr-5 lg:w-11/12 px-0 md:sticky md:top-0">
                <!-- user profile -->
                <div class="relative mb-8">
                    <div class="flex flex-row justify-between">
                        <div class="flex flex-row w-9/12 space-x-1 lg:space-x-4 items-center justify-start">
                            <h1 class="text-4xl md:text-3xl lg:text-4xl  text-red-500 text-end font-bold">Welcome!</h1>
                            <div class="flex flex-col">
                                <h5 class="font-medium text-slate-600 text-sm">Ephraim Otaigbe</h5>
                                <h5 class="text-xs text-gray-500">16:55\05 Jan\2023</h5>
                            </div> 
                        </div>
                        <!-- profile image -->
                        <div class="flex relative justify-end w-3/12">
                            <img class="w-20 h-20 ring ring-yellow-500 rounded-full" src="../assets/profilepix.jpg" alt="">
                            <span class="absolute">
                                <button>
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-3.2 -3.2 38.40 38.40" enable-background="new 0 0 32 32" xml:space="preserve" width="20px" height="20px" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-3.2" y="-3.2" width="38.40" height="38.40" rx="19.2" fill="#0fb7ff" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <line fill="none" stroke="#ffffff" stroke-width="2" stroke-miterlimit="10" x1="16" y1="6" x2="16" y2="28"></line> <polyline fill="none" stroke="#ffffff" stroke-width="2" stroke-miterlimit="10" points="7.5,14 16,5.5 24.5,14 "></polyline> </g></svg>
                                </button>
                            </span>
                        </div>
                    </div>
                    <div class="flex justify-center text-sm items-center absolute top-11 left-14 bg-opacity-40 bg-gray-800 py-5 text-white rounded-br-3xl rounded-tl-3xl w-10/12">
                        <div>Student</div>
                    </div>
                </div>
                <!-- b -->
                <div>
                    <!-- progress bar needs to be here... -->
                </div>

                <!-- schedules -->
                <div class="flex flex-col my-5 w-full shadow-md">
                    <!-- heading -->
                    <div class="flex flex-row justify-between items-center px-5 font-medium text-sm py-2 bg-sky-100 rounded-t-md">
                        <h4>My Schedule</h4>
                        <button class="text-xs bg-yellow-500 hover:bg-red-500 border text-white px-2 py-1 rounded-lg" href="#">See all</button>
                    </div>
                    <!-- to display if appointment has been booked -->
                    <div class="px-20 py-8">
                        <p class="text-sm text-gray-500 text-center font-light">
                            Your appointment for <span class="font-medium">PHP Laravel</span> is <span class="text-green-500">Tue 24-03-2023 </span> at <span class="text-red-500">6:30pm</span>
                        </p>
                    </div>
                    <!-- display below if no appoint booked yet -->
                    <div class="flex flex-col space-y-3 px-20 py-8">
                        <p class="text-sm text-gray-500 text-center font-light">
                            You currently do not have any appointment booked, Click the below to book and commerce your course!
                        </p>
                        <div class="flex justify-center items-center">
                            <button class="text-xs bg-yellow-500 uppercase hover:bg-red-500 border text-white px-5 py-3 rounded-lg" href="#">book appointment</button>
                        </div>
                    </div>
                    <!-- The commented code below will be shown on see all button is mouse on -->

                    <!-- <div class="max-h-28 overflow-y-auto">
                        <div class="flex flex-row justify-between items-center text-sm font-light px-5 py-1 border-t hover:bg-slate-100">
                            <span>HTML Introduction</span>
                            <span class="text-red-500">Tue 24-03-2023 6:30pm</span>
                        </div>
                        <div class="flex flex-row justify-between items-center text-sm font-light px-5 py-1 border-t hover:bg-slate-100">
                            <span>Tailwind CSS</span>
                            <span class="text-yellow-500">Tue 24-03-2023 6:30pm</span>
                        </div>
                        <div class="flex flex-row justify-between items-center text-sm font-light px-5 py-1 border-t hover:bg-slate-100">
                            <span>PHP Laravel</span>
                            <span class="text-yellow-500">Tue 24-03-2023 6:30pm</span>
                        </div>
                        <div class="flex flex-row justify-between items-center text-sm font-light px-5 py-1 border-t hover:bg-slate-100">
                            <span>JavaScript</span>
                            <span class="text-yellow-500">Tue 24-03-2023 6:30pm</span>
                        </div>
                        <div class="flex flex-row justify-between items-center text-sm font-light px-5 py-1 border-t hover:bg-slate-100">
                            <span>Vue.js</span>
                            <span class="text-yellow-500">Tue 24-03-2023 6:30pm</span>
                        </div>
                        <div class="flex flex-row justify-between items-center text-sm font-light px-5 py-1 border-t hover:bg-slate-100">
                            <span>SQL Database</span>
                            <span class="text-yellow-500">Tue 24-03-2023 6:30pm</span>
                        </div>
                    </div> -->
                </div>

                <!-- course modules heading -->
                <div class="flex flex-col my-5 w-full">
                    <div class="flex flex-row mb-5 justify-start items-center space-x-1">
                        <span>
                            <svg width="35px" height="25px" viewBox="0 0 128 128" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--noto" preserveAspectRatio="xMidYMid meet" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M118.03 102.32L72.29 123c-2.82 1.33-5.76 1.2-8.46-.36L6.09 93.32c-1.65-1.06-2.14-2.61-2.04-3.69c.1-1.08.35-2.25 3.25-3.09l4.28-1.58l57.92 31.57l41.16-16.82l7.37 2.61z" fill="#01579b"> </path> <path d="M71.74 119.69a7.951 7.951 0 0 1-7.26-.26L8.11 91.03c-.8-.44-1.04-1.45-.56-2.23c1.24-2.05 3.52-8.53-.24-13.91l63.66 30.65l.77 14.15z" fill="#f5f5f5"> </path> <path d="M115.59 99.98l-43.85 19.71c-1.45.63-4.34 1.75-7.67-.49c2.63.19 4.48-.9 5.43-2.67c.93-1.72.65-4.54-.48-6.13c-.69-.96-2.54-2.49-3.35-3.35L113.1 88.5c4.2-1.73 8.14.86 8.77 4.01c.7 3.56-3.84 6.47-6.28 7.47z" fill="#94c6d6"> </path> <path d="M117.78 86.96l-45.27 20.2c-2.85 1.13-6.04.98-8.77-.4L5.9 77.38c-.56-.28-1.39-1.05-1.72-2.1c-.54-1.75.14-3.95 2.19-4.65l62.68 31.95l42.92-18.37l5.81 2.75z" fill="#01579b"> </path> <path d="M121.19 89.89l-4.93-1.79l-10.16.59l-33.58 14.99c-2.85 1.13-6.04.98-8.77-.4L5.9 73.91c-1.49-.76-1.17-2.97.47-3.28l41.69-18.65c1.19-.22 2.41-.09 3.52.38l59.49 28.36s9.45 6.47 10.12 9.17z" fill="#0091ea"> </path> <path d="M105.53 88.98s6.26-2.45 11.18-2.23c4.92.22 6.63 3.67 6.63 3.67c-.93-4.23-5.3-6.39-5.3-6.39l-65-32.73c-.45-.19-2.11-.58-4.66.47c-2.06.85-8.79 4-8.79 4l65.94 33.21z" fill="#616161"> </path> <path d="M123.62 91.22c-.47-1.87-1.63-3.87-3.77-4.84c-2.82-1.27-6.84-.94-9.41.4l-4.91 2.18v3.46l6.21-2.76c6.04-2.69 8.72 1.34 8.95 2.29c.96 3.87-.9 6.11-6.39 8.63l-8.92 4.02v3.48l10.26-4.57c4.54-1.82 9.72-5.24 7.98-12.29z" fill="#424242"> </path> <g> <path fill="#01579b" d="M33.01 90.31L15.74 66.44l2.71-1.21l19.43 26.7z"> </path> </g> <g> <path fill="#01579b" d="M55.16 101.31l-3.08-2.44l53.45-10.91v1.75l-7.49 2.84z"> </path> </g> <g> <path d="M14.8 46.18L82.31 34.9l29.49 32.47c1.49 1.57.68 4.17-1.44 4.6l-69.7 14.3L14.8 46.18z" fill="#9ccc65"> </path> <path d="M110.36 69.17L41.14 83.19l-.22 3.3l69.44-14.24c1.96-.41 2.78-2.65 1.71-4.23c-.38.56-.96 1-1.71 1.15z" fill="#689f38"> </path> <path d="M114.09 84.3c.73 1.16.07 2.69-1.27 2.96L49.1 100.18c-3.83.79-7.59-1.72-7.93-5.62c-.29-3.3 1.94-6.29 5.19-6.97l61.28-13.76l6.45 10.47z" fill="#689f38"> </path> <path d="M55.59 80.1L30.21 43.78l-14.48 3.83c-3.35 3.33-2.1 8.8-2.1 8.8S35.8 91.99 39.3 96.54c3.5 4.55 8.61 3.84 8.61 3.84l8.63-1.74l-.9-16.1l-.05-2.44z" fill="#616161"> </path> <path d="M55.59 80.34L43.4 82.86c-3.33.75-3.93 3.88-3.93 3.88L10.04 44.57s-4.19 5.07-1.41 9.38L39.3 96.54c3.35 4.77 8.61 3.88 8.61 3.88l8.63-1.74l-.89-15.78l-.06-2.56z" fill="#424242"> </path> <path d="M110.25 83c.31.68-.09 1.47-.82 1.62L48.5 97.12c-3.83.79-6.54-1.75-6.4-5.21c.18-4.37 2.63-6.22 5.87-6.89l61.23-12.51s-2.08 2.34-.49 6.72c.54 1.51 1.12 2.85 1.54 3.77z" fill="#b9e4ea"> </path> <path fill="none" stroke="#424242" stroke-width="0.00128" stroke-miterlimit="10" d="M45.21 83.7L19.1 46.76"> </path> </g> <path fill="#424242" d="M47.26 67.95L13.68 51.03l-1.36 2.68l38.8 19.77z"> </path> <path fill="#689f38" d="M108.79 64.03l-2.46-2.7L68.5 78.69L47.26 68.18l3.62 5.18l14.07 7.19l10.48-1.61z"> </path> <g> <path d="M118.02 57.35L72.29 78.03c-2.82 1.33-5.76 1.2-8.46-.36L6.09 48.35c-1.65-1.06-2.14-2.61-2.04-3.69s.35-2.25 3.25-3.09l2.71-1l59.32 29.11l48.17-19.93l.52 7.6z" fill="#c62828"> </path> <path d="M71.73 74.72a7.951 7.951 0 0 1-7.26-.26L8.1 46.06c-.8-.44-1.04-1.45-.56-2.23c1.24-2.05 3.52-8.53-.24-13.91l62.24 31.66l2.19 13.14z" fill="#f5f5f5"> </path> <path d="M115.58 55.01L71.73 74.72c-1.45.63-4.34 1.75-7.67-.49c2.63.19 4.48-.9 5.43-2.67c.93-1.72.65-4.54-.48-6.13c-.69-.96-2.54-2.49-3.35-3.35l47.43-18.55c4.2-1.73 8.14.86 8.77 4.01c.7 3.56-3.84 6.47-6.28 7.47z" fill="#94c6d6"> </path> <path d="M117.78 41.99l-45.27 20.2c-2.85 1.13-6.04.98-8.77-.4L5.89 32.41c-.6-.3-1.5-1.07-1.79-2.16c-.43-1.62.13-3.75 2.26-4.59l53.01-11.23l58.41 27.56z" fill="#c62828"> </path> <path d="M121.18 44.92l-4.93-1.79l-10.16.59l-33.58 14.99c-2.85 1.13-6.04.98-8.77-.4L5.89 28.93c-1.49-.76-.96-2.77.47-3.28l41.7-18.64c1.19-.22 2.41-.09 3.52.38l59.49 28.36s9.44 6.46 10.11 9.17z" fill="#f44336"> </path> <path d="M105.53 44s5.21-1.83 10.13-1.61c4.92.22 7.69 3.05 7.69 3.05c-1.01-4.52-5.3-6.39-5.3-6.39l-65-32.73c-.45-.19-2.11-.58-4.66.47c-2.06.85-8.79 4-8.79 4L105.53 44z" fill="#616161"> </path> <path fill="#424242" d="M111.48 41.86L44.97 8.31l2.2-.99l67.64 33.9z"> </path> <path d="M123.61 46.25c-.47-1.87-1.26-3.68-3.49-4.62c-2.85-1.2-5.45-1.45-9.69.18l-4.91 2.18v3.46l6.21-2.76c3.15-1.48 7.79-1.16 8.95 2.29c1.27 3.78-.9 6.11-6.39 8.63l-8.92 4.02v3.48l10.26-4.57c4.55-1.82 9.73-5.24 7.98-12.29z" fill="#424242"> </path> </g> </g></svg>
                        </span>
                        <h4 class="font-medium text-sm text-sky-500">Course Modules</h4>
                    </div>
                    <!-- courses -->
                    <div class="flex flex-col space-y-2 ">
                        <div class="flex flex-col w-full shadow-sm">
                            <!-- course heading -->
                            <div class="flex flex-row justify-between items-center px-5 py-2 bg-sky-100 rounded-t-md">
                                <h4 class="font-medium capitalize text-sm">HTML Introduction</h4>
                                <span>
                                    <!-- <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#b0b0b0"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7 10L12 15L17 10" stroke="#b0b0b0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg> -->
                
                                    <!-- chevron up -->
                                    <svg width="25px" height="25px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#b0b0b0" stroke-width="1" stroke-linecap="round" stroke-linejoin="miter"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><polyline points="17 14 12 9 7 14"></polyline></g></svg>
                                    <!-- chevron up end -->
                                </span>
                            </div>
                            <div class="max-h-40 overflow-y-auto">
                                <div class="flex flex-row justify-between items-center text-sm font-light px-5 py-1 border-t hover:bg-slate-100">
                                    <span>HTML Introduction</span>
                                    <span>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50" xml:space="preserve" width="15px" height="15px" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle style="fill:#25AE88;" cx="25" cy="25" r="25"></circle> <polyline style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" points=" 38,15 22,33 12,25 "></polyline> </g></svg>
                                    </span>
                                </div>
                                <div class="flex flex-row justify-between items-center text-sm font-light px-5 py-1 border-t hover:bg-slate-100">
                                    <span>Tailwind CSS</span>
                                    <span>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50" xml:space="preserve" width="15px" height="15px" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle style="fill:#e6e6e6;" cx="25" cy="25" r="25"></circle> <polyline style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" points=" 38,15 22,33 12,25 "></polyline> </g></svg>
                                    </span>
                                </div>
                                <div class="flex flex-row justify-between items-center text-sm font-light px-5 py-1 border-t hover:bg-slate-100">
                                    <span>PHP Laravel</span>
                                    <span>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50" xml:space="preserve" width="15px" height="15px" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle style="fill:#e6e6e6;" cx="25" cy="25" r="25"></circle> <polyline style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" points=" 38,15 22,33 12,25 "></polyline> </g></svg>
                                    </span>
                                </div>
                                <div class="flex flex-row justify-between items-center text-sm font-light px-5 py-1 border-t hover:bg-slate-100">
                                    <span>JavaScript</span>
                                    <span>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50" xml:space="preserve" width="15px" height="15px" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle style="fill:#e6e6e6;" cx="25" cy="25" r="25"></circle> <polyline style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" points=" 38,15 22,33 12,25 "></polyline> </g></svg>
                                    </span>
                                </div>
                                <div class="flex flex-row justify-between items-center text-sm font-light px-5 py-1 border-t hover:bg-slate-100">
                                    <span>Vue.js</span>
                                    <span>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50" xml:space="preserve" width="15px" height="15px" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle style="fill:#e6e6e6;" cx="25" cy="25" r="25"></circle> <polyline style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" points=" 38,15 22,33 12,25 "></polyline> </g></svg>
                                    </span>
                                </div>
                                <div class="flex flex-row justify-between items-center text-sm font-light px-5 py-1 border-t hover:bg-slate-100">
                                    <span>SQL Database</span>
                                    <span>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50" xml:space="preserve" width="15px" height="15px" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle style="fill:#e6e6e6;" cx="25" cy="25" r="25"></circle> <polyline style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" points=" 38,15 22,33 12,25 "></polyline> </g></svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- 2 -->
                        <div class="flex flex-col w-full shadow-sm">
                            <!-- course heading -->
                            <div class="flex flex-row justify-between items-center px-5 py-2 bg-sky-100 rounded-t-md">
                                <h4 class="font-medium capitalize text-sm">R Programming</h4>
                                <span>
                                    <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#b0b0b0"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7 10L12 15L17 10" stroke="#b0b0b0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                
                                    <!-- chevron up -->
                                    <!-- <svg width="25px" height="25px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#b0b0b0" stroke-width="1" stroke-linecap="round" stroke-linejoin="miter"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><polyline points="17 14 12 9 7 14"></polyline></g></svg> -->
                                    <!-- chevron up end -->
                                </span>
                            </div>
                            <!-- <div class="max-h-28 overflow-y-auto">
                                <div class="flex flex-row justify-between items-center text-sm font-light px-5 py-1 border-t hover:bg-slate-100">
                                    <span>HTML Introduction</span>
                                    <span class="text-red-500">Tue 24-03-2023 6:30pm</span>
                                </div>
                                <div class="flex flex-row justify-between items-center text-sm font-light px-5 py-1 border-t hover:bg-slate-100">
                                    <span>Tailwind CSS</span>
                                    <span class="text-yellow-500">Tue 24-03-2023 6:30pm</span>
                                </div>
                                <div class="flex flex-row justify-between items-center text-sm font-light px-5 py-1 border-t hover:bg-slate-100">
                                    <span>PHP Laravel</span>
                                    <span class="text-yellow-500">Tue 24-03-2023 6:30pm</span>
                                </div>
                                <div class="flex flex-row justify-between items-center text-sm font-light px-5 py-1 border-t hover:bg-slate-100">
                                    <span>JavaScript</span>
                                    <span class="text-yellow-500">Tue 24-03-2023 6:30pm</span>
                                </div>
                                <div class="flex flex-row justify-between items-center text-sm font-light px-5 py-1 border-t hover:bg-slate-100">
                                    <span>Vue.js</span>
                                    <span class="text-yellow-500">Tue 24-03-2023 6:30pm</span>
                                </div>
                                <div class="flex flex-row justify-between items-center text-sm font-light px-5 py-1 border-t hover:bg-slate-100">
                                    <span>SQL Database</span>
                                    <span class="text-yellow-500">Tue 24-03-2023 6:30pm</span>
                                </div>
                            </div> -->
                        </div>
                        <!-- 3 -->
                        <div class="flex flex-col w-full shadow-sm">
                            <!-- course heading -->
                            <div class="flex flex-row justify-between items-center px-5 py-2 bg-sky-100 rounded-t-md">
                                <h4 class="font-medium capitalize text-sm">Java</h4>
                                <span>
                                    <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#b0b0b0"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7 10L12 15L17 10" stroke="#b0b0b0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                
                                    <!-- chevron up -->
                                    <!-- <svg width="25px" height="25px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#b0b0b0" stroke-width="1" stroke-linecap="round" stroke-linejoin="miter"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><polyline points="17 14 12 9 7 14"></polyline></g></svg> -->
                                    <!-- chevron up end -->
                                </span>
                            </div>
                            <!-- <div class="max-h-28 overflow-y-auto">
                                <div class="flex flex-row justify-between items-center text-sm font-light px-5 py-1 border-t hover:bg-slate-100">
                                    <span>HTML Introduction</span>
                                    <span class="text-red-500">Tue 24-03-2023 6:30pm</span>
                                </div>
                                <div class="flex flex-row justify-between items-center text-sm font-light px-5 py-1 border-t hover:bg-slate-100">
                                    <span>Tailwind CSS</span>
                                    <span class="text-yellow-500">Tue 24-03-2023 6:30pm</span>
                                </div>
                                <div class="flex flex-row justify-between items-center text-sm font-light px-5 py-1 border-t hover:bg-slate-100">
                                    <span>PHP Laravel</span>
                                    <span class="text-yellow-500">Tue 24-03-2023 6:30pm</span>
                                </div>
                                <div class="flex flex-row justify-between items-center text-sm font-light px-5 py-1 border-t hover:bg-slate-100">
                                    <span>JavaScript</span>
                                    <span class="text-yellow-500">Tue 24-03-2023 6:30pm</span>
                                </div>
                                <div class="flex flex-row justify-between items-center text-sm font-light px-5 py-1 border-t hover:bg-slate-100">
                                    <span>Vue.js</span>
                                    <span class="text-yellow-500">Tue 24-03-2023 6:30pm</span>
                                </div>
                                <div class="flex flex-row justify-between items-center text-sm font-light px-5 py-1 border-t hover:bg-slate-100">
                                    <span>SQL Database</span>
                                    <span class="text-yellow-500">Tue 24-03-2023 6:30pm</span>
                                </div>
                            </div> -->
                        </div>
                        <!-- 4 -->
                        <div class="flex flex-col w-full shadow-sm">
                            <!-- course heading -->
                            <div class="flex flex-row justify-between items-center px-5 py-2 bg-sky-100 rounded-t-md">
                                <h4 class="font-medium capitalize text-sm">UI/UX (Figma)</h4>
                                <span>
                                    <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#b0b0b0"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7 10L12 15L17 10" stroke="#b0b0b0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                
                                    <!-- chevron up -->
                                    <!-- <svg width="25px" height="25px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#b0b0b0" stroke-width="1" stroke-linecap="round" stroke-linejoin="miter"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><polyline points="17 14 12 9 7 14"></polyline></g></svg> -->
                                    <!-- chevron up end -->
                                </span>
                            </div>
                            <!-- <div class="max-h-28 overflow-y-auto">
                                <div class="flex flex-row justify-between items-center text-sm font-light px-5 py-1 border-t hover:bg-slate-100">
                                    <span>HTML Introduction</span>
                                    <span class="text-red-500">Tue 24-03-2023 6:30pm</span>
                                </div>
                                <div class="flex flex-row justify-between items-center text-sm font-light px-5 py-1 border-t hover:bg-slate-100">
                                    <span>Tailwind CSS</span>
                                    <span class="text-yellow-500">Tue 24-03-2023 6:30pm</span>
                                </div>
                                <div class="flex flex-row justify-between items-center text-sm font-light px-5 py-1 border-t hover:bg-slate-100">
                                    <span>PHP Laravel</span>
                                    <span class="text-yellow-500">Tue 24-03-2023 6:30pm</span>
                                </div>
                                <div class="flex flex-row justify-between items-center text-sm font-light px-5 py-1 border-t hover:bg-slate-100">
                                    <span>JavaScript</span>
                                    <span class="text-yellow-500">Tue 24-03-2023 6:30pm</span>
                                </div>
                                <div class="flex flex-row justify-between items-center text-sm font-light px-5 py-1 border-t hover:bg-slate-100">
                                    <span>Vue.js</span>
                                    <span class="text-yellow-500">Tue 24-03-2023 6:30pm</span>
                                </div>
                                <div class="flex flex-row justify-between items-center text-sm font-light px-5 py-1 border-t hover:bg-slate-100">
                                    <span>SQL Database</span>
                                    <span class="text-yellow-500">Tue 24-03-2023 6:30pm</span>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <!-- end of individual courses -->
                </div>
                <!-- end of module -->
            </div>
        </div>
    </div>
</section>
<!-- dashboard content end -->

@endsection
