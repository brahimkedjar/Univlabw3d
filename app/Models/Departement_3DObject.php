<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departement_3DObject extends Model
{
    use HasFactory;
    protected $table = 'Departement_3DObject';
    protected $primaryKey = 'id';
    protected $timestamps = 'false';
    protected $fillable=[
        'id',
        'id_departement',
        'id_3Dobject',
    ]
        
}
