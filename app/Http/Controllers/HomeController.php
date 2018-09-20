<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function update(Request $request) {
        DB::table('users')
            ->where('id', \Auth::user()->id)
            ->update(['name' => $request->input('name'),
                      'surname' => $request->input('surname'),
                      'email' => $request->input('email')]);
        return back()->withInput();
    }
}
