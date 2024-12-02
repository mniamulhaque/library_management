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
        $books = BookSelf::where('book_cat','General Books')->get();
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
            $bookNumber = $lastId + 1;
        }else{
            $bookCodeNum = 'G';
            $bookNumber = '1';
        }
        return view('backend.books.addBooks',compact('bookNumber','bookCodeNum'));
        
    }

    public function armyCretate(){
        $lastId = count(BookSelf::where('book_cat','Army Publication')->get());
        if($lastId){
            $bookCodeNum = 'A';
            $bookNumber = $lastId + 1;
        }else{
            $bookCodeNum = 'A';
            $bookNumber = '1';
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
            'price' => 'required|numeric',
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
            'price' => 'required|numeric',
            'volume' => 'required|string|max:255',
            'pages' => 'required|string',
            'source' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);
    }

        $getBookSelf = BookSelf::create($request->all());
        
        return redirect()->back()->with('success', 'Book added successfully');
        
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    
}
