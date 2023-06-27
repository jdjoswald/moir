<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class municipios extends Model
{
    use HasFactory;

    protected $table = "municipios"; 
    protected $primaryKey = 'IdMunicipios';
    public $incrementing = false;
    protected $fillable = ['IdMunicipios'];
    

}
