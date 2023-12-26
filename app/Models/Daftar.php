<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'email',
        'rumahsakit',
        'pekerjaan',
        'golongandarah',
        'filekesehatan',
        'riwayatkesehatan',
    ];

}
