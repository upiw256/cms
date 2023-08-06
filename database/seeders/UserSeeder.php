<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Ramsey\Uuid\Uuid;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();
        $uuid = Uuid::uuid4();

        DB::table('users')->insert([
            'id' => $uuid,
            'username' => 'Luthfi',
            'password' => Hash::make('123456'),
            'created_at' => $now,
            'updated_at' => $now,
        ]);
    }
}
