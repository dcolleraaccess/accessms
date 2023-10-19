<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SpecialtiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('specialties')->delete();
        
        \DB::table('specialties')->insert(array (
            0 => 
            array (
                'id' => 38871,
                'name' => 'ABA',
                'profession_id' => 5531,
            ),
            1 => 
            array (
                'id' => 49533,
                'name' => 'Account Manager Sales',
                'profession_id' => 5513,
            ),
            2 => 
            array (
                'id' => 36134,
                'name' => 'Accountant',
                'profession_id' => 5513,
            ),
            3 => 
            array (
                'id' => 36136,
                'name' => 'Accounting Analyst',
                'profession_id' => 5513,
            ),
            4 => 
            array (
                'id' => 36135,
                'name' => 'Accounting Supervisor',
                'profession_id' => 5513,
            ),
            5 => 
            array (
                'id' => 36137,
                'name' => 'Accounts Payable',
                'profession_id' => 5513,
            ),
            6 => 
            array (
                'id' => 36138,
                'name' => 'Accounts Receivable',
                'profession_id' => 5513,
            ),
            7 => 
            array (
                'id' => 35107,
                'name' => 'Acute Care',
                'profession_id' => 391,
            ),
            8 => 
            array (
                'id' => 49626,
                'name' => 'Acute Care',
                'profession_id' => 11226,
            ),
            9 => 
            array (
                'id' => 49486,
                'name' => 'Acute Recovery Unit',
                'profession_id' => 391,
            ),
            10 => 
            array (
                'id' => 49487,
                'name' => 'Addiction / Recovery / Substance Abuse',
                'profession_id' => 391,
            ),
            11 => 
            array (
                'id' => 49584,
                'name' => 'Addiction Medicine - Physician',
                'profession_id' => 11239,
            ),
            12 => 
            array (
                'id' => 49596,
                'name' => 'Addiction Medicine - Physician',
                'profession_id' => 11240,
            ),
            13 => 
            array (
                'id' => 49708,
                'name' => 'Adjunctive Therapist',
                'profession_id' => 11230,
            ),
            14 => 
            array (
                'id' => 49500,
                'name' => 'Admin Assitant',
                'profession_id' => 5513,
            ),
            15 => 
            array (
                'id' => 2144,
                'name' => 'Admissions',
                'profession_id' => 391,
            ),
            16 => 
            array (
                'id' => 38880,
                'name' => 'ADON',
                'profession_id' => 5513,
            ),
            17 => 
            array (
                'id' => 49624,
                'name' => 'Adult Gerontology - NP',
                'profession_id' => 11242,
            ),
            18 => 
            array (
                'id' => 49623,
                'name' => 'Advanced Oncology - NP',
                'profession_id' => 11242,
            ),
            19 => 
            array (
                'id' => 43491,
                'name' => 'Advanced Practice Provider',
                'profession_id' => 5700,
            ),
            20 => 
            array (
                'id' => 14227,
                'name' => 'Ambulatory',
                'profession_id' => 391,
            ),
            21 => 
            array (
                'id' => 49633,
                'name' => 'Ambulatory',
                'profession_id' => 11226,
            ),
            22 => 
            array (
                'id' => 2135,
                'name' => 'Ambulatory LPN',
                'profession_id' => 391,
            ),
            23 => 
            array (
                'id' => 34733,
                'name' => 'Anesthesia Tech',
                'profession_id' => 5531,
            ),
            24 => 
            array (
                'id' => 49554,
                'name' => 'Anesthesia Tech',
                'profession_id' => 11239,
            ),
            25 => 
            array (
                'id' => 49581,
                'name' => 'Anesthesiologist',
                'profession_id' => 11239,
            ),
            26 => 
            array (
                'id' => 49592,
                'name' => 'Anesthesiologist',
                'profession_id' => 11240,
            ),
            27 => 
            array (
                'id' => 49738,
                'name' => 'Angioplasty Recovery',
                'profession_id' => 391,
            ),
            28 => 
            array (
                'id' => 49489,
                'name' => 'Antepartum',
                'profession_id' => 391,
            ),
            29 => 
            array (
                'id' => 2159,
                'name' => 'Apherisis',
                'profession_id' => 391,
            ),
            30 => 
            array (
                'id' => 49630,
                'name' => 'Assisted Living',
                'profession_id' => 11226,
            ),
            31 => 
            array (
                'id' => 49648,
                'name' => 'Assisted Living',
                'profession_id' => 11232,
            ),
            32 => 
            array (
                'id' => 49490,
                'name' => 'Assisted Living / Senior Living',
                'profession_id' => 391,
            ),
            33 => 
            array (
                'id' => 33985,
                'name' => 'Assisted Living RN',
                'profession_id' => 391,
            ),
            34 => 
            array (
                'id' => 49495,
                'name' => 'Associate Clinical Social Worker',
                'profession_id' => 11237,
            ),
            35 => 
            array (
                'id' => 49531,
                'name' => 'Associate Clinical Worker',
                'profession_id' => 11237,
            ),
            36 => 
            array (
                'id' => 38827,
                'name' => 'Athletic Trainer',
                'profession_id' => 5531,
            ),
            37 => 
            array (
                'id' => 49711,
                'name' => 'Athletic Trainer',
                'profession_id' => 11230,
            ),
            38 => 
            array (
                'id' => 38801,
                'name' => 'Audiologist',
                'profession_id' => 5531,
            ),
            39 => 
            array (
                'id' => 49567,
                'name' => 'Audiologist',
                'profession_id' => 11239,
            ),
            40 => 
            array (
                'id' => 36139,
                'name' => 'Authorization Specialist',
                'profession_id' => 5513,
            ),
            41 => 
            array (
                'id' => 49849,
                'name' => 'Badging Coordinator',
                'profession_id' => 5513,
            ),
            42 => 
            array (
                'id' => 49496,
                'name' => 'Bariatric',
                'profession_id' => 391,
            ),
            43 => 
            array (
                'id' => 34734,
                'name' => 'Behavioral Health Tech',
                'profession_id' => 5531,
            ),
            44 => 
            array (
                'id' => 49609,
                'name' => 'Behavioral Health Tech',
                'profession_id' => 11233,
            ),
            45 => 
            array (
                'id' => 49501,
                'name' => 'Billing Representative',
                'profession_id' => 5513,
            ),
            46 => 
            array (
                'id' => 38926,
                'name' => 'Blood Bank Tech',
                'profession_id' => 5531,
            ),
            47 => 
            array (
                'id' => 49566,
                'name' => 'Blood Bank Tech',
                'profession_id' => 11239,
            ),
            48 => 
            array (
                'id' => 38842,
                'name' => 'Business Analyst',
                'profession_id' => 5513,
            ),
            49 => 
            array (
                'id' => 34006,
                'name' => 'Cardiac Device Specialist',
                'profession_id' => 391,
            ),
            50 => 
            array (
                'id' => 49568,
                'name' => 'Cardiac Device Specialist',
                'profession_id' => 11239,
            ),
            51 => 
            array (
                'id' => 49696,
                'name' => 'Cardiac Sonographer',
                'profession_id' => 11228,
            ),
            52 => 
            array (
                'id' => 49698,
                'name' => 'Cardiovascular Tech',
                'profession_id' => 11228,
            ),
            53 => 
            array (
                'id' => 2130,
                'name' => 'Case Manager',
                'profession_id' => 391,
            ),
            54 => 
            array (
                'id' => 38811,
                'name' => 'Case Manager',
                'profession_id' => 5531,
            ),
            55 => 
            array (
                'id' => 49539,
                'name' => 'Case Mangement',
                'profession_id' => 11237,
            ),
            56 => 
            array (
                'id' => 2131,
                'name' => 'Cath Lab',
                'profession_id' => 391,
            ),
            57 => 
            array (
                'id' => 34722,
                'name' => 'Cath Lab Tech',
                'profession_id' => 5531,
            ),
            58 => 
            array (
                'id' => 49680,
                'name' => 'Cath LabTech',
                'profession_id' => 11228,
            ),
            59 => 
            array (
                'id' => 49681,
                'name' => 'Cath LabTech',
                'profession_id' => 11228,
            ),
            60 => 
            array (
                'id' => 49639,
                'name' => 'CCU',
                'profession_id' => 11226,
            ),
            61 => 
            array (
                'id' => 2132,
                'name' => 'CCU RN',
                'profession_id' => 391,
            ),
            62 => 
            array (
                'id' => 34015,
                'name' => 'CDU RN',
                'profession_id' => 391,
            ),
            63 => 
            array (
                'id' => 49555,
                'name' => 'Certified Anesthesia',
                'profession_id' => 11239,
            ),
            64 => 
            array (
                'id' => 34739,
                'name' => 'Certified Anesthesia Tech',
                'profession_id' => 5531,
            ),
            65 => 
            array (
                'id' => 49607,
                'name' => 'Certified Dialysis Tech',
                'profession_id' => 11233,
            ),
            66 => 
            array (
                'id' => 49662,
                'name' => 'Certified Histo Tech',
                'profession_id' => 11229,
            ),
            67 => 
            array (
                'id' => 49551,
                'name' => 'Certified Pharmacy Tech',
                'profession_id' => 11236,
            ),
            68 => 
            array (
                'id' => 49707,
                'name' => 'Certified Sleep/ PSG Tech',
                'profession_id' => 11230,
            ),
            69 => 
            array (
                'id' => 49542,
                'name' => 'Certified Sterile Processing Tech',
                'profession_id' => 11234,
            ),
            70 => 
            array (
                'id' => 49546,
                'name' => 'Certified Surgical / Scrub Tech',
                'profession_id' => 11235,
            ),
            71 => 
            array (
                'id' => 38843,
                'name' => 'CFO',
                'profession_id' => 5513,
            ),
            72 => 
            array (
                'id' => 49625,
                'name' => 'Charge / Supervisor / Manager',
                'profession_id' => 11226,
            ),
            73 => 
            array (
                'id' => 34617,
                'name' => 'CHN RN',
                'profession_id' => 391,
            ),
            74 => 
            array (
                'id' => 34203,
                'name' => 'CICU RN',
                'profession_id' => 391,
            ),
            75 => 
            array (
                'id' => 49512,
                'name' => 'Claim Processor',
                'profession_id' => 5513,
            ),
            76 => 
            array (
                'id' => 36454,
                'name' => 'Clerical',
                'profession_id' => 5513,
            ),
            77 => 
            array (
                'id' => 49502,
                'name' => 'Clerk',
                'profession_id' => 5513,
            ),
            78 => 
            array (
                'id' => 49640,
                'name' => 'Clinic',
                'profession_id' => 11226,
            ),
            79 => 
            array (
                'id' => 38845,
                'name' => 'Clinic Manager',
                'profession_id' => 5513,
            ),
            80 => 
            array (
                'id' => 43016,
                'name' => 'Clinic RN',
                'profession_id' => 391,
            ),
            81 => 
            array (
                'id' => 38883,
                'name' => 'Clinical Care Director',
                'profession_id' => 5513,
            ),
            82 => 
            array (
                'id' => 49679,
                'name' => 'Clinical Coordinator - Perinatal',
                'profession_id' => 391,
            ),
            83 => 
            array (
                'id' => 49528,
                'name' => 'Clinical Documentation Specialist',
                'profession_id' => 5513,
            ),
            84 => 
            array (
                'id' => 49672,
                'name' => 'Clinical Physchologist',
                'profession_id' => 11238,
            ),
            85 => 
            array (
                'id' => 49674,
                'name' => 'Clinical Psychologist',
                'profession_id' => 11241,
            ),
            86 => 
            array (
                'id' => 38884,
                'name' => 'Clinical Research Coordinator',
                'profession_id' => 5513,
            ),
            87 => 
            array (
                'id' => 49670,
                'name' => 'Clinical Research Coordinator',
                'profession_id' => 11229,
            ),
            88 => 
            array (
                'id' => 49656,
                'name' => 'CLS/MLS/MT',
                'profession_id' => 11229,
            ),
            89 => 
            array (
                'id' => 49572,
                'name' => 'CMA',
                'profession_id' => 11239,
            ),
            90 => 
            array (
                'id' => 44019,
                'name' => 'CMA - Medication Aide',
                'profession_id' => 391,
            ),
            91 => 
            array (
                'id' => 34143,
                'name' => 'CNA',
                'profession_id' => 5531,
            ),
            92 => 
            array (
                'id' => 49642,
                'name' => 'CNA',
                'profession_id' => 11232,
            ),
            93 => 
            array (
                'id' => 44015,
                'name' => 'CNA - LTC',
                'profession_id' => 391,
            ),
            94 => 
            array (
                'id' => 49846,
                'name' => 'CNA Acute',
                'profession_id' => 11232,
            ),
            95 => 
            array (
                'id' => 38882,
                'name' => 'CNO',
                'profession_id' => 5513,
            ),
            96 => 
            array (
                'id' => 49435,
                'name' => 'Controller',
                'profession_id' => 5513,
            ),
            97 => 
            array (
                'id' => 38844,
                'name' => 'COO',
                'profession_id' => 5513,
            ),
            98 => 
            array (
                'id' => 49510,
                'name' => 'Cook',
                'profession_id' => 5513,
            ),
            99 => 
            array (
                'id' => 49637,
                'name' => 'Correctional Health',
                'profession_id' => 11226,
            ),
            100 => 
            array (
                'id' => 2133,
                'name' => 'Corrections RN',
                'profession_id' => 391,
            ),
            101 => 
            array (
                'id' => 49605,
                'name' => 'COTA',
                'profession_id' => 11230,
            ),
            102 => 
            array (
                'id' => 38812,
                'name' => 'Counselor',
                'profession_id' => 5531,
            ),
            103 => 
            array (
                'id' => 49850,
                'name' => 'Counselor',
                'profession_id' => 11230,
            ),
            104 => 
            array (
                'id' => 38863,
                'name' => 'Credentialing Coordinator',
                'profession_id' => 5513,
            ),
            105 => 
            array (
                'id' => 49526,
                'name' => 'Credentialing Manager',
                'profession_id' => 5513,
            ),
            106 => 
            array (
                'id' => 49523,
                'name' => 'Credentialing Specialist',
                'profession_id' => 5513,
            ),
            107 => 
            array (
                'id' => 35033,
                'name' => 'Critical Care Physician',
                'profession_id' => 5700,
            ),
            108 => 
            array (
                'id' => 49579,
                'name' => 'CRNA',
                'profession_id' => 11242,
            ),
            109 => 
            array (
                'id' => 33951,
                'name' => 'CRNA RN',
                'profession_id' => 391,
            ),
            110 => 
            array (
                'id' => 34010,
                'name' => 'CRNFA RN',
                'profession_id' => 391,
            ),
            111 => 
            array (
                'id' => 49703,
                'name' => 'CRT',
                'profession_id' => 11230,
            ),
            112 => 
            array (
                'id' => 49484,
                'name' => 'CRT NICU',
                'profession_id' => 5531,
            ),
            113 => 
            array (
                'id' => 34735,
                'name' => 'CSFA',
                'profession_id' => 5531,
            ),
            114 => 
            array (
                'id' => 49614,
                'name' => 'CSFA - Certified Surgical First Assistant',
                'profession_id' => 11227,
            ),
            115 => 
            array (
                'id' => 34711,
                'name' => 'CT Tech',
                'profession_id' => 5531,
            ),
            116 => 
            array (
                'id' => 49682,
                'name' => 'CT Tech',
                'profession_id' => 11228,
            ),
            117 => 
            array (
                'id' => 49515,
                'name' => 'Customer Service Rep',
                'profession_id' => 5513,
            ),
            118 => 
            array (
                'id' => 2781,
                'name' => 'CVICU RN',
                'profession_id' => 391,
            ),
            119 => 
            array (
                'id' => 49735,
                'name' => 'CVOR',
                'profession_id' => 11235,
            ),
            120 => 
            array (
                'id' => 34001,
                'name' => 'CVOR RN',
                'profession_id' => 391,
            ),
            121 => 
            array (
                'id' => 33979,
                'name' => 'CVU RN',
                'profession_id' => 391,
            ),
            122 => 
            array (
                'id' => 34208,
                'name' => 'Cyto Tech',
                'profession_id' => 5531,
            ),
            123 => 
            array (
                'id' => 49728,
                'name' => 'Cyto Tech',
                'profession_id' => 11233,
            ),
            124 => 
            array (
                'id' => 38815,
                'name' => 'Cytologist',
                'profession_id' => 5531,
            ),
            125 => 
            array (
                'id' => 49660,
                'name' => 'Cytotech',
                'profession_id' => 11229,
            ),
            126 => 
            array (
                'id' => 38864,
                'name' => 'Data Analyst',
                'profession_id' => 5513,
            ),
            127 => 
            array (
                'id' => 49504,
                'name' => 'Data Entry Specialist',
                'profession_id' => 5513,
            ),
            128 => 
            array (
                'id' => 49547,
                'name' => 'Dental Assistant',
                'profession_id' => 11238,
            ),
            129 => 
            array (
                'id' => 49550,
                'name' => 'Dental Hygenist',
                'profession_id' => 11244,
            ),
            130 => 
            array (
                'id' => 49667,
                'name' => 'Dental Hygenist',
                'profession_id' => 11238,
            ),
            131 => 
            array (
                'id' => 36084,
                'name' => 'Dentist',
                'profession_id' => 5700,
            ),
            132 => 
            array (
                'id' => 49544,
                'name' => 'Dentist',
                'profession_id' => 11244,
            ),
            133 => 
            array (
                'id' => 49664,
                'name' => 'Dentist',
                'profession_id' => 11238,
            ),
            134 => 
            array (
                'id' => 36126,
                'name' => 'Detox RN',
                'profession_id' => 391,
            ),
            135 => 
            array (
                'id' => 49740,
                'name' => 'Diagnostic Imaging',
                'profession_id' => 391,
            ),
            136 => 
            array (
                'id' => 49632,
                'name' => 'Dialysis',
                'profession_id' => 11226,
            ),
            137 => 
            array (
                'id' => 2136,
                'name' => 'Dialysis RN',
                'profession_id' => 391,
            ),
            138 => 
            array (
                'id' => 34736,
                'name' => 'Dialysis Tech',
                'profession_id' => 5531,
            ),
            139 => 
            array (
                'id' => 49608,
                'name' => 'Dialysis Tech',
                'profession_id' => 11233,
            ),
            140 => 
            array (
                'id' => 38840,
                'name' => 'Dietary Aid',
                'profession_id' => 5531,
            ),
            141 => 
            array (
                'id' => 49654,
                'name' => 'Dietary Aide',
                'profession_id' => 11231,
            ),
            142 => 
            array (
                'id' => 49655,
                'name' => 'Dietary Manager',
                'profession_id' => 11231,
            ),
            143 => 
            array (
                'id' => 38839,
                'name' => 'Dietician',
                'profession_id' => 5531,
            ),
            144 => 
            array (
                'id' => 49650,
                'name' => 'Dietician',
                'profession_id' => 11231,
            ),
            145 => 
            array (
                'id' => 38847,
                'name' => 'Director',
                'profession_id' => 5513,
            ),
            146 => 
            array (
                'id' => 43018,
                'name' => 'Director of Nursing',
                'profession_id' => 391,
            ),
            147 => 
            array (
                'id' => 49537,
                'name' => 'Document Imaging Specialist',
                'profession_id' => 5513,
            ),
            148 => 
            array (
                'id' => 38881,
                'name' => 'DON',
                'profession_id' => 5513,
            ),
            149 => 
            array (
                'id' => 36128,
                'name' => 'Dosimetrist',
                'profession_id' => 5531,
            ),
            150 => 
            array (
                'id' => 49683,
                'name' => 'Dosimetrist',
                'profession_id' => 11228,
            ),
            151 => 
            array (
                'id' => 49668,
                'name' => 'Drug Safety',
                'profession_id' => 11229,
            ),
            152 => 
            array (
                'id' => 34716,
                'name' => 'Echo Tech',
                'profession_id' => 5531,
            ),
            153 => 
            array (
                'id' => 49684,
                'name' => 'Echo Tech',
                'profession_id' => 11228,
            ),
            154 => 
            array (
                'id' => 38849,
                'name' => 'Educational Assistant',
                'profession_id' => 5513,
            ),
            155 => 
            array (
                'id' => 38848,
                'name' => 'Educator',
                'profession_id' => 5513,
            ),
            156 => 
            array (
                'id' => 46006,
                'name' => 'Educator RN',
                'profession_id' => 391,
            ),
            157 => 
            array (
                'id' => 34343,
                'name' => 'EEG Tech',
                'profession_id' => 5531,
            ),
            158 => 
            array (
                'id' => 49685,
                'name' => 'EEG Tech',
                'profession_id' => 11228,
            ),
            159 => 
            array (
                'id' => 34743,
                'name' => 'EKG Tech',
                'profession_id' => 5531,
            ),
            160 => 
            array (
                'id' => 49686,
                'name' => 'EKG Tech',
                'profession_id' => 11228,
            ),
            161 => 
            array (
                'id' => 49759,
                'name' => 'Emergency Medicine',
                'profession_id' => 11240,
            ),
            162 => 
            array (
                'id' => 49730,
                'name' => 'Emergency Medicine - NP/PA',
                'profession_id' => 11242,
            ),
            163 => 
            array (
                'id' => 49597,
                'name' => 'Emergency Room Physician',
                'profession_id' => 11240,
            ),
            164 => 
            array (
                'id' => 34737,
                'name' => 'EMT',
                'profession_id' => 5531,
            ),
            165 => 
            array (
                'id' => 4797,
                'name' => 'Endo RN',
                'profession_id' => 391,
            ),
            166 => 
            array (
                'id' => 34738,
                'name' => 'Endo Tech',
                'profession_id' => 5531,
            ),
            167 => 
            array (
                'id' => 49556,
                'name' => 'Endo Tech',
                'profession_id' => 11239,
            ),
            168 => 
            array (
                'id' => 49117,
                'name' => 'ENT RN',
                'profession_id' => 391,
            ),
            169 => 
            array (
                'id' => 49518,
                'name' => 'Environmental Service Worker',
                'profession_id' => 5513,
            ),
            170 => 
            array (
                'id' => 38850,
                'name' => 'Environmental Services',
                'profession_id' => 5513,
            ),
            171 => 
            array (
                'id' => 4796,
                'name' => 'EP RN',
                'profession_id' => 391,
            ),
            172 => 
            array (
                'id' => 34189,
                'name' => 'EP Tech',
                'profession_id' => 5531,
            ),
            173 => 
            array (
                'id' => 49687,
                'name' => 'EP Tech',
                'profession_id' => 11228,
            ),
            174 => 
            array (
                'id' => 49569,
                'name' => 'Epidemiologist',
                'profession_id' => 11239,
            ),
            175 => 
            array (
                'id' => 49635,
                'name' => 'ER',
                'profession_id' => 11226,
            ),
            176 => 
            array (
                'id' => 49617,
                'name' => 'ER - NP',
                'profession_id' => 11242,
            ),
            177 => 
            array (
                'id' => 34727,
                'name' => 'ER Physician',
                'profession_id' => 5700,
            ),
            178 => 
            array (
                'id' => 34077,
                'name' => 'ER RN',
                'profession_id' => 391,
            ),
            179 => 
            array (
                'id' => 43506,
                'name' => 'ER Tech',
                'profession_id' => 5531,
            ),
            180 => 
            array (
                'id' => 49571,
                'name' => 'ER Tech',
                'profession_id' => 11239,
            ),
            181 => 
            array (
                'id' => 38851,
                'name' => 'Executive',
                'profession_id' => 5513,
            ),
            182 => 
            array (
                'id' => 49713,
                'name' => 'Expressive Therapist',
                'profession_id' => 11230,
            ),
            183 => 
            array (
                'id' => 34715,
                'name' => 'Family Med Physician',
                'profession_id' => 5700,
            ),
            184 => 
            array (
                'id' => 49621,
                'name' => 'Family Medicine - NP',
                'profession_id' => 11242,
            ),
            185 => 
            array (
                'id' => 49578,
                'name' => 'Family Medicine Physician',
                'profession_id' => 11239,
            ),
            186 => 
            array (
                'id' => 49590,
                'name' => 'Family Medicine Physician',
                'profession_id' => 11240,
            ),
            187 => 
            array (
                'id' => 49520,
                'name' => 'Financial Analyst',
                'profession_id' => 5513,
            ),
            188 => 
            array (
                'id' => 49727,
                'name' => 'Financial Clearance Manager',
                'profession_id' => 5513,
            ),
            189 => 
            array (
                'id' => 49505,
                'name' => 'Financial Representative',
                'profession_id' => 5513,
            ),
            190 => 
            array (
                'id' => 49718,
                'name' => 'Float Pool',
                'profession_id' => 391,
            ),
            191 => 
            array (
                'id' => 49509,
                'name' => 'Food Service',
                'profession_id' => 5513,
            ),
            192 => 
            array (
                'id' => 38852,
                'name' => 'Food Services',
                'profession_id' => 5513,
            ),
            193 => 
            array (
                'id' => 49636,
                'name' => 'General',
                'profession_id' => 11226,
            ),
            194 => 
            array (
                'id' => 49676,
                'name' => 'General',
                'profession_id' => 11245,
            ),
            195 => 
            array (
                'id' => 49615,
                'name' => 'General - NP',
                'profession_id' => 11242,
            ),
            196 => 
            array (
                'id' => 49749,
                'name' => 'General Medicine',
                'profession_id' => 11240,
            ),
            197 => 
            array (
                'id' => 49723,
                'name' => 'General Surgery',
                'profession_id' => 11245,
            ),
            198 => 
            array (
                'id' => 49700,
                'name' => 'General/Other',
                'profession_id' => 11228,
            ),
            199 => 
            array (
                'id' => 49514,
                'name' => 'Geriatric Medicine - NP',
                'profession_id' => 11242,
            ),
            200 => 
            array (
                'id' => 49729,
                'name' => 'Geriatrics',
                'profession_id' => 391,
            ),
            201 => 
            array (
                'id' => 49557,
                'name' => 'GI Tech',
                'profession_id' => 11239,
            ),
            202 => 
            array (
                'id' => 34834,
                'name' => 'GNA',
                'profession_id' => 5531,
            ),
            203 => 
            array (
                'id' => 49527,
                'name' => 'Healthcare Adminstrator',
                'profession_id' => 5513,
            ),
            204 => 
            array (
                'id' => 46005,
                'name' => 'Hepatology RN',
                'profession_id' => 391,
            ),
            205 => 
            array (
                'id' => 38816,
                'name' => 'Histo Tech',
                'profession_id' => 5531,
            ),
            206 => 
            array (
                'id' => 49661,
                'name' => 'Histo Tech',
                'profession_id' => 11229,
            ),
            207 => 
            array (
                'id' => 38817,
                'name' => 'Histologist',
                'profession_id' => 5531,
            ),
            208 => 
            array (
                'id' => 49669,
                'name' => 'Histology Manager',
                'profession_id' => 11229,
            ),
            209 => 
            array (
                'id' => 49631,
                'name' => 'Home Health',
                'profession_id' => 11226,
            ),
            210 => 
            array (
                'id' => 2134,
                'name' => 'Home Health LPN',
                'profession_id' => 391,
            ),
            211 => 
            array (
                'id' => 2138,
                'name' => 'Homecare RN',
                'profession_id' => 391,
            ),
            212 => 
            array (
                'id' => 2139,
                'name' => 'Hospice RN',
                'profession_id' => 391,
            ),
            213 => 
            array (
                'id' => 38853,
                'name' => 'Hospital Administrator',
                'profession_id' => 5513,
            ),
            214 => 
            array (
                'id' => 38854,
                'name' => 'Hospital Navigator',
                'profession_id' => 5513,
            ),
            215 => 
            array (
                'id' => 49511,
                'name' => 'Housekeeper',
                'profession_id' => 5513,
            ),
            216 => 
            array (
                'id' => 34126,
                'name' => 'HR Assistant',
                'profession_id' => 5513,
            ),
            217 => 
            array (
                'id' => 49506,
                'name' => 'HR Associate',
                'profession_id' => 5513,
            ),
            218 => 
            array (
                'id' => 49524,
                'name' => 'HR Benefits Coordinator',
                'profession_id' => 5513,
            ),
            219 => 
            array (
                'id' => 38866,
                'name' => 'HR Director',
                'profession_id' => 5513,
            ),
            220 => 
            array (
                'id' => 34611,
                'name' => 'HR Generalist',
                'profession_id' => 5513,
            ),
            221 => 
            array (
                'id' => 49516,
                'name' => 'HR Manager',
                'profession_id' => 5513,
            ),
            222 => 
            array (
                'id' => 49507,
                'name' => 'HR Recruiter',
                'profession_id' => 5513,
            ),
            223 => 
            array (
                'id' => 48717,
                'name' => 'Hyperbaric',
                'profession_id' => 391,
            ),
            224 => 
            array (
                'id' => 49744,
                'name' => 'ICU - Burn',
                'profession_id' => 391,
            ),
            225 => 
            array (
                'id' => 49616,
                'name' => 'ICU / CCU - NP',
                'profession_id' => 11242,
            ),
            226 => 
            array (
                'id' => 38878,
                'name' => 'ICU Manager',
                'profession_id' => 5513,
            ),
            227 => 
            array (
                'id' => 2141,
                'name' => 'ICU RN',
                'profession_id' => 391,
            ),
            228 => 
            array (
                'id' => 49564,
                'name' => 'Imaging',
                'profession_id' => 11239,
            ),
            229 => 
            array (
                'id' => 49492,
                'name' => 'IMC',
                'profession_id' => 391,
            ),
            230 => 
            array (
                'id' => 38855,
                'name' => 'Industrial',
                'profession_id' => 5513,
            ),
            231 => 
            array (
                'id' => 33992,
                'name' => 'Infection Control RN',
                'profession_id' => 391,
            ),
            232 => 
            array (
                'id' => 49016,
                'name' => 'Infectious Disease',
                'profession_id' => 391,
            ),
            233 => 
            array (
                'id' => 49717,
                'name' => 'Infusion - Oncology',
                'profession_id' => 391,
            ),
            234 => 
            array (
                'id' => 43015,
                'name' => 'Infusion RN',
                'profession_id' => 391,
            ),
            235 => 
            array (
                'id' => 49583,
                'name' => 'Internal Medicine - Physician',
                'profession_id' => 11239,
            ),
            236 => 
            array (
                'id' => 49594,
                'name' => 'Internal Medicine - Physician',
                'profession_id' => 11240,
            ),
            237 => 
            array (
                'id' => 2142,
                'name' => 'IR RN',
                'profession_id' => 391,
            ),
            238 => 
            array (
                'id' => 49688,
                'name' => 'IR Tech',
                'profession_id' => 11228,
            ),
            239 => 
            array (
                'id' => 38856,
                'name' => 'IT',
                'profession_id' => 5513,
            ),
            240 => 
            array (
                'id' => 2780,
                'name' => 'L&D RN',
                'profession_id' => 391,
            ),
            241 => 
            array (
                'id' => 38818,
                'name' => 'Lab Assistant',
                'profession_id' => 5531,
            ),
            242 => 
            array (
                'id' => 49658,
                'name' => 'Lab Assistant / Coordinator',
                'profession_id' => 11229,
            ),
            243 => 
            array (
                'id' => 38879,
                'name' => 'Lab Director',
                'profession_id' => 5513,
            ),
            244 => 
            array (
                'id' => 49663,
                'name' => 'Lab Manager',
                'profession_id' => 11229,
            ),
            245 => 
            array (
                'id' => 44531,
                'name' => 'Lab Scientist',
                'profession_id' => 5531,
            ),
            246 => 
            array (
                'id' => 38821,
                'name' => 'Lab Supervisor',
                'profession_id' => 5531,
            ),
            247 => 
            array (
                'id' => 34721,
                'name' => 'Lab Technician',
                'profession_id' => 5531,
            ),
            248 => 
            array (
                'id' => 49562,
                'name' => 'Lactation Consultant',
                'profession_id' => 11239,
            ),
            249 => 
            array (
                'id' => 44599,
                'name' => 'Lactation RN',
                'profession_id' => 391,
            ),
            250 => 
            array (
                'id' => 38813,
                'name' => 'LCSW',
                'profession_id' => 5531,
            ),
            251 => 
            array (
                'id' => 49535,
                'name' => 'LCSW',
                'profession_id' => 11237,
            ),
            252 => 
            array (
                'id' => 49503,
                'name' => 'Liason',
                'profession_id' => 5513,
            ),
            253 => 
            array (
                'id' => 49560,
                'name' => 'Licensed Case Worker',
                'profession_id' => 11239,
            ),
            254 => 
            array (
                'id' => 2129,
                'name' => 'LPN',
                'profession_id' => 391,
            ),
            255 => 
            array (
                'id' => 2137,
                'name' => 'LPN Supervisor',
                'profession_id' => 391,
            ),
            256 => 
            array (
                'id' => 49628,
                'name' => 'LTAC',
                'profession_id' => 11226,
            ),
            257 => 
            array (
                'id' => 49646,
                'name' => 'LTAC',
                'profession_id' => 11232,
            ),
            258 => 
            array (
                'id' => 2143,
                'name' => 'LTAC RN',
                'profession_id' => 391,
            ),
            259 => 
            array (
                'id' => 49627,
                'name' => 'LTC',
                'profession_id' => 11226,
            ),
            260 => 
            array (
                'id' => 49645,
                'name' => 'LTC',
                'profession_id' => 11232,
            ),
            261 => 
            array (
                'id' => 49741,
                'name' => 'LTC',
                'profession_id' => 391,
            ),
            262 => 
            array (
                'id' => 34740,
                'name' => 'MA',
                'profession_id' => 5531,
            ),
            263 => 
            array (
                'id' => 49538,
                'name' => 'Maintenance Technician',
                'profession_id' => 5513,
            ),
            264 => 
            array (
                'id' => 34754,
                'name' => 'Mammo Tech',
                'profession_id' => 5531,
            ),
            265 => 
            array (
                'id' => 49689,
                'name' => 'Mammo Tech',
                'profession_id' => 11228,
            ),
            266 => 
            array (
                'id' => 49529,
                'name' => 'Materials Handler',
                'profession_id' => 5513,
            ),
            267 => 
            array (
                'id' => 49851,
                'name' => 'Maternal Fetal Medicine Sonographer',
                'profession_id' => 11228,
            ),
            268 => 
            array (
                'id' => 49751,
                'name' => 'Maternal-fetal medicine',
                'profession_id' => 11240,
            ),
            269 => 
            array (
                'id' => 49726,
                'name' => 'MCU',
                'profession_id' => 391,
            ),
            270 => 
            array (
                'id' => 49737,
                'name' => 'Med Surg - Burn',
                'profession_id' => 391,
            ),
            271 => 
            array (
                'id' => 49746,
                'name' => 'Med Surg - ICU',
                'profession_id' => 391,
            ),
            272 => 
            array (
                'id' => 49724,
                'name' => 'Med Surg - PCU',
                'profession_id' => 391,
            ),
            273 => 
            array (
                'id' => 49710,
                'name' => 'Med Surg Float',
                'profession_id' => 391,
            ),
            274 => 
            array (
                'id' => 38867,
                'name' => 'Med Surg Manager',
                'profession_id' => 5513,
            ),
            275 => 
            array (
                'id' => 49488,
                'name' => 'Med Surg Oncology',
                'profession_id' => 391,
            ),
            276 => 
            array (
                'id' => 2145,
                'name' => 'Med Surg RN',
                'profession_id' => 391,
            ),
            277 => 
            array (
                'id' => 2779,
                'name' => 'Med Surg Tele RN',
                'profession_id' => 391,
            ),
            278 => 
            array (
                'id' => 45419,
                'name' => 'Medical Assistant',
                'profession_id' => 5531,
            ),
            279 => 
            array (
                'id' => 49574,
                'name' => 'Medical Assistant',
                'profession_id' => 11239,
            ),
            280 => 
            array (
                'id' => 38857,
                'name' => 'Medical Biller',
                'profession_id' => 5513,
            ),
            281 => 
            array (
                'id' => 38869,
                'name' => 'Medical Director',
                'profession_id' => 5513,
            ),
            282 => 
            array (
                'id' => 49558,
                'name' => 'Medical Director',
                'profession_id' => 11240,
            ),
            283 => 
            array (
                'id' => 49565,
                'name' => 'Medical Physicist',
                'profession_id' => 11239,
            ),
            284 => 
            array (
                'id' => 34718,
                'name' => 'Medical Technician',
                'profession_id' => 5531,
            ),
            285 => 
            array (
                'id' => 38858,
                'name' => 'Medical Transcriptionist',
                'profession_id' => 5513,
            ),
            286 => 
            array (
                'id' => 49519,
                'name' => 'Medical Writer',
                'profession_id' => 5513,
            ),
            287 => 
            array (
                'id' => 49649,
                'name' => 'Medication Aide',
                'profession_id' => 11232,
            ),
            288 => 
            array (
                'id' => 2146,
                'name' => 'MICU RN',
                'profession_id' => 391,
            ),
            289 => 
            array (
                'id' => 49618,
                'name' => 'Midwife - NP',
                'profession_id' => 11242,
            ),
            290 => 
            array (
                'id' => 46008,
                'name' => 'Milk Technician',
                'profession_id' => 5531,
            ),
            291 => 
            array (
                'id' => 49657,
                'name' => 'MLT',
                'profession_id' => 11229,
            ),
            292 => 
            array (
                'id' => 49690,
                'name' => 'Monitor / Telemetry Tech',
                'profession_id' => 11228,
            ),
            293 => 
            array (
                'id' => 46079,
                'name' => 'Monitor Tech',
                'profession_id' => 5531,
            ),
            294 => 
            array (
                'id' => 6868,
                'name' => 'Mother Baby RN',
                'profession_id' => 391,
            ),
            295 => 
            array (
                'id' => 34719,
                'name' => 'MRI Tech',
                'profession_id' => 5531,
            ),
            296 => 
            array (
                'id' => 49691,
                'name' => 'MRI Tech',
                'profession_id' => 11228,
            ),
            297 => 
            array (
                'id' => 49734,
                'name' => 'MSU',
                'profession_id' => 391,
            ),
            298 => 
            array (
                'id' => 38814,
                'name' => 'MSW',
                'profession_id' => 5531,
            ),
            299 => 
            array (
                'id' => 49494,
                'name' => 'MSW',
                'profession_id' => 11237,
            ),
            300 => 
            array (
                'id' => 38810,
                'name' => 'Music Therapy',
                'profession_id' => 5531,
            ),
            301 => 
            array (
                'id' => 49716,
                'name' => 'Music Therapy',
                'profession_id' => 11230,
            ),
            302 => 
            array (
                'id' => 49619,
                'name' => 'Neonatal - NP',
                'profession_id' => 11242,
            ),
            303 => 
            array (
                'id' => 49750,
                'name' => 'Neonatologist',
                'profession_id' => 11240,
            ),
            304 => 
            array (
                'id' => 49598,
                'name' => 'Neuro - Med Surg',
                'profession_id' => 391,
            ),
            305 => 
            array (
                'id' => 2147,
                'name' => 'Neuro ICU RN',
                'profession_id' => 391,
            ),
            306 => 
            array (
                'id' => 49673,
                'name' => 'Neuro Psychologist',
                'profession_id' => 11241,
            ),
            307 => 
            array (
                'id' => 49720,
                'name' => 'Neurology',
                'profession_id' => 391,
            ),
            308 => 
            array (
                'id' => 2149,
                'name' => 'NICU RN',
                'profession_id' => 391,
            ),
            309 => 
            array (
                'id' => 49603,
                'name' => 'NP/PA',
                'profession_id' => 11242,
            ),
            310 => 
            array (
                'id' => 35070,
                'name' => 'Nuclear Med Tech',
                'profession_id' => 5531,
            ),
            311 => 
            array (
                'id' => 49693,
                'name' => 'Nuclear Med Tech',
                'profession_id' => 11228,
            ),
            312 => 
            array (
                'id' => 49643,
                'name' => 'Nurse Aide',
                'profession_id' => 11232,
            ),
            313 => 
            array (
                'id' => 38885,
                'name' => 'Nurse Educator',
                'profession_id' => 5513,
            ),
            314 => 
            array (
                'id' => 43017,
                'name' => 'Nurse Manager',
                'profession_id' => 391,
            ),
            315 => 
            array (
                'id' => 44018,
                'name' => 'Nurse Practitioner',
                'profession_id' => 5700,
            ),
            316 => 
            array (
                'id' => 49853,
                'name' => 'Nurse Practitioner - NP',
                'profession_id' => 11242,
            ),
            317 => 
            array (
                'id' => 49580,
                'name' => 'OB / GYN Physician',
                'profession_id' => 11239,
            ),
            318 => 
            array (
                'id' => 49591,
                'name' => 'OB / GYN Physician',
                'profession_id' => 11240,
            ),
            319 => 
            array (
                'id' => 34018,
                'name' => 'OB RN',
                'profession_id' => 391,
            ),
            320 => 
            array (
                'id' => 34741,
                'name' => 'OB Tech',
                'profession_id' => 5531,
            ),
            321 => 
            array (
                'id' => 49752,
                'name' => 'OB/GYN Hospitalist',
                'profession_id' => 11240,
            ),
            322 => 
            array (
                'id' => 34833,
                'name' => 'OB/GYN Physician',
                'profession_id' => 5700,
            ),
            323 => 
            array (
                'id' => 2150,
                'name' => 'Observation Unit RN',
                'profession_id' => 391,
            ),
            324 => 
            array (
                'id' => 33993,
                'name' => 'Occ Health RN',
                'profession_id' => 391,
            ),
            325 => 
            array (
                'id' => 38802,
                'name' => 'Occupational Therapist',
                'profession_id' => 5531,
            ),
            326 => 
            array (
                'id' => 49595,
                'name' => 'Oncology - BMT - Bone Marrow Transplant',
                'profession_id' => 391,
            ),
            327 => 
            array (
                'id' => 2151,
                'name' => 'Oncology RN',
                'profession_id' => 391,
            ),
            328 => 
            array (
                'id' => 49576,
                'name' => 'Opthamologist',
                'profession_id' => 11239,
            ),
            329 => 
            array (
                'id' => 49588,
                'name' => 'Opthamologist',
                'profession_id' => 11240,
            ),
            330 => 
            array (
                'id' => 34753,
                'name' => 'Optical Tech',
                'profession_id' => 5531,
            ),
            331 => 
            array (
                'id' => 49570,
                'name' => 'Optical tech',
                'profession_id' => 11239,
            ),
            332 => 
            array (
                'id' => 49575,
                'name' => 'Optometrist',
                'profession_id' => 11239,
            ),
            333 => 
            array (
                'id' => 49587,
                'name' => 'Optometrist',
                'profession_id' => 11240,
            ),
            334 => 
            array (
                'id' => 2152,
                'name' => 'OR Circulator RN',
                'profession_id' => 391,
            ),
            335 => 
            array (
                'id' => 38868,
                'name' => 'OR Manager',
                'profession_id' => 5513,
            ),
            336 => 
            array (
                'id' => 2154,
                'name' => 'OR RN',
                'profession_id' => 391,
            ),
            337 => 
            array (
                'id' => 2153,
                'name' => 'OR Scrub RN',
                'profession_id' => 391,
            ),
            338 => 
            array (
                'id' => 49732,
                'name' => 'OR Tech',
                'profession_id' => 11239,
            ),
            339 => 
            array (
                'id' => 49678,
                'name' => 'Ortho - Med Surg',
                'profession_id' => 391,
            ),
            340 => 
            array (
                'id' => 49722,
                'name' => 'Ortho - PCU',
                'profession_id' => 391,
            ),
            341 => 
            array (
                'id' => 49702,
                'name' => 'Ortho Neuro',
                'profession_id' => 391,
            ),
            342 => 
            array (
                'id' => 2155,
                'name' => 'Ortho RN',
                'profession_id' => 391,
            ),
            343 => 
            array (
                'id' => 34742,
                'name' => 'Ortho Tech',
                'profession_id' => 5531,
            ),
            344 => 
            array (
                'id' => 49498,
                'name' => 'OT',
                'profession_id' => 11230,
            ),
            345 => 
            array (
                'id' => 38803,
                'name' => 'OTA',
                'profession_id' => 5531,
            ),
            346 => 
            array (
                'id' => 49719,
                'name' => 'OTA',
                'profession_id' => 11230,
            ),
            347 => 
            array (
                'id' => 49582,
                'name' => 'Otalorygonologist',
                'profession_id' => 11239,
            ),
            348 => 
            array (
                'id' => 34260,
                'name' => 'Other',
                'profession_id' => 5513,
            ),
            349 => 
            array (
                'id' => 49641,
                'name' => 'Other',
                'profession_id' => 11226,
            ),
            350 => 
            array (
                'id' => 49593,
                'name' => 'Otolarygonologist',
                'profession_id' => 11240,
            ),
            351 => 
            array (
                'id' => 49485,
                'name' => 'Outpatient Surgery',
                'profession_id' => 391,
            ),
            352 => 
            array (
                'id' => 34724,
                'name' => 'PA',
                'profession_id' => 5531,
            ),
            353 => 
            array (
                'id' => 49586,
                'name' => 'PA - Physician Assistant',
                'profession_id' => 11242,
            ),
            354 => 
            array (
                'id' => 2156,
                'name' => 'PACU RN',
                'profession_id' => 391,
            ),
            355 => 
            array (
                'id' => 34225,
                'name' => 'Pain Management RN',
                'profession_id' => 391,
            ),
            356 => 
            array (
                'id' => 49534,
                'name' => 'Paralegal',
                'profession_id' => 5513,
            ),
            357 => 
            array (
                'id' => 35197,
                'name' => 'Paramedic',
                'profession_id' => 5531,
            ),
            358 => 
            array (
                'id' => 49563,
                'name' => 'Paramedic / EMT',
                'profession_id' => 11239,
            ),
            359 => 
            array (
                'id' => 49665,
                'name' => 'Pathologist',
                'profession_id' => 11229,
            ),
            360 => 
            array (
                'id' => 38873,
                'name' => 'Pathology Assistant',
                'profession_id' => 5531,
            ),
            361 => 
            array (
                'id' => 49666,
                'name' => 'Pathology Assistant',
                'profession_id' => 11229,
            ),
            362 => 
            array (
                'id' => 37564,
                'name' => 'Patient Access',
                'profession_id' => 5513,
            ),
            363 => 
            array (
                'id' => 49513,
                'name' => 'Patient Access Rep',
                'profession_id' => 5513,
            ),
            364 => 
            array (
                'id' => 49610,
                'name' => 'Patient Care Associate',
                'profession_id' => 11233,
            ),
            365 => 
            array (
                'id' => 49525,
                'name' => 'Patient Care Manager',
                'profession_id' => 5513,
            ),
            366 => 
            array (
                'id' => 49517,
                'name' => 'Patient Educator',
                'profession_id' => 5513,
            ),
            367 => 
            array (
                'id' => 49508,
                'name' => 'Patient Greeter',
                'profession_id' => 5513,
            ),
            368 => 
            array (
                'id' => 49521,
                'name' => 'Patient Registration Rep',
                'profession_id' => 5513,
            ),
            369 => 
            array (
                'id' => 49611,
                'name' => 'Patient Transporter',
                'profession_id' => 11233,
            ),
            370 => 
            array (
                'id' => 49532,
                'name' => 'Payroll Specialist',
                'profession_id' => 5513,
            ),
            371 => 
            array (
                'id' => 34183,
                'name' => 'PCCU RN',
                'profession_id' => 391,
            ),
            372 => 
            array (
                'id' => 34746,
                'name' => 'PCT',
                'profession_id' => 5531,
            ),
            373 => 
            array (
                'id' => 49606,
                'name' => 'PCT',
                'profession_id' => 11233,
            ),
            374 => 
            array (
                'id' => 49748,
                'name' => 'PCU',
                'profession_id' => 391,
            ),
            375 => 
            array (
                'id' => 49745,
                'name' => 'Pediatric - NP',
                'profession_id' => 11242,
            ),
            376 => 
            array (
                'id' => 49731,
                'name' => 'Pediatric - OR',
                'profession_id' => 391,
            ),
            377 => 
            array (
                'id' => 49651,
                'name' => 'Pediatric Clinical Dietician',
                'profession_id' => 11231,
            ),
            378 => 
            array (
                'id' => 49847,
                'name' => 'Pediatric Echo Tech',
                'profession_id' => 11228,
            ),
            379 => 
            array (
                'id' => 4793,
                'name' => 'Peds ER RN',
                'profession_id' => 391,
            ),
            380 => 
            array (
                'id' => 2157,
                'name' => 'Peds RN',
                'profession_id' => 391,
            ),
            381 => 
            array (
                'id' => 38846,
                'name' => 'Perfusionist',
                'profession_id' => 5531,
            ),
            382 => 
            array (
                'id' => 49559,
                'name' => 'Perfusionist',
                'profession_id' => 11239,
            ),
            383 => 
            array (
                'id' => 38824,
                'name' => 'Pharmacist',
                'profession_id' => 5531,
            ),
            384 => 
            array (
                'id' => 49549,
                'name' => 'Pharmacist',
                'profession_id' => 11236,
            ),
            385 => 
            array (
                'id' => 49553,
                'name' => 'Pharmacy Manager',
                'profession_id' => 11236,
            ),
            386 => 
            array (
                'id' => 34723,
                'name' => 'Pharmacy Tech',
                'profession_id' => 5531,
            ),
            387 => 
            array (
                'id' => 49552,
                'name' => 'Pharmacy Tech',
                'profession_id' => 11236,
            ),
            388 => 
            array (
                'id' => 34729,
                'name' => 'Phlebotomist',
                'profession_id' => 5531,
            ),
            389 => 
            array (
                'id' => 49659,
                'name' => 'Phlebotomist',
                'profession_id' => 11229,
            ),
            390 => 
            array (
                'id' => 38804,
                'name' => 'Physical Therapist',
                'profession_id' => 5531,
            ),
            391 => 
            array (
                'id' => 45758,
                'name' => 'Physical Therapy Assistant',
                'profession_id' => 5531,
            ),
            392 => 
            array (
                'id' => 34714,
                'name' => 'Physician',
                'profession_id' => 5700,
            ),
            393 => 
            array (
                'id' => 49799,
                'name' => 'Physician',
                'profession_id' => 11240,
            ),
            394 => 
            array (
                'id' => 49742,
                'name' => 'PICC',
                'profession_id' => 391,
            ),
            395 => 
            array (
                'id' => 2158,
                'name' => 'PICU RN',
                'profession_id' => 391,
            ),
            396 => 
            array (
                'id' => 41078,
                'name' => 'Polysomnographic Tech',
                'profession_id' => 5531,
            ),
            397 => 
            array (
                'id' => 49701,
                'name' => 'Polysomographic Tech',
                'profession_id' => 11228,
            ),
            398 => 
            array (
                'id' => 34242,
                'name' => 'Post Cath Lab RN',
                'profession_id' => 391,
            ),
            399 => 
            array (
                'id' => 35084,
                'name' => 'PostOp RN',
                'profession_id' => 391,
            ),
            400 => 
            array (
                'id' => 2785,
                'name' => 'PreOp RN',
                'profession_id' => 391,
            ),
            401 => 
            array (
                'id' => 49585,
                'name' => 'Primary Care Physician',
                'profession_id' => 11240,
            ),
            402 => 
            array (
                'id' => 38862,
                'name' => 'Programer',
                'profession_id' => 5513,
            ),
            403 => 
            array (
                'id' => 44600,
                'name' => 'Project Manager',
                'profession_id' => 391,
            ),
            404 => 
            array (
                'id' => 38870,
                'name' => 'Provider Enrollment Coordinator',
                'profession_id' => 5513,
            ),
            405 => 
            array (
                'id' => 49634,
                'name' => 'Psych',
                'profession_id' => 11226,
            ),
            406 => 
            array (
                'id' => 49620,
                'name' => 'Psych - NP',
                'profession_id' => 11242,
            ),
            407 => 
            array (
                'id' => 2160,
                'name' => 'Psych RN',
                'profession_id' => 391,
            ),
            408 => 
            array (
                'id' => 34832,
                'name' => 'Psychiatrist',
                'profession_id' => 5700,
            ),
            409 => 
            array (
                'id' => 49675,
                'name' => 'Psychiatrist',
                'profession_id' => 11241,
            ),
            410 => 
            array (
                'id' => 36086,
                'name' => 'Psychologist',
                'profession_id' => 5700,
            ),
            411 => 
            array (
                'id' => 49497,
                'name' => 'PT',
                'profession_id' => 11230,
            ),
            412 => 
            array (
                'id' => 38805,
                'name' => 'PTA',
                'profession_id' => 5531,
            ),
            413 => 
            array (
                'id' => 49499,
                'name' => 'PTA',
                'profession_id' => 11230,
            ),
            414 => 
            array (
                'id' => 49714,
                'name' => 'Pulmonary Function Tech',
                'profession_id' => 11230,
            ),
            415 => 
            array (
                'id' => 49577,
                'name' => 'Pulmonary Physician',
                'profession_id' => 11239,
            ),
            416 => 
            array (
                'id' => 49589,
                'name' => 'Pulmonary Physician',
                'profession_id' => 11240,
            ),
            417 => 
            array (
                'id' => 2161,
                'name' => 'QA RN',
                'profession_id' => 391,
            ),
            418 => 
            array (
                'id' => 49736,
                'name' => 'Rad Tech',
                'profession_id' => 11228,
            ),
            419 => 
            array (
                'id' => 43490,
                'name' => 'Radiation Oncology Medical Physicist',
                'profession_id' => 5531,
            ),
            420 => 
            array (
                'id' => 38806,
                'name' => 'Radiation Therapist',
                'profession_id' => 5531,
            ),
            421 => 
            array (
                'id' => 49694,
                'name' => 'Radiation Therapist',
                'profession_id' => 11228,
            ),
            422 => 
            array (
                'id' => 43911,
                'name' => 'Radiology Manager',
                'profession_id' => 5531,
            ),
            423 => 
            array (
                'id' => 49600,
                'name' => 'Radiology Manager - Mammo',
                'profession_id' => 11228,
            ),
            424 => 
            array (
                'id' => 46003,
                'name' => 'Radiology RN',
                'profession_id' => 391,
            ),
            425 => 
            array (
                'id' => 34720,
                'name' => 'Radiology Tech',
                'profession_id' => 5531,
            ),
            426 => 
            array (
                'id' => 49709,
                'name' => 'Recreational Therapist',
                'profession_id' => 11230,
            ),
            427 => 
            array (
                'id' => 37565,
                'name' => 'Recruiter',
                'profession_id' => 5513,
            ),
            428 => 
            array (
                'id' => 49653,
                'name' => 'Registered Dietician',
                'profession_id' => 11231,
            ),
            429 => 
            array (
                'id' => 49522,
                'name' => 'Registrar',
                'profession_id' => 5513,
            ),
            430 => 
            array (
                'id' => 49540,
                'name' => 'Regulatory Affairs Specialist',
                'profession_id' => 5513,
            ),
            431 => 
            array (
                'id' => 2162,
                'name' => 'Rehab RN',
                'profession_id' => 391,
            ),
            432 => 
            array (
                'id' => 38841,
                'name' => 'Rehab Support',
                'profession_id' => 5531,
            ),
            433 => 
            array (
                'id' => 49712,
                'name' => 'Rehabilitation Counselor',
                'profession_id' => 11230,
            ),
            434 => 
            array (
                'id' => 36140,
                'name' => 'Revenue Cycle',
                'profession_id' => 5513,
            ),
            435 => 
            array (
                'id' => 49536,
                'name' => 'Revenue Cycle Specialist',
                'profession_id' => 5513,
            ),
            436 => 
            array (
                'id' => 34665,
                'name' => 'Risk Management RN',
                'profession_id' => 391,
            ),
            437 => 
            array (
                'id' => 49573,
                'name' => 'RMA',
                'profession_id' => 11239,
            ),
            438 => 
            array (
                'id' => 44017,
                'name' => 'RN - Float Pool',
                'profession_id' => 391,
            ),
            439 => 
            array (
                'id' => 34192,
                'name' => 'RN Supervisor',
                'profession_id' => 391,
            ),
            440 => 
            array (
                'id' => 38823,
                'name' => 'RRT',
                'profession_id' => 5531,
            ),
            441 => 
            array (
                'id' => 49704,
                'name' => 'RRT',
                'profession_id' => 11230,
            ),
            442 => 
            array (
                'id' => 38859,
                'name' => 'Sales',
                'profession_id' => 5513,
            ),
            443 => 
            array (
                'id' => 33987,
                'name' => 'School Nurse RN',
                'profession_id' => 391,
            ),
            444 => 
            array (
                'id' => 44016,
                'name' => 'Scrub/OR/Surgical Tech',
                'profession_id' => 5531,
            ),
            445 => 
            array (
                'id' => 34179,
                'name' => 'SCU RN',
                'profession_id' => 391,
            ),
            446 => 
            array (
                'id' => 49733,
                'name' => 'Secretary',
                'profession_id' => 5513,
            ),
            447 => 
            array (
                'id' => 49671,
                'name' => 'Senior Clinical Manager',
                'profession_id' => 11229,
            ),
            448 => 
            array (
                'id' => 36118,
                'name' => 'SICU RN',
                'profession_id' => 391,
            ),
            449 => 
            array (
                'id' => 49644,
                'name' => 'Sitter / Companion',
                'profession_id' => 11232,
            ),
            450 => 
            array (
                'id' => 14232,
                'name' => 'Skilled Nursing RN',
                'profession_id' => 391,
            ),
            451 => 
            array (
                'id' => 49706,
                'name' => 'Sleep / PSG Tech',
                'profession_id' => 11230,
            ),
            452 => 
            array (
                'id' => 49747,
                'name' => 'Sleep Medicine Polysomnographic Technologist',
                'profession_id' => 11239,
            ),
            453 => 
            array (
                'id' => 49705,
                'name' => 'SLP',
                'profession_id' => 11230,
            ),
            454 => 
            array (
                'id' => 49599,
                'name' => 'SLP - Speech Therapist',
                'profession_id' => 11230,
            ),
            455 => 
            array (
                'id' => 49629,
                'name' => 'SNF',
                'profession_id' => 11226,
            ),
            456 => 
            array (
                'id' => 49647,
                'name' => 'SNF',
                'profession_id' => 11232,
            ),
            457 => 
            array (
                'id' => 38875,
                'name' => 'Social Worker',
                'profession_id' => 5531,
            ),
            458 => 
            array (
                'id' => 49493,
                'name' => 'Social Worker',
                'profession_id' => 11237,
            ),
            459 => 
            array (
                'id' => 49695,
                'name' => 'Special Procedures Tech',
                'profession_id' => 11228,
            ),
            460 => 
            array (
                'id' => 38807,
                'name' => 'Speech Therapist',
                'profession_id' => 5531,
            ),
            461 => 
            array (
                'id' => 38808,
                'name' => 'Speech Therapy Assistant',
                'profession_id' => 5531,
            ),
            462 => 
            array (
                'id' => 49715,
                'name' => 'Speech Therapy Assistant',
                'profession_id' => 11230,
            ),
            463 => 
            array (
                'id' => 34830,
                'name' => 'SPU RN',
                'profession_id' => 391,
            ),
            464 => 
            array (
                'id' => 38876,
                'name' => 'Staff Development Coordinator',
                'profession_id' => 5513,
            ),
            465 => 
            array (
                'id' => 2163,
                'name' => 'Stepdown RN',
                'profession_id' => 391,
            ),
            466 => 
            array (
                'id' => 49545,
                'name' => 'Sterile Processing Manager',
                'profession_id' => 11234,
            ),
            467 => 
            array (
                'id' => 34725,
                'name' => 'Sterile Processing Tech',
                'profession_id' => 5531,
            ),
            468 => 
            array (
                'id' => 49543,
                'name' => 'Sterile Processing Tech',
                'profession_id' => 11234,
            ),
            469 => 
            array (
                'id' => 38860,
                'name' => 'Supply Chain',
                'profession_id' => 5513,
            ),
            470 => 
            array (
                'id' => 49530,
                'name' => 'Supply Chain Analyst',
                'profession_id' => 5513,
            ),
            471 => 
            array (
                'id' => 49721,
                'name' => 'Surgeon Assistant',
                'profession_id' => 11245,
            ),
            472 => 
            array (
                'id' => 49548,
            'name' => 'Surgical / Scrub Tech (Non Certified)',
                'profession_id' => 11235,
            ),
            473 => 
            array (
                'id' => 49613,
                'name' => 'Surgical First Assistant',
                'profession_id' => 11227,
            ),
            474 => 
            array (
                'id' => 46004,
                'name' => 'Surgical Scheduler',
                'profession_id' => 391,
            ),
            475 => 
            array (
                'id' => 34732,
                'name' => 'Surgical Tech',
                'profession_id' => 5531,
            ),
            476 => 
            array (
                'id' => 49677,
                'name' => 'Surgical Tech - CVOR',
                'profession_id' => 11239,
            ),
            477 => 
            array (
                'id' => 49612,
                'name' => 'Telehealth Patient Care Coordinator',
                'profession_id' => 11233,
            ),
            478 => 
            array (
                'id' => 49541,
                'name' => 'Telehealth Social Worker',
                'profession_id' => 11237,
            ),
            479 => 
            array (
                'id' => 2164,
                'name' => 'Telemetry RN',
                'profession_id' => 391,
            ),
            480 => 
            array (
                'id' => 38809,
                'name' => 'Therapist',
                'profession_id' => 5531,
            ),
            481 => 
            array (
                'id' => 49743,
                'name' => 'Transplant',
                'profession_id' => 391,
            ),
            482 => 
            array (
                'id' => 34008,
                'name' => 'Transport RN',
                'profession_id' => 391,
            ),
            483 => 
            array (
                'id' => 49491,
                'name' => 'Trauma PCU',
                'profession_id' => 391,
            ),
            484 => 
            array (
                'id' => 49758,
                'name' => 'Traumatic Brain Injury/General Medicine',
                'profession_id' => 11240,
            ),
            485 => 
            array (
                'id' => 38861,
                'name' => 'Tumor Registrar',
                'profession_id' => 5513,
            ),
            486 => 
            array (
                'id' => 34713,
                'name' => 'Ultrasound Tech',
                'profession_id' => 5531,
            ),
            487 => 
            array (
                'id' => 49692,
                'name' => 'Ultrasound Tech / Sonographer',
                'profession_id' => 11228,
            ),
            488 => 
            array (
                'id' => 2166,
                'name' => 'Unknown RN',
                'profession_id' => 391,
            ),
            489 => 
            array (
                'id' => 2167,
                'name' => 'UR RN',
                'profession_id' => 391,
            ),
            490 => 
            array (
                'id' => 49739,
                'name' => 'Urology',
                'profession_id' => 391,
            ),
            491 => 
            array (
                'id' => 36176,
                'name' => 'Vaccination RN',
                'profession_id' => 391,
            ),
            492 => 
            array (
                'id' => 34014,
                'name' => 'Vascular RN',
                'profession_id' => 391,
            ),
            493 => 
            array (
                'id' => 49697,
                'name' => 'Vascular Tech',
                'profession_id' => 11228,
            ),
            494 => 
            array (
                'id' => 49561,
                'name' => 'Ventilator Tech',
                'profession_id' => 11239,
            ),
            495 => 
            array (
                'id' => 49652,
                'name' => 'Virtual Dietician',
                'profession_id' => 11231,
            ),
            496 => 
            array (
                'id' => 33976,
                'name' => 'WOC RN',
                'profession_id' => 391,
            ),
            497 => 
            array (
                'id' => 49622,
                'name' => 'Women\'s Health - NP',
                'profession_id' => 11242,
            ),
            498 => 
            array (
                'id' => 49725,
                'name' => 'Wound Care',
                'profession_id' => 391,
            ),
            499 => 
            array (
                'id' => 49699,
                'name' => 'X-Ray Tech',
                'profession_id' => 11228,
            ),
        ));
        
        
    }
}