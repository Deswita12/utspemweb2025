<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class DataSiswa extends Model
{
    use HasFactory;

    protected $table = 'murid';
    protected $fillable = [
        'name',
        'gender',
        'usia',
        'sesi',
    ];
}
