<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        $dataUser = [
            'nik' => '1234567890098765',
            'nama' => 'Admin',
            'alamat' => 'dusun.kalapasabrng rt6 rw7 kujangsari ',
            'kelamin' => 'Pria',
            'email' => 'admin1@gmail.com',
            'password' => bcrypt('admin123'),
            'foto' => 'profil_default.jpg',
            'role' => 'Admin'

        ]; 
        User::create($dataUser);
    }
}
