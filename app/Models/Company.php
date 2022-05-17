<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['namapt', 'namajabatan', 'keterangan'];

    public function karyawan()
    {
        return $this->hasMany('App\Models\Karyawan');


    }
}
