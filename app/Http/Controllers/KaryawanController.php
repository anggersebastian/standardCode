<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Repository\KaryawanRepository;

class KaryawanController extends Controller
{
    protected $karyawan;

    public function __construct(KaryawanRepository $karyawan){
        $this->karyawan = $karyawan;
    }

    public function index(){
        $getKaryawan = $this->karyawan->all();
        return view('Karyawan.index', compact('getKaryawan'));
    }

    public function edit($id){
        $editKaryawan = $this->karyawan->get($id);
        return view('Karyawan.edit', compact('editKaryawan','id'));
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(),
        [
            'name' => 'required|max:50',
            'phone' => 'required|numeric|min:8|max:11',
            'email' => 'required|email',
            'team' => 'required'
        ]
        );

        $this->karyawan->store($request->all());
        return redirect()->route('karyawan.index')->with(['success' => 'Data Has Been Added !']);
    }

    public function update($id, Request $request){
        $validator = Validator::make($request->all(),
        [
            'name' => 'required|max:50',
            'phone' => 'required|numeric|min:8|max:11',
            'email' => 'required|email',
            'team' => 'required'
        ]
        );

        $this->karyawan->update($id, $request->all());
        return redirect()->route('karyawan.index')->with(['success' => 'Data Has Been Updated !']);
    }
    
    public function destroy($id){
        $this->karyawan->destroy($id);
        return redirect()->route('karyawan.index')->with(['failed' => 'Data Has Been Deleted']);
    }
}
