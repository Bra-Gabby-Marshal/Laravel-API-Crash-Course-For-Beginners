<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;
use App\Http\Resources\AuthorsResource;
use Illuminate\Support\Facades\Request;

class AuthorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return AuthorsResource::collection(Author::all());
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
    public function store(Request $request)
    {
        //
        $faker = \Faker\Factory::create(1);
        $author = Author::create([
            'name' => $faker->name
        ]);
        return new AuthorsResource($author);
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        //
        //return 'Test Author';
        //return $author;
        return new AuthorsResource($author);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Author $author)
    {
        //
        $author->update([
            'name' => 'Dary'
        ]);

        return new AuthorsResource($author);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        //
    }
}