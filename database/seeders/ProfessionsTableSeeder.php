<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProfessionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('professions')->delete();
        
        \DB::table('professions')->insert(array (
            0 => 
            array (
                'id' => 11200,
                'name' => '**Advanced Practice',
            ),
            1 => 
            array (
                'id' => 5531,
                'name' => '**Allied',
            ),
            2 => 
            array (
                'id' => 11245,
                'name' => '**Physicians Assistant',
            ),
            3 => 
            array (
                'id' => 5700,
                'name' => '**Provider',
            ),
            4 => 
            array (
                'id' => 11199,
                'name' => '**Therapy',
            ),
            5 => 
            array (
                'id' => 5513,
                'name' => 'Admin / Non-Clerical',
            ),
            6 => 
            array (
                'id' => 11242,
                'name' => 'Advanced Practice Provider',
            ),
            7 => 
            array (
                'id' => 11239,
                'name' => 'Allied - Other',
            ),
            8 => 
            array (
                'id' => 11232,
                'name' => 'CNA / Medication Aide',
            ),
            9 => 
            array (
                'id' => 11244,
                'name' => 'Dentist',
            ),
            10 => 
            array (
                'id' => 11238,
                'name' => 'Dentistry',
            ),
            11 => 
            array (
                'id' => 11231,
                'name' => 'Dietician',
            ),
            12 => 
            array (
                'id' => 11229,
                'name' => 'Laboratory',
            ),
            13 => 
            array (
                'id' => 11226,
                'name' => 'LPN/LVN',
            ),
            14 => 
            array (
                'id' => 11233,
                'name' => 'Patient Care Techs',
            ),
            15 => 
            array (
                'id' => 11243,
                'name' => 'Pharmacist',
            ),
            16 => 
            array (
                'id' => 11236,
                'name' => 'Pharmacy',
            ),
            17 => 
            array (
                'id' => 11240,
                'name' => 'Physician',
            ),
            18 => 
            array (
                'id' => 11241,
                'name' => 'Psychologist / Psychiatrist',
            ),
            19 => 
            array (
                'id' => 11228,
                'name' => 'Radiology / Sonography',
            ),
            20 => 
            array (
                'id' => 391,
                'name' => 'RN',
            ),
            21 => 
            array (
                'id' => 11237,
                'name' => 'Social Worker',
            ),
            22 => 
            array (
                'id' => 11234,
                'name' => 'Sterile Processing',
            ),
            23 => 
            array (
                'id' => 11235,
                'name' => 'Surgical / Scrub Tech',
            ),
            24 => 
            array (
                'id' => 11227,
                'name' => 'Surgical First Assist',
            ),
            25 => 
            array (
                'id' => 11230,
                'name' => 'Therapy/Rehab',
            ),
        ));
        
        
    }
}