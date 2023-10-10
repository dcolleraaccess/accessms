<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function fetchSpecialties(Request $request){
        $selectedProfession = $request->query('profession');

        // dd($selectedProfession);

        $RN = [
            'Acute Care',
            'Acute Recovery Unit',
            'Addiction / Recovery / Substance Abuse',
            'Ambulatory',
            'Antepartum',
            'Apheresis',
            'Assisted Living / Senior Living',
            'Bariatric',
            'Cardiac Device Specialist',
            'Case Manager',
            'Cath Lab',
            'CCU',
            'CDU - Clinical Decision Unit',
            'Charge / Supervisor / Manager',
            'CICU',
            'Clinic',
            'Correctional Health',
            'CVICU',
            'CVOR',
            'Diabetes',
            'Dialysis',
            'Electrophysiology Lab',
            'Endoscopy',
            'ER',
            'FA',
            'Flight',
            'Float Pool',
            'Hedis',
            'Home Health',
            'Hospice',
            'ICU',
            'Infection Control',
            'Infusion',
            'Intake / Triage',
            'IR',
            'L&D',
            'Liason',
            'LTAC',
            'LTC',
            'MDS',
            'Med Surg',
            'MICU',
            'Mother Baby',
            'MS',
            'MS / Tele',
            'Neuro - ICU',
            'Neuro - Med Surg',
            'Neuro - PCU',
            'NICU',
            'Nurse Educator',
            'Nurse Navigator',
            'Nursery',
            'OB / GYN',
            'Occupational / Employee Health',
            'Oncology',
            'Oncology - Med Surg',
            'OR',
            'Ortho',
            'Ortho - Med Surg',
            'PACU',
            'Pain Management',
            'PCU / Stepdown',
            'Pediatric',
            'Pediatric - Cath Lab',
            'Pediatric - CVICU',
            'Pediatric - ER',
            'Pediatric - Med Surg',
            'Pediatric - Med Surg / Tele',
            'Pediatric - Oncology',
            'Pediatric - OR',
            'Pediatric - PACU',
            'Pediatric - PCU',
            'Perinatal',
            'PICC',
            'PICU',
            'Postpartum',
            'Pre / Post / Peri OP Care',
            'Psych',
            'Radiology',
            'Rehab',
            'Respiratory Care',
            'Risk Management',
            'RN General',
            'School',
            'SICU',
            'SNF',
            'Tele',
            'Telephone / Triage',
            'TICU',
            'Transplant',
            'Trauma',
            'Urology',
            'Wound Care',
            'Quality Assurance',
            'Skilled Nursing',
            'WOC',
            'Vaccination RN',
            'Detox RN',
            'Hepatology',
            'Educator',
            'Infectious Disease',
        ];

        $LPVLVN = [
            'Charge / Supervisor / Manager',
            'Acute Care',
            'LTC',
            'LTAC',
            'SNF',
            'Assisted Living',
            'Home Health',
            'Dialysis',
            'Ambulatory',
            'Psych',
            'ER',
            'General',
            'Correctional Health',
            'CCU',
            'Clinic',
            'Other',
        ];

        $SurgicalFirstAssist = [
            'Surgical First Assistant',
            'CSFA - Certified Surgical First Assistant',
        ];

        $AdvancedPracticeProvider = [
            'General - NP',
            'ICU / CCU - NP',
            'ER - NP',
            'Midwife - NP',
            'Neonatal - NP',
            'Psych - NP',
            'Family Medicine - NP',
            "Women's Health - NP",
            "Advanced Oncology - NP",
            "Adult Gerontology - NP",
            "CRNA",
        ];

        $Pharmacy = [
            'Pharmacist',
            'Certified Pharmacy Tech',
            'Certified Pharmacy Tech',
            'Pharmacy Tech',
            'Pharmacy Manager',
        ];

        $Dentistry = [
            'Dentist',
            'Dental Assistant',
            'Dental Hygenist',
        ];

        $PsychologistPsychiatrist = [
            'Clinical Psychologist',
            'Neuro Psychologist',
            'Psychiatrist',
        ];

        $PhysiciansAssistant = [
            'Physicians Assistant',
        ];



        if($selectedProfession == 'RN'){
            return response()->json($RN);
        }
        if($selectedProfession == 'LPN/LVN'){
            return response()->json($LPVLVN);
        }
        if($selectedProfession == 'Surgical First Assist'){
            return response()->json($SurgicalFirstAssist);
        }
        if($selectedProfession == 'Advanced Practice Provider'){
            return response()->json($AdvancedPracticeProvider);
        }
        if($selectedProfession == 'Pharmacy'){
            return response()->json($Pharmacy);
        }
        if($selectedProfession == 'Dentistry'){
            return response()->json($Dentistry);
        }
        if($selectedProfession == 'Psychologist / Psychiatrist'){
            return response()->json($PsychologistPsychiatrist);
        }
        if($selectedProfession == 'Physicians Assistant'){
            return response()->json($PhysiciansAssistant);
        }
    }
}
