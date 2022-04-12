// Route for Aggregate Functions

Route::get('count','AggregateController@countRow');
Route::get('min','AggregateController@minRow');
Route::get('max','AggregateController@maxRow');
Route::get('sum','AggregateController@sumRow');
Route::get('avg','AggregateController@avgRow');
