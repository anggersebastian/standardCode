<?php

namespace App\Http\Repository;

use App\Karyawan;

class KaryawanRepository 
{
    public function all(){
        return Karyawan::get();
    }

    public function store(array $karyawan){
        // $karyawan = new Karyawan;
        return Karyawan::create($karyawan);
    }
}
