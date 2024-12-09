<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class MemberController extends Controller
{
    public function index()
    {
        $members = Member::all(); 
        return view('admin.memberManagement', ['members' => $members]);
    }

    public function create()
    {
        return view('admin.memberManagement'); 
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'member_role' => 'required|in:coach,athlete', 
            'member_name' => 'required',
            'member_profile' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
            'member_school' => 'required',
            'member_gender' => 'required',
            'member_belt' => 'required',
            'member_medal' => 'required',
        ]);

        $profileImagePath = $data['member_profile']->store('member_profiles', 'public');

        $newMember = Member::create([
            'member_role' => $data['member_role'],
            'member_name' => $data['member_name'],
            'member_profile' => $profileImagePath,
            'member_school' => $data['member_school'],
            'member_gender' => $data['member_gender'],
            'member_belt' => $data['member_belt'],
            'member_medal' => $data['member_medal'],
        ]);

        return redirect()->route('member.index')->with('success', 'Member added successfully!');
    }
    public function edit(Member $member){
        return view('admin.editMember', compact('member'));

    }
    public function update(Member $member, Request $request)
{
    $data = $request->validate([
        'member_role' => 'required|in:coach,athlete', 
        'member_name' => 'required',
        'member_profile' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
        'member_school' => 'required',
        'member_gender' => 'required',
        'member_belt' => 'required',
        'member_medal' => 'required',
    ]);

    if ($request->hasFile('member_profile')) {
        if ($member->member_profile) {
            Storage::delete('public/' . $member->member_profile); 
        }

        $data['member_profile'] = $request->file('member_profile')->store('member_profiles', 'public');
    }

    $member->update($data);

    return redirect(route('member.index'))->with('success', 'Member updated successfully');
}

    public function delete(Member $member){
        $member->delete();
        return redirect(route('member.index'))->with('success', 'Event deleted successfully');
    }
    public function memberManagement(Request $request)
{
    $search = $request->input('search');

    if ($search) {
        $members = Member::where('member_name', 'like', '%' . $search . '%')->get();
    } else {
        $members = Member::all();
    }
    return view('admin.memberManagement', compact('members', 'search'));
}

    
}
