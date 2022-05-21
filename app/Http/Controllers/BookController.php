<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Books\BookEloquentRepository;
use App\Repositories\Books\BookContract;


class BookController extends Controller
{

    private $book_repo;

    public function __construct(BookContract $bookContract)
    {
        $this->book_repo = $bookContract;
    }

    //
    public function index(){
        
        $books = $this->book_repo->displayAll();
        return view('books.index', ['books' => $books]);
    }

    public function create(){
        return view('books.create');
    }

    public function store(Request $request){
        
        $this->book_repo->create($request);
        return redirect('index')->with('success', 'New record created');
    }

    public function edit($id){
        $books = $this->book_repo->findId($id);   // get id of current record

        return view('books.edit', ['books'=>$books]);
    }

    public function update(Request $request, $id){
        
        $this->book_repo->edit($request, $id);
        return redirect('index')->with('success','Record was updated');
    }

    public function delete($id){
        $books = $this->book_repo->findId($id);
        $books->delete();
        return redirect('index')->with('info','Record was deleted');
    }
    public function noAccess(){
        return view('noaccess');
    }
}
