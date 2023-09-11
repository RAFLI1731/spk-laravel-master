<?php

namespace App\Http\Controllers;

use App\Models\m_kriteria;
use Illuminate\Http\Request;
use App\Models\m_subkriteria;

class c_subkriteria extends Controller
{
    public function __construct()
    {
        $this->m_subkriteria = new m_subkriteria();
        $this->m_kriteria = new m_kriteria();
    }

    public function index()
    {
        $subkriteria = [
            'subkriteria' => $this->m_subkriteria->allData(),
        ];
        $kriteria = [
            'kriteria' => $this->m_kriteria->allData()
        ];
        return view('dashboards.admin.subkriteria', $subkriteria, $kriteria);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_kriteria' => 'required',
            'nama_subkriteria' => 'required',
            'bobot_subkriteria' => 'required',
        ]);

        $data = [
            'id_kriteria' => $request->id_kriteria,
            'nama_subkriteria' => $request->nama_subkriteria,
            'bobot_subkriteria' => $request->bobot_subkriteria,
        ];
        $this->m_subkriteria->addData($data);

        return redirect()->route('admin.sub.index');
    }
}
