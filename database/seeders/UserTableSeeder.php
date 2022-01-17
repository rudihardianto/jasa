<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run()
   {
      $users = [
         [
            'name'           => 'Rudi Hardianto',
            'email'          => 'rud.hardianto@gmail.com',
            'password'       => Hash::make('admin123'),
            'remember_token' => null,
            'created_at'     => date('Y-m-d h:i:s'),
            'updated_at'     => date('Y-m-d h:i:s'),
         ],
         [
            'name'           => 'John Cena',
            'email'          => 'cenajohn@gmail.com',
            'password'       => Hash::make('admin123'),
            'remember_token' => null,
            'created_at'     => date('Y-m-d h:i:s'),
            'updated_at'     => date('Y-m-d h:i:s'),
         ],
      ];

      User::insert($users);
   }
}
