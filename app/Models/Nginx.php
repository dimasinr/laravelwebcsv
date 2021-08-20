<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nginx extends Model
{
    protected $table = "nginx";

    protected $fillable = [
        'ip_address',
        'date',
        'method',
        'status_server',
        'ping_ms',
        'site_request',
        'rt',
        'uct',
        'uht',
        'urt',
        'gz',
    ];

    public function index()
    {
        $webcsv = Nginx::all();

        return response()->json([
            'home' => $webcsv
        ], 200);
    }
}
