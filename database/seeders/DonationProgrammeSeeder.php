<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DonationProgrammeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('donation_programmes')->insertOrIgnore([

            [
                "name" => "QUALITY HEALTH",
                "slug" => Str::random(5),
                "description" => "Quality health is a critical factor in building a sustainable community, making it a vital cause for NGOs to prioritize.",
                "goal_amount" => "500000",
                "amount_raised" => "23000",
            ],


            [
                "name" => "COVID-19 RESPONSE",
                "slug" => Str::random(5),
                "description" => "NGOs have played a crucial role in responding to the COVID-19 pandemic, providing support for affected communities worldwide.",
                "goal_amount" => "700000",
                "amount_raised" => "100000",
            ],

            [
                "name" => "FOOD & WATER SUPPORTS",
                "slug" => Str::random(5),
                "description" => "Access to adequate food and clean water is a basic human right, making it a key focus area for NGOs worldwide.",
                "goal_amount" => "600000",
                "amount_raised" => "100000",
            ],

            [
                "name" => "EDUCATION FOR RURAL CHILDREN",
                "slug" => Str::random(5),
                "description" => "Providing education to children in rural areas is a crucial cause for NGOs, enabling social and economic development.",
                "goal_amount" => "270000",
                "amount_raised" => "110800",
            ],

            [
                "name" => "YOUTH EMPOWERMENT PROGRAMS",
                "slug" => Str::random(5),
                "description" => "NGOs have a vital role in implementing youth empowerment programs, creating opportunities for personal growth and community impact.",
                "goal_amount" => "300000",
                "amount_raised" => "110000",
            ],

            [
                "name" => "CHILD RIGHTS ADVOCACY",
                "slug" => Str::random(5),
                "description" => "NGOs have a vital role in implementing youth empowerment programs, creating opportunities for personal growth and community impact.",
                "goal_amount" => "200000",
                "amount_raised" => "90000",
            ],


        ]);
    }
}
