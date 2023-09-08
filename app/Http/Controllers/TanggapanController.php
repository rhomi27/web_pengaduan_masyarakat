<?php

namespace App\Http\Controllers;

use App\Models\Tanggapan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TanggapanController extends Controller
{
    //upload komen
    public function upComent(Request $request){
        // id user yg login
        $user_id = Auth::user()->id;  

        $validatedData = $request->validate([
            'tanggapan' => 'required',
            'pengaduan_id' => 'required',
        ]);
        
        $data = [
            'user_id' => $user_id,
            'pengaduan_id' =>  $validatedData['pengaduan_id'], //ambil id dari input
            'tanggapan' => $validatedData['tanggapan'],
        ];
        Tanggapan::create($data);
    
        return redirect()->back()->with('success','Anda Berhasil Memberi Tanggapan');
    }

    public function hapusTanggapan($id){
        $tanggapan = Tanggapan::find($id);
        $tanggapan->delete();
        return redirect()->back();
    } 

}
