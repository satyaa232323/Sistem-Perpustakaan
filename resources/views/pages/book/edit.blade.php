@extends('layouts.app')

@section('title', 'Edit buku')

@section('content')
    <form action="{{ route('buku.update', $book->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Judul buku</label>
            <input type="text" class="form-control" @error('title')
      is-invalid
      @enderror name="title" value="{{ $book->title }}">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Nama penulis</label>
            <input type="text" class="form-control" @error('author')
      is-invalid
      @enderror name="author" value="{{ $book->author}}">
            @error('author')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Penerbit</label>
            <input type="text" class="form-control" @error('publisher')
      is-invalid
      @enderror
                name="publisher" value="{{ $book->publisher}}">
            @error('publisher')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Tahun Terbit</label>
            <input type="text" class="form-control" @error('year')
      is-invalid
      @enderror name="year" value="{{ $book->year}}">
            @error('year')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">ISBN</label>
            <input type="text" class="form-control" @error('isbn')
      is-invalid
      @enderror name="isbn" value="{{ $book->isbn}}">
            @error('isbn')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Cover buku</label>
            <input type="file" class="form-control" @error('cover')
        is-invalid
        @enderror name="cover" value="{{ $book->cover}}">
            @error('cover')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea class="form-control" @error('description')
            is-invalid
            @enderror name="description"></textarea>
            @error('description')
             <div class="invalid-feedback">
                {{ $message }}
             </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Kategori</label>
            <p>kategori : {{ $book->category }}</p>
            <select class="form-select" @error('category')
            is-invalid
            @enderror name="category" value="{{ $book->category}}">
            <option  selected disabled>Pilih kategori</option>
            <option  value="Novel">Novel</option>
            <option  value="Komik">Komik</option>
            <option  value="Biografi">Biografi</option>
            <option  value="Ensiklopedia">Ensiklopedia</option>
            <option  value="majalah">Majalah</option>
            <option  value="lainya">Lainya</option>
         </select>
        </div>
        <button type="submit" class="btn btn-primary">Tambah Buku</button>
    </form>
@endsection

