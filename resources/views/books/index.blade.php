@extends('layouts.master')
@section('content')
    <div class="card p-2">
        <div class="card-title">Book Catalog</div>
        <div class="card-body">
            <table class="table table-striped-columns">
                <thead>
                    <tr>
                        <th>s/n</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Year</th>
                        <th>Contact</th>
                        <th>Address</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <td>{{ $book->id }}</td>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->year }}</td>
                            <td>{{ $book->contact }}</td>
                            <td>{{ $book->address }}</td>
                            <td><a href="{{ URL::to('/edit/'.$book->id)  }}" class="btn btn-primary">Edit</a></td>
                            <td><a href="{{ URL::to('/delete/'.$book->id)  }}" class="btn btn-danger">Delete</a></td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
        {{ $books->links() }}
    </div>
@endsection