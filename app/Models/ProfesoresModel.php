<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfesoresModel extends Model
{
    protected $table = 'profesores';
    protected $primaryKey = 'codprofesor';
    public $timestamps = true;
}
