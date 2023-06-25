<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramasModel extends Model
{
    protected $table = 'programas';
    protected $primaryKey = 'codprograma';
    public $timestamps = true;
}
