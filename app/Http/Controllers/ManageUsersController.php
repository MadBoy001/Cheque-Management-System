<?php

namespace App\Http\Controllers;

use App\DataTables\ManageUsersDataTable;
use App\Models\User;
use Illuminate\Http\Request;

class ManageUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ManageUsersDataTable $dataTable)
    {
        return $dataTable->render('admin.manageuser.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.manageuser.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required'],
            'role' => ['required'],
            'status' => ['required'],
            'password' => ['required'],
        ]);

        $user = new User();


        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->status = $request->status;
        $user->password = bcrypt($request->password);
        $user->save();

        //    Cache::forget('sliders');

        //    toastr('Created Successfully!', 'success');

        return redirect()->route('admin.manage-users.index');
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
        $user = User::findOrFail($id);
        return view('admin.manageuser.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required'],
            'role' => ['required'],
            'status' => ['required'],
            // 'password' => ['required'],
        ]);

        $user = User::findOrFail($id);

        if ($request->password !== NULL) {
            $user->password = bcrypt($request->password);
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->status = $request->status;
        $user->save();

        //    Cache::forget('sliders');

        //    toastr('Created Successfully!', 'success');

        return redirect()->route('admin.manage-users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
