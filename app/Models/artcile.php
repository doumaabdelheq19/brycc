<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artcile extends Model
{
    use HasFactory;
    protected   $fillable = ['title','user_id','descrip','created_at','updated_at'];
}
