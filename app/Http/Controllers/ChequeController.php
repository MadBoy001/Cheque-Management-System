<?php

namespace App\Http\Controllers;

use App\DataTables\ChequeDataTable;
use App\DataTables\ExpiredChequeDataTable;
use App\DataTables\ExpiringChequeDataTable;
use App\DataTables\ReturnedChequeDataTable;
use App\Models\Cheque;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ChequeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ChequeDataTable $dataTable)
    {
        $title = 'All Cheques';
        return $dataTable->render('admin.cheque.index', compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.cheque.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'clientname' => ['required', 'string'],
            'clientcode' => ['required', 'string', 'max:20'],

            'bankname' => ['required'],
            'branchname' => ['required'],
            'accountnumber' => ['required'],

            'chequeno' => ['required', 'max:50'],
            'chequeamount' => ['required', 'integer'],
            'chequedate' => ['required'],

            'datesigned' => ['required'],
            'remarks' => ['nullable', 'string'],
        ]);

        $cheque = new Cheque();

        $cheque->clientname = $request->clientname;
        $cheque->clientcode = $request->clientcode;

        $cheque->bankname = $request->bankname;
        $cheque->branchname = $request->branchname;
        $cheque->accountnumber = $request->accountnumber;

        $cheque->chequeno = $request->chequeno;
        $cheque->chequeamount = $request->chequeamount;
        $cheque->chequedate = $request->chequedate;


        $cheque->datesigned = $request->datesigned;
        $cheque->status = 'active';
        $cheque->remarks = $request->remarks;
        $cheque->save();

        //    Cache::forget('sliders');

           toastr('Created Successfully!', 'success');

        return redirect()->route('admin.cheque.index');
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
        $cheque = Cheque::findOrFail($id);
        return view("admin.cheque.edit", compact('cheque'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'clientname' => ['required', 'string'],
            'clientcode' => ['required', 'string', 'max:20'],

            'bankname' => ['required'],
            'branchname' => ['required'],
            'accountnumber' => ['required'],

            'chequeno' => ['required', 'max:50'],
            'chequeamount' => ['required', 'integer'],
            'chequedate' => ['required'],

            'datesigned' => ['required'],
            'remarks' => ['string'],
        ]);

        $cheque = Cheque::findOrFail($id);

        $cheque->clientname = $request->clientname;
        $cheque->clientcode = $request->clientcode;

        $cheque->bankname = $request->bankname;
        $cheque->branchname = $request->branchname;
        $cheque->accountnumber = $request->accountnumber;

        $cheque->chequeno = $request->chequeno;
        $cheque->chequeamount = $request->chequeamount;
        $cheque->chequedate = $request->chequedate;


        $cheque->datesigned = $request->datesigned;
        $cheque->status = $request->status;
        $cheque->remarks = $request->remarks;
        $cheque->save();
        
        return redirect()->route('admin.dashboard');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $cheque = Cheque::findOrFail($id);
        $cheque->delete();

    }

    /**
     * Display a listing of the expired cheques.
     */
    public function expiredCheques(ExpiredChequeDataTable $dataTable)
    {
        $title = 'Expired Cheques';
        return $dataTable->render('admin.cheque.index', compact('title'));
    }

    /**
     * Display a listing of the cheques that will expire in 1 month.
     */
    public function expiringCheques(ExpiringChequeDataTable $dataTable)
    {
        $title = 'Expiring Cheques';
        return $dataTable->render('admin.cheque.index', compact('title'));
    }

    /**
     * Display a listing of the returned cheques.
     */
    public function returnedCheques(ReturnedChequeDataTable $dataTable)
    {
        $title = 'Returned Cheques';
        return $dataTable->render('admin.cheque.index', compact('title'));
    }
}
