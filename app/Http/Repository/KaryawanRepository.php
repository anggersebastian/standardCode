<?php

namespace App\Http\Repository;

use App\Karyawan;

class KaryawanRepository 
{
    public function all(){
        return Karyawan::get();
    }

    public function store(array $karyawan){
        return Karyawan::create($karyawan);
    }

    public function get($id){
        return Karyawan::find($id);
    }

    public function update($id, array $karyawan){
        return Karyawan::find($id)->update($karyawan);
    }

    public function destroy($id){
        return Karyawan::destroy($id);
    }
}
