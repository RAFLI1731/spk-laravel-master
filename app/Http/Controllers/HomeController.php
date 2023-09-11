<?php

namespace App\Http\Controllers;

use App\Models\m_nilai_smart;
use App\Models\m_alternatif;
use App\Models\m_kriteria;
use App\Models\m_bobot;
use App\Models\m_ranking;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
