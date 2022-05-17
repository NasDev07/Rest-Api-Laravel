<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Karyawan extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'jenis_kelamin', 'nip', 'status', 'alamat', 'jabatan_id'];


    public function jabatan()
    {
        return $this->belongsTo('App\Models\Jabatan');
    }


}
