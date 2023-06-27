<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class partidos extends Model
{
    use HasFactory;
    protected $table = "partidos"; 
    protected $primaryKey = 'Idpartidos';
    public function provincia()
    {
        return $this->hasOne(provinvicia::class,'IdProvincia','IdProvincia');
    }
}
