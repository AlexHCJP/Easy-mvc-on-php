<?php


namespace App\Controllers;


use App\Models\Book;

class SiteController
{

    function index()
    {

//        /** @var Book $book */
//        $book = new Book();
//        $book->name = ':adad';
//        $book->author = 'sdadasf';
//        $book->save();
//        return $book->id;
        return view('index', [
            'books' => Book::all()
        ]);
    }

}
