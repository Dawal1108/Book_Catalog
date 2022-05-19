<?php

namespace App\Repositories\Books;

interface BookContract {
    public function create($request);
    public function edit($request, $id);
    public function displayAll();
    public function findId($id);
}