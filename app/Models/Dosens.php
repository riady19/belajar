<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosens extends Model
{
    use HasFactory;
    protected $table = 'dosens';
    protected $fillable = [
        'nama',
        'nip',
        'email',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'no_hp',
    ];
      protected $cast = [
        'tangal_lahir' => 'date'
    ];
}
