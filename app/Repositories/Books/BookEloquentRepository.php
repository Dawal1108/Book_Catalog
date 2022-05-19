<?php

namespace App\Repositories\Books;
use App\Models\BookCatalog;

class BookEloquentRepository implements BookContract{
    public function create($request){
        $validate = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'year' => 'required',
            'contact' => 'required',
            'address' => 'required',
        ]);

        //dd($validate);  // check data that was inputed

        $books = new BookCatalog(); // instantiating Model Class

        $books->title = $request->title;
        $books->author = $request->author;
        $books->year = $request->year;
        $books->contact = $request->contact;
        $books->address = $request->address;
        $books->save();

        return $books;
    }

    public function edit($request, $id){
        $validate = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'year' => 'required',
            'contact' => 'required',
            'address' => 'required',
        ]);

        $books = BookCatalog::find($id);

        $books->title = $request->title;
        $books->author = $request->author;
        $books->year = $request->year;
        $books->contact = $request->contact;
        $books->address = $request->address;
        $books->save();

        return $books;
    }

    public function displayAll(){
        // create instance variable to return book catalog data
        // $books = BookCatalog::all();
        $books = BookCatalog::orderBy('id','desc')->paginate(10);

        return $books;
    }

    public function findId($id){
        $books = BookCatalog::find($id);
        return $books;
    }

}