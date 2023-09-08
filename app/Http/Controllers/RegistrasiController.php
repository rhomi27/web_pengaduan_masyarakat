<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class RegistrasiController extends Controller
{
    //
    public function register(Request $request)
    {
        // validasi
        $request->validate([
            'textNik' => 'unique:users,nik|max:16|min:16',
            'textEmail' => 'unique:users,email|email:filter',
            'textPassword' => 'min:6',
            'fotoProfil' => 'file|mimes:jpeg,png,jpg,gif',
        ]);

        $filept = $request->file('fotoProfil');
        if ($request->hasFile('fotoProfil')) {

            $filename = pathinfo($filept, PATHINFO_FILENAME);
            $extensiFile = $filept->getClientOriginalExtension();
            $foto = 'Profil' . time() . '.' . $extensiFile;
            $filept->move('ppuser', $foto);
        } else {
            $foto = 'profil_default.jpg';
        }

        // proses
        $dataUser = [
            'nik' => $request->textNik,
            'nama' => $request->textNama,
            'alamat' => $request->textAlamat,
            'kelamin' => $request->JK,
            'email' => $request->textEmail,
            'password' => bcrypt($request->textPassword),
            'foto' => $foto,
            'role' => 'Masyarakat'

        ];
        User::create($dataUser);

        $request->session()->flash('success', 'Registrasi berhasil, silahkan login');

        return redirect('/viewlogin');
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        // Jika ada gambar yang diunggah
        if ($request->hasFile('profile_picture')) {
            // Menghapus gambar lama jika ada
            if ($user->foto !== 'profil_default.jpg') {
                File::delete(public_path('ppuser/' . $user->foto));
            }

            // Mengunggah gambar baru
            $filename = 'Profil' . time() . '.' . $request->file('profile_picture')->getClientOriginalExtension();
            $request->file('profile_picture')->move('ppuser', $filename);
            $user->foto = $filename;
        }

        // Memperbarui informasi profil
        $user->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'kelamin' => $request->kelamin,
            'email' => $request->email,
        ]);

        return redirect()->back()->with('success', 'Profil Berhasil di Perbaharui');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'new_password' => 'required|min:6',
            'password_confirm' => 'required|min:6',
        ]);

        if ($request->new_password == $request->password_confirm) {

            $user = Auth::user();

            $password = bcrypt($request->new_password);
            $user->password = $password;
            $user->save();
            return redirect()->back()->with('success', 'Password berhasil di perbarui');
        } else {
            return redirect()->back()->with('error', 'Kata sandi tidak cocok');
        }
    }
    // public function updatePassword(Request $request)
    // {
    //     $user = Auth::user();
    //     $request->validate([
    //         'new_password' => 'required|min:6|confirmed',
    //     ]);

    //     $user->password = bcrypt($request->input('new_password'));
    //     $user->save();

    //     return redirect()->back()->with('success', 'Password Berhasil di Perbaharui');
    // }
}