<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemasPredominantes extends Model
{
    use HasFactory;

    protected $table = "temas_predominantes"; 
    protected $primaryKey = 'IdTemasPredominantes';

    
    
}
