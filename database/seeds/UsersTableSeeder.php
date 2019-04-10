<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'agung septyanto putra',
            'email' => 'agungseptyantoputra@gmail.com',
            'password' => bcrypt('admin123')
        ]);
    }
}
