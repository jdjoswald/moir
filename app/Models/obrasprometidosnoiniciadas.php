<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class obrasprometidosnoiniciadas extends Model
{
    use HasFactory;
    protected $table = "obrasprometidosnoiniciadas"; 
    protected $primaryKey = 'IdObrasPrometidosNoIniciada';
    public function municipio()
    {
        return $this->hasOne(municipios::class,'IdMunicipios','IdProvincia');
    }

}
