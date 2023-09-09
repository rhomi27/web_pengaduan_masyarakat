<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kategori;
use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class AdminCrudController extends Controller
{
    //crud kategori
    public function addKategori(Request $request)
    {
        $kategori = [
            'nama_kategori' => $request->nama_kategori,
            'deskripsi' => $request->deskripsi,
        ];
        Kategori::create($kategori);

        return redirect('/datakategori')->with('success', 'Kategori Berhasil di Tambahkan');
    }
    public function updateKategori(Request $request, $id)
    {
        $kategori = Kategori::find($id);
        $kategori->update($request->except('_token'));
        return redirect()->back()->with('success', 'Katetegori Berhasil di Perbaharui');
    }


    public function deleteKategori($id)
    {
        $kategori = Kategori::find($id);
        $kategori->delete();
        return redirect()->back();
    }

    // crud user
    public function addPetugas(Request $request)
    {
        $request->validate([
            'nik' => 'unique:users,nik|max:16|min:16',
            'email' => 'unique:users,email|email:filter',
            'password' => 'min:6'
        ]);

        $filept = $request->file('foto');
        if ($request->hasFile('foto')) {

            $filename = pathinfo($filept, PATHINFO_FILENAME);
            $extensiFile = $filept->getClientOriginalExtension();
            $foto = 'Profil' . time() . '.' . $extensiFile;
            $filept->move('ppuser', $foto);
        } else {
            $foto = 'profil_default.jpg';
        }

        // proses
        $dataUser = [
            'nik' => $request->nik,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'kelamin' => $request->kelamin,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'foto' => $foto,
            'role' => $request->role,

        ];
        User::create($dataUser);

        return redirect('/datapetugas')->with('success', 'Data telah berhasil di tambahkan.');
    }

    public function addMasyarakat(Request $request)
    {
        $request->validate([
            'nik' => 'unique:users,nik|max:16|min:16',
            'email' => 'unique:users,email|email:filter',
            'password' => 'min:6'
        ]);

        $filept = $request->file('foto');
        if ($request->hasFile('foto')) {

            $filename = pathinfo($filept, PATHINFO_FILENAME);
            $extensiFile = $filept->getClientOriginalExtension();
            $foto = 'Profil' . time() . '.' . $extensiFile;
            $filept->move('ppuser', $foto);
        } else {
            $foto = 'profil_default.jpg';
        }

        // proses
        $dataUser = [
            'nik' => $request->nik,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'kelamin' => $request->kelamin,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'foto' => $foto,
            'role' => 'Masyarakat',

        ];
        User::create($dataUser);

        return redirect('/datamasyarakat')->with('success', 'Data telah berhasil di tambahkan.');
    }
    public function updateUser(Request $request, $id)
    {
        $user = User::find($id);
        $user->update($request->except('_token'));
        if ($request->hasFile('foto')) {
            // hapus foto lama jika bukan default
            if ($user->foto !== 'profil_default.jpg') {
                File::delete(public_path('ppuser/' . $user->foto));
            }

            // kirim dan simpan foto baru
            $file = $request->file('foto');
            $filename = 'Profil' . time() . '.' . $file->getClientOriginalExtension();
            $file->move('ppuser', $filename);

            // Update the user's foto attribute
            $user->update(['foto' => $filename]);
        }
        return redirect()->back()->with('success', 'Profil Berhasil Diperbarui');
    }

    public function updatePassword(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user) {
            abort(404, 'User not found');
        }

        $request->validate([
            'new_password' => 'required|min:6|confirmed',
        ]);

        $user->password = bcrypt($request->input('new_password'));
        $user->save();

        return redirect()->back()->with('success', 'Password Berhasil di Perbaharui');
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
    }

    public function updateStatus(Request $request, $id)
    {
        $data = Pengaduan::find($id);
        $data->status = $request->status;
        $data->save();
        return redirect()->back()->with('success', 'Status berhasil di update');
    }

    public function generatePeriode(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');
        $time = date('d F Y');
        $request->validate([
            'selectBulan' => 'required',
            'selectTahun' => 'required',
            'selectStatus'=> 'required',
        ]);
    
        // Ambil nilai inputan form
        $bulan = $request->input('selectBulan');
        $tahun = $request->input('selectTahun');
        $status = $request->input('selectStatus');
    
        // Query ke database untuk mengambil data pengaduan
            $reports = Pengaduan::whereMonth('created_at', $bulan)
                ->whereYear('created_at', $tahun)
                ->where('status', $status)
                ->get();


        return view('admin.data.generate.periode', compact('reports','tahun','bulan','time'));
    }
    public function generateRekap(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');
        $time = date('d F Y');
        $request->validate([
            'selectBulan' => 'required',
            'selectTahun' => 'required',
        ]);
    
        // Ambil nilai inputan form
        $bulan = $request->input('selectBulan');
        $tahun = $request->input('selectTahun');
    
        // Query ke database untuk mengambil data pengaduan
            $reports = Pengaduan::whereMonth('created_at', $bulan)
                ->whereYear('created_at', $tahun)
                ->get();

                $kategoriCounts = Pengaduan::select('kategori_id')
                ->whereMonth('created_at', $bulan)
                ->whereYear('created_at', $tahun)
                ->groupBy('kategori_id')
                ->selectRaw('count(*) as count')
                ->get();


        return view('admin.data.generate.rekap', compact('reports','tahun','bulan','time','kategoriCounts'));
    }


}