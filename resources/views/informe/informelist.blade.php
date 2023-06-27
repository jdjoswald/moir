@extends('layouts.app')
@section('content')

<a href="all" target=”_blank”> Imprimir todo</a>
    <table>
        <thead>
            <tr>
                <th>codigo</th>
                <th>Provincia</th>
                <th>imprimir</th>
            </tr>
        </thead>
        
        <tbody>
        <?php
        //dd($informes);
        ?>
        @foreach($informes as $infor) 
        
            <tr>
                <td>{{$infor->codigo}}</td>
                <td>{{$infor->provinciad->Provinvicia}}</td>
                <td> <a href="informe/{{$infor->IdInforme}}" target=”_blank”> Imprimir</a>  </td>
            </tr>
        @endforeach
           
        </tbody>
    </table>
@endsection
   
    



