<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/hello', function () {
    echo "hello world, im silver";
});
Route::get('/name/{silver}', function ($name) {
    echo "hello ". $name;
})->where('silver','[A-Za-z]+');

Route::get('/data/{data?}', function ($data = "tidak ada data") {
    echo "Isi parameter = ". $data;
});

Route::get('/name/{nama}/{nrp}', function ($name,$nrp) {
    echo "hello ".$name. " dengan nrp ". $nrp;
})->where(['nama'=>'[A-Za-z]+',
            'nrp'=>'[0-9]+',]);

Route::get('/cekbilangan/{bilangan}', function ($bilangan) {
    if($bilangan % 2 == 0){
    echo "bilangan genap";}
    else{echo "bilangan ganjil";
    }});

Route::get('/deretbilangan/{bilangan}', function ($bilangan) {
    for($x=1;$x<=$bilangan;$x++){
        if($bilangan % 2 == 0){
            echo $x .'<br>';}
        else{
            if ($bilangan %2 != 0){
                echo $x .'<br>';
            }
        }
    }
});