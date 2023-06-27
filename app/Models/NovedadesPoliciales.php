<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NovedadesPoliciales extends Model
{
    use HasFactory;
    protected $table = "novedades_policiales"; 
    protected $primaryKey = 'IdNovedadesPoliciales';
    public function municipio()
    {
        return $this->hasOne(municipios::class,'IdMunicipios','IdProvincia');
    }


}
