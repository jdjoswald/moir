@extends('layouts.app')
@section('content')
    <div class="center" style="background-color: lightblue;">
        <form action="{{route('informe.store')}}" method="post"  enctype="multipart/form-data">
        @csrf
            <input type="file" name="informe" id="informe">
            <br>
            <button type="submit">Generar</button>
        </form>

    </div>
@endsection
   
    



