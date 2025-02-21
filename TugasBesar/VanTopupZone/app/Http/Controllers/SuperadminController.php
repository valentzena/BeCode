<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperadminController extends Controller
{
    public function index() {
        return view('admin');
    }
    public function ml() {
        return view('konten');
    }
    public function pembayaran() {
        return view('bayar');
    }
}
