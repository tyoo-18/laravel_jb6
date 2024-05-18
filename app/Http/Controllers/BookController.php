<?php

// app/Http/Controllers/BookController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\BookDetail;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('detail')->get();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $book = Book::create($request->only('title'));
        $book->detail()->create($request->only('author', 'published_year'));
        return redirect()->route('books.index')->with('success', 'Book created successfully.');
    }

    public function show($id)
    {
        $book = Book::with('detail')->findOrFail($id);
        return view('books.show', compact('book'));
    }

    public function edit($id)
    {
        $book = Book::with('detail')->findOrFail($id);
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);
        $book->update($request->only('title'));
        $book->detail()->update($request->only('author', 'published_year'));
        return redirect()->route('books.index')->with('success', 'Book updated successfully.');
    }

    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->detail()->delete();
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Book deleted successfully.');
    }
}
