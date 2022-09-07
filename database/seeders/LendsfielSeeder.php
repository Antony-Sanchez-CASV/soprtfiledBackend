<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Lendsfiel;


class LendsfielSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas
        \DB::table('lendsfiels')->truncate();
        \DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
        Lendsfiel::factory()->count(4)->create();
    }
}
