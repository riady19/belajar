<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\FileUpload;

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
        'gambar',
    ];
      protected $cast = [
        'tangal_lahir' => 'date'
    
    ];
}
