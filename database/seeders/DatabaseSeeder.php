<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Proyect;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('users')->insert([
            'name' => 'ariel',
            'email' => 'ariel_13_3000@hotmail.com',
            'password' => Hash::make('ariel'),
        ]);

        DB::table('proyects')->insert([
            'name'  => 'Proyecto 1',
        ]);
        DB::table('proyects')->insert([
            'name'  => 'Proyecto 2',
        ]);
        DB::table('proyects')->insert([
            'name'  => 'Proyecto 3',
        ]);
        DB::table('proyects')->insert([
            'name'  => 'Proyecto 4',
        ]);
        DB::table('proyects')->insert([
            'name'  => 'Proyecto 5',
        ]);
        DB::table('proyects')->insert([
            'name'  => 'Proyecto 6',
        ]);
        DB::table('proyects')->insert([
            'name'  => 'Proyecto 7',
        ]);
        DB::table('proyects')->insert([
            'name'  => 'Proyecto 8',
        ]);
        DB::table('proyects')->insert([
            'name'  => 'Proyecto 9',
        ]);
    }
}
