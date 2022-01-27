<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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
        $data = new User();
        $data->name = 'Furqon Nugroho';
        $data->email = 'frqnnugroho@gmail.com';
        $data->password = Hash::make('telkom123');
        $data->save();
    }
}
