<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Issue;
use App\Models\member;
use App\Models\BookSelf;
use DB;

class issueCon extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $IssueData = Issue::where('status','issued')->get();
       return view('backend.BookIssue.IssueList',compact('IssueData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $memberData = member::all();
        //$BookSelfData = BookSelf::all();
        $BookSelfData = DB::table('book_selves')
        ->leftJoin('issues', function ($join) {
            $join->on('book_selves.id', '=', 'issues.book_name')
                 ->where('issues.status', '=', 'issued');
        })
        ->whereNull('issues.book_name')
        ->select('book_selves.id','book_selves.accession', 'book_selves.titlee')
        ->get();
        return view('backend.BookIssue.addIssue',compact('memberData','BookSelfData'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'issue_date' => 'required|string|max:255',
            'member_id' => 'required',
            'rank' => 'required|string|max:255',
            'corps' => 'required|string|max:255',
            'unite' => 'required|string|max:255',
            'return_date' => 'required|string|max:255',
            'book_name' => 'required|string|max:255',
            'mobile_no' => 'required',
        ]);

        Issue::create($request->all());
        return redirect()->route('issues.index')->with('success', 'Issue created successfully.');
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
         $memberData = member::all();
        //$BookSelfData = BookSelf::all();
        $BookSelfData = DB::table('book_selves')
        ->leftJoin('issues', function ($join) {
            $join->on('book_selves.id', '=', 'issues.book_name')
                 ->where('issues.status', '=', 'issued');
        })
        ->whereNull('issues.book_name')
        ->select('book_selves.id','book_selves.accession', 'book_selves.titlee')
        ->get();
       $issueData = Issue::find($id);
        return view('backend.BookIssue.addIssue',compact('memberData','BookSelfData','issueData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Issue $issue)
    { 
        $request->validate([
            'issue_date' => 'required|string|max:255',
            'member_id' => 'required',
            'rank' => 'required|string|max:255',
            'corps' => 'required|string|max:255',
            'unite' => 'required|string|max:255',
            'return_date' => 'required|string|max:255',
            'book_name' => 'required|string|max:255',
            'mobile_no' => 'required',
        ]);

         $issue->update($request->all());
        return redirect()->route('issues.index')->with('success', 'Issue Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    public function returnIssue($id){
        //dd($request->issueReturn_id);

     

        // 2. Find the issue by ID
        $issue = Issue::findOrFail($id);

        // 3. Update the issue's status and realReturnDate
        $issue->status = '0';
        $issue->realReturnDate = date('d-m-Y');
        // 4. Save the changes
        $issue->save();

        // 5. Return a response
        return redirect()->route('issues.index')->with('success', 'Return Update successfully.');
    }
}
