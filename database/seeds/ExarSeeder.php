<?php

use Illuminate\Database\Seeder;

class ExarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mpolicies')->insert([

            [
              'id' => '1',
              'nama' => 'Admin Policy',
              'commission_min' => '2',
              'commission_max' => '3',
              'co_buy' => 'Yes',
              'co_sell' => 'Yes',
              'out_broke' => 'Yes',
              'reference' => 'Yes',
              'min_sell' => '0',
              'split_fee' => '0',
              'co_fee' => '50',
              'reference_fee' => '20',
              'delete' => '0',
            ]
          ]);
  
  
          DB::table('mroles')->insert([
  
              [
                'id' => '1',
                'nama' => 'Admin',
                'level' => '1',
                'delet' => '0',
                'mpolicie_id' => '1',
              ],
              [
                'id' => '2',
                'nama' => 'Manager',
                'level' => '1',
                'delet' => '0',
                'mpolicie_id' => '1',
              ]
            ]);
  
            DB::table('mdevelopers')->insert([
  
              [
                'id' => '1',
                'nama' => 'Ciputri',
                'kontak' => '082233857520',
                'email' => 'ciputri@gmail.com',
                'delet' => '0',
              ]
            ]);
  
            DB::table('mbonus')->insert([
  
              [
                'id' => '1',
                'bonus' => '1000000',
                'nama_bonus' => 'Bonus jual 3 apartment',
                'deskripsi' => 'Bonus diberikan ketika agen berhasil menjualkan 3 apartment dalam kurun waktu satu hari',
                'delet' => '0',
              ]
            ]);
  
            DB::table('users')->insert([
  
              [
                'id' => '1',
                'name' => 'cb',
                'email' => 'christianbonafena7@gmail.com',
                'alamat' => 'Sidoarjo',
                'nik' => '13450230302040',
                'npwp' => '1230120490324',
                'telp1' => '082212312312',
                'telp2' => '082212342323',
                'jeniskelamin' => 'Pria',
                'mrole_id' => '1',
                'password' => bcrypt('123123'),
                'agama' => 'Kristen'
              ]
            ]);
  
            DB::table('mtransactions')->insert([
  
              [
                'id' => '1',
                'property_sold' => '1',
                'delet' => '0',
                'user_id' => '1',   
              ]
            ]);
  
            
            DB::table('mlistings')->insert([
  
              [
                'id' => '1',
                'nama' => 'Rumah wiyung',
                'jenis_list' => 'Dijual',
                'price' => '1000000000',     
                'commission' => '3',
                'nama_pemilik' => 'Robby',
                'no_pemilik' => '0822229392393', 
                'tipe_unit' => '0',
                'total_unit' => '0',
                'available_unit' => '0', 
                'jenis_properti' => 'Rumah',
                'luas_bangunan' => '1000',
                'luas_tanah' => '1200', 
                'tinggi' => '2',
                'lantai' => '0',
                'lokasi' => 'Taman Pondok Indah', 
                'kamar_mandi' => '3',
                'kamar_tidur' => '4',
                'arah_properti' => 'Timur',
                'spesifikasi' => 'Rumah mantab mantul mantul enak dilihat, tidak cocok dijilat apalagi dicelupin',
                'kota' => 'Surabaya',
                'listrik' => '3300',
                'delet' => '0',
                'sold' => '0',
                'user_id' => '1',
              ]
            ]);
  
            DB::table('dtransactions')->insert([
  
              [
                'id' => '1',
                'close_price' => '1000000000',
                'delet' => '0',
                'mtransaction_id' => '1',
                'mlisting_id' => '1',     
                
              ]
            ]);
  
  
            DB::table('mleads')->insert([
  
              [
                'id' => '1',
                'name' => 'Farna',
                'contact' => '08218499234',
                'email' => 'farclose@gmail.com',
                'tipe' => '1',
                'delet' => '0',
                'deskripsi' => 'Calon buyer properti rumah wiyung, cari rumah 1 lantai',
                'user_id' => '1',   
              ]
            ]);
    }
}
