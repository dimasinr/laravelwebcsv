<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\NginxExport;
use App\Models\Nginx;
use Illuminate\Http\Request;

class NginxController extends Controller
{
    public function nginx()
    {
        $nginx = DB::table('nginx')->get();
        $nginx = DB::table('nginx')->paginate(20);
        return view('nginx', ['nginx' => $nginx]);
    }

    public function exportexcel()
	{
		return Excel::download(new NginxExport, 'nginx.csv');
    }

public function search(Request $request)
{
    $keyword = $request->search;
    $nginx = Nginx::where('ip_address', 'like', "%" . $keyword . "%")->paginate(20);
    return view('nginx', compact('nginx'))->with('i', (request()->input('page', 1) - 1) * 5);
}

}
