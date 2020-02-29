<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    // chuyen sang trang hien thi
    return view('tasks');
});

/**
 * add new task
 */
Route::post('/add',function(Request $request){
    //dung request nhan du lieu tu form
});

/**
 * delete task
 */
Route::get('/delete/{task}',function(Task $task){
    //day la vi ddu
    $task = Task::find(1);
    $task->delete();
});




