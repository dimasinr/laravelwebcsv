<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UwsgiExport;
use App\Models\Uwsgi;

class UwsgiController extends Controller
{
    public function uwsgi()
    {

        $uwsgi = DB::table('uwsgi')->get();
        $uwsgi = DB::table('uwsgi')->paginate(20);
        return view('uwsgi', ['uwsgi' => $uwsgi]);

    }

    public function exportexcel()
	{
		return Excel::download(new UwsgiExport, 'uwsgi.csv');
    }

    public function searchuwsgi(Request $request)
    {

        $keyword = $request->searchuwsgi;
        $uwsgi = Uwsgi::where('address_space_usage', 'like', "%" . $keyword . "%")->paginate(20);
        return view('uwsgi', compact('uwsgi'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

}
