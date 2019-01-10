<?php

use Illuminate\Database\Seeder;

class BossSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('boss')->delete();
        for ($i=0; $i < 10; $i++){
            \App\Boss::create([
                'name'=>'Name  '.$i,
                'Description'=>'Description '.$i,
                'AttackForce'=>'3000',
                'HP'=>'2000'.$i,
                ]

            );
        }


    }
}
