<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Trains;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $today = date('2023-06-29');
        $trains = Trains::where('data_partenza', '=', 'today')->get();
        // $trains = Trains::all(["Compagnia", "Codice_treno", "stazione_partenza", "stazione_arrivo","data_partenza"]);
        return view('welcome', compact("trains"));
    }
}
