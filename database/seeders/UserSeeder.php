<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
  public function run()
  {
    $user = new User;

    $user->name = 'Admin';
    $user->email = 'admin@setok.com';
    $user->password = Hash::make('AdminS3tok');

    $user->save();
  }
}
