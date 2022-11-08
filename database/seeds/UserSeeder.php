<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inputan['name'] = 'satrio';
        $inputan['email'] = 'satrio@gmail.com';//username admin
        $inputan['password'] = Hash::make('123258');//password admin
        $inputan['phone'] = '085852527575';
        $inputan['alamat'] = 'Bulung Kulon Rt 03 Rw 05';
        $inputan['role'] = 'admin';
        User::create($inputan);
    }
}
