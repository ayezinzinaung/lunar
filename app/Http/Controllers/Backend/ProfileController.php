<?php

namespace App\Http\Controllers\Backend;

use App\Models\AdminUser;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $admin_user = AdminUser::get();

            return DataTables::of($admin_user)
                ->addColumn('plus-icon', function() {
                    return null;
                })
                ->rawColumns([''])
                ->make(true);
        }
        return view('backend.profile.index');
    }
}
