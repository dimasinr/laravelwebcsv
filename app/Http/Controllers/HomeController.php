<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
     return view('home'); 
    }

    public function index()
    {
        dd();
        $nginx14 = DB::table('nginx14')->get();

        return response()->json([
            'nginx14' => $nginx14
        ], 200);
    }
}
