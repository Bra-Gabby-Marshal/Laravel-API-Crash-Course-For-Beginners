<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\BooksRequest;
use App\Http\Resources\BooksResource;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use Illuminate\Http\Request;


class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return BooksResource::collection(Book::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BooksRequest $request)
    {
        //
        $faker = \Faker\Factory::create(1);
        $book = Book::create([
            'name' => $faker->name,
            'description' => $faker->sentence,
            'publication_year' => $faker->year
        ]);
        return new BooksResource($book);
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
        return new BooksResource($book);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BooksRequest $request, Book $book)
    {
        //
        $book->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'publication_year' => $request->input('publication_year'),
        ]);

        return new BooksResource($book);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
        $book->delete();
        return response(['message' => 'Deleted successfully', 204]);
    }
}