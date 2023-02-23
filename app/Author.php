<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'NameDisplayFirst','NameDisplayLast'
    ];

    public function quotes()
    {
        return $this->hasMany('App\Quote');
    }
    public function nationality()
    {
        return $this->hasOne('App\Nationality','id','Author_NationalityID');
    }
    public function nationalityBorn()
    {
        return $this->hasOne('App\Nationality','id','Author_NationalityBornID');
    }
}
