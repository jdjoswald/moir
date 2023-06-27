<?php

namespace Database\Seeders;

use App\Models\municipios;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MunicipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $m = true;
        $municipio = fopen(base_path("database/data/municipio.csv"), "r");
        DB::unprepared('SET IDENTITY_INSERT municipios ON');
        while (($data = fgetcsv($municipio, 0, ",")) !== FALSE) {
            if (!$m) { 
               
                if($data[0]!=''){
                    //dd('d');
                    $muni= new municipios();
                    $muni->IdMunicipios=$data[0];
                    $muni->Municipio= utf8_encode($data[1]);
                    $muni->save();
                }
                
            }
            $m = false;

        }
        DB::unprepared('SET IDENTITY_INSERT municipios OFF');

       
        //
    }
}
