<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\Pokemon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        Pokemon::insert([
            ['name' => 'Bulbasaur', 'type' => 'Leaf'],
            ['name' => 'Charmander', 'type' => 'Fire'],
            ['name' => 'Squirtle', 'type' => 'Water'],
            ['name' => 'Pikachu', 'type' => 'Thunder']
        ]);
    }
}
