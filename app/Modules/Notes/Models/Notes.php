<?php

namespace App\Modules\Notes\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    use HasFactory;

    protected $table = 'notes';

    protected $fillable = [
        'proyect_id',
        'description',
        'status_activity',
        'status',
    ];
}
