<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
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
        $databases = $this->getAllDataBaseName();   
        return view('home', compact('databases'));
    }

    public function getAllDataBaseName() {
        return DB::select('SELECT datname as name FROM pg_database WHERE datistemplate = false;');
    }

    public function createDb(Request $request) {
        $input = $request->all();
        echo '<pre>'; print_r($input); die;
    }
}
