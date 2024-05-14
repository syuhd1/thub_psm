<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Admin::create([
            'admin_id'=>'1',
            'name'=>'Admin',
            'phone'=>'012345678',
            //'username'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('12345'),
            'role'=>'admin',
            'acc_status'=>'active'
        ]);
    }
}
