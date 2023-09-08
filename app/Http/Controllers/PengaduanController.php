<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{

    public function tambah(Request $request)
    {
        // Validasi
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'isi' => 'required',
            'kategori_id' => 'required|exists:kategoris,id',
            'foto' => 'file|mimes:jpg,jpeg,png,mp4',
        ]);
    
        // ambil id user yg login 
        $validatedData['user_id'] = auth()->user()->id;
    
        // Penanganan media (gambar atau video)
        if ($request->hasFile('foto')) {
            $mediaFile = $request->file('foto');
            $mediaPath = 'media/';
    
            // cek jenis file
            if ($mediaFile->getClientOriginalExtension() === 'mp4') {
                $mediaPath .= 'videos/';
            }
    
            $mediaFileName = 'Media_' . time() . '.' . $mediaFile->getClientOriginalName();
            $mediaFile->move($mediaPath, $mediaFileName);
    
            // simpan nama kedalam data base
            $validatedData['foto'] = $mediaFileName;
        } else {
            // Jika kosong
            $validatedData['foto'] = 'default.jpg';
        }
    
        // Menyimpan data pengaduan
        Pengaduan::create($validatedData);
    
        return redirect()->intended('/index')->with('berhasil', 'Data berhasil ditambahkan');
    }
    
}