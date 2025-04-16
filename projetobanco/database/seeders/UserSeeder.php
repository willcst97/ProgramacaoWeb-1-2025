<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::creat([
            'name' => "William", #'name' => $request->name,
            'email' => "will@mail.com", #'email' => $request->email,
            'password' => Hash::make("senha123"), #'password' => Hash::make('$request->password),
        ]);
    }
}
