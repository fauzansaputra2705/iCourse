<?php

use Illuminate\Database\Seeder;
use App\m_Provinsi;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $input_provinsi = array (
          array (
            'id' => 11,
            'nama_provinsi' => 'ACEH',
            'created_at' => NULL,
            'updated_at' => NULL,
        ),
          array (
            'id' => 12,
            'nama_provinsi' => 'SUMATERA UTARA',
            'created_at' => NULL,
            'updated_at' => NULL,
        ),
          array (
            'id' => 13,
            'nama_provinsi' => 'SUMATERA BARAT',
            'created_at' => NULL,
            'updated_at' => NULL,
        ),
          array (
            'id' => 14,
            'nama_provinsi' => 'RIAU',
            'created_at' => NULL,
            'updated_at' => NULL,
        ),
          array (
            'id' => 15,
            'nama_provinsi' => 'JAMBI',
            'created_at' => NULL,
            'updated_at' => NULL,
        ),
          array (
            'id' => 16,
            'nama_provinsi' => 'SUMATERA SELATAN',
            'created_at' => NULL,
            'updated_at' => NULL,
        ),
          array (
            'id' => 17,
            'nama_provinsi' => 'BENGKULU',
            'created_at' => NULL,
            'updated_at' => NULL,
        ),
          array (
            'id' => 18,
            'nama_provinsi' => 'LAMPUNG',
            'created_at' => NULL,
            'updated_at' => NULL,
        ),
          array (
            'id' => 19,
            'nama_provinsi' => 'KEPULAUAN BANGKA BELITUNG',
            'created_at' => NULL,
            'updated_at' => NULL,
        ),
          array (
            'id' => 21,
            'nama_provinsi' => 'KEPULAUAN RIAU',
            'created_at' => NULL,
            'updated_at' => NULL,
        ), 
          array (
            'id' => 31,
            'nama_provinsi' => 'DKI JAKARTA',
            'created_at' => NULL,
            'updated_at' => NULL,
        ), 
          array (
            'id' => 32,
            'nama_provinsi' => 'JAWA BARAT',
            'created_at' => NULL,
            'updated_at' => NULL,
        ), 
          array (
            'id' => 33,
            'nama_provinsi' => 'JAWA TENGAH',
            'created_at' => NULL,
            'updated_at' => NULL,
        ), 
          array (
            'id' => 34,
            'nama_provinsi' => 'DI YOGYAKARTA',
            'created_at' => NULL,
            'updated_at' => NULL,
        ), 
          array (
            'id' => 35,
            'nama_provinsi' => 'JAWA TIMUR',
            'created_at' => NULL,
            'updated_at' => NULL,
        ), 
          array (
            'id' => 36,
            'nama_provinsi' => 'BANTEN',
            'created_at' => NULL,
            'updated_at' => NULL,
        ), 
          array (
            'id' => 51,
            'nama_provinsi' => 'BALI',
            'created_at' => NULL,
            'updated_at' => NULL,
        ), 
          array (
            'id' => 52,
            'nama_provinsi' => 'NUSA TENGGARA BARAT',
            'created_at' => NULL,
            'updated_at' => NULL,
        ), 
          array (
            'id' => 53,
            'nama_provinsi' => 'NUSA TENGGARA TIMUR',
            'created_at' => NULL,
            'updated_at' => NULL,
        ), 
          array (
            'id' => 61,
            'nama_provinsi' => 'KALIMANTAN BARAT',
            'created_at' => NULL,
            'updated_at' => NULL,
        ), 
          array (
            'id' => 62,
            'nama_provinsi' => 'KALIMANTAN TENGAH',
            'created_at' => NULL,
            'updated_at' => NULL,
        ), 
          array (
            'id' => 63,
            'nama_provinsi' => 'KALIMANTAN SELATAN',
            'created_at' => NULL,
            'updated_at' => NULL,
        ), 
          array (
            'id' => 64,
            'nama_provinsi' => 'KALIMANTAN TIMUR',
            'created_at' => NULL,
            'updated_at' => NULL,
        ), 
          array (
            'id' => 65,
            'nama_provinsi' => 'KALIMANTAN UTARA',
            'created_at' => NULL,
            'updated_at' => NULL,
        ), 
          array (
            'id' => 71,
            'nama_provinsi' => 'SULAWESI UTARA',
            'created_at' => NULL,
            'updated_at' => NULL,
        ), 
          array (
            'id' => 72,
            'nama_provinsi' => 'SULAWESI TENGAH',
            'created_at' => NULL,
            'updated_at' => NULL,
        ), 
          array (
            'id' => 73,
            'nama_provinsi' => 'SULAWESI SELATAN',
            'created_at' => NULL,
            'updated_at' => NULL,
        ), 
          array (
            'id' => 74,
            'nama_provinsi' => 'SULAWESI TENGGARA',
            'created_at' => NULL,
            'updated_at' => NULL,
        ), 
          array (
            'id' => 75,
            'nama_provinsi' => 'GORONTALO',
            'created_at' => NULL,
            'updated_at' => NULL,
        ), 
          array (
            'id' => 76,
            'nama_provinsi' => 'SULAWESI BARAT',
            'created_at' => NULL,
            'updated_at' => NULL,
        ), 
          array (
            'id' => 81,
            'nama_provinsi' => 'MALUKU',
            'created_at' => NULL,
            'updated_at' => NULL,
        ), 
          array (
            'id' => 82,
            'nama_provinsi' => 'MALUKU UTARA',
            'created_at' => NULL,
            'updated_at' => NULL,
        ), 
          array (
            'id' => 91,
            'nama_provinsi' => 'PAPUA BARAT',
            'created_at' => NULL,
            'updated_at' => NULL,
        ), 
          array (
            'id' => 94,
            'nama_provinsi' => 'PAPUA',
            'created_at' => NULL,
            'updated_at' => NULL,
        ),
      );

        m_Provinsi::insert($input_provinsi);
    }
}
