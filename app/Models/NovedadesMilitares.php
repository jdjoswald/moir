<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NovedadesMilitares extends Model
{
    use HasFactory;
    protected $table = "novedades_militares"; 
    protected $primaryKey = 'IdNovedadesMilitares';

    public function municipio()
    {
        return $this->hasOne(municipios::class,'IdMunicipios','IdProvincia');
    }
}
