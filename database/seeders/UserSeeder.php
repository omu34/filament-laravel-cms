<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'Bernard',
            'last_name' => 'Omuse',
            'email' => 'admin@gmail.com',
            'phone' => '0727464224',
            'password' => bcrypt('password'),
            'type' => 'admin',
        ]);

        User::create([
            'first_name' => 'Jack',
            'last_name' => 'Smith',
            'email' => 'jack@automotors.com',
            'phone' => '0727464224',
            'password' => bcrypt('password'),
            'type' => 'dealer',
        ]);

        User::create([
            'first_name' => 'Mark',
            'last_name' => 'Smith',
            'email' => 'mark@automotors.com',
            'phone' => '0727464224',
            'password' => bcrypt('password'),
            'type' => 'agent',
        ]);

        User::create([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john.doe@gmail.com',
            'phone' => '0727464224',
            'password' => bcrypt('password'),
            'type' => 'customer',
        ]);

        User::create([
            'first_name' => 'Jane',
            'last_name' => 'Doe',
            'email' => 'jane@xyzmotors.com',
            'phone' => '0727464224',
            'password' => bcrypt('password'),
            'type' => 'dealer',
        ]);

        User::create([
            'first_name' => 'Rohan',
            'last_name' => 'Anita',
            'email' => 'rohan@gmail.com',
            'phone' => '0712345678',
            'password' => bcrypt('password'),
            'type' => 'admin',
        ]);
    }
}
