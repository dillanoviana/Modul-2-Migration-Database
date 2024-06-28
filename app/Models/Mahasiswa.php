<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $fisilable = ['nama', 'nim', 'email', 'alamat'];
    public function perkuliahans()
    
    {
        return $this->hasMany(perkuliahan::class);
    }
}
