@extends('layouts.master')
@section('content')
    <div class="card py-3">
        <h2 class="card-title p-3">Create Record</h2>
        <div class="card-body">
            <form action="" method="post">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <select name="title" class="p-1">
                        <option value="select">select</option>
                        <option value="mr">Mr.</option>
                        <option value="mrs">Mrs.</option>
                        <option value="miss">Miss</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="author" class="form-label">Author</label>
                    <input type="text" class="form-control"  name="author">
                </div>

                <div class="mb-3">
                    <label for="year" class="form-label">Year</label>
                    <input type="date" class="form-control"  name="year">
                </div>

                <div class="mb-3">
                    <label for="contact" class="form-label">Contact</label>
                    <input type="text" class="form-control"  name="contact">
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control"  name="address">
                </div>

                <button type="submit" class="btn btn-primary">create</button>
            </form>
        </div>
    </div>
@endsection