<?php
class IndexController extends BaseController {
 
public function showIndex()
{
// generates response from index.blade.php
return View::make('index');
}
}
 
//file: app/routes.php
remember to register all the controllers
//registering route to controller actions
 
Route::get('index','IndexController@showIndex');
 
//In general
Route::get('route.name','BlogController@authors');
Route::post('route.name','CommentsController@comment');