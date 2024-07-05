<?php

namespace App\Http\Controllers;

use App\DataTables\UserChequeDataTable;
use App\DataTables\UserExpiredChequeDataTable;
use App\DataTables\UserExpiringChequeDataTable;
use App\DataTables\UserReturnedChequeDataTable;
use Illuminate\Http\Request;

class UserChequeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(UserChequeDataTable $dataTable)
    {
        $title = 'All Cheques';
        return $dataTable->render('user.cheque.index', compact('title'));
    }

    /**
     * Display a listing of the expired cheques.
     */
    public function expiredCheques(UserExpiredChequeDataTable $dataTable)
    {
        $title = 'Expired Cheques';
        return $dataTable->render('user.cheque.index', compact('title'));
    }

    /**
     * Display a listing of the cheques that will expire in 1 month.
     */
    public function expiringCheques(UserExpiringChequeDataTable $dataTable)
    {
        $title = 'Expiring Cheques';
        return $dataTable->render('user.cheque.index', compact('title'));
    }

    /**
     * Display a listing of the returned cheques.
     */
    public function returnedCheques(UserReturnedChequeDataTable $dataTable)
    {
        $title = 'Returned Cheques';
        return $dataTable->render('user.cheque.index', compact('title'));
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
