<?php

namespace App\Http\Controllers;

use App\Models\HallazgosInstituciones;
use App\Models\Informe;
use App\Models\municipios;
use App\Models\NoticiasRelevantes;
use App\Models\NovedadesMilitares;
use App\Models\NovedadesPoliciales;
use App\Models\obrasiniciadas;
use App\Models\obrasprometidosnoiniciadas;
use App\Models\partidos;
use App\Models\provinvicia;
use App\Models\TemasPredominantes;
use App\Models\UrgenciasPolisociales;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\String\UnicodeString;

class InformeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       // $csvFile = fopen(base_path("database/data/data.csv"), "r");
      //dd( count($data = fgetcsv($csvFile, 0, ",")));

     $informes=Informe::all();
     //dd($informes);
  
     
      return view('informe/informelist',compact('informes'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('informe/informeform');
       
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
       
       
        //dd($_FILES['informe']['error'] );
        $dir="C:/projects/gestion_documental/public/storage/";
        $archivo=$dir.$_FILES["informe"]["name"];
        $directorio= $_FILES["informe"]["tmp_name"];
        $formatos_permitidos =  array('csv');
        $extension = pathinfo($archivo, PATHINFO_EXTENSION);

        
       //dd(date('Y-m-d-H-i-s'));
        //$newname=$cod.'.'.$extension;
        //dd($newname);
        if(!in_array($extension, $formatos_permitidos) ) {
            
            return back()->with('fail','eploto');
        }


        $csvFile = fopen(($directorio), "r");

      // dd($csvFile);
       
       
       
        $firstline = true;
        $informe=0;

        Informe::truncate();
        obrasprometidosnoiniciadas::truncate();
        obrasiniciadas::truncate();
        UrgenciasPolisociales::truncate();
        NovedadesPoliciales::truncate();
        NovedadesMilitares::truncate();
        NoticiasRelevantes::truncate();
        partidos::truncate();
        HallazgosInstituciones::truncate();
        TemasPredominantes::truncate();

       
        
        DB::unprepared('SET IDENTITY_INSERT informes ON');
       //dd();
        //DB::unprepared('SET IDENTITY_INSERT municipios ON');

        
        while (($data = fgetcsv($csvFile, 0, ";")) !== FALSE) {
          
            if (!$firstline) {
              //  dd($data[0]);
                if($data[0]!=''){
                    

                    try {
                        $inform= new Informe;
                   //dd(utf($data[18]));
                        //$informe=$data[1];
                        $inform->IdInforme=$data[1];
                        $inform-> Fecha = ($data[0]);
                           $inform-> IdProvincia = ($data[1]);
                           $inform-> Region = utf8_encode($data[1]);
                           $inform-> Analista = utf8_encode($data[3]);
                           $inform-> Director = utf8_encode($data[4]);
                           $inform-> Lugares = utf8_encode($data[9]);
                           $inform-> Obras = utf8_encode($data[10]);
                           $inform-> InstitucionObraCritica = utf8_encode($data[11]);
                           $inform-> MinistroObraCritica = utf8_encode($data[12]);
                           $inform-> InstitucionCrisis = utf8_encode($data[13]);
                           $inform-> MinistroCrisis = utf8_encode($data[14]);
                           $inform-> CrisisPotencial = utf8_encode($data[15]);
                           $inform-> InstitucionCrisisPotencial = utf8_encode($data[16]);
                           $inform-> MinistroCrisisPotencial = utf8_encode($data[17]);
                           $inform-> hallazgo = utf8_encode($data[18]);
                           $inform-> InstitucionHallazgo = utf8_encode($data[19]);
                           $inform-> MinistroHallazgo = utf8_encode($data[20]);
                           $inform-> codigo = utf8_encode($data[48]);
                           $inform-> comentario = utf8_encode($data[49]);
                            //dd($inform);
                           $inform->save();

                       
                
                    } catch (QueryException $e) {
                
                        dd($e->getMessage());
                
                    }
                   
                       //dd('ss');

                }
                try{
                //dd($data[20]);
                if($data[21]!=''){
                    $obras= new obrasprometidosnoiniciadas;
                    $obras-> IdProvincia=$data[22]; 
                    $obras-> IdInforme=$data[21]; 
                    $obras-> obra= utf8_encode($data[23]);; 
                    $obras->save();
                }
                if($data[24]!=''){
                    $obrasini= new obrasiniciadas();
                    $obrasini-> IdProvincia=$data[25]; 
                    $obrasini-> IdInforme=$data[24]; 
                    $obrasini-> obra= utf8_encode($data[26]);
                    $obrasini-> porcentaje= utf8_encode($data[27]);
                    $obrasini-> situacion= utf8_encode($data[28]);
                    $obrasini->save();
                }
                
                if($data[29]!=''){
                    $urgen= new UrgenciasPolisociales();
                    $urgen-> IdProvincia=intval($data[30]); 
                    $urgen-> IdInforme=$data[29]; 
                    $urgen-> UrgenciasPolisociales= utf8_encode($data[31]);
                    $urgen->save();
                }

                if($data[32]!=''){
                    $urgen= new NovedadesPoliciales();
                    $urgen-> IdProvincia=$data[33];
                    $urgen-> IdInforme=$data[32]; 
                    $urgen-> NovedadesPoliciales= utf8_encode($data[34]);
                    $urgen->save();
                }
                if($data[35]!=''){
                    $urgen= new NovedadesMilitares();
                    $urgen-> IdProvincia=$data[36];
                    $urgen-> IdInforme=$data[35]; 
                    $urgen-> NovedadesMilitares= utf8_encode($data[37]);
                    $urgen->save();
                }


                if($data[45]!=''){
                    $noti= new NoticiasRelevantes();
                    $noti-> IdProvincia=$data[46]; 
                    $noti-> IdInforme=$data[45]; 
                    $noti-> NoticiasRelevantes= utf8_encode($data[47]);
                    $noti-> karma=1;
                    $noti->save();
                }


                if($data[5]!=''){
                    $parti= new partidos();
                    $parti-> partido= utf8_encode($data[6]);
                    $parti-> color=$data[7]; 
                    $parti-> situacion= utf8_encode($data[8]);
                    $parti-> IdInforme=$data[5];
                    $parti->save();
                }

                
                if($data[38]!=''){
                    $hallazgo= new HallazgosInstituciones();
                    $hallazgo-> IdInforme=$data[38]; 
                    $hallazgo-> institucion= utf8_encode($data[40]); 
                    $hallazgo-> HallazgosInstituciones= utf8_encode($data[41]);
                    $hallazgo-> IdProvincia=$data[39];
                    $hallazgo->save();
                }

                if($data[42]!=''){
                    $tema= new TemasPredominantes();
                    $tema-> IdProvincia=$data[43]; 
                    $tema-> IdInforme= utf8_encode($data[42]); 
                    $tema-> TemasPredominantes= utf8_encode($data[44]);
                   
                    $tema->save();
                }}catch (QueryException $e) {
                
                    dd($e->getMessage());
            
                }

               


                
              
              /*
                    "IdProvincia" => 1,
                    "IdInforme" => ($data[19]),
                    "obra" => ($data[20]),
                    "obra" => ($data[21]),
                */

               

            }
            $firstline = false;
           
        }

        fclose($csvFile);
      
        DB::unprepared('SET IDENTITY_INSERT informes OFF');
       
        
        //DB::statement('SET IDENTITY_INSERT informes  ON');
       return back();
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Informe  $informe
     * @return \Illuminate\Http\Response
     */
    public function show(Informe $informe)
    {
        
        //dd( count($data = fgetcsv($csvFile, 0, ",")));
  
       $inform=$informe;
        $municipios=municipios::all();
        //dd($inform->municipio);
        return view('informe/informeview',compact('inform','municipios', 'informe'));
       
       
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Informe  $informe
     * @return \Illuminate\Http\Response
     */
    public function edit(Informe $informe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Informe  $informe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Informe $informe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Informe  $informe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Informe $informe)
    {
        //
    }

    public function generar()
    {

        //


        return view('informe/informeform');
    }
    public function home()
    {

       
        $csvFile = fopen(base_path("database/data/data.csv"), "r");
      // dd( count($data = fgetcsv($csvFile, 0, ",")));

     
      return view('welcome', compact('csvFile'));

        //
    }
    public function all(){

        //dd( count($data = fgetcsv($csvFile, 0, ",")));
  
       $informes=Informe::all();
       $municipios=municipios::all();
       //dd($informes);
       return view('informe/allinformeprint',compact('informes','municipios'));


    }
}
