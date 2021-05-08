<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TreningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i <= 5; $i++){
            DB::table('trening')->insert([
                'naziv' => Str::random(10),
                'brojClanova' => rand(0,100),
                'dan' => Str::random(10),
                'zavrsen' => rand(0,1),
                'user_id' => rand(1,8),
                'jacinaTreninga' => Str::random(10)
            ]);
        }
    }
}
