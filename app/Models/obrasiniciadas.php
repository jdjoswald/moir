<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class obrasiniciadas extends Model
{
    use HasFactory;
    
    protected $table = "obrasiniciadas"; 
    protected $primaryKey = 'Idobrasiniciada';
    
    public function provincia()
    {
        return $this->hasOne(provinvicia::class,'IdProvincia','IdProvincia');
    }

}
