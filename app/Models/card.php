<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Scout\Searchable;



class Card extends Model implements Viewable
{
    use HasApiTokens, HasFactory, Notifiable;
    use Searchable;
    use InteractsWithViews;
 protected   $fillable = ['title','description','attachement','category','Amountunit','Amount','currency','typeoffer','price','exchange','attachment','country','city','region','user_id','created_at','updated_at'];
 
public function toSearchableArray()
{
    return [
        'title' => $this->title,
        'category' => $this->category,
        'description' => $this->description
    ];
}
}



