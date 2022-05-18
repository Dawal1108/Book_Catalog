@extends('layouts.master')
@section('content')
    <div class="card p-2">
        <div class="card-title text-center display-5 fw-bold">Book Catalog</div>
        <div class="card-body">
            <table class="table table-striped">
                <thead class="bg-success text-white">
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
                    @if (count($books) > 0)
                        @foreach ($books as $book)
                            <tr>
                                <td>{{ $book->id }}</td>
                                <td>{{ $book->title }}</td>
                                <td>{{ $book->author }}</td>
                                <td>{{ $book->year }}</td>
                                <td>{{ $book->contact }}</td>
                                <td>{{ $book->address }}</td>
                                <td><a href="{{ URL::to('/edit/'.$book->id)  }}" class="btn btn-primary">Edit</a></td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Delete
                                    </button>
                                    {{-- delete modal --}}
  
                                     <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Delete Record</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                            Are you sure you want to delete <strong>{{ $book->author }}</strong> record?
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <a href="{{ URL::to('/delete/'.$book->id)  }}" class="btn btn-danger">Delete</a>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach                        
                    @else
                        <tr>
                            <td class="text-muted fs-4" colspan="7">No records yet!</td>
                        </tr>
                    @endif
                </tbody>
              </table>
        </div>
        {{ $books->links() }}
    </div>

    
  
@endsection