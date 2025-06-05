<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $countries = [
            [ "name"=> "Vietnam", "code"=> "VN" ],
            [ "name"=> "United States", "code"=> "US" ],
            [ "name"=> "Canada", "code"=> "CA" ],
            [ "name"=> "United Kingdom", "code"=> "GB" ],
            [ "name"=> "France", "code"=> "FR" ],
            [ "name"=> "Germany", "code"=> "DE" ],
            [ "name"=> "Japan", "code"=> "JP" ],
            [ "name"=> "South Korea", "code"=> "KR" ],
            [ "name"=> "China", "code"=> "CN" ],
            [ "name"=> "India", "code"=> "IN" ],
            [ "name"=> "Australia", "code"=> "AU" ],
            [ "name"=> "Brazil", "code"=> "BR" ],
            [ "name"=> "Mexico", "code"=> "MX" ],
            [ "name"=> "Italy", "code"=> "IT" ],
            [ "name"=> "Spain", "code"=> "ES" ],
            [ "name"=> "Russia", "code"=> "RU" ],
            [ "name"=> "South Africa", "code"=> "ZA" ],
            [ "name"=> "Indonesia", "code"=> "ID" ],
            [ "name"=> "Thailand", "code"=> "TH" ],
            [ "name"=> "Philippines", "code"=> "PH" ]
        ];

        DB::table("countries")->insert($countries);
    }
}