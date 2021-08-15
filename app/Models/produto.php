<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produto extends Model
{
    //essa linha esta desabilitando as migrations, pq eu n estou usando models no curso.
    public $timestamps = false;
    
    use HasFactory;
}
