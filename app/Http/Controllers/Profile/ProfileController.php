<?php

namespace App\Http\Controllers\Profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Profile\ProfileModel as Profile;
use App\Http\Models\Status\StatusModel as Status;
use Session;
use Auth;
use DB;

class ProfileController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = Profile::find(Auth::user()->id);
        $data1 = $profile->toArray();

        $cek = Status::where('user_id', Auth::user()->id)->count();

        if ($cek != 0) {
            $status = Status::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->first();
            $data2 = $status->toArray();
        } else {
            $data2 = [];
        }

        $feeds = Status::where('user_id', Auth::user()->id)
            ->orderBy('created_at', 'desc')
            ->take(5)->skip(0)
            ->get();

        $arrayName = array(
            'data1' => $data1,
            'data2' => $data2,
            'data3' => $feeds,
        );

        \Debugbar::info($arrayName);

        session(['user.id'       => $data1['id'] ? $data1['id'] : ""]);
        session(['user.name'     => $data1['name'] ? $data1['name'] : ""]);
        session(['user.email'    => $data1['email'] ? $data1['email'] : ""]);
        session(['user.username' => $data1['username'] ? $data1['username'] : ""]);
        session(['user.image'    => $data1['image'] ? $data1['image'] : ""]);
        session(['user.role'     => $data1['role'] ? $data1['role'] : ""]);
        session(['user.bidang'   => $data1['bidang'] ? $data1['bidang'] : ""]);
        Session::save();

        return view('profile.index', $arrayName);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->file('image') != null || $request->file('image') != '') {
            $rand = rand(111,999);
            $file = $request->file('image');
            $destinationPath = 'uploads/profile';
            $file->move($destinationPath , $rand . '_' . $file->getClientOriginalName());
            $newImage = $destinationPath . '/' . $rand . '_' . $file->getClientOriginalName();

            $image = array('image' => $newImage );

            $profile = Profile::find($id);
            $profile->update($image);
            $profile->save();

            return redirect()->route('profile.index')
            ->with('success', 'Profile updated successfully');
        }

        if ($request->input('password') != null || $request->input('password') != '') {
            request()->validate([
                'password' => 'required',
            ]);
            $password = array('password' => bcrypt($request->input('password')) );
            $profile = Profile::find($id);
            $profile->update($password);
            $profile->save();

            return redirect()->route('profile.index')
            ->with('success', 'Profile updated successfully');
        }

        request()->validate([
            'name'      => 'required',
            'username'  => 'required',
            'email'     => 'required',
            'address'   => 'required',
            'city'      => 'required',
            'country'   => 'required',
            'phone'     => 'required',
            'about'     => 'required',
            'website'   => 'required',
            'bidang'    => 'required',
        ]);

        $profile = Profile::find($id);
        $profile->update($request->all());
        $profile->save();

        return redirect()->route('profile.index')
        ->with('success', 'Profile updated successfully');
    }

    public function updateStatus(Request $request, $id)
    {
        request()->validate([
            'badge' => 'required',
            'status' => 'required',
        ]);
        Status::create($request->all());

        return redirect()->route('profile.index')
        ->with('success', 'Status Update');
    }
}
