<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Masyarakat;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
        	'name' => 'Masyarakat',
        	'username' => 'rakyat',
        	'password' => bcrypt('123123'),
        	'level' => 'masyarakat'
        ]);

        Masyarakat::create([
            'nik' => '1122334455667788',
            'nama' => $user->name,
            'username' => $user->name,
            'password' => bcrypt ($user->password),
            'telp'=> '089696970',
            'user_id' => $user->id,
        ]);
    }
}
