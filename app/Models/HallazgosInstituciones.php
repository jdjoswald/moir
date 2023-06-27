<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HallazgosInstituciones extends Model
{
    use HasFactory;

    protected $table = "hallazgos_instituciones"; 
    protected $primaryKey = 'IdHallazgosInstituciones';
    
    public function provincia()
    {
        return $this->hasOne(provinvicia::class,'IdProvincia','IdProvincia');
    }
}
