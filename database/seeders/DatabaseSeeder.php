<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        Role::create(['name' => 'administrator']);
        Role::create(['name' => 'customer']);

        $user = new User();
        $user->username = 'obandogarcia';
        $user->email = 'obandogarcia10635@gmail.com';
        $user->password = Hash::make('Ecuacionlineal1/$');
        $user->save();


        $user->assignRole('administrator');
    }
}
