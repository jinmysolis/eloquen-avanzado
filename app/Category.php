<?php

namespace AdvancedELOQUENT;

use Illuminate\Database\Eloquent\Model;
use AdvancedELOQUENT\Book;

class Category extends Model
{
	//relacion hasMany
    public function books(){
 	return $this->hasMany('AdvancedELOQUENT\Book');
        
    }
}
