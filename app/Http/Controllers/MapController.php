<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class MapController extends Controller
{
    public function showMap()
    {
        return view('map');
    }

    // db query builder
    public function data(){
       // $data = DB::table('users')->where('name', 'data')->value('email');
       // $data = DB::table('users')->pluck('email');

       // return view('welcome', ['data'=>$data]);
    }
}
