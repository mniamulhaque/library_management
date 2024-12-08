<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BookSelfRequest;
use App\Models\BookSelf;

class bookSelfCon extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
		$bookCat = 'General Books';
        $books = BookSelf::where('book_cat','General Books') ->get();
         return view('backend.books.bookList',compact('books','bookCat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $lastId = count(BookSelf::where('book_cat','General Books')->get());
        
        if($lastId){
            $bookCodeNum = 'G';
            $bookNumber = str_pad($lastId + 1, 5, '0', STR_PAD_LEFT);
        }else{
            $bookCodeNum = 'G';
            $bookNumber = '000001';
        }
        return view('backend.books.addBooks',compact('bookNumber','bookCodeNum'));
        
    }

    public function armyCretate(){
        $lastId = count(BookSelf::where('book_cat','Army Publication')->get());
        if($lastId){
            $bookCodeNum = 'A';
            $bookNumber = str_pad($lastId + 1, 5, '0', STR_PAD_LEFT);
        }else{
            $bookCodeNum = 'A';
            $bookNumber = '000001';
        }
        return view('backend.books.addArmyBooks',compact('bookNumber','bookCodeNum'));
    }
	
	public function armyBookList(){
		$bookCat = 'Army Publication';
		$books = BookSelf::where('book_cat','Army Publication')->get();
         return view('backend.books.bookList',compact('books','bookCat'));
	}

    /**
     * Store a newly created resource in storage.
     */
     public function store(Request $request)
    {
        if($request->bookCodeNum == 'G'){
        $request->validate([
            'book_cat' => 'required|string|max:255',
            'accession' => 'required|string|max:255',
            'titlee' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'place_of_publication' => 'required|string|max:255',
            'publisher' => 'required|string|max:255',
            'year_of_publication' => 'required',
            'price' => 'required',
            'edition' => 'required|string|max:255',
            'volume' => 'required|string|max:255',
            'pages' => 'required|string',
            'source' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);

    }elseif($request->bookCodeNum == 'A'){
        $request->validate([
            'book_cat' => 'required|string|max:255',
            'accession' => 'required|string|max:255',
            'titlee' => 'required|string|max:255',
            'publisher' => 'required|string|max:255',
            'year_of_publication' => 'required',
            'price' => 'required',
            'volume' => 'required|string|max:255',
            'pages' => 'required|string',
            'source' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);
    }

        $getBookSelf = BookSelf::create($request->all());
        
        return redirect()->back()->with('success', 'Book added successfully');
        //dd($request->all());
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $bookCat = 'General Books';
        
        $book = BookSelf::findOrFail($id);
         return view('backend.books.bookShow',compact('book','bookCat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
      
        
        $bookNumber = '';
        
        $books = BookSelf::findOrFail($id);
        if($books->book_cat == 'General Books'){
        $bookCodeNum = 'G';
        return view('backend.books.addBooks',compact('books','bookCodeNum','bookNumber'));
        }elseif($books->book_cat == 'Army Publication'){
        $bookCodeNum = 'A';
        return view('backend.books.addArmyBooks',compact('books','bookCodeNum','bookNumber'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BookSelf $book_shelf)
    {
        if($request->bookCodeNum == 'G'){
        $request->validate([
            'book_cat' => 'required|string|max:255',
            'accession' => 'required|string|max:255',
            'titlee' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'place_of_publication' => 'required|string|max:255',
            'publisher' => 'required|string|max:255',
            'year_of_publication' => 'required',
            'price' => 'required',
            'edition' => 'required|string|max:255',
            'volume' => 'required|string|max:255',
            'pages' => 'required|string',
            'source' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);

         $book_shelf->update($request->all());
        
        return redirect()->route('book_shelves.index')->with('success', 'Book Update successfully');
            //dd($request->all());
    }elseif($request->bookCodeNum == 'A'){
        $request->validate([
            'book_cat' => 'required|string|max:255',
            'accession' => 'required|string|max:255',
            'titlee' => 'required|string|max:255',
            'publisher' => 'required|string|max:255',
            'year_of_publication' => 'required',
            'price' => 'required',
            'volume' => 'required|string|max:255',
            'pages' => 'required|string',
            'source' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);

         $book_shelf->update($request->all());
        
        return redirect()->route('armyBookList')->with('success', 'Book Update successfully');
    }

        //dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    
}
