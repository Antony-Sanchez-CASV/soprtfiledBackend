<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Svcurse;


class SvcurseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas
        \DB::table('svcurses')->truncate();
        \DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
        Svcurse::factory()->count(4)->create();
    }
}
