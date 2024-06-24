<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class studentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            [
                'nama' => 'Ryan Dhika Permana',
                'nim' => '185150400111043',
                'email' => 'ryandhikapermana10@gmail.com',
                'jurusan' => 'Sistem Informasi'
            ],
            [
                'nama' => 'Wildan Arrizal Wahyu Sutomo',
                'nim' => '185150407111019',
                'email' => 'wildanarrizal@gmail.co.id',
                'jurusan' => 'Peternakan'
            ],
            [
                'nama' => 'Yudi Agustri Jaya Pardede',
                'nim' => '185150407111020',
                'email' => 'yudipardede@gmail.com',
                'jurusan' => 'Teknik Perkapalan'
            ],
            [
                'nama' => 'Ahmad Azmi Abdurrahim',
                'nim' => '185150400111046',
                'email' => 'azmiabdurr@wordpress.com',
                'jurusan' => 'Hukum'
            ],
            [
                'nama' => 'Rizqi Ahmad Abdillah',
                'nim' => '185150407111018',
                'email' => 'pras@yahoo.com',
                'jurusan' => 'Teknik Informatika'
            ],
            [
                'nama' => 'Ilham Hananto Wibisono',
                'nim' => '185150400111029',
                'email' => 'ilhamhananto@gmail.com',
                'jurusan' => 'Psikologi'
            ],
            [
                'nama' => 'Wisang Jati Ismuwardoyo',
                'nim' => '185150400111026',
                'email' => 'wisangjati@wordpress.com',
                'jurusan' => 'Farmasi'
            ],
            [
                'nama' => 'Muhammad Rizqi Ramadhan',
                'nim' => '185150400111054',
                'email' => 'rizqirakun@yahoo.com',
                'jurusan' => 'Teknik Industri'
            ],
            [
                'nama' => 'Tri Efendi Maulana',
                'nim' => '185150407111017',
                'email' => 'trief@gmail.com',
                'jurusan' => 'Kedokteran'
            ]
        ]);
    }
}
