<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class m_subkriteria extends Model
{
    use HasFactory;

    public $table = 'm_subkriteria';

    protected $fillable = [
        'id', 'id_kriteria', 'nama_subkriteria', 'bobot_subkriteria'
    ];

    public function allData()
    {
        return DB::table('m_subkriteria')->get();
    }

    public function addData($data)
    {
        DB::table('m_subkriteria')->insert($data);
    }
}
