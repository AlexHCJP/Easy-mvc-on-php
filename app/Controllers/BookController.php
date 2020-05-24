<?php


namespace App\Controllers;


use App\Models\Book;

class BookController
{
    function store(){
        $book = new Book();
        $book->name = request()->param('name');
        $book->author = request()->param('author');
        $book->save();

        response()->redirect('/');
    }
    function delete(){
        /** @var Book $book */
        $id = request()->param('id');
        $book = Book::find_by_id($id);
        $book->delete();
        return response()->redirect('/');
    }
}