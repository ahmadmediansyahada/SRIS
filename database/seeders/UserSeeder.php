<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
                'created_at' => now(),
            ],
            [
                'name' => 'teacher',
                'email' => 'teacher@gmail.com',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
                'created_at' => now(),
            ],
            [
                'name' => 'student',
                'email' => 'student@gmail.com',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
                'created_at' => now(),
            ],
        ]);

        // get user
        $user1 = User::find(1);
        $user2 = User::find(2);
        $user3 = User::find(3);
        // get role
        $admin = Role::find(1);
        $teacher = Role::find(2);
        $student = Role::find(3);
        // give role to user
        $user1->assignRole($admin);
        $user2->assignRole($teacher);
        $user3->assignRole($student);
    }
}