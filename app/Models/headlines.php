<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class headlines extends Model
{
    use HasFactory;
    protected $table ='currentnews';
    protected $fillable=['title','description','image'];
}
