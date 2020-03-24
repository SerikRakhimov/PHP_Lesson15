<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function index(Request $request){
////        return __METHOD__;
//        //return view('welcome',['message'=>'Hello from Controller:index']);
////        $books = Book::all();
////        dd($books);
////        $book = Book::first();
////        echo $book->name. "<br>".$book->year;
//        //dd($book);
//        //добавление записи
////        $book = new Book();
////        $book->name ='Lord';
////        $book->year = 1995;
////        $book->save();
////        return $book->id;
//        //$data = $request->all();
//        $id = $request->get('id',1);
//        //dd($id);
//
//        $book = Book::find($id);
//        if ($book ===null)
//            return response('',404);
////        return $book->name;
//        //dd($book->toArray());
//        return $book;
        return 'index';
    }
//    function book(Book $asd){
//        return $asd;
//    }
    function book(Book $book){
        return $book;
    }
}
