<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConditionsContractSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cost = ['6000 25 12000 30 35', '5000 15 10000 20 25'];
        foreach ($cost as $item){
            $costItem = explode(" ", $item);
            DB::table('conditions_contract')->insert([
                'choice' =>$item,
                'limit_start' =>$costItem[0],
                'percent_start' =>$costItem[1],
                'limit_max' => $costItem[2],
                'percent_max' => $costItem[3],
                'percent_super_max' => $costItem[4],
            ]);
        }
    }
}
