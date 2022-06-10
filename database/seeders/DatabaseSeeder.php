<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('123456'),
            'email_verified_at' => Carbon::now(),
        ]);

        $this->call([
            BookSeeder::class,
        ]);
    }
}
