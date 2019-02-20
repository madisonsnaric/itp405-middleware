<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $primaryKey = 'GenreId'; 
    public $timestamps = false; 

    public function tracks()
    {
    	return $this->hasMany('App\Track', 'GenreId'); 
    	// if you didn't have GenreId and not genre_id you wouldn't have to add extra line
    	// genre_id 
    }
}
