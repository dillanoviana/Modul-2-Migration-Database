<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perkuliahan extends Model
{
    use HasFactory;
    protected $fisilable = ['mahasiswa_id', 'dosen_id', 'matakuliah_id'];

    public function Mahasiswa()
    
    {
        return $this->belongsTo(Mahasiswa::class);
    }

    public function Dosen()
    
    {
        return $this->belongsTo(Dosen::class);
    }

    public function Matakuliah()
    
    {
        return $this->belongsTo(Matakuliah::class);
    }
}
