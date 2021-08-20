<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uwsgi extends Model
{
    protected $table = "uwsgi";

    protected $fillable = [
        'address_space_usage',
        'rss_usage',
        'pid'
    ];

    public function index()
    {
        $webcsv = Nginx::all();

        return response()->json([
            'home' => $webcsv
        ], 200);
    }
}
