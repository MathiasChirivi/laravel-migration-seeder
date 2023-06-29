<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Trains;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $today = date('2023-06-29');
        $trains = [
                'trainsToday' => Trains::where('data_partenza', '=', $today)->get(),
                'allTrains' => Trains::all(["Compagnia", "Codice_treno", "stazione_partenza", "stazione_arrivo","data_partenza","orario_partenza","in_orario","viaggio_cancellato"])
        ]; 
        return view('welcome', $trains);
    }
}
