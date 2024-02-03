<?php

use App\User;
use Illuminate\Support\Facades\DB;
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

    /* $user = DB::select('select * from users where id = ?', [2]);
     dump("mysql : ", $user);*/

    /*$pdo = DB::connection()->getPdo();
    $user = $pdo->query('select * from users')->fetchAll();
    dump("mysql : ", $user);*/

    /*$result = DB::select('select * from users where id = ? and name = ?', [1, 'Vilma 0\'Keefe']);
    $result = DB::select('select * from users where id = :id', ['id' => 1]);*/

    //data insert
    /*DB::insert('insert into users (name, email, password) values(?, ?, ?)', ['Inserted1 Name', 'email@fdf.com', 'password']);*/

   // dump($result);

   //Upadte
   /*$affected = DB::update('update users set email = "updatedemail@email.com" where email = ?', ['email@fdf.fd']);
   dump( $affected);*/

   //delete
   /*$deleted = DB::delete('delete from users where id = ?', [4]);
   dump( $deleted);*/

   //DB::statement('truncate table users');

   //$result = DB::select('select * from users'); //row sql
   //$result = DB::table('users')->select()->get(); //query builder
    $result = User::all(); //aluquent orm
    dump($result);




    return view('welcome');
});
