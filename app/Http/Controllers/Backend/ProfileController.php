<?php

namespace App\Http\Controllers\Backend;

use App\Models\AdminUser;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreAdminUser;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        return view('backend.profile.index');
    }

    public function ssd()
    {
        if ($request->ajax())
        $data=AdminUser::query();
        return Datatables::of($data)
            ->editColumn('created_at', function($each){
                return Carbon::parse($each->created_at)->format('Y-m-d h:i:s A');
            })
            ->editColumn('updated_at', function($each){
                return Carbon::parse($each->updated_at)->format('Y-m-d h:i:s A');
            })
            ->rawColumns(['user_agent','action'])
            ->make(true);
    }

    public function create()
    {
        return view('backend.profile.create');
    }

    public function store(StoreAdminUser $request)
    {
        $user = new AdminUser();
        $user->name = $request->name;
        $user->name_mm = $request->name_mm;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->nrc_no = $request->nrc_no;
        $user->gender = $request->gender;
        $user->dob = $request->dob;
        $user->bio = $request->bio;
        $user->address = $request->address;
        $user->address_mm = $request->address_mm;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('backend.profile.index')->with('create', 'Successfully created');
    }
}

