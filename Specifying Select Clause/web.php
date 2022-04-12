// Route for Selection case

Route::get('/unique','SelectController@uniqueSelect');
Route::get('/single','SelectController@signleColumnSelect');
Route::get('/multiple','SelectController@multipleColumnSelect');
