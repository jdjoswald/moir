<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{$inform->provinciad->Provinvicia}}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>

        .circle {
        background: lightblue;
        border-radius: 50%;
        width: 100px;
        height: 100px;
        }
        .center {
            margin: auto;
            width: 60%;
            padding: 10px;
        }
        table, th, td {
        border: 1px solid white;
        border-collapse: collapse;
        }
    </style>
     
   
</head>

<body>

<div class="row" style="justify-content: center;">
       
        <div class="justify-content-sm-start" style="width: 45%;">
            

            <div style=" height: fit-content; width: 100%; background-color: darkblue; break-inside: avoid;"class="row">
                <img src="{{ asset('images/INFORME-03.PNG') }}" alt="" style="width: 150px;">
                <h2 style="text-align: center; color: white; margin-top: 25px;">
                    INFORME DE HALLAZGOS RELEVANTES
                </h2>
            </div>
            <br>

        

        

        </div>

        <div class="d-flex justify-content-end" style="width: 50%;">
            <div>
                <img src="{{ asset('images/INFORME-04.PNG') }}" alt="" style="width: auto; height: 200px;">
            </div>

        

        </div>

</div>

    
    <div class="d-flex justify-content-center">
        

     

        <div style=" height: fit-content; width: 50%; background-color: white; ">
            
            <h2 style="text-align: center; ">
            {{$inform->provinciad->Provinvicia}}
            </h2>
        </div>

       

    </div>


   
    <div class="row" style="justify-content: center;">
        <div style="width: 40%;">
            <br>
            <table style="background-color: lightblue; width: 100%; font-size: 24px;">
                <tr> <td style="background-color: red; color: white; text-align: center; "> {{$inform->codigo}} </td> </tr>
                
                <tr> <td style="border: 1px solid black; background-color: white; color: darkblue; text-align: center; "> DIRECTOR REGIONAL:{{$inform->Director}} </td> </tr>
                
  
                
                <tr> <td style="border: 1px solid black; background-color: white; color: darkblue; text-align: center; ">SEMANA: {{$inform->Fecha}} </td> </tr>
                
                <tr> <td style="border: 1px solid black; background-color: white; color: darkblue; text-align: center; ">ANALISTA: {{$inform->Analista}} </td> </tr>

            </table>

            <br>
            <div style="background-color: cornflowerblue ; color: white; width: 100%; border-radius: 15px; text-align: center;">
                <p style="color: darkblue; text-align: center;"> <h3><strong> <li>TEMAS PREDOMINANTES</li> </strong></h3> </p>
            </div>

            <div class="container">
                <div class="column " style=" font-size: 24px;">
                    @foreach($municipios as $muni)
                        @foreach($inform->TemasPredominantes as $temas)
                                    @if($muni->IdMunicipios==$temas->IdProvincia)
                                    <div class="row align-items-center" style="margin-right: 5px; margin-left: 5px; width:auto; ">
                                        <div  style="background-color: lightblue;  text-align: center; width: 25%;">
                                            <div> 
                                                {{$muni->Municipio}}
                                            </div>

                                        </div>
                                        
                                        <div   style="margin-left: 5px; width: 35%;">
                                        
                                                    <li>{{$temas->TemasPredominantes}}</li>

                                        </div>
                                    </div>
                                    <br>
                                 

                                
                            @endif
                        @endforeach
                    @endforeach
                </div>
            </div>
            <br>
           
            
           
            
            <div style="width: 100%;  ">
                    <div style="background-color: cornflowerblue; border-radius: 15px; text-align: center; color: white;">
                                 <h3> <strong><li>HALLAZGOS EN INSTITUCIONES</li></strong> </h3> 
                    </div>
                    <table style="width: 100%;">
                        <thead>
                           
                            <tr >
                                <th style="width: 33%;">    MUNICIPIOS</th>
                                <th style="width: 33%;">INSTITUCIÓN</th>
                                <th style="width: 33%;">HALLAZGOS</th>
                            </tr>
                           
                        </thead>
                       
                        <tbody>
                        
                            

                            @foreach($municipios as $muni)
                            @foreach($inform->HallazgosInstitucionales as $h)
                                        @if($muni->IdMunicipios==$h->IdProvincia)
                                        <tr style="border-bottom: solid black;  font-size: 24px;">
                                            <td>{{$muni->Municipio}}</td>
                                            <td> {{$h->institucion}}</td>
                                            <td> {{$h->HallazgosInstituciones}}</td>
                                        </tr>
                                @endif
                            @endforeach
                        @endforeach
                        
                            

                        </tbody>
                    </table>
                    <br> 
                        
                    <div style="background-color: lightblue; color: darkblue; break-inside: avoid;">
                       <h3> <strong>
                        OBRAS PROMETIDAS NO INICIADAS
                        </strong></h3>
                        <br>
                        @foreach($inform->ObrasPrometidasNoiniciadas as $k)
                           <li style=" font-size: 24px;">
                                {{$k->obra}} ({{$k->municipio->Municipio}})


                            </li> 
                                
                          
                        @endforeach
                        
                       
                    </div>

                    <br>
                    <div style="break-inside: avoid;">
                         <table style="width: 100%; ">
                        <thead>
                            <div style="background-color: red; color: white; text-align: center;">
                                <h3>ACCIONES PARTIDOS POLÍTICOS</h3>    
                                
                            </div>
                            <tr> <td></td> </tr>
                        </thead>
                       @foreach($inform->partidos as $part)

                            <tbody>
                                <tr style="background-color: {{$part->color}}; color: white; font-size: 25px;" >
                                    <td> {{$part->partido}}</td>
                                    <td> {{$part->situacion}}</td>
                                </tr>
                                <tr> <td></td> </tr>
                               
                            </tbody>
                       @endforeach
                        
                    </table>
                    </div>

                   
            </div>
            <br>
            <br>

            <div class="row" style="break-inside: avoid;">
                        <div style="width: 45%; color: white; background-color:black;">
                            <h3>Hallazgos relevantes en la provincia:</h3>
                        </div>
                        <div style="width: 55%; border: 1px solid white; color: black; text-align: center; border: solid black;">
                            <h4> {{$inform->hallazgo}}</h4>
                        </div>
            </div>
            
            

        </div>

        <div style="width: 5%;">

        </div>

        <div style="width: 40%;">
            <br>
            <div style="background-color: cornflowerblue; color: white; border-radius: 10px; text-align: center;">
               
                <h3><li> <strong>NOTICIAS RELEVANTES</strong> </li></h3>
            </div>
            <br>
          

            <div class="row">
               
                <div style=" width: 100%; text-align: center; background-color:  lightblue;  border-radius: 10px; text-align: center;  font-size: 24px;">
                    
                    <?php
                   // dd($inform->NoticiasRelevantes);
                    ?>
                @foreach($inform->NoticiasRelevantes as $good)
                            <li>
                               
                               {{$good->NoticiasRelevantes}}

                            </li>

                        @endforeach
                </div>

            </div>
            
            <br>

            <div>
                <div style="background-color: cornflowerblue; color: white; border-radius: 10px; text-align: center;">
                
                   <h3> <li> <strong> URGENCIAS POLITICAS O SOCIALES</strong> </li></h3>
                </div>
                <br>
                <div class="container">
                        <div class="column">
                        @foreach($municipios as $muni)
                            @foreach($inform->UrgenciasPolisociales as $urgen)
                                @if($muni->IdMunicipios==$urgen->IdProvincia)
                                    <div class="row align-items-center" style="margin-right: 5px; margin-left: 5px; width:auto;  font-size: 24px; ">
                                        <div style="background-color: lightblue; width: 25%; text-align: center; " > {{$muni->Municipio}}</div>                                                                          
                                           <div style="margin-left: 5px; width: 35%; ">
                                             <li>{{$urgen->UrgenciasPolisociales}}</li>
                                        </div>     
                                    </div>
                                    <br>
                                @endif
                            @endforeach
                        @endforeach

                    </div>

                    
                </div>
            </div>
            <br>

            <div style="break-inside: avoid;">
                <div style="background-color: cornflowerblue; color: white;  border-radius: 10px; text-align: center; break-inside: avoid;">
                    <h3><li> <strong> NOVEDADES POLICIALES</strong> </li></h3>
                    
                </div>
                <div class="row  align-items-center">
                    <div  style="width: 18%;  margin-right: 5px; justify-content: center;">
                        <img src="{{ asset('images/INFORME-17.PNG') }}" alt="" style="width: 100%;">

                    </div>
                    <div  class="column" style="width: 70%;">
                        <div class="column">
                            <li style="color: darkblue;">NOVEDADES POLICIALES</li>
                            @foreach($inform->NovedadesPoliciales as $poli)
                                <li style=" font-size: 24px;">{{$poli->NovedadesPoliciales}} ({{$poli->municipio->Municipio}})</li>
                               
                            @endforeach

                    </div>
                    <br>
                    <div class="column" >
                        <li style="color: darkblue;">NOVEDADES MILITARES</li>

                        @foreach($inform->NovedadesMilitares as $mili)
                            <li style=" font-size: 24px;">{{$mili->NovedadesMilitares}} ({{$mili->municipio->Municipio}})</li>
                           
                        @endforeach

                    </div>
                </div>
                    
                </div>
            </div>
            <br>

           
            

        
            

        
           
           
            <br>
           
            <br>
            <div >
                    <table style="width: 100%; break-inside: avoid;">
                        <thead>
                            
                            <tr> 
                                <th style="background-color: darkblue; color: white;"> 
                                    <img src="{{ asset('images/INFORME-13.PNG') }}" alt="" style="width: 35px">
                                   OBRAS INICIADAS 
                                </th>
                                <th style="background-color: lightblue;  text-align: center;">%</th>
                                <th style="background-color: lightblue;  text-align: center;">SITUACIÓN OBRAS INICIADAS</th>
                            </tr>
                           
                            
                        </thead>
                       
                        <tbody>

                        @foreach($inform->ObrasIniciadas as $j)
                        <tr style="background-color: lightblue; color: darkblue;  font-size: 24px;">
                                <td><i class="fa fa-check" aria-hidden="true"></i>{{$j->obra}} </td>
                                <td>{{$j->porcentaje}} </td>
                                <td>{{$j->situacion}} </td>
                            </tr>
                                
                          
                        @endforeach
                        
                           
                            

                        </tbody>
                    </table>
                    <br>          
                    <div class="row">
                        <div style="width: 30%; color: white; background-color: darkblue;">
                        <strong> LUGARES
                                MAYOR
                                URGENCIA EN
                                LA PROVINCIA</strong>
                               
                        </div>
                        <div style="width: 70%; border: 1px solid darkblue; text-align: center;  font-size: 24px;">
                                   {{$inform->Lugares}}
                        </div>
                    </div>
                    <br>
                    <div class="row" style=" break-inside: avoid;">
                        <div style="width: 30%; color: white; background-color: darkblue;">
                        <strong>OBRAS MÁS
                            CRÍTICA EN LA
                            PROVINCIA</strong>
                            
                        </div>
                        <div style="width: 70%; border: 1px solid darkblue; text-align: center;  font-size: 24px;">
                                    {{$inform->Obras}}
                        </div>
                    </div>
                    <br>
                    <div class="row" style="break-inside: avoid;" >
                        <div  style="width: 30%; color: white; background-color: darkblue; ">
                        <strong>INSTITUCIÓN
                            CON MÁS
                            DESAFÍOS EN LA
                            PROVINCIA</strong>
                            
                        </div>
                        <div style="width: 70%; border: 1px solid darkblue; text-align: center;  font-size: 24px;">
                                    {{$inform->InstitucionCrisis}}
                        </div>
                    </div>
               <br>
                <br>
             
                 

                    <div style="break-inside: avoid;">
                        <div class="row" style="break-inside: avoid;">
                            <div style="width: 30%; color: white; background-color: red;  break-inside: avoid;">
                            <h2>DESAFÍO POTENCIAL:</h2>
                            </div>
                            <div style="width: 70%; border: 1px solid darkblue; color: white; text-align: center;  background-color: darkblue;  font-size: 24px;  break-inside: avoid;">
                                <h4>{{$inform->CrisisPotencial}}</h4>
                            </div>
                        </div>

                    </div>
                   

                   
            </div>

        </div>


      

      
    

</div>

<br>
<div style="break-inside: avoid;">
    <div class="d-flex justify-content-center" style=" margin-left: 50px ;  width: 95%;  ">
            <div style="background-color: cornflowerblue; color: white;  border-radius: 10px; text-align: center; width: 100%;" >
                        <h3><li> <strong> Resumen</strong> </li></h3>
                        
                    </div>

        
    </div>

    <div class="d-flex justify-content-center" style="margin-left: 50px ; width: 95%; break-inside:">
                
                <div style="border: solid black; width: 100%;" >
                <p style="font-size: 24px;">
                {{$inform->comentario}}
                </p>


            
                </div>

        
    </div>
</div>


    
    
</body>

</html>