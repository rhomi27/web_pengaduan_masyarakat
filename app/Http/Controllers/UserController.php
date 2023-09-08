<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function tampil_hal_utama(Request $request)
    {
        $jumlahData =[
            'totalPengaduan' => Pengaduan::count(),
            'totalKategori' => Kategori::count(),
            'totalMasyarakat' => User::where('role', 'Masyarakat')->count(),
            'totalPetugas' => User::where('role', 'Petugas')->count(),
        ];
        return view('index',$jumlahData);
    }
    public function viewLogin(Request $request)
    {
        return view('login');
    }
    public function index(Request $request)
    {
        $dataPengaduan = [
            'dataPengaduan' => Pengaduan::with(['kategori', 'user'])->where('user_id', auth()->user()->id)->paginate(5),
            'title' => 'APM |Pengaduanku',
            'dataKategori' => Kategori::all()
        ];
        return view('user.pengaduanku', $dataPengaduan);
    }
    public function detail($id)
    {
        $alldatadetail = [
            'id' => Auth::user()->id,
            'detail' => Pengaduan::find($id),
            'tanggapan' => Tanggapan::with(['user', 'pengaduan'])->where('pengaduan_id', $id)->get(),
        ];

        return view('user.detail', $alldatadetail);
    }
    public function profil(Request $request)
    {
        $user = Auth::user();

        return view('user.profile', compact('user'));
    }

}