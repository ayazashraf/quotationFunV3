<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Quote;

class Topic extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'topics';

    protected $fillable = [
        'topic','id'
    ];

    public function quotes()
    {
        return $this->belongsToMany('App\Quote');
    }   
}
