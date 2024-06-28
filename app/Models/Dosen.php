<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $fisilable = ['nama', 'nidn', 'email', 'alamat'];
    public function perkuliahans()

    {
        return $this->hasMany(perkuliahan::class);
    }
}
