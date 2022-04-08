<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EntriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('entries')->insert([
            'docs_id' => "21-03-01-199",
            'last_name' => "Гайдаржи",
            'first_name' => "Аркадий",
            'middle_name' => "Иванович",
            'full_name' => "Гайдаржи Аркадий Иванович",
        ]);

        DB::table('entries')->insert([
            'docs_id' => "21-03-01-198",
            'last_name' => "Морева",
            'first_name' => "Виктория",
            'middle_name' => "Александровна",
            'full_name' => "Морева Виктория Александровна",
        ]);
    }
}
