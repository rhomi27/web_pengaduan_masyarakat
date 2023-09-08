<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kategori;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function dsbrdAdmin(Request $request)
    {
        $alldata = [
            'laporanNew' => Pengaduan::where('status', 'new')->latest()->get(),
            'datalaporan' => Pengaduan::with(['kategori'])->latest()->get(),
            'user' => Auth::user(),
            'totalPengaduan' => Pengaduan::count(),
            'totalKategori' => Kategori::count(),
            'totalMasyarakat' => User::where('role', 'Masyarakat')->count(),
            'totalPetugas' => User::where('role', 'Petugas')->count(),
        ];
        return view('admin.index', $alldata);
    }

    public function viewDetail($id)
    {
        $alldatadetail = [
            'laporanNew' => Pengaduan::where('status', 'new')->latest()->get(),
            'id' => Auth::user()->id,
            'user' => Auth::user(),
            'detail' => Pengaduan::find($id),
            'tanggapan' => Tanggapan::with(['user', 'pengaduan'])->where('pengaduan_id', $id)->get(),
        ];

        return view('admin.detail', $alldatadetail);
    }

    public function viewAddPetugas()
    {
        $user = Auth::user();
        $laporanNew = Pengaduan::where('status', 'new')->latest()->get();
        return view('admin.add-user', compact('user', 'laporanNew'));
    }

    public function viewAddMasyarakat()
    {
        $laporanNew = Pengaduan::where('status', 'new')->latest()->get();
        $user = Auth::user();
        return view('admin.add-masyarakat', compact('user', 'laporanNew'));
    }

    public function viewAddKategori()
    {
        $laporanNew = Pengaduan::where('status', 'new')->latest()->get();
        $user = Auth::user();
        return view('admin.add-categori', compact('user', 'laporanNew'));
    }

    public function viewDataPetugas()
    {
        $laporanNew = Pengaduan::where('status', 'new')->latest()->get();
        $user = Auth::user();
        $dataPetugas = User::where('role', 'Petugas')->latest()->get();
        return view('admin.data.data-petugas', compact('user', 'dataPetugas', 'laporanNew'));
    }

    public function viewDataMasyarakat()
    {
        $laporanNew = Pengaduan::where('status', 'new')->latest()->get();
        $user = Auth::user();
        $dataMasyarakat = User::where('role', 'Masyarakat')->latest()->get();
        return view('admin.data.data-masyarakat', compact('user', 'dataMasyarakat', 'laporanNew'));
    }
    public function viewUpdateUser($id)
    {
        $laporanNew = Pengaduan::where('status', 'new')->latest()->get();
        $user = Auth::user();
        $du = User::find($id);
        return view('admin.data.update.updateUser', compact('user', 'du', 'laporanNew'));
    }

    public function viewDataKategori()
    {
        $laporanNew = Pengaduan::where('status', 'new')->latest()->get();
        $user = Auth::user();
        $dataKategori = Kategori::all();
        return view('admin.data.data-kategori', compact('user', 'dataKategori', 'laporanNew'));
    }
    public function viewUpdateKategori($id)
    {
        $laporanNew = Pengaduan::where('status', 'new')->latest()->get();
        $user = Auth::user();
        $dk = Kategori::find($id);
        return view('admin.data.update.updateKategori', compact('user', 'dk', 'laporanNew'));
    }

    public function viewPengaduan($id)
    {
        $userid = User::find($id);
        $laporanNew = Pengaduan::where('status', 'new')->latest()->get();
        $user = Auth::user();
        $allpost = Pengaduan::where('user_id', $id)->get();
        return view('admin.data.all-post-user', compact('user', 'laporanNew', 'allpost', 'userid'));
    }

    public function viewAllPengaduan()
    {
        $laporanNew = Pengaduan::where('status', 'new')->latest()->get();
        $user = Auth::user();
        $laporanProses = Pengaduan::where('status', 'proses')->latest()->get();
        $laporanSelesai = Pengaduan::where('status', 'selesai')->latest()->get();
        $laporanDitolak = Pengaduan::where('status', 'ditolak')->latest()->get();
        return view('admin.data.all-pengaduan', compact('user','laporanNew','laporanProses','laporanSelesai','laporanDitolak',));
    }

    public function viewProfile()
    {
        $user = Auth::user();
        $laporanNew = Pengaduan::where('status', 'new')->latest()->get();
        return view('admin.profile', compact('user','laporanNew'));
    }

}