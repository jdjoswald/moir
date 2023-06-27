<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class telegrama extends Model
{
    use HasFactory;
    protected $table = "telegramas"; 
    protected $primaryKey = 'IdProvinvicia';

}
