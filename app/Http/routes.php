<?php

use Illuminate\Http\Request;



Route::get('/', function () {
    $books= AdvancedELOQUENT\Book::get();
    return view('destroy', compact('books'));
});


Route::get('uno', function () {
   $categories= AdvancedELOQUENT\Category::get();
    return view('uno',compact('categories'));
});





Route::delete('destroy', function (Request $request){
    $ids= $request->get('ids');
    if(count($ids)){
     AdvancedELOQUENT\Book::destroy($ids);
	}
        return back();
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
