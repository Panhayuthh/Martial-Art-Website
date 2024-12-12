<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::paginate(10);
        return view('user.member', ['members' => $members]);
        // return $members;
    }

    public function admincreateMember()
    {
        return view('admin.addMember'); 
    }

    public function create()
    {
        return view('user.registerMember'); 
    }
    public function store(Request $request)
    {
        // dd($request->all());

        $data = $request->validate([
            'member_role' => 'required|in:coach,athlete',
            'member_name' => 'required|string|max:255',
            // 'member_profile' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'member_school' => 'required|string|max:255',
            'member_gender' => 'required|in:male,female',
            'member_belt' => 'required|string|max:255',
            'member_medal' => 'required|in:gold,silver,bronze',
        ]);
    
        // $profileImagePath = $request->file('member_profile')->store('member_profiles', 'public');

        $profileImagePath = $request->hasFile('image')
        ? $request->file('member_profile')->store('member_profiles', 'public')
        : null;
    
        // Member::create([
        //     'member_role' => $data['member_role'],
        //     'member_name' => $data['member_name'],
        //     'member_profile' => $profileImagePath,
        //     'member_school' => $data['member_school'],
        //     'member_gender' => $data['member_gender'],
        //     'member_belt' => $data['member_belt'],
        //     'member_medal' => $data['member_medal'],
        // ]);

        $member = new Member([
            'member_role' => $data['member_role'],
            'member_name' => $data['member_name'],
            'member_profile' => $profileImagePath,
            'member_school' => $data['member_school'],
            'member_gender' => $data['member_gender'],
            'member_belt' => $data['member_belt'],
            'member_medal' => $data['member_medal'],
        ]);
    
        try {
            $member->save();
            // return 'success';
            return redirect()->back()->with('success', 'member created successfully');
        } catch (\Exception $e) {
            // return 'fail';
            return redirect()->back()->with('error', $e->getMessage());
        }
        
    }
    

    public function edit(Member $member)
    {
        return view('admin.editMember', compact('member'));
    }

    public function update(Member $member, Request $request)
    {
        $data = $request->validate([
            'member_role' => 'required|in:coach,athlete',
            'member_name' => 'required|string|max:255',
            'member_profile' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'member_school' => 'required|string|max:255',
            'member_gender' => 'required|in:male,female',
            'member_belt' => 'required|string|max:255',
            'member_medal' => 'required|in:gold,silver,bronze',
        ]);

        if ($request->hasFile('member_profile')) {
            if ($member->member_profile) {
                Storage::delete('public/' . $member->member_profile);
            }
            $data['member_profile'] = $request->file('member_profile')->store('member_profiles', 'public');
        }

        $member->update($data);

        return redirect()->back()->with('success', 'Member updated successfully');
    }

    public function delete(Member $member)
    {
        $member->delete();
        return redirect()->back()->with('success', 'Member deleted successfully');
    }

    public function memberManagement(Request $request)
    {
        $search = $request->input('search');
        $members = $search
            ? Member::where('member_name', 'like', '%' . $search . '%')->get()
            : Member::all();
        return view('admin.memberManagement', compact('members', 'search'));
    }
}
