<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookSelf;
use DB;

class excelFileUploadCon extends Controller
{
    public function uploadExcelCreate(){
        
        return view('backend.books.excelFileUpload');
    }




     public function uploadExcelPost(Request $request)
    {
        $request->validate([
            'book_cat' => 'required',
            'excelfile' => 'required|mimes:xlsx,csv',
        ]);

            // Open the uploaded file
        $file = fopen($request->file('excelfile'), 'r');

        // Skip the first row (headers)
        fgetcsv($file);

        $duplicates = [];
        $inserted = 0;
        if($request->book_cat == 'General Books'){
             // Read and process each row
        while (($row = fgetcsv($file)) !== false) {
            $book_cat = $row[0] ?? null;
            $titlee = $row[1] ?? null;
            $author = $row[2] ?? null;
            $subject = $row[3] ?? null;
            $place_of_publication = $row[4] ?? null;
            $publisher = $row[5] ?? null;
            $year_of_publication = $row[6] ?? null;
            $price = $row[7] ?? null;
            $edition = $row[8] ?? null;
            $volume = $row[9] ?? null;
            $pages = $row[10] ?? null;
            $source = $row[11] ?? null;
            $location = $row[12] ?? null;

            // Check for duplicates based on email
            //$exists = DB::table('book_selves')->where('titlee', $titlee)->exists();

           
            //if (!$exists) {
                // Get the last record ID
                //$lastId = DB::table('book_selves')->max('id') ?? 0;
				 $lastId = count(BookSelf::where('book_cat','General Books')->get()) ?? 0;

                // Generate new code based on last ID
                $prefix = ($request->book_cat == 'Army Publication') ? 'A' : 'G'; // Alternate between A and B
                $newCode = $prefix . str_pad($lastId + 1, 5, '0', STR_PAD_LEFT);

                // Insert new record
                DB::table('book_selves')->insert([
                    'book_cat' => $book_cat,
                    'accession' => $newCode,
                    'titlee' => $titlee,
                    'author' => $author,
                    'subject' => $subject,
                    'place_of_publication' => $place_of_publication,
                    'publisher' => $publisher,
                    'year_of_publication' => $year_of_publication,
                    'price' => $price,
                    'edition' => $edition,
                    'volume' => $volume,
                    'pages' => $pages,
                    'source' => $source,
                    'location' => $location, // Store the generated code
                ]);
                $inserted++;
            //} else {
                // Track duplicates
               // $duplicates[] = $titlee;
            //}
        }

        }elseif($request->book_cat == 'Army Publication'){
             // Read and process each row
        while (($row = fgetcsv($file)) !== false) {
            $book_cat = $row[0] ?? null;
            $titlee = $row[1] ?? null;
            $publisher = $row[2] ?? null;
            $types = $row[3] ?? null;
            $corps = $row[4] ?? null;
            $year_of_publication = $row[5] ?? null;
            $price = $row[6] ?? null;
            $volume = $row[7] ?? null;
            $pages = $row[8] ?? null;
            $source = $row[9] ?? null;
            $location = $row[10] ?? null;

            // Check for duplicates based on email
           // $exists = DB::table('book_selves')->where('titlee', $titlee)->exists();

           
            //if (!$exists) {
                // Get the last record ID
                //$lastId = DB::table('book_selves')->max('id') ?? 0;
				$lastId = count(BookSelf::where('book_cat','Army Publication')->get()) ?? 0;

                // Generate new code based on last ID
                $prefix = ($request->book_cat == 'Army Publication') ? 'A' : 'G'; // Alternate between A and B
                $newCode = $prefix . str_pad($lastId + 1, 5, '0', STR_PAD_LEFT);

                // Insert new record
                DB::table('book_selves')->insert([
                    'book_cat' => $book_cat,
                    'accession' => $newCode,
                    'titlee' => $titlee,
                    'publisher' => $publisher,
                    'types' => $types,
                    'corps' => $corps,
                    'year_of_publication' => $year_of_publication,
                    'price' => $price,
                    'volume' => $volume,
                    'pages' => $pages,
                    'source' => $source,
                    'location' => $location, // Store the generated code
                ]);
                $inserted++;
           // } else {
                // Track duplicates
                //$duplicates[] = $titlee;
            //}
        }

        }
       
        fclose($file);

        // Provide feedback to the user
        $message = "{$inserted} rows inserted successfully.";
        //if (!empty($duplicates)) {
            //$message .= " The following duplicates were skipped: " . implode(', ', $duplicates);
        //}
        return redirect()->back()->with('success', $message);
    }
}
