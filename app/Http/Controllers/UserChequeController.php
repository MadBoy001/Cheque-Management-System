<?php

namespace App\Http\Controllers;

use App\DataTables\UserChequeDataTable;
use App\DataTables\UserExpiredChequeDataTable;
use Illuminate\Http\Request;

class UserChequeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(UserChequeDataTable $dataTable)
    {
        return $dataTable->render('user.all-cheques');
    }

    /**
     * Display a listing of the expired cheques.
     */
    public function expiredCheques(UserExpiredChequeDataTable $dataTable)
    {
        return $dataTable->render('user.expired-cheques');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
