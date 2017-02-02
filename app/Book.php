<?php

namespace AdvancedELOQUENT;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use AdvancedELOQUENT\Category;
class Book extends Model
{
   use SoftDeletes;
   
   //relacion belongsTo
    public function Category(){
    	return $this->belongsTo('AdvancedELOQUENT\Category');
        
    }
   
   
   
}
