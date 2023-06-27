<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informe extends Model
{
    use HasFactory;

    protected $table = "informes"; 
    protected $primaryKey = 'IdInforme';
    public $incrementing = false;
    protected $fillable = ['IdInforme'];

  /*  public function servicios()
    {
        return $this->belongsToMany(Servicio::class, 'servicios_organizacion', 'organizacion_id', 'servicio_id');
    }

    public function preguntas()
    {
        return $this->hasMany(Pregunta::class,'seccion_id');
    }*/
    public function provinciad()
    {
        return $this->hasOne(provinvicia::class,'IdProvinvicia','IdProvincia');
    }
    
    public function partidos()
    {
       
        return $this->hasMany(partidos::class,'IdInforme');
    }

   
    public function ObrasPrometidasNoiniciadas()
    {
        return $this->hasMany(obrasprometidosnoiniciadas::class,'IdInforme');
    }
    public function ObrasIniciadas()
    {
        return $this->hasMany(obrasiniciadas::class,'IdInforme');
    }
    public function UrgenciasPolisociales()
    {
        return $this->hasMany(UrgenciasPolisociales::class,'IdInforme');
    }
    public function NovedadesPoliciales()
    {
        return $this->hasMany(NovedadesPoliciales::class,'IdInforme');
    }
    public function NovedadesMilitares()
    {
        return $this->hasMany(NovedadesMilitares::class,'IdInforme');
    }
    public function HallazgosInstitucionales()
    {
        return $this->hasMany(HallazgosInstituciones::class,'IdInforme');
    }
    public function TemasPredominantes()
    {
        return $this->hasMany(TemasPredominantes::class,'IdInforme');
    }
    public function NoticiasRelevantes()
    {
        return $this->hasMany(NoticiasRelevantes::class,'IdInforme');
    }

    public function municipio()
    {
        return $this->hasMany(municipios::class,'IdInforme');
    }

}
