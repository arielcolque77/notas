<?php

namespace App\Modules\Proyects\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyect extends Model
{
    use HasFactory;

    protected $table = 'proyects';

    protected $fillable = [
        'name',
    ];
}
