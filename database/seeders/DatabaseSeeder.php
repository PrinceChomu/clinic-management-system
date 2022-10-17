<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'superadmin']);
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'doctor']);
        Role::create(['name' => 'patient']);
        Role::create(['name' => 'secretary']);

        $admin = User::create([
            'name' => 'Prince Chomunorwa',
            'email' => 'pchomu.pc@gmail.com',
            'phone' => '+263782880047',
            'password' => Hash::make('prince1997')
        ]);
        $admin->assignRole('superadmin');
    }
}
