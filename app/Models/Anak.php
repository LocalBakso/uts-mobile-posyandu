<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anak extends Model
{
    use HasFactory;

    protected $table = 'anak';
    protected $primaryKey = 'id_anak';

    protected $fillable = [
        'id_ibu',
        'nama_anak',
        'tgl_lahir',
        'jenis_kelamin',
    ];
}