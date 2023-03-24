<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
Use App\Models\User;
use Illuminate\Support\Str;

class dashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $roles = Auth::user()->roles;

        foreach($roles as $role){
            $admin = $role->name;

            if(Str::lower($admin) == 'global'){

                return view('admin.index', ['roles'=>$roles]);

            }
        }

        return view('dashboard', ['roles'=>$roles]);
        
    }
}
