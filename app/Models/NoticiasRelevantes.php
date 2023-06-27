<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoticiasRelevantes extends Model
{
    use HasFactory;
    protected $table = "noticias_relevantes"; 
    protected $primaryKey = 'IdNoticiasRelevantes';

    public function provincia()
    {
        return $this->hasOne(provinvicia::class,'IdProvincia','IdProvincia');
    }

}
