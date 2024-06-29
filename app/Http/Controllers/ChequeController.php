<?php

namespace App\Http\Controllers;

use App\DataTables\ChequeDataTable;
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
        // return view('admin.all-cheques');
        return $dataTable->render('admin.all-cheques');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.add-cheque');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'clientname' => ['required','string'],
            'clientcode' => ['required', 'string', 'max:20'],
            'chequeno' => ['required','max:50'],
            'chequeamount' => ['required','integer'],
            'chequedate' => ['required'],
            'remarks' => ['string'],
       ]);

       $cheque = new Cheque();


       $cheque->clientname = $request->clientname;
       $cheque->clientcode = $request->clientcode;
       $cheque->chequeno = $request->chequeno;
       $cheque->chequeamount = $request->chequeamount;
       $cheque->chequedate = $request->chequedate;
       $cheque->chequeexpirydate = Carbon::parse($request->chequedate)->addMonths(6);
       $cheque->remarks = $request->remarks;
       $cheque->save();

    //    Cache::forget('sliders');

    //    toastr('Created Successfully!', 'success');

       return redirect()->route('admin.dashboard');
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
