<?php

namespace App\Http\Controllers;

use App\Models\Pemain;
use Illuminate\Http\Request;

class PemainController extends Controller
{
    public function index()
    {
        $pemain = Pemain::all();

        return view('pemain.index', compact('pemain'));
    }
}
