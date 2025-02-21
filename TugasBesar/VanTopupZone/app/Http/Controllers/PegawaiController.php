<?php

namespace App\Http\Controllers;

use App\Models\gamemodel;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index() {
        $game = gamemodel::all(); // Inisialisasi variabel $layanan
        return view('user', ['game' => $game]);
    }
}
