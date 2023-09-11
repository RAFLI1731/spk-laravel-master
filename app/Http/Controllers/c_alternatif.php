<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\m_alternatif;
use Illuminate\Support\Facades\Auth;

class c_alternatif extends Controller
{
    public function __construct()
    {
        $this->m_alternatif = new m_alternatif();
    }

    public function index()
    {
        $alternatif = [
            'alternatif' => $this->m_alternatif->allData(),
        ];
        return view('dashboards.admin.alternatif', $alternatif);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_alternatif' => 'required',
            'user_id' => 'required',
        ]);

        $data = [
            'nama_alternatif' => $request->nama_alternatif,
            'user_id' => $request->user_id,
        ];
        $this->m_alternatif->addData($data);

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_alternatif' => 'required'
        ]);

        $data = [
            'nama_alternatif' => $request->nama_alternatif
        ];

        $this->m_alternatif->editData($id, $data);

        return redirect()->back();
    }

    public function destroy($id)
    {
        $this->m_alternatif->deleteData($id);

        return redirect('/admin/utility');
    }
}
