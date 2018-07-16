<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class SeederAnggota extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// empty table anggota
		DB::table('anggota')->delete();
		
		// insert data anggota using array
		$anggota = array(
			array('id'=>1, 'nama'=>'Iwan Prasetiyo', 'alamat'=>'Tangerang', 'created_at'=>Carbon::now()->format('Y:m:d H:i:s') ),
			array('id'=>2, 'nama'=>'Andi Riyadi', 'alamat'=>'Jakarta', 'created_at'=>Carbon::now()->format('Y:m:d H:i:s') ),
			array('id'=>3, 'nama'=>'James Vardy', 'alamat'=>'Bali', 'created_at'=>Carbon::now()->format('Y:m:d H:i:s') )
		);
		
		DB::table('anggota')->insert($anggota);
	}

}
