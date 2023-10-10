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

        $RadiologySonographer = [
            'Cath LabTech',
            'CT Tech',
            'Dosimetrist',
            'Echo Tech',
            'EEG Tech',
            'EKG Tech',
            'EP Tech',
            'IR Tech',
            'Mammo Tech',
            'Monitor / Telemetry Tech',
            'MRI Tech',
            'Sonographer / Ultrasound Tech',
            'Nuclear Med Tech',
            'Radiation Therapist',
            'Special Procedures Tech',
            'Cardiac Sonographer',
            'Vascular Tech',
            'Cardiovascular Tech',
            'X-Ray Tech',
            'General / Other',
            'Polysomographic Tech',
        ];

        $Laboratory = [
            'CLS/MLS/MT',
            'MLT',
            'Lab Assistant / Coordinator',
            'Phlebotomist',
            'Cytotech',
            'Histo Tech',
            'Certified Histo Tech',
            'Lab Manager',
            'Pathologist',
            'Pathology Assistant',
            'Drug Safety',
            'Histology Manager',
            'Clinical Research Coordinator',
            'Senior Clinical Manager',
        ];

        $TherapyRehab = [
            'COTA',
            'OT',
            'CRT',
            'RRT',
            'SLP',
            'PT',
            'PTA',
            'Sleep / PSG Tech',
            'Certified Sleep/ PSG Tech',
            'Adjunctive Therapist',
            'Recreational Therapist',
            'Athletic Trainer',
            'Rehabilitation Counselor',
            'Expressive Therapist',
            'Pulmonary Function Tech',
            'Speech Therapy Assistant',
            'Music Therapy',
        ];

        $Dietician = [
            'Dietician',
            'Pediatric Clinical Dietician',
            'Virtual Dietician',
            'Registered Dietician',
            'Dietary Aide',
            'Dietary Manager',
        ];

        $CNAMedicationAide = [
            'CNA',
            'Nurse Aide',
            'Sitter / Companion',
            'LTC',
            'LTAC',
            'SNF',
            'Assisted Living',
            'Medication Aide',
        ];

        $PatientCareTechs = [
            'PCT',
            'Certified Dialysis Tech',
            'Dialysis Tech',
            'Behavioral Health Tech',
            'Patient Care Associate',
            'Patient Transporter',
            'Telehealth Patient Care Coordinator',
        ];

        $SterileProcessing = [
            'Certified Sterole Processing Tech',
            'Sterile Processing Tech',
            'Sterile Processing Manager',
        ];

        $SurgicalScrubTech = [
            'Certified Surgical / Scrub Tech',
            'Surgical / Scrub Tech (Non Certified)',
        ];

        $SocialWorker = [
            'Social Worker',
            'MSW',
            'Associate Clinical Social Worker',
            'LCSW',
            'Case Management',
            'Telehealth Social Worker',
        ];

        $AlliedOther = [
            'Anesthesia Tech',
            'Certified Anesthesia Tech',
            'Endo Tech',
            'GI Tech',
            'Perfusionist',
            'Licensed Case Worker',
            'Ventilator Tech',
            'Lactation Consultant',
            'Paramedic / EMT',
            'Imaging',
            'Medical Physicist',
            'Blood Bank Tech',
            'Audiologist',
            'Cardiac Device Specialist',
            'Epidemiologist',
            'Optical Tech',
            'ER Tech',
            'CMA',
            'RMA',
            'Medical Assistant',
        ];

        $PhysicianDoctor = [
            'Optometrist',
            'Opthamologist',
            'Pulmonary Physician',
            'Family Medicine Physician',
            'OB / GYN Physician',
            'Anesthesiologist',
            'Otolaryngologist',
            'Internal Medicine - Physician',
            'Addiction Medicine - Physician',
            'Primary Care Physician',
            'Emergency Room Physician',
        ];

        $AdminNonClerical = [
            'Accountant',
            'Admin Assitant',
            'Billing Representative',
            'Clerk',
            'Liason',
            'Controller',
            'Credentialing Coordinator',
            'Data Entry Specialist',
            'Financial Representative',
            'HR Associate',
            'HR Recruiter',
            'Patient Greeter',
            'Food Service',
            'Cook',
            'Housekeeper',
            'Claim Processor',
            'Patient Access Rep',
            'Customer Service Rep',
            'HR Manager',
            'Patient Educator',
            'Environmental Service Worker',
            'Medical Writer',
            'Financial Analyst',
            'Patient Registration Rep',
            'Registrar',
            'Credentialing Specialist',
            'HR Benefits Coordinator',
            'Patient Care Manager',
            'Credentialing Manager',
            'Healthcare Adminstrator',
            'Clinical Documentation Specialist',
            'Materials Handler',
            'Supply Chain Analyst',
            'Payroll Specialist',
            'Account Manager Sales',
            'Paralegal',
            'Revenue Cycle Specialist',
            'Document Imaging Specialist',
            'Maintenance Technician',
            'Regulatory Affairs Specialist',
            'ADON',
            'Clinical Care Director',
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
        if($selectedProfession == 'Radiology / Sonographer'){
            return response()->json($RadiologySonographer);
        }
        if($selectedProfession == 'Laboratory'){
            return response()->json($Laboratory);
        }
        if($selectedProfession == 'Therapy/Rehab'){
            return response()->json($TherapyRehab);
        }
        if($selectedProfession == 'Dietician'){
            return response()->json($Dietician);
        }
        if($selectedProfession == 'CNA / Medication Aide'){
            return response()->json($CNAMedicationAide);
        }
        if($selectedProfession == 'Patient Care Techs'){
            return response()->json($PatientCareTechs);
        }
        if($selectedProfession == 'Sterile Processing'){
            return response()->json($SterileProcessing);
        }
        if($selectedProfession == 'Surgical / Scrub Tech'){
            return response()->json($SurgicalScrubTech);
        }
        if($selectedProfession == 'Social Worker'){
            return response()->json($SocialWorker);
        }
        if($selectedProfession == 'Allied - Other'){
            return response()->json($AlliedOther);
        }
        if($selectedProfession == 'Physician / Doctor'){
            return response()->json($PhysicianDoctor);
        }
        if($selectedProfession == 'Admin / Non-Clerical'){
            return response()->json($AdminNonClerical);
        }
    }
}
