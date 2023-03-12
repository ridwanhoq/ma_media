<?php

namespace App\Http\Components;

use App\Http\Components\Helpers\BengaliHelper;

class Setting
{

    /**
     * Application related variables
     */
    public static $validation_error_message     = "Some validation error occurs";
    public static $catch_error_message          = "Please try again.";
    public static $login_failed_message         = "Unauthenticated";




    /***
     * common starts
     */

    public static function months_array()
    {
        return [
            1  => ['en' => 'January', 'bn' => 'জানুয়ারি', 'key' => 1],
            2  => ['en' => 'February', 'bn' => 'ফেব্রুয়ারি', 'key' => 2],
            3  => ['en' => 'March', 'bn' => 'মার্চ', 'key' => 3],
            4  => ['en' => 'April', 'bn' => 'এপ্রিল', 'key' => 4],
            5  => ['en' => 'May', 'bn' => 'মে', 'key' => 5],
            6  => ['en' => 'June', 'bn' => 'জুন', 'key' => 6],
            7  => ['en' => 'July', 'bn' => 'জুলাই', 'key' => 7],
            8  => ['en' => 'August', 'bn' => 'আগস্ট', 'key' => 8],
            9  => ['en' => 'September', 'bn' => 'সেপ্টেম্বর', 'key' => 9],
            10 => ['en' => 'October', 'bn' => 'অক্টোবর', 'key' => 10],
            11 => ['en' => 'November', 'bn' => 'নভেম্বর', 'key' => 11],
            12 => ['en' => 'December', 'bn' => 'ডিসেম্বর', 'key' => 12],
        ];
    }

    public static function education_types_array()
    {
        return [
            10 => ['en' => 'No Education', 'bn' => 'শিক্ষা নেই', 'key' => 10],
            20 => ['en' => 'Alia', 'bn' => 'প্রাইমারী', 'key' => 20],
            30 => ['en' => 'Qaomi', 'bn' => 'নিম্ন মাধ্যমিক', 'key' => 30],
        ];
    }

    public static function education_qualifications_array()
    {
        return [
            10 => ['en' => 'No Education', 'bn' => 'শিক্ষা নেই', 'key' => 10],
            20 => ['en' => 'Primary Level', 'bn' => 'প্রাইমারী', 'key' => 20],
            30 => ['en' => 'Lower Secondary Level', 'bn' => 'নিম্ন মাধ্যমিক', 'key' => 30],
            40 => ['en' => 'S.S.C', 'bn' => 'এস.এস.সি', 'key' => 40],
            50 => ['en' => 'H.S.C', 'bn' => 'এইচ.এস.সি', 'key' => 50],
            60 => ['en' => 'Graduation', 'bn' => 'স্নাতক', 'key' => 60],
            70 => ['en' => 'Masters', 'bn' => 'মাস্টার্স', 'key' => 70],
        ];
    }

    public static function ethnicity_types_array()
    {
        return [
            10 => ['en' => 'Chakma', 'bn' => 'চাকমা', 'key' => 10],
            20 => ['en' => 'Garo', 'bn' => 'গারো', 'key' => 20],
            30 => ['en' => 'Kuki', 'bn' => 'কুকি', 'key' => 30],
            40 => ['en' => 'Marma', 'bn' => 'মারমা', 'key' => 40],
            50 => ['en' => 'Not Applicable', 'bn' => 'প্রযোজ্য নয়', 'key' => 50],
            60 => ['en' => 'Others', 'bn' => 'অন্যান্য', 'key' => 60],
        ];
    }

    public static function disability_types_array()
    {
        return [
            1 => ['en' => 'Not Applicable', 'bn' => 'প্রযোজ্য নয়', 'key' => 1],
            2 => ['en' => 'Physical', 'bn' => 'শারীরিক', 'key' => 2],
            3 => ['en' => 'Mental', 'bn' => 'মানসিক', 'key' => 3],
            4 => ['en' => 'Speech', 'bn' => 'বাক', 'key' => 4],
            5 => ['en' => 'Hearing', 'bn' => 'শ্রবণ', 'key' => 5],
            6 => ['en' => 'Vision', 'bn' => 'দৃষ্টি', 'key' => 6],
            7 => ['en' => 'Multiple', 'bn' => 'একাধিক', 'key' => 7],
            8 => ['en' => 'Other', 'bn' => 'অন্যান্য', 'key' => 8],
        ];
    }

    public static function disability_degrees_array()
    {
        return [
            1 => ['en' => 'Low', 'bn' => 'কম', 'key' => 1],
            2 => ['en' => 'Moderate', 'bn' => 'পরিমিত', 'key' => 2],
            3 => ['en' => 'Severe', 'bn' => 'গুরুতর', 'key' => 3],
            4 => ['en' => 'Not Applicable', 'bn' => 'প্রযোজ্য নয়', 'key' => 4],
        ];
    }

    public static function yes_no_array()
    {
        return [
            1 => ['en' => 'yes', 'bn' => 'হ্যাঁ', 'key' => 1],
            2 => ['en' => 'no', 'bn' => 'না', 'key' => 2],
        ];
    }

    public static function weights_array()
    {
        return [
            1 => ['en' => 'Below 21', 'bn' => '২১ এর নিচে', 'key' => 1],
            2 => ['en' => '21-25', 'bn' => '২১-২৫', 'key' => 2],
            3 => ['en' => '26-30', 'bn' => '২৬-৩০', 'key' => 3],
            4 => ['en' => '31-35', 'bn' => '৩১-৩৫', 'key' => 4],
            5 => ['en' => '36-40', 'bn' => '৩৬-৪০', 'key' => 5],
            6 => ['en' => '41-45', 'bn' => '৪১-৪৫', 'key' => 6],
            7 => ['en' => '46-50', 'bn' => '৪৬-৫০', 'key' => 7],
            8 => ['en' => 'Avobe 50', 'bn' => '৫০ এর উপরে', 'key' => 8],
        ];
    }

    public static function heights_array()
    {
        return [
            1  => ['en' => 'Below 100 c.m', 'bn' => '১০০ সেঃমিঃ এর নিচে', 'key' => 1],
            2  => ['en' => '101-105 c.m', 'bn' => '১০১-১০৫ সেঃমিঃ', 'key' => 2],
            3  => ['en' => '106-110 c.m', 'bn' => '১০৬-১১০ সেঃমিঃ', 'key' => 3],
            4  => ['en' => '111-115 c.m', 'bn' => '১১১-১১৫ সেঃমিঃ', 'key' => 4],
            5  => ['en' => '116-120 c.m', 'bn' => '১১৬-১২০ সেঃমিঃ', 'key' => 5],
            6  => ['en' => '121-125 c.m', 'bn' => '১২১-১২৫ সেঃমিঃ', 'key' => 6],
            7  => ['en' => '126-130 c.m', 'bn' => '১২৬-১৩০ সেঃমিঃ', 'key' => 7],
            8  => ['en' => '131-135 c.m', 'bn' => '১৩১-১৩৫ সেঃমি', 'key' => 8],
            9  => ['en' => '136-140 c.m', 'bn' => '১৩৬-১৪০ সেঃমি', 'key' => 9],
            10 => ['en' => '141-145 c.m', 'bn' => '১৪১-১৪৫ সেঃমি', 'key' => 10],
            11 => ['en' => '146-150 c.m', 'bn' => '১৪৬-১৫০ সেঃমি', 'key' => 11],
            12 => ['en' => '151-155 c.m', 'bn' => '১৫১-১৫৫ সেঃমি', 'key' => 12],
            13 => ['en' => '156-160 c.m', 'bn' => '১৫৬-১৬০ সেঃমি', 'key' => 13],
            14 => ['en' => 'Avobe160 c.m', 'bn' => '১৬০ সেঃমি এর উপরে', 'key' => 14],
        ];
    }

    public static function good_bad_array()
    {
        return [
            1 => ['en' => 'Good', 'bn' => 'ভাল', 'key' => 1],
            2 => ['en' => 'Not so good', 'bn' => 'মোটামুটি', 'key' => 2],
            3 => ['en' => 'Bad', 'bn' => 'ভাল নয়', 'key' => 3],
        ];
    }

    public static function relations_array()
    {
        return [
            1 => ['en' => 'Father', 'bn' => 'বাবা', 'key' => 1],
            2 => ['en' => 'Mother', 'bn' => 'মা', 'key' => 2],
            3 => ['en' => 'Sister', 'bn' => 'বোন', 'key' => 3],
            4 => ['en' => 'Brother', 'bn' => 'ভাই', 'key' => 4],
            5 => ['en' => 'Others', 'bn' => 'অন্যান্য', 'key' => 5],
        ];
    }

    public static function professions_array()
    {
        return [
            1  => ['en' => 'Housewife', 'bn' => 'গৃহিণী', 'key' => 1],
            2  => ['en' => 'Govt Service', 'bn' => 'সরকারি চাকুরি', 'key' => 2],
            3  => ['en' => 'Non Govt Service', 'bn' => 'বেসরকারি চাকুরি', 'key' => 3],
            4  => ['en' => 'Day Labour', 'bn' => 'শ্রমিক', 'key' => 4],
            5  => ['en' => 'Own Business', 'bn' => 'নিজস্ব ব্যাবসা', 'key' => 5],
            6  => ['en' => 'Samll Business', 'bn' => 'ছোট ব্যাবসা', 'key' => 6],
            7  => ['en' => 'Living Abroad', 'bn' => 'প্রবাসী', 'key' => 7],
            8  => ['en' => 'Teaching', 'bn' => 'শিক্ষকতা', 'key' => 8],
            9  => ['en' => 'Fisherman', 'bn' => 'জেলে', 'key' => 9],
            10 => ['en' => 'Farmer', 'bn' => 'কৃষক', 'key' => 10],
            11 => ['en' => '', 'bn' => 'অন্যান্য', 'key' => 11],
            12 => ['en' => '', 'bn' => 'আইনজীবী', 'key' => 12],
            13 => ['en' => '', 'bn' => 'আলেম / আলেমা', 'key' => 13],
            14 => ['en' => '', 'bn' => 'ইন্জিনিয়ার', 'key' => 14],
            15 => ['en' => '', 'bn' => 'ইমাম', 'key' => 15],
            16 => ['en' => '', 'bn' => 'ইসলামী ব্যাংক চাকরিজীবী', 'key' => 16],
            17 => ['en' => '', 'bn' => 'কন্টেন ক্রিয়েটর', 'key' => 17],
            18 => ['en' => '', 'bn' => 'কৃষক', 'key' => 18],
            19 => ['en' => '', 'bn' => 'গৃহিনী', 'key' => 19],
            20 => ['en' => '', 'bn' => 'ছাত্র/ছাত্রী', 'key' => 20],
            21 => ['en' => '', 'bn' => 'ডাক্তার', 'key' => 21],
            22 => ['en' => '', 'bn' => 'ডেভেলপপার', 'key' => 22],
            23 => ['en' => '', 'bn' => 'ড্রাইভার', 'key' => 23],
            24 => ['en' => '', 'bn' => 'দ্বীনী ইলেম শিক্ষার্থী', 'key' => 24],
            25 => ['en' => '', 'bn' => 'নার্স', 'key' => 25],
            26 => ['en' => '', 'bn' => 'প্রবাশী', 'key' => 26],
            27 => ['en' => '', 'bn' => 'ফ্রিলেন্সার', 'key' => 27],
            28 => ['en' => '', 'bn' => 'বিশ্ববিদ্যালয় শিক্ষার্থী', 'key' => 28],
            29 => ['en' => '', 'bn' => 'বেসরকারী চাকরিজীবী', 'key' => 20],
            30 => ['en' => '', 'bn' => 'ব্যবসায়ী', 'key' => 20],
            31 => ['en' => '', 'bn' => 'মাওলানা / মুফতি', 'key' => 11],
            32 => ['en' => '', 'bn' => 'মেডিকেল শিক্ষার্থী', 'key' => 11],
            33 => ['en' => '', 'bn' => 'লেখক', 'key' => 11],
            34 => ['en' => '', 'bn' => 'শিক্ষক/শিক্ষিকা', 'key' => 11],
            35 => ['en' => '', 'bn' => 'শ্রমজীবী', 'key' => 11],
            36 => ['en' => '', 'bn' => 'সরকারী চাকরিজীবী', 'key' => 11],
            37 => ['en' => '', 'bn' => 'সাংবাদিক', 'key' => 11],
            38 => ['en' => '', 'bn' => 'সামরিক চাকরিজীবী', 'key' => 11],
            39 => ['en' => '', 'bn' => 'হাফেজ /হাফেজা', 'key' => 11],
            40 => ['en' => 'Others', 'bn' => 'অন্যান্য', 'key' => 11],
        ];
    }

    public static function monthly_incomes_array()
    {
        return [
            1  => ['en' => 'Below 3000 TK', 'bn' => '৩০০০ টাকার নিচে', 'key' => 1],
            2  => ['en' => '3000 TK', 'bn' => '৩০০ টাকা', 'key' => 2],
            3  => ['en' => '4000 TK', 'bn' => '৪০০০ টাকা', 'key' => 3],
            4  => ['en' => '5000 TK', 'bn' => '৫০০০ টাকা', 'key' => 4],
            5  => ['en' => '6000 TK', 'bn' => '৬০০০ টাকা', 'key' => 5],
            6  => ['en' => '7000 TK', 'bn' => '৭০০০ টাকা', 'key' => 6],
            7  => ['en' => '8000 TK', 'bn' => '৮০০০ টাকা', 'key' => 7],
            8  => ['en' => '9000 TK', 'bn' => '৯০০০ টাকা', 'key' => 8],
            9  => ['en' => '10000 TK', 'bn' => '১০,০০০ টাকা', 'key' => 9],
            10 => ['en' => '11000 TK', 'bn' => '১১,০০০ টাকা', 'key' => 10],
            11 => ['en' => '12000 TK', 'bn' => '১২,০০০ টাকা', 'key' => 11],
            12 => ['en' => '13000 TK', 'bn' => '১৩,০০০ টাকা', 'key' => 12],
            13 => ['en' => '14000 TK', 'bn' => '১৪,০০০ টাকা', 'key' => 13],
            14 => ['en' => '15000 TK', 'bn' => '১৫,০০০ টাকা', 'key' => 14],
            15 => ['en' => 'Avobe 15000 TK', 'bn' => '১৫,০০০ টাকার উপরে', 'key' => 15],
        ];
    }

    public static function evaluations_grades_array()
    {
        return [
            1 => ['en' => 'Yes', 'bn' => 'হ্যাঁ', 'mark' => 5, 'key' => 1],
            2 => ['en' => 'Partial', 'bn' => 'আংশিক', 'mark' => 3, 'key' => 2],
            3 => ['en' => 'No', 'bn' => 'না', 'mark' => 0, 'key' => 3],
        ];
    }

    public static function admitted_classes_array()
    {
        return [
            1 => ['en' => 'First', 'bn' => 'প্রথম', 'key' => 1],
            2 => ['en' => 'Second', 'bn' => 'দ্বিতীয়', 'key' => 2],
            3 => ['en' => 'Third', 'bn' => 'তৃতীয়', 'key' => 3],
            4 => ['en' => 'Fourth', 'bn' => 'চতুর্থ', 'key' => 4],
            5 => ['en' => 'Fifth', 'bn' => 'পঞ্চম', 'key' => 5],
            6 => ['en' => 'Sixth', 'bn' => 'ষষ্ঠ', 'key' => 6],
        ];
    }

    public static function mgml_cycles_array()
    {
        return [
            1 => ['en' => 'Red Group', 'bn' => 'লাল দল', 'en_cycle_text' => '1', 'bn_cycle_text' => 'Cycle 1', 'key' => 1],
            2 => ['en' => 'Yellow Group', 'bn' => 'হলুদ দল', 'en_cycle_text' => '2', 'bn_cycle_text' => 'Cycle 2', 'key' => 2],
            3 => ['en' => 'Green Group', 'bn' => 'সবুজ দল', 'en_cycle_text' => '3', 'bn_cycle_text' => 'Cycle 3', 'key' => 3],
            4 => ['en' => 'Pink Group', 'bn' => 'গোলাপি দল', 'en_cycle_text' => '4', 'bn_cycle_text' => 'Cycle 4', 'key' => 4],
            5 => ['en' => 'Orange Group', 'bn' => 'কমলা দল', 'en_cycle_text' => '5', 'bn_cycle_text' => 'Cycle 5', 'key' => 5],
        ];
    }


    public static function ppe_scores_ppe_year_for_two_year_array()
    {
        return [
            1 => ['en' => '1st Year', 'bn' => '১ম বর্ষ', 'key' => 1],
            2 => ['en' => '2nd Year', 'bn' => '২য় বর্ষ', 'key' => 2],
        ];
    }

    public static function age_ranges_array()
    {
        return [
            1 => ['key' => 1, 'en' => 'Below 18', 'bn' => '< ১৮'],
            2 => ['key' => 2, 'en' => '18', 'bn' => '১৮'],
            3 => ['key' => 3, 'en' => '19', 'bn' => '১৩-১৭'],
            4 => ['key' => 4, 'en' => '20', 'bn' => '১৮+'],
        ];
    }

    public static function ages_array(){
        return [
            1 => ['key' => 1, 'en' => 'Below 18', 'bn' => '< ১৮'],
            2 => ['key' => 2, 'en' => '18', 'bn' => '১৮'],
            3 => ['key' => 3, 'en' => '19', 'bn' => '১৩-১৭'],
            4 => ['key' => 4, 'en' => '20', 'bn' => '১৮+'],
        ];
    }

    public static function creativities_array()
    {
        return [
            'Drawing', 'Music', 'Acting', 'Other',
        ];
    }


    public static function active_inactive_array()
    {
        return [
            1 => ['en' => 'Active', 'bn' => 'সক্রিয়', 'key' => 1],
            0 => ['en' => 'Inactive', 'bn' => 'নিষ্ক্রিয়', 'key' => 0]
        ];
    }


    public static function residence_of_parents_type_array()
    {
        return [
            1 => ['en' => 'Own House', 'bn' => '', 'key' => 1],
            2 => ['en' => 'Rented House', 'bn' => '', 'key' => 2],
            3 => ['en' => 'Landless', 'bn' => '', 'key' => 3],
        ];
    }


    public static function days_array()
    {
        return [
            1 => ['en' => 'Saturday', 'bn' => 'শনিবার', 'key' => 1],
            2 => ['en' => 'Sunday', 'bn' => 'রবিবার', 'key' => 2],
            3 => ['en' => 'Monday', 'bn' => 'সোমবার', 'key' => 3],
            4 => ['en' => 'Tuesday', 'bn' => 'মঙ্গলবার', 'key' => 4],
            5 => ['en' => 'Wednesday', 'bn' => 'বুধবার', 'key' => 5],
            6 => ['en' => 'Thursday', 'bn' => 'বৃহস্পতিবার', 'key' => 6],
            7 => ['en' => 'Friday', 'bn' => 'শুক্রবার', 'key' => 7],
        ];
    }

    public static function grades_array()
    {
        return [
            5 => ['en' => 'A+', 'bn' => 'এ+', 'description_en' => 'Fully Achieved: 80% -100%', 'description_bn' => '', 'grade_point_en' => 5, 'grade_point_bn' => BengaliHelper::bn_number(5), 'key' => "5"],
            4 => ['en' => 'A', 'bn' => 'এ', 'description_en' => 'Mostly Achieved: 70% -79%', 'description_bn' => '', 'grade_point_en' => 4, 'grade_point_bn' => BengaliHelper::bn_number(4), 'key' => "4"],
            3 => ['en' => 'A-', 'bn' => 'এ-', 'description_en' => 'Partially Achieved: 60% -69%', 'description_bn' => '', 'grade_point_en' => 3.5, 'grade_point_bn' => BengaliHelper::bn_number(3.5), 'key' => "3.5"],
            2 => ['en' => 'B', 'bn' => 'বি', 'description_en' => 'Partially deficits: 50% -59%', 'description_bn' => '', 'grade_point_en' => 3, 'grade_point_bn' => BengaliHelper::bn_number(3), 'key' => "3"],
            1 => ['en' => 'C', 'bn' => 'সি', 'description_en' => 'Mostly deficits: 40% -49%', 'description_bn' => '', 'grade_point_en' => 2, 'grade_point_bn' => BengaliHelper::bn_number(2), 'key' => "2"],
            0 => ['en' => 'F', 'bn' => 'এফ', 'description_en' => 'Not achieved: Less than 40%', 'description_bn' => '', 'grade_point_en' => 0, 'grade_point_bn' => BengaliHelper::bn_number(0), 'key' => "0"],
        ];
    }

    public static function work_durations_array()
    {
        return [
            1  => ['en' => 'Below 1', 'bn' => '১ এর নিচে', 'key' => 1],
            2  => ['en' => '1', 'bn' => '১', 'key' => 2],
            3  => ['en' => '2', 'bn' => '২', 'key' => 3],
            4  => ['en' => '3', 'bn' => '৩', 'key' => 4],
            5  => ['en' => '4', 'bn' => '৪', 'key' => 5],
            6  => ['en' => '5', 'bn' => '৫', 'key' => 6],
            7  => ['en' => '6', 'bn' => '৬', 'key' => 7],
            8  => ['en' => '7', 'bn' => '৭', 'key' => 8],
            9  => ['en' => '8', 'bn' => '৮', 'key' => 9],
            10 => ['en' => '9', 'bn' => '৯', 'key' => 10],
            11 => ['en' => '10', 'bn' => '১০', 'key' => 11],
            12 => ['en' => 'Above 10', 'bn' => '১০ এর উপরে', 'key' => 12],
        ];
    }


    /**
     * 
     * common ends
     */

    public static function looking_for_array()
    {
        return [];
    }

    public static function religions_array()
    {
        return [
            1 => ['key' => 1, 'en' => 'Islam', 'bn' => 'ইসলাম'],
            2 => ['key' => 2, 'en' => 'Hindu', 'bn' => 'হিন্দু'],
            3 => ['key' => 3, 'en' => 'Budist', 'bn' => 'বৌদ্ধ'],
            4 => ['key' => 4, 'en' => 'Christian', 'bn' => 'খ্রিষ্টান'],
        ];
    }

    public static function complexions_array()
    {
        return [
            1   => ['key' => 1, 'en' => '', 'bn' => 'উজ্জ্বল ফর্সা'],
            2   => ['key' => 2, 'en' => '', 'bn' => 'ফর্সা'],
            3   => ['key' => 3, 'en' => '', 'bn' => 'উজ্জ্বল শ্যামলা'],
            4   => ['key' => 4, 'en' => '', 'bn' => 'শ্যামলা'],
            5   => ['key' => 5, 'en' => '', 'bn' => 'কালো'],
        ];
    }

    public static function genders_array()
    {
        return [
            1 => ['key' => 1, 'en' => 'Male', 'bn' => 'পুরুষ', 'ln_name_en' => 'Boy', 'ln_name_bn' => 'ছেলে'],
            2 => ['key' => 2, 'en' => 'Female', 'bn' => 'মহিলা', 'ln_name_en' => 'Girl', 'ln_name_bn' => 'মেয়ে'],
            3 => ['key' => 3, 'en' => 'Other', 'bn' => 'অন্যান্য', 'ln_name_en' => 'Others', 'ln_name_bn' => 'অন্যান্য'],
        ];
    }

    public static function smoking_habits_array()
    {
        return [
            1   => ['key' => 1, 'en' => '', 'bn' => ''],
            2   => ['key' => 2, 'en' => '', 'bn' => '']
        ];
    }

    public  static function marital_statuses_array()
    {
        return [
            1 => ['en' => 'Married', 'bn' => 'বিবাহিত', 'key' => 1],
            2 => ['en' => 'Unmarried', 'bn' => 'অবিবাহিত', 'key' => 2],
            3 => ['en' => 'Widowed', 'bn' => 'বিধবা', 'key' => 3],
            4 => ['en' => 'Widowed', 'bn' => 'ডিভোর্সড', 'key' => 4],
            5 => ['en' => 'Widowed', 'bn' => 'বিধবা', 'key' => 5],
            6 => ['en' => 'Widowed', 'bn' => 'বিপত্নীক', 'key' => 6],
        ];
    }

    public  static function healths_array()
    {
        return [
            1   => ['key' => 1, 'en' => '', 'bn' => ''],
            2   => ['key' => 2, 'en' => '', 'bn' => ''],
        ];
    }

    public  static function institutions_array()
    {
        return [
            1   => ['key' => 1, 'en' => '', 'bn' => ''],
            2   => ['key' => 2, 'en' => '', 'bn' => ''],
        ];
    }

    public  static function subjects_array()
    {
        return [
            1   => ['key' => 1, 'en' => '', 'bn' => ''],
            2   => ['key' => 2, 'en' => '', 'bn' => ''],
        ];
    }

    public  static function designations_array()
    {
        return [
            1   => ['key' => 1, 'en' => '', 'bn' => ''],
            2   => ['key' => 2, 'en' => '', 'bn' => ''],
        ];
    }

    public  static function companiees_array()
    {
        return [
            1   => ['key' => 1, 'en' => '', 'bn' => ''],
            2   => ['key' => 2, 'en' => '', 'bn' => ''],
        ];
    }

    public  static function disabilities_array()
    {
        return [
            1   => ['key' => 1, 'en' => '', 'bn' => ''],
            2   => ['key' => 2, 'en' => '', 'bn' => ''],
        ];
    }

    public  static function blood_groups_array()
    {        
        return [
            1   => ['key' => 1, 'en' => 'A+', 'bn' => ''],
            2   => ['key' => 2, 'en' => 'A-', 'bn' => ''],
            3   => ['key' => 3, 'en' => 'AB+', 'bn' => ''],
            4   => ['key' => 4, 'en' => 'AB-', 'bn' => ''],
            5   => ['key' => 5, 'en' => 'B+', 'bn' => ''],
            6   => ['key' => 6, 'en' => 'B-', 'bn' => ''],
            7   => ['key' => 7, 'en' => 'O+', 'bn' => ''],
            8   => ['key' => 8, 'en' => 'O-', 'bn' => ''],
        ];
    }

    public  static function languages_array()
    {
        return [
            1   => ['key' => 1, 'en' => '', 'bn' => ''],
            2   => ['key' => 2, 'en' => '', 'bn' => ''],
        ];
    }

    public  static function education_degrees_array()
    {
        return [
            1   => ['key' => 1, 'en' => 'PSC', 'bn' => ''],
            2   => ['key' => 2, 'en' => 'JSC', 'bn' => ''],
        ];
    }

    public  static function years_array()
    {
        return [
            1   => ['key' => 1, 'en' => '', 'bn' => ''],
            2   => ['key' => 2, 'en' => '', 'bn' => ''],
        ];
    }

    public static function passing_years_array()
    {
        return [
            1   => ['key' => 1, 'en' => '', 'bn' => ''],
            2   => ['key' => 2, 'en' => '', 'bn' => ''],
        ];
    }

    public function number_of_brothers_array()
    {
        return [
            1   => ['key' => 1, 'en' => '', 'bn' => ''],
            2   => ['key' => 1, 'en' => '', 'bn' => '']
        ];
    }

    // ------------------------
    

    public function cv_types_array(){
        return [
            1   => ['key' => 1, 'en' => 'Groom Biodata', 'bn' => 'পাত্রের বায়োডাটা'],
            2   => ['key' => 1, 'en' => 'Bride Biodata', 'bn' => 'পাত্রীর বায়োডাটা']
        ];
    }
    
    public function education_faculties_array(){
        return [
            1   => ['key' => 1, 'en' => 'Qawmi Madrasah', 'bn' => 'কওমি মাদ্রাসা'],
            2   => ['key' => 2, 'en' => 'General', 'bn' => 'জেনারেল'],
            3   => ['key' => 3, 'en' => 'Alia Madrasah', 'bn' => 'আলিয়া মাদ্রাসা'],
            4   => ['key' => 4, 'en' => 'English', 'bn' => 'ইংরেজি'],
            5   => ['key' => 4, 'en' => 'Technical', 'bn' => 'কারিগরি'],
        ];
    }
    
    public function qawmi_grade_points_array(){
        return [
            1   => ['key' => 1, 'en' => '', 'bn' => 'মুমতায'],
            2   => ['key' => 1, 'en' => '', 'bn' => 'জায়্যিদ জিদ্দান'],
            3   => ['key' => 1, 'en' => '', 'bn' => 'জায়্যিদ'],
            4   => ['key' => 1, 'en' => '', 'bn' => 'মকবূল']
        ];
    }
    
    public function education_boards_array(){
        return [
            1   => ['key' => 1, 'en' => '', 'bn' => ''],
            2   => ['key' => 1, 'en' => '', 'bn' => '']
        ];
    }

    public function ssc_groups_array()
    {
        return [
            1   => ['key' => 1, 'en' => 'Science', 'bn' => 'বিজ্ঞান বিভাগ'],
            2   => ['key' => 1, 'en' => '', 'bn' => 'মানবিক বিভাগ'],
            1   => ['key' => 1, 'en' => '', 'bn' => 'ব্যবসা বিভাগ'],
            2   => ['key' => 1, 'en' => '', 'bn' => 'কারিগরি / ভোকেশনাল'],
        ];
    }

    public function hijab_types_array()
    {
        return [
            1   => ['key' => 1, 'en' => '', 'bn' => 'আমি বোরকার সাথে মুখ ঢাকি ও মোজা পড়ি'],
            2   => ['key' => 1, 'en' => '', 'bn' => 'আমি বোরকার সাথে মুখ ঢেকে চলি']
        ];
    }
    
    public function beard_types_array()
    {
        return [
            1   => ['key' => 1, 'en' => '', 'bn' => ''],
            2   => ['key' => 1, 'en' => '', 'bn' => '']
        ];
    }
    
    public function context_beards_array()
    {
        return [
            1   => ['key' => 1, 'en' => '', 'bn' => ''],
            2   => ['key' => 1, 'en' => '', 'bn' => '']
        ];
    }

    public function classes_array()
    {
        return [
            1 => ['key' => 1, 'en', 'bn' => '১০ম'],
            1 => ['key' => 1, 'en', 'bn' => '৯ম'],
            1 => ['key' => 1, 'en', 'bn' => '৮ম'],
            1 => ['key' => 1, 'en', 'bn' => '৭ম'],
            1 => ['key' => 1, 'en', 'bn' => '৬ষ্ঠ'],
            1 => ['key' => 1, 'en', 'bn' => '৫ম'],
            1 => ['key' => 1, 'en', 'bn' => '৪র্থ'],
            1 => ['key' => 1, 'en', 'bn' => '৩য়'],
            1 => ['key' => 1, 'en', 'bn' => '২য়'],
            1 => ['key' => 1, 'en', 'bn' => '১ম'],        
        ];
    }



    /**
     * Get array list to load it in dropdowns
     */
    public static function array_list_by_element_index($staticfunction, $index = 'en')
    {
        // for religions
        // self::array_list_by_element_key('religions', 'en');
        $out_array = [];
        foreach (self::$staticfunction() as $key => $array) {
            $out_array[$key] = $array[$index];
        }
        return $out_array;
    }












}
