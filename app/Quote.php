<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Topic;

class Quote extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'quotes';

    protected $fillable = [
        'Quote','id'
    ];


    public function author()
    {
        return $this->hasOne('App\Author');
    }
    
    public function topics()
    {
        return $this->belongsToMany('App\QuoteTopic');
    }
}
