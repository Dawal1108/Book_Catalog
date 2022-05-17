@extends('layouts.master')
@section('content')
    <div class="card py-3">
        <h2 class="card-title p-3">Edit Record</h2>
        <div class="card-body">
            <form action="" method="post">
                @csrf
               
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" value="{{ $books->title }}" name="title">
                </div>

                <div class="mb-3">
                    <label for="author" class="form-label">Author</label>
                    <input type="text" class="form-control" value="{{ $books->author }}" name="author">
                </div>

                <div class="mb-3">
                    <label for="year" class="form-label">Year</label>
                    <input type="date" class="form-control" value="{{ $books->year }}" name="year">
                </div>

                <div class="mb-3">
                    <label for="contact" class="form-label">Contact</label>
                    <input type="text" class="form-control" value="{{ $books->contact }}" name="contact">
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" value="{{ $books->address }}" name="address">
                </div>

                <button type="submit" class="btn btn-primary">create</button>
            </form>
        </div>
    </div>
@endsection