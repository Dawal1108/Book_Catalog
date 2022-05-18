<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookCatalog;

class BookController extends Controller
{
    //
    public function index(){
        // create instance variable to return book catalog data
        // $books = BookCatalog::all();
        $books = BookCatalog::orderBy('id','desc')->paginate(10);

        return view('books.index', ['books' => $books]);
    }

    public function create(){
        return view('books.create');
    }

    public function store(Request $request){
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

        return redirect('index')->with('success', 'New record created');
    }

    public function edit($id){
        $books = BookCatalog::find($id);    // get id of current record

        return view('books.edit', ['books'=>$books]);
    }

    public function update(Request $request, $id){
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

        return redirect('index')->with('success','Record was updated');
    }

    public function delete($id){
        $books = BookCatalog::find($id);
        $books->delete();
        return redirect('index')->with('info','Record was deleted');
    }
}
