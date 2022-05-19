<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use  App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Ivonne Perez',
            'email' =>'ivonne2000@gmail.com',
            'password' => bcrypt('i1234567'),
        ])->assignRole('admin');

        User::factory(1)->create();
    }
}
