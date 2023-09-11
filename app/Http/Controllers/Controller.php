<?php

namespace App\Http\Controllers;

use App\Models\m_nilai_smart;
use App\Models\m_alternatif;
use App\Models\m_kriteria;
use App\Models\m_bobot;
use App\Models\m_ranking;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $this->m_ranking = new m_ranking();
    }

    public function index()
    {
        $data = [
            'ranking' => $this->m_ranking->rank()
            // 'ranking' => DB::table('')
        ];

        // print_r($data['ranking']);
        // die;
        return view('welcome', $data);
    }
}
