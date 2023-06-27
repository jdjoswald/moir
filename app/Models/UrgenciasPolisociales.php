<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UrgenciasPolisociales extends Model
{
    use HasFactory;
    protected $table = "urgencias_polisociales"; 
    protected $primaryKey = 'IdNovedadesPoliciales';
    protected $fillable = ['IdNovedadesPoliciales'];
    public function provincia()
    {
        return $this->hasOne(provinvicia::class,'IdProvincia','IdProvincia');
    }

}
