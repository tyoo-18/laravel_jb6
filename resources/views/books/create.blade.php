<!-- resources/views/books/create.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Tambah Buku</h2>
        <form action="{{ route('books.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Tanggal </label>
                <input type="date" name="title" id="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="author">Nama Peminjam</label>
                <input type="text" name="author" id="author" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="published_year">Jumlah Uang Yang Di Pinjam</label>
                <input type="number" name="published_year" id="published_year" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
@endsection
