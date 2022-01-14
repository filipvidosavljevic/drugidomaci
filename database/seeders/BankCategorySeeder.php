<?php

namespace Database\Seeders;

use App\Models\BankCategory;
use Illuminate\Database\Seeder;

class BankCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BankCategory::factory(5)->create();
    }
}
