<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class objects3d extends Model
{
    use HasFactory;
    protected $table = 'objects3d'; 
    protected $primaryKey = 'id';
    protected $fillable = ['type_3dObject_id','object_name','path'
     ];
}
