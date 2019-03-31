<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User as Member;

class MemberController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }

    public function index()
    {
        $members = Member::latest()->paginate(10);

        return view('member.index', compact('members'))
        ->with('i',(request()->input('page',1) -1 ) * 5);
    }

    public function search(Request $request)
    {
        $members = Member::where('name', $request->input('search')) ->orWhere('email', 'like', '%' . $request->input('search') . '%')->get();

        return view('member.search', compact('members'))
        ->with('i',(request()->input('page',1) -1 ) * 5);
    }

    public function create()
    {
        return view('member.create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        Member::create($request->all());

        return redirect()->route('member.index')
        ->with('success', 'Member created successfully');
    }

    public function show(Member $member, $id)
    {
        $members = Member::find($id);
        return view('member.show', compact('members'));
    }

    public function edit(Member $member, $id)
    {
        $members = Member::find($id);
        \Debugbar::info($members);
        return view('member.edit', compact('members'));
    }

    public function update(Request $request, Member $member, $id)
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $members = Member::find($id);
        $members->update($request->all());
        $members->save();

        return redirect()->route('member.index')
        ->with('success', 'Member updated successfully');
    }

    public function destroy($id)
    {
        Member::destroy($id);
        return redirect()->route('member.index')
        ->with('success', 'Member deleted successfully');
    }
}
