<?php

namespace App\Http\Controllers;

use App\Exports\BookExport;
use App\Http\Requests\BookRequest;
use App\Http\Requests\StoreBookRequest;
use Illuminate\Http\Request;
use App\Models\Book;
use RealRashid\SweetAlert\Facades\Alert as SweetAlert;
 class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(  )
    {
        $books = Book::all();

        return view('pages.book.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.book.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        $data = $request->all();
        $data ['cover'] = $request->file('cover')->store('assets/book', 'public');

        book::create($data);
        return redirect('buku.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = book::findOrFail($id);
        return view('pages.book.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $book = book::findOrFail($id);
        $data = $request->all();

        if  ($request->hasFile('cover')){
            $data['cover'] = $request->file('cover')->store('assets/book', 'public');
        }
        else{
            $data['cover'] = $book->cover;
        }

        $book->update($data);

        SweetAlert::success('succes, data berhasil diedit');
        return redirect('buku.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      $book = Book::findOrfail($id);

      $book->delete();
      SweetAlert::success('sukses, buku dihapus');
      return redirect()->route('buku.index');
    }

    public function export_excel()
	{
		return Excel::download(new BookExport, 'databuku.xlsx');
	}
}
