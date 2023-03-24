<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;
use Illuminate\Http\Request;
Use App\Models\User;

class CourseController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
        return view('courses', ['courses'=>$courses]);
    }

    public function courses(){
        $roles = Auth::user()->roles;
        return view('admin.courses.index', ['roles'=>$roles]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Auth::user()->roles;
        return view('admin.courses.create', ['roles'=>$roles]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        //dd(request()->all());

        $inputs = request()->validate([

            'name'=> 'required|min:2|max:50',
            'tag'=> 'required|min:2|max:50',
            'description'=> 'required',
            'duration'=> 'required',
            'price'=> 'required',
            'course_image'=> 'file'

        ]);

        if(request('course_image')){

            $inputs['course_image'] = request('course_image')->store('images');

        }

        auth()->users()->courses()->create($inputs);

        return redirect()->route('admin.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
