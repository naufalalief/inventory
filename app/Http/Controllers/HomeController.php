<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
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
        // dd(User::permission('create')->get());
        // $user = User::role('user')->get();
        return view('home');
    }
    public function create()
    {
        return view('create');
    }
    public function read()
    {
        return view('read');
    }
    public function update()
    {
        return view('update');
    }
    public function delete()
    {
        return view('delete');
    }
}
