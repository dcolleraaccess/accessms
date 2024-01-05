<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JobcountTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('jobcount')->delete();
        
        \DB::table('jobcount')->insert(array (
            0 => 
            array (
                'count' => 7842,
                'created_at' => '2024-01-03 23:19:52',
                'id' => 1,
                'updated_at' => '2024-01-03 23:19:52',
            ),
        ));
        
        
    }
}