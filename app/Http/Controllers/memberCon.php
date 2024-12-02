<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;

class memberCon extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $memberData = member::all();
        return view('backend.member.memberList',compact('memberData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.member.addMember');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
            'rank' => 'required|string|max:255',
            'rank_no' => 'required|string|max:255|unique:members',
            'name' => 'required|string|max:255',
            'corps' => 'required|string|max:255',
            'appointment' => 'required',
            'unite' => 'required|string|max:255',
            'mobile_no' => 'required|unique:members',
        ]);

        Member::create($request->all());
        return redirect()->route('members.index')->with('success', 'Member created successfully.');
		//dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Member $member)
    {
       return response()->json($member);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       $memberData = member::find($id);
        return view('backend.member.addMember',compact('memberData'));
    }

    /**
     * Update the specified resource in storage.
     */
     public function update(Request $request, Member $member)
    {
        $request->validate([
             'rank' => 'required|string|max:255',
            'rank_no' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'corps' => 'required|string|max:255',
            'appointment' => 'required',
            'unite' => 'required|string|max:255',
            'mobile_no' => 'required',
        ]);

        $member->update($request->all());
        return redirect()->route('members.index')->with('success', 'Member updated successfully.');
        //dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member)
    {
        $member->delete();
        return redirect()->route('members.index')->with('success', 'Member deleted successfully.');
    }
}
