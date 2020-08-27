<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = \App\Role::where('name', 'admin')->first();
        $user = \App\User::Create([
            'name' => 'Inya Johnson',
            'email' => 'intoajohnson@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        $user->role()->attach($role, ['created_at'=> now(), 'updated_at' => now()]);
    }
}
