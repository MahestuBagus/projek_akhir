<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa11 extends Model
{
    use HasFactory;
    protected $fillable = [
        'nisn',
        'nama',
        'kelas',
    ];
    protected $table = 'siswa11';
    
}
