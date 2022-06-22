<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = ['TABR Express', 'ALL Directions Transit', 'Investment Tree'];
        foreach ($name as $item){
            DB::table('company')->insert([
                'name' => $item,
            ]);
        }
    }
}
