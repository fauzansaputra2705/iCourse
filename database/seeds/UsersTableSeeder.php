<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =
        [
            ['id' => 1, 'name'=>'Siswa', 'email' => 'siswa@gmail.com', 'password' => bcrypt('siswa@123'), 'no_akun' => '123456789', 'level' => 'siswa', /*'email_verified_at'=> date("Y-m-d h:i:sa")*/],

            ['id' => 2, 'name'=>'Guru', 'email' => 'guru@gmail.com', 'password' => bcrypt('guru@123'), 'no_akun' => '123456789', 'level' => 'guru', /*'email_verified_at'=> date("Y-m-d h:i:sa")*/],

            ['id' => 3, 'name'=>'Sekolah', 'email' => 'sekolah@gmail.com', 'password' => bcrypt('sekolah@123'), 'no_akun' => '123456789', 'level' => 'sekolah', /*'email_verified_at'=> date("Y-m-d h:i:sa")*/],

            ['id' => 4, 'name'=>'Admin', 'email' => 'admin@gmail.com', 'password' => bcrypt('admin@123'), 'no_akun' => '123456789', 'level' => 'admin', /*'email_verified_at'=> date("Y-m-d h:i:sa")*/],
            
        ];
        User::insert($data);
    }
}
