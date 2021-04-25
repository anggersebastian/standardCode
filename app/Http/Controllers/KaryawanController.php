<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator\Validator;
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

    // public function create(){
    //     return view('Karyawan.create');
    // }

    public function edit($id){
        $karyawan = Karyawan::find($id);
        return view('Karyawan.edit', compact('Karyawan','id'));
    }

    public function store(Request $request){
        // $request->validate($request, [
        //     'name' => 'required',
        //     'email' => 'email',
        //     'phone' => 'required|max:20',
        //     'team' => 'required'
        // ]);
        
        $this->karyawan->store($request->all());

        return redirect()->route('karyawan.index');
    }

    public function update(Request $request, $id){
        $karyawan = Karyawan::find($id);
        $karyawan->title = $request->get('title');
        $karyawan->post = $request->get('post');
        $karyawan->save();

        return redirect()->route('Karyawan.index');
    }
    
    public function destroy($id){
        $karyawan = Karyawan::find($id);
        $karyawan->delete();

        return redirect()->route('karyawan.index');
    }
}
