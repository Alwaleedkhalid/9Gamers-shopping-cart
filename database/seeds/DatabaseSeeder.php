<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\user;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        factory(App\Product::class,10)->create();

        DB::table('users')->insert([
            'name' => 'alwaleed',
            'email' => 'alwaleed@dev.com',
            'password' => bcrypt('12345678'),
        ]);

    }
}
