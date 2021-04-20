<?php

namespace Database\Seeders;
use DB;

use Illuminate\Database\Seeder;

class ParentageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $parentages = [
            ['id' => '1', 'desc' => 'Pai'],
            ['id' => '2', 'desc' => 'Mãe'],
            ['id' => '3', 'desc' => 'Filho(a)'],
            ['id' => '4', 'desc' => 'Outro'],
        ];

        DB::table('parentages')->insert($parentages);

    }
}
