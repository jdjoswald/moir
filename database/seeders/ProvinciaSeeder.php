<?php

namespace Database\Seeders;

use App\Models\provinvicia;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provincia = fopen(base_path("database/data/provincias.csv"), "r");
        DB::unprepared('SET IDENTITY_INSERT provinvicias ON');
        while (($data = fgetcsv($provincia, 0, ",")) !== FALSE) {
            if($data[0]!=''){

                $provincias= new provinvicia();
            $provincias->IdProvinvicia=$data[0];
            $provincias->Provinvicia= utf8_encode($data[1]);
            $provincias->save();

            }
            
        }
        DB::unprepared('SET IDENTITY_INSERT provinvicias OFF');
        //
    }
}
