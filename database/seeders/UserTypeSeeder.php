<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = ['supervisor', 'admin', 'dispatcher'];
        foreach ($name as $key => $value){
            DB::table('user_type')->insert([
                'name' => $value,
            ]);
        }
    }
}
