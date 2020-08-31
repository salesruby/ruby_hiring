<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'admin' => 'The system administrator and manager',
            'user' => 'THe candidates'
        ];
        foreach ($roles as $key => $role){
          \App\Role::create(
              [
                  'name' => $key,
                  'description' => $role
              ]
          );
        }
    }
}
