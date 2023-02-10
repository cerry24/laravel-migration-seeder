<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $trains = Train::where('orario_di_partenza', '>', date('Y-m-d'))->get();
        return view('home', compact('trains'));
    }
}
