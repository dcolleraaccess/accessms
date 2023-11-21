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
            1 => 
            array (
                'id' => 2,
                'jobtitle' => 'Healthcare Recruiter',
                'payrate' => '300.00',
                'state' => 'Alabama',
                'description' => 'Access Healthcare LLC is looking to add a new member to our amazing family. We have an excellent team that works well together and need one last piece of the puzzle to make things work perfectly! The ideal candidate should have a background in the medical staffing field or a strong sales background.<br>

<ul>
<li>High vibe and positive thinker</li>
<li>A no excuse outlook on life</li>
<li>Knows what a 5-year plan is</li>
<li>Wants big things for their life</li>
<li>Not afraid to work overtime</li>
<li>Excellent math and computer skills</li>
<li>Good sense of humor</li>
<li>Looking for a career, not a job</li>
<li>Enjoys working in a fast-paced environment</li>
<li>Innovative and thinks outside the box</li>
<li>Critical thinking is a must
</ul>

Highlights of this position include:<br>

<ul>
<li>Managing candidate databases daily in accordance with hours allotted.</li>
<li>Quickly and enthusiastically respond to potential candidates who are seeking a contract</li>
<li>Matching candidates to potential contracts that are available through Access Healthcare</li>
<li>Constructing pay packages for our nurses in accordance with monetary figures provided to you</li>
<li>Answer questions regarding potential contracts that are available through Access Healthcare</li>
<li>Build profiles for candidates that will be used to submit them for contracts</li>
<li>Enter candidates into Vendor Systems (numerous used) and submit candidates for potential contracts that are available through Access Healthcare.</li>
<li>Build relationships with potential candidates and the vendors we interact with</li>
<li>Source nursing groups via Social Media to advertise Access Healthcare positions</li>
</ul>

Benefits<br>

<ul>
<li>401(k)</li>
<li>401(k) matching</li>
<li>Dental insurance</li>
<li>Health insurance</li>
<li>Paid time off</li>
<li>Referral program</li>
<li>Vision insurance</li>
</ul>',
                'start' => '08:00:00',
                'end' => '11:00:00',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}