<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CorporatecareerTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('corporatecareer')->delete();
        
        \DB::table('corporatecareer')->insert(array (
            0 => 
            array (
                'id' => 1,
                'jobtitle' => 'Test Title',
                'payrate' => '300.00',
                'state' => 'Alabama',
                'description' => 'a description here, this is just a sample description',
                'start' => '08:00:00',
                'end' => '11:00:00',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}